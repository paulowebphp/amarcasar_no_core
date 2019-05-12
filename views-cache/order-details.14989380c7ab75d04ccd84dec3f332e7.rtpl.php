<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
@media print {
    .header-area,
    .site-branding-area,
    .sticky-wrapper,
    .footer-top-area,
    .footer-bottom-area,
    .single-product-area .col-md-3,
    .button.alt,
    .product-big-title-area {
        display:none!important;
    }
    .single-product-area .col-md-9 {
        width: 100%!important;
    }
}
</style>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Minha Conta</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                
                <h3 id="order_review_heading" style="margin-top:30px;">Detalhes do Pedido N°<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                <div id="order_review" style="position: relative;">
                    <table class="shop_table">
                        <thead>
                            <tr>
                                <th class="product-name">Presente</th>
                                <th class="product-name">Valor Unitário</th>
                                <th class="product-name">Quantidade</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                                                
                            <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                            <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>  
                                </td>
                                <td class="product-total">
                                    <strong class="amount"><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>
                                </td>
                                <td class="product-quantity">
                                    <strong class="product-quantity"><?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>
                                </td>
                                <td class="product-total">
                                    <span class="amount">R$<?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            
                            <tr class="order-total">
                                <th colspan="3">Total do Pedido</th>
                                <td><strong><span class="amount">R$<?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></strong> </td>
                            </tr>
                        </tfoot>
                    </table>
                    <br>
                    <br>



                    <table class="shop_table">
                        <thead>
                            <tr>
                                <th class="product-name">Comprador</th>
                                <th class="product-total"><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="product-name">
                                    E-mail 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>               
                            <tr class="cart_item">
                                <td class="product-name">
                                    Telefone 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>

                            <tr class="cart_item">
                                <td class="product-name">
                                    <?php if( $order["intypedocument"] === '0'  ){ ?> CPF <?php }else{ ?> CNPJ <?php } ?> 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="product-name">
                                    Customer 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["descustomercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>
                             <tr class="cart_item">
                                <td class="product-name">
                                    Cartão 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["descardcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="product-name">
                                    Order 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["desordercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>
                           
                            <tr class="cart_item">
                                <td class="product-name">
                                    Pagamento 
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>     
                                
                            

                            <tr class="cart_item">
                                <td class="product-name">
                                    Endereço
                                </td>
                                <td class="product-total">
                                    <?php echo htmlspecialchars( $order["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $order["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $order["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </td>
                            </tr>



                        </tbody>
                        <tfoot>
                            
                            <tr class="order-total">
                                <th>Data do Pedido</th>
                                <td><strong><span class="amount"><?php echo htmlspecialchars( $order["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></strong> </td>
                            </tr>
                        </tfoot>
                    </table>



                    <div id="payment">
                        <div class="form-row place-order">
                            <input type="submit" value="Imprimir" class="button alt" onclick="window.print()">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>