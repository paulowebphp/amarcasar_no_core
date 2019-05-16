<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">

                <div class="box-header pull-right">
                    <a href="/dashboard/painel-financeiro/transferencias/transferir-saldo" class="btn btn-default">Transferir Saldo para Conta Bancária</a>
                </div>

                

                
                <div class="cart-collaterals">
                    <h2>Tansferências</h2>
                </div>

                
                <?php if( $transferError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $transferError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>



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
                            <th scope="row"><?php echo htmlspecialchars( $value1["idtransferbank"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th style="min-width: 222px;"><?php echo htmlspecialchars( $value1["destransfercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["vlamount"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["idstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["desbanknumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["desagencynumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $value1["desagencycheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo htmlspecialchars( $value1["desaccountnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $value1["desaccountcheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <th><?php echo formatDate($value1["dtregister"]); ?></th>
                            
                            
                            <td>R$ <?php echo formatPrice($value1["vltotal"]); ?></td>
                            <td>
                                <a class="btn btn-success" href="/dashboard/painel-financeiro/transferencias/<?php echo htmlspecialchars( $value1["idtransferbank"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/detalhes" role="button">Detalhes</a>
                                <!--<a class="btn btn-default" href="/dashboard/orders/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>-->
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhuma transferência foi encontrada.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>


                 <div class="box-tools">
                <form action="/dashboard/painel-financeiro/transferencias">
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