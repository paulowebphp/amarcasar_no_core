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
                            <a href="/dashboard/transferencias" class="btn btn-default">Transferências</a>
                        </div>

                        <div class="button-header pull-right">
                            <a href="/dashboard/conta-bancaria" class="btn btn-default">Configurar Conta Bancária</a>
                        </div>
                        

                        <div class="dash-title">
                            <h1>Painel Financeiro</h1>
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

                <div id="account-panel" class="row">

                    <div class="col-md-4 col-sm-12 account-box-wrapper">
                        <div class="account-box">
                            <i class="fa fa-dollar"></i>
                            <span>Disponivel</span>
                            &nbsp;
                            <strong><span>R$ <?php echo formatPrice($balances["current"]); ?></span></strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 account-box-wrapper">
                        <div class="account-box">
                            <i class="fa fa-credit-card"></i>
                            <span>Futuro</span>
                            &nbsp;
                            <strong><span>R$ <?php echo formatPrice($balances["future"]); ?></span></strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 account-box-wrapper">
                        <div class="account-box">
                            <i class="fa fa-money"></i>
                            <span>Bloqueado</span>
                            &nbsp;
                            <strong><span>R$ <?php echo formatPrice($balances["unavailable"]); ?></span></strong>
                        </div>
                    </div>

                </div><!--row-->
                


                

                    <div class="row">

                        
                        <div id="dash-data" class="col-md-12">


                           
                                

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Quem presenteou</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Status</th>
                                        <th>Valor</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1;  if( isset($order) && ( is_array($order) || $order instanceof Traversable ) && sizeof($order) ) foreach( $order as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td style="min-widtd: 222px;"><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        
                                        <td><?php echo htmlspecialchars( $value1["inpaymentstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td>R$ <?php echo formatPrice($value1["vltotal"]); ?></td>
                                        <td>
                                            <a class="btn btn-success" href="/dashboard/painel-financeiro/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                            <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                                        </td>
                                    </tr>
                                    <?php }else{ ?>
                                    <div class="alert alert-info">
                                        Nenhum pedido foi encontrado
                                    </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="dash-search pull-right">
                                <form action="/dashboard/painel-financeiro">
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

