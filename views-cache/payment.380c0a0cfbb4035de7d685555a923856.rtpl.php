<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                
                <h1>Pagamento N°<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                

                <!--<button type="submit" id="btn-print" class="button alt" style="margin-bottom:10px">Imprimir</button>

                <iframe src="/boleto/<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="boleto" frameborder="0" style="width:100%; min-height:1000px; border:1px solid #CCC; padding:20px;"></iframe>

                <script>
                document.querySelector("#btn-print").addEventListener("click", function(event){

                    event.preventDefault();

                    window.frames["boleto"].focus();
                    window.frames["boleto"].print();

                });                
                </script>-->

            </div>
        </div>
        <div class="row">

         
            </div>
            <div style="padding:5%;" class="col-md-6 text-center">


                <h3>Parabéns, </h3><h1><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h3>você enviou seu presente para o casal</p>
                <br>
                <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h2>&</h2>
                <h1><?php echo htmlspecialchars( $user["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                    

            </div>
            <div style="padding:5%;" class="col-md-6 text-center">
                    
                <h2>Valor: <?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>

            </div>

        </div>







            <div class="row">

                <div style="padding:5%;" class="col-md-4">
                    <h4>ID Usuário: <?php echo htmlspecialchars( $order["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                    <br>
                    <h4>ID Carrinho: <?php echo htmlspecialchars( $order["idcart"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                    <br>
                    <h4>ID Pagamento: <?php echo htmlspecialchars( $order["idpayment"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                </div>
                <div style="padding:5%;" class="col-md-4">
                        
                    <h1>Itens</h1>

                    <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>

                    <h2><?php echo htmlspecialchars( $counter1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?> .</h2>
                    <hr>
                    <h4>Nome: <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h4>
                    <h4>Valor Unitario: <?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h4>

                    <h4>Quantidade: <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h4>
                    <h4>Valor Total: <?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h4>
                    <br><br>

                    <?php } ?>

                </div>

                <div style="padding:5%;" class="col-md-4">
                    
                    Comprador: <b><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Telefone: <b><?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    E-mail: <b><?php echo htmlspecialchars( $order["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Documento: <b><?php if( $order["intypedocument"] === '0'  ){ ?> CPF <?php }else{ ?> CNPJ <?php } ?> <?php echo htmlspecialchars( $order["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Customer ID: <b><?php echo htmlspecialchars( $order["descustomercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Card ID: <b><?php echo htmlspecialchars( $order["descardcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Order ID: <b><?php echo htmlspecialchars( $order["desordercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    Payment ID: <b><?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                    <br><br>
                    Endereço: <b><?php echo htmlspecialchars( $order["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $order["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $order["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>

                </div>

            </div><!--row-->


            <div class="row">

                
                <div style="padding:5%;" class="col-md-6">
                        
                    <h1>Valor Total: <?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                </div>

                <div style="padding:5%;" class="col-md-6">
                        
                    <h1>Data Pagamento: <?php echo htmlspecialchars( $order["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                </div>

            </div><!--row-->


        
    </div>
</div>