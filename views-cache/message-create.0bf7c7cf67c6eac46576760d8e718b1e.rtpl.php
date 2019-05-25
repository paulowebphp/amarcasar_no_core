<?php if(!class_exists('Rain\Tpl')){exit;}?> 
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Autenticação</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-12 text-center">

                <?php if( $messageError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $messageError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

                <form action="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/mural-mensagens/enviar" id="login-form-wrap" class="login" method="post">
                    <h2>Mensagem</h2>
                    <p class="form-row form-row-first">
                        <label for="desmessage">Nome <span class="required">*</span>
                        </label>
                        <input type="text" id="desmessage" name="desmessage" class="input-text" value="<?php echo htmlspecialchars( $message["desmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>

                    <p class="form-row form-row-first">
                        <label for="desemail">E-mail <span class="required">*</span>
                        </label>
                        <input type="email" id="desemail" name="desemail" class="input-text" value="<?php echo htmlspecialchars( $message["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>

                    <p class="form-row form-row-first">
                        <label for="desdescription">Mensagem <span class="required">*</span>
                        </label>
                        <input type="text" id="desdescription" name="desdescription" class="input-text" value="<?php echo htmlspecialchars( $message["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>
                    
                    <div class="clear"></div>
                    <p class="form-row">
                        <input type="submit" value="Enviar" class="button">
                    </p>

                    <div class="clear"></div>
                </form>                    
            </div>
            
        </div>
    </div>
</div>