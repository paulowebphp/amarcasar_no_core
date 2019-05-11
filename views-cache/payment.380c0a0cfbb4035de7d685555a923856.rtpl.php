<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
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


            <div style="padding:5%;" class="col-md-6">
                    
                ID User: <?php echo htmlspecialchars( $order["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
            </div>
            <div style="padding:5%;" class="col-md-6">
                    
                Nome User: <?php echo htmlspecialchars( $order["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

            </div>

            <div class="row">

                <div style="padding:5%;" class="col-md-6">
                    
                    ID Cart: <?php echo htmlspecialchars( $order["idcart"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <div style="padding:5%;" class="col-md-6">
                        
                    ID Order: <?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>

            </div><!--row-->


            <div class="row">

                <div style="padding:5%;" class="col-md-6">
                    
                    Valor Total: <?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <div style="padding:5%;" class="col-md-6">
                        
                    Data Ordem: <?php echo htmlspecialchars( $order["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>

            </div><!--row-->


        </div>
    </div>
</div>