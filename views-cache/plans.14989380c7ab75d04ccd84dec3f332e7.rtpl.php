<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">

                <div class="box-header pull-right">
                    <a href="/dashboard/painel-financeiro/conta-bancaria/transferir" class="btn btn-default">Fazer Renovação</a>
                </div>

                <div class="box-header pull-right">
                    <a href="/dashboard/painel-financeiro/conta-bancaria" class="btn btn-default">Fazer Upgrade</a>
                </div>

                


                
                <div class="cart-collaterals">
                    <h2>Meu Plano</h2>
                </div>

                <br>
                <div class="box-header pull-left">
                    <p>Olá, <?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, seu plano atual expira em <?php echo formatDate($user["dtplanend"]); ?></p>
                </div>
                <br>
                <br>
                <br>
                
                <?php if( $planError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $planError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
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
                        <?php $counter1=-1;  if( isset($plan) && ( is_array($plan) || $plan instanceof Traversable ) && sizeof($plan) ) foreach( $plan as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th style="min-width: 222px;"><?php echo getDesplan($value1["inplanbought"]); ?></th>
                            <th><?php if( $value1["inperiod"] > 0 ){ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> meses <?php }else{ ?> <?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> mês <?php } ?></th>
                            <th>R$ <?php echo formatPrice($value1["vlprice"]); ?></th>
                            
                            <th><?php echo htmlspecialchars( $value1["idstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo formatDate($value1["dtregister"]); ?></th>
                            <td><?php echo getDtPlanEnd($value1["dtregister"],$value1["inperiod"]); ?></td>
                            <td>
                                <a class="btn btn-success" href="/dashboard/meu-plano/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum plano foi encontrado.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>


                



            </div>
        </div>
    </div>
</div>