<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-12 text-center">

                <?php if( $rsvpError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $rsvpError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

                <form action="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/rsvp/confirmacao/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="login-form-wrap" class="login" method="post">
                    <h2>Olá, <?php echo htmlspecialchars( $rsvp["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?> , bem vindx ao site de</h2>
                    <h2><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?> & <?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                    <h4>Por favor, confirme sua presença </h4>
                    <br><br>
                    <p class="form-row form-row-first">
                        <label for="nrphone">Telefone<span class="required">*</span>
                        </label>
                        <input type="text" id="nrphone" name="nrphone" class="input-text">
                    </p>
                    
                    <p class="form-row form-row-first">
                        <label for="desemail">E-mail<span class="required">*</span>
                        </label>
                        <input type="email" id="desemail" name="desemail" class="input-text">
                    </p>

                    <p class="form-row form-row-first">
                        <label for="inadultsconfirmed">Número de Adultos<span class="required">*</span>
                        </label>
                        <input type="text" id="inadultsconfirmed" name="inadultsconfirmed" class="input-text">
                    </p>

                    <p class="form-row form-row-first">
                        <label for="inchildrenconfirmed">Número de Crianças<span class="required">*</span>
                        </label>
                        <input type="text" id="inchildrenconfirmed" name="inchildrenconfirmed" class="input-text">
                    </p>

                    <p class="form-row form-row-first">
                        <label for="desguestaccompanies">Nome Completo dos Acompanhantes<span class="required">*</span>
                        </label>
                        <input type="text" id="desguestaccompanies" name="desguestaccompanies" class="input-text">
                    </p>

                    

                    <div class="clear"></div>

                    <p class="form-row">
                        <input type="submit" value="Confirmar Presença" class="button">
                    </p>

                    <div class="clear"></div>
                </form>                    
            </div>
            
        </div>
    </div>
</div>