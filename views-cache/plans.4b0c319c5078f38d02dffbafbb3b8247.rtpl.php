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
                        
                        <div class="dash-title">
                            <h1>Meu Plano</h1>

                            <div class="expiration-info" class="pull-left">
                                <span>Olá, <strong><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>, seu plano atual expira em <?php echo formatDate($user["dtplanend"]); ?></span>
                            </div>
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

                        <form id="dash-form" method="post" action="/dashboard/menu">

                    </div>

                </div>

                


                

                    <div class="row">

                        
                        <div id="dash-data" class="col-md-12">


                           
                                

                            <table class="table">
                                <thead>
                                    <tr>
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
                                        <td id="data-second-column" style="min-widtd: 222px;"><?php echo htmlspecialchars( $value1["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php if( $value1["inperiod"] > 1 ){ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> meses <?php }else{ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> mês <?php } ?></td>
                                        <td>R$ <?php echo formatPrice($value1["vlsaleprice"]); ?></td>
                                        <td><?php echo getPaymentStatus($value1["inpaymentstatus"]); ?></td>
                                        <!--<td><?php echo getPaymentStatus($value1["inpaymentstatus"]); ?></td>-->
                                        <td><?php echo formatDate($value1["dtbegin"]); ?></td>
                                        <td><?php echo formatDate($value1["dtend"]); ?></td>
                                        <td>
                                            <a class="btn btn-success" href="/dashboard/meu-plano/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                            <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                                        </td>
                                    </tr>
                                    <?php } ?>


                                    <?php $counter1=-1;  if( isset($free_plan) && ( is_array($free_plan) || $free_plan instanceof Traversable ) && sizeof($free_plan) ) foreach( $free_plan as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td scope="row"><?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td style="min-widtd: 222px;"><?php echo htmlspecialchars( $value1["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dias</td>
                                        <td>R$ <?php echo formatPrice($value1["vlsaleprice"]); ?></td>
                                        <td>-</td>
                                        
                                        <td><?php echo formatDate($value1["dtbegin"]); ?></td>
                                        <td><?php echo formatDate($value1["dtend"]); ?></td>
                                        <td>
                                            <a class="btn btn-success" href="/dashboard/meu-plano/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                            <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->


                </form>



            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

