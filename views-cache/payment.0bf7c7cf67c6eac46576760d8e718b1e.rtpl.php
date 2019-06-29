<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="domain">

    <div class="container">            
            
        
            
            <div class="order-box light-box">


                <div class="row section-row">
                    
                    <div class="col-md-12">
                        
                        <h3>Muito obrigado, </h3><h1><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,</h1>
                        <h3>você enviou seu presente para</h3>
                        <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                        <h2>&</h2>
                        <h1><?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                    </div><!--col-->

                </div><!--row-->


            
                <div class="row section-row">
                
                    <div class="col-md-12">
                         

                                
                            <?php if( $error != '' ){ ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                            <?php } ?>

                        
                            
                            <table cellpadding="15" cellspacing="10">
                                <thead align="center" >
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Presente</th>
                                        <th>Valor Unitário</th>
                                        <th>Quantidade</th>
                                        <th>Valor Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td>
                                            <?php echo htmlspecialchars( $counter1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                                        </td>
                                        <td class="table-image-column">
                                            <img src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" align="right">Valor Total</td>
                                        <td>R$ <?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right">Data da Compra</td>
                                        <td><?php echo htmlspecialchars( $order["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    </tr>

                                </tfoot>
                            </table>
                    
                   
                    </div><!--col-->
                
                </div><!--row-->

                <div class="row section-row">
                    
                    <div class="col-md-6">
                        

                        ID Payment: <b><?php echo htmlspecialchars( $order["idpayment"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                        ID Payment: <b><?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                        Comprador: <b><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                        Telefone: <b><?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                        E-mail: <b><?php echo htmlspecialchars( $order["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>

                    </div><!--col-->

                    <div class="col-md-6">
                        

                        Endereço: <b><?php echo htmlspecialchars( $order["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $order["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $order["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br><br><br><br>
                            

                       

                    </div><!--col-->

                </div><!--row-->

                





                <div class="row section-row">
                    
                    <div class="col-md-6">
                        

                        &nbsp;

                    </div><!--col-->

                    <div class="col-md-6">
                        

                            
                            Documento: <b><?php if( $order["intypedoc"] === '0'  ){ ?> CPF <?php }else{ ?> CNPJ <?php } ?> <?php echo htmlspecialchars( $order["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Customer ID: <b><?php echo htmlspecialchars( $order["descustomercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Card ID: <b><?php echo htmlspecialchars( $order["descardcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Order ID: <b><?php echo htmlspecialchars( $order["desordercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Payment ID: <b><?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>

                       

                    </div><!--col-->

                </div><!--row-->


            

            </div><!--cart-box-->







    </div><!--container-->

</section>



