<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

    <div class="container-fluid">            
            

            
        <div class="row">

                


            <div class="col-md-3 dash-menu">


                <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-free");?>

                <?php }else{ ?>

                    <?php require $this->checkTemplate("dashboard-menu");?>

                <?php } ?>
                    

            </div><!--col-->




            <div class="col-md-9 dash-panel">


                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="button-header pull-right">
                            <a href="/dashboard/transferencias/transferir-saldo" class="btn btn-default">Transferir Saldo para Conta Bancária</a>
                        </div>
                        

                        <div class="dash-title">
                            <h1>Transferências</h1>
                        </div>


                        <?php if( $success != '' ){ ?>
                        <div class="alert alert-success">
                            <?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                        </div>
                        <?php } ?>
                        <?php if( $error != '' ){ ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                        </div>
                        <?php } ?> 

                        
                    </div>

                </div>

                


                

                    <div class="row">

                        
                        <div id="dash-data" class="col-md-12">


                           
                                

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Transferência</th>
                                        <th>Valor</th>
                                        <th>Status</th>
                                        <th>Instituição</th>
                                        <th>Agência</th>
                                        <th>Conta</th>
                                        <th>Data</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1;  if( isset($transfer) && ( is_array($transfer) || $transfer instanceof Traversable ) && sizeof($transfer) ) foreach( $transfer as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td scope="row"><?php echo htmlspecialchars( $value1["idtransfer"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td style="min-widtd: 222px;"><?php echo htmlspecialchars( $value1["destransfercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["vlamount"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["idstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desbanknumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desagencynumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $value1["desagencycheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desaccountnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $value1["desaccountcheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo formatDate($value1["dtregister"]); ?></td>
                                        
                                        
                                        <td>R$ <?php echo formatPrice($value1["vlamount"]); ?></td>
                                        <td>
                                            <a class="btn btn-success" href="/dashboard/painel-financeiro/transferencias/<?php echo htmlspecialchars( $value1["idtransfer"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                            
                                        </td>
                                    </tr>
                                    <?php }else{ ?>
                                    <div class="alert alert-info">
                                        Nenhuma transferência foi encontrada.
                                    </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="dash-search pull-right">
                                <form action="/dashboard/painel-financeiro/transferencias">
                                    <div class="input-group input-group-sm">
                                        
                                            <input type="text" name="search" class="form-control pull-right" placeholder="Buscar..." value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="dash-pagination clearfix">
                                <ul class="pagination pagination-sm no-margin">
                                    <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->


               

            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

