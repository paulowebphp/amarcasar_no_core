<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">

                <div class="box-header pull-right">
                    <a href="/dashboard/presentes-virtuais/adicionar" class="btn btn-default">Transferir Saldo</a>
                </div>

                <div class="box-header pull-right">
                    <a href="/dashboard/presentes-virtuais/lista-pronta" class="btn btn-default">Configurar Conta Bancária</a>
                </div>

                
                <div class="cart-collaterals">
                    <h2>Painel Financeiro</h2>
                </div>

                <?php if( $orderMsg != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $orderMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $orderError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $orderError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>


                
                    <div class="promo-area">
                        <div class="zigzag-bottom"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-promo promo1">
                                        <i class="fa fa-dollar"></i>
                                        <p>Disponivel</p>
                                        <p>R$ <?php echo formatPrice($balances["current"]); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-promo promo3">
                                        <i class="fa fa-credit-card"></i>
                                        <p>Futuro</p>
                                        <p>R$ <?php echo formatPrice($balances["future"]); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-promo promo4">
                                        <i class="fa fa-money"></i>
                                        <p>Bloqueado</p>
                                        <p>R$ <?php echo formatPrice($balances["unavailable"]); ?></p>
                                    </div>
                                </div>
                            </div>
                    </div> <!-- End promo area -->
                


                



                <table class="table">
                    <thead>
                        <tr>
                            <th>Presente</th>
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
                            <th scope="row"><?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th style="min-width: 222px;"><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            
                            <th><?php echo htmlspecialchars( $value1["idstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <td>R$ <?php echo formatPrice($value1["vltotal"]); ?></td>
                            <td>
                                <a class="btn btn-success" href="/dashboard/painel-financeiro/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum pedido foi encontrado.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>


                 <div class="box-tools">
                <form action="/dashboard/presentes-virtuais">
                    <div class="input-group input-group-sm pull-right" style="width: 150px;">
                    <input type="text" name="search" class="form-control pull-right" placeholder="Buscar..." value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-left">
                        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                        <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>



            </div>
        </div>
    </div>
</div>