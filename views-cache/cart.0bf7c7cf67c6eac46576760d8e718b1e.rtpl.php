<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="domain domain-cart">

    <div class="container-fluid">            
            
        <div class="row text-center">
            
            <div class="cart-box">
            
            <div class="row">
            
                <div class="col-md-12">
                     




                    <form action="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/checkout">
                            
                        <?php if( $error != '' ){ ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                        </div>
                        <?php } ?>

                    
                        
                        <table cellpadding="30" cellspacing="10">
                            <thead align="center" >
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th colspan="2" class="product-name">Produto</th>
                                    <th class="product-price">Valor</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                                <tr>
                                    <td class="product-remove">
                                        <a class="remove" href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remover">×</a> 
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank"><img width="145" height="145" src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a>
                                    </td>

                                    <td class="product-name">
                                        <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                    </td>

                                    <td class="product-price">
                                        <span class="amount">R$ <?php echo formatPrice(getInterest($value1["vlprice"],"1","1",$productconfig["incharge"])); ?></span> 
                                    </td>

                                    <td class="product-quantity">
                                        <div class="quantity-wrapper">
                                            
                                            <input class="quantity-button" type="button" class="minus" value="-" onclick="window.location.href = '/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/minus'">
                                            
                                            <input type="number" size="4" class="input-text quantity" title="Qty" value="<?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" min="0" step="1">
                                            
                                            <input class="quantity-button" type="button" class="plus" value="+" onclick="window.location.href = '/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/adicionar'">
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="amount">R$ <?php echo formatPrice(getInterest($value1["vltotal"],"1","1",$productconfig["incharge"])); ?></span> 
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>



                    


                
               
            </div><!--col-->
        
        </div><!--row-->


        <div class="row">
            
            <div class="col-md-6">
                

                &nbsp;

            </div><!--col-->

            <div class="col-md-6">
                

                <div class="cart-details">

                    <table align="center" cellpadding="30" cellspacing="10">
                        <tbody >
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="amount">R$ <?php echo formatPrice(getInterest($cart["vltotal"],"1","1",$productconfig["incharge"])); ?></span></strong> </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="cart-button">
                        <input type="submit" value="Finalizar Compra" name="proceed">
                    </div>

                </div>

           

                


            </div><!--col-->

        </div><!--row-->
        
        </form>

        </div><!--cart-box-->



        </div>








                



    </div><!--container-->

</section>



