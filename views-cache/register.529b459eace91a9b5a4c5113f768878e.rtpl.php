<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            
            <div class="col-md-6">
                
                <?php if( $errorRegister != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $errorRegister, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

                <form id="register-form-wrap" action="/criar-site-de-casamento" class="register" method="post">
                    <h2>Criar conta</h2>
                    <p class="form-row form-row-first">
                        <label for="name">Nome Completo <span class="required">*</span>
                        </label>
                        <input type="text" id="name" name="name" class="input-text" value="<?php echo htmlspecialchars( $registerValues["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>
                    <p class="form-row form-row-first">
                        <label for="email">E-mail <span class="required">*</span>
                        </label>
                        <input type="email" id="email" name="email" class="input-text" value="<?php echo htmlspecialchars( $registerValues["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>
                    <p class="form-row form-row-first">
                        <label for="password">Senha
                        </label>
                        <input type="password" id="password" name="password" class="input-text" value="">
                    </p>
                    <p class="form-row form-row-last">
                        <label for="confirmation">Confirme a Senha <span class="required">*</span>
                        </label>
                        <input type="password" id="confirmation" name="confirmation" class="input-text">
                    </p>
                    <p class="form-row form-row-first">
                        <input type="hidden" id="plan" name="inplan" class="input-text" value="<?php echo htmlspecialchars( $plan["inplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>
                    <div class="clear"></div>

                    <p class="form-row">
                        <input type="submit" value="Criar Conta" name="login" class="button">
                    </p>

                    <div class="clear"></div>
                </form>               
            </div>
        </div>
    </div>
</div>