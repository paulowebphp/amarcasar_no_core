<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">
                    <form action="/dashboard/meu-plano/renovar/checkout" class="checkout" method="post" name="checkout">
                        <div id="customer_details" class="col2-set">

                            <?php if( $planError != '' ){ ?>
                            <div class="alert alert-danger">
                                <?php echo htmlspecialchars( $planError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                            <?php } ?>

                            <div class="row">
                                

                                <div class="col-md-6">

                                    

                                    <div class="woocommerce-billing-fields text-center">

                                        <h3>Informações de Pagamento</h3>

                                    
                                        

                                        

                                        
                                        <p style="text-align: center" id="payment_document_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="payment_document_1">CPF do Titular do Cartão <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["desholderdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="payment_document_1" name="desholderdocument" class="input-text ">
                                        </p>

                                        <p id="payment_cardname_1_field" class="form-row form-row-wide number-field validate-required">
                                            <label class="" for="payment_cardname_1">Nome tal como está impresso no cartão <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["desholdername"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="fasfsfs" id="payment_cardname_1" name="desholdername" class="input-text ">
                                        </p>

                                        <p id="payment_cardnumber_1_field" class="form-row form-row-wide number-field validate-required">
                                            <label class="" for="payment_cardnumber_1">Número do Cartão <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_number"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
                                        </p>

                                        <p id="payment_cardmonth_1_field" class="form-row form-row-wide number-field validate-required">
                                            <label class="" for="payment_cardmonth_1">Mês <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_month"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
                                        </p>

                                        <p id="payment_cardyear_1_field" class="form-row form-row-wide number-field validate-required">
                                            <label class="" for="payment_cardyear_1">Ano <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_year"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="payment_cardyear_1" name="descardcode_year" class="input-text ">
                                        </p>

                                        <p id="payment_cardcvv_1_field" class="form-row form-row-wide number-field validate-required">
                                            <label class="" for="payment_cardcvv_1">Código de Segurança <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_cvv"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="payment_cardcvv_1" name="descardcode_cvv" class="input-text ">
                                        </p>

                                        

                                        <div class="clear"></div>


                                       
                                    </div><!--woocommerce-billing-fields-->
                                </div><!--col-md-6-->

                                <div class="col-md-6 text-center">
                                    
                                     <h3 id="order_review_heading" style="margin-top:30px;">Detalhes do Pedido</h3>
                                        <div id="order_review" style="position: relative;">
                                            <table class="shop_table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Renovação de Plano</th>
                                                        <th class="product-total">Periodo</th>
                                                        <th class="product-total">Valor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <?php echo htmlspecialchars( $inplan["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>  
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount"><strong class="product-quantity">+ <?php echo htmlspecialchars( $inplan["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $inplan["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></span>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">R$<?php echo formatPrice($inplan["vlprice"]); ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                        
                                                    <tr class="order-total">
                                                        <th colspan="2">Total do Pedido</th>
                                                        <td><strong><span class="amount">R$<?php echo formatPrice($inplan["vlprice"]); ?></span></strong> </td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                                                                    

                                            <div id="payment">
                                                <div class="form-row place-order">
                                                    <input type="submit" data-value="Place order" value="Continuar" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
                                                </div>
                                                <div class="clear"></div>
                                            </div><!--payment-->
                                        </div><!--orders_reveiw-->



                                </div>


                            </div><!--row-->
                        </div><!--customer_details-->
                    </form>
                </div><!--product-content-right-->
            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container-->
</div><!--single-product-area-->