<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-3 text-center">

                    <div>

                        <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                        <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-free");?>

                        <?php }else{ ?>

                            <?php require $this->checkTemplate("dashboard-menu");?>

                        <?php } ?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">


                <?php if( $user["inplancontext"] == '0' ){ ?>
                    <div class="button-header pull-right">
                        <a href="/dashboard/meu-plano/comprar" class="btn btn-default">Comprar um plano</a>
                    </div>

                <?php }elseif( $user["inplancontext"] != '0' AND $user["inplancontext"] != '3' ){ ?>

                    <div class="button-header pull-right">
                        <a href="/dashboard/meu-plano/renovar" class="btn btn-default">Fazer Renovação</a>
                    </div>

                    <div class="button-header pull-right">
                        <a href="/dashboard/meu-plano/upgrade" class="btn btn-default">Fazer Upgrade</a>
                    </div>

                <?php }elseif( $user["inplancontext"] != '0' AND $user["inplancontext"] == '3' ){ ?>

                    <div class="button-header pull-right">
                        <a href="/dashboard/meu-plano/renovar" class="btn btn-default">Fazer Renovação</a>
                    </div>

                <?php } ?>
                 

               


                   

                

                


                
                <div class="cart-collaterals">
                    <h2>Meu Plano</h2>
                </div>

                <br>
                <div class="pull-left">
                    <p>Olá, <strong><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>, seu plano atual expira em <?php echo formatDate($user["dtplanend"]); ?></p>
                </div>
                <br>
                <br>
                <br>
                
                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

                <?php if( $success != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>


                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Plano</th>
                            <th>Período</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($regular_plan) && ( is_array($regular_plan) || $regular_plan instanceof Traversable ) && sizeof($regular_plan) ) foreach( $regular_plan as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th style="min-width: 222px;"><?php echo htmlspecialchars( $value1["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php if( $value1["inperiod"] > 1 ){ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> meses <?php }else{ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> mês <?php } ?></th>
                            <th>R$ <?php echo formatPrice($value1["vlsaleprice"]); ?></th>
                            <th><?php echo htmlspecialchars( $value1["inpaymentstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <!--<th><?php echo getPaymentStatus($value1["inpaymentstatus"]); ?></th>-->
                            <th><?php echo formatDate($value1["dtbegin"]); ?></th>
                            <td><?php echo formatDate($value1["dtend"]); ?></td>
                            <td>
                                <a class="btn btn-success" href="/dashboard/meu-plano/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                            </td>
                        </tr>
                        <?php } ?>


                        <?php $counter1=-1;  if( isset($free_plan) && ( is_array($free_plan) || $free_plan instanceof Traversable ) && sizeof($free_plan) ) foreach( $free_plan as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th style="min-width: 222px;"><?php echo htmlspecialchars( $value1["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dias</th>
                            <th>R$ <?php echo formatPrice($value1["vlsaleprice"]); ?></th>
                            <th>-</th>
                            
                            <th><?php echo formatDate($value1["dtbegin"]); ?></th>
                            <td><?php echo formatDate($value1["dtend"]); ?></td>
                            <td>
                                <a class="btn btn-success" href="/dashboard/meu-plano/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>







                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

