<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                
                <div class="box-header pull-right">
                    <a href="/dashboard/mural-mensagens/enviar" class="btn btn-default">Enviar Mensagem</a>
                </div>


                <?php if( $numMessages === 0 ){ ?>
                    <h1>Ainda não há mensagens no Mural</h1>
                <?php }else{ ?>

                    <?php $counter1=-1;  if( isset($message) && ( is_array($message) || $message instanceof Traversable ) && sizeof($message) ) foreach( $message as $key1 => $value1 ){ $counter1++; ?>


                    <h1><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                    <br>
                    <h3>você enviou seu presente para o casal</h3>
                    <br>
                    <h1><?php echo htmlspecialchars( $value1["desmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                    <br>
                    <h1><?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>


                    <?php } ?>

                <?php } ?>       


            </div>

        </div>
        
    </div>
</div>