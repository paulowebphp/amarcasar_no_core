<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section id="register">
    
    <div class="container">
        

        <div class="row">
            

            <div class="col-md-6">

                

                <form id="register-form-wrap" action="/criar-site-de-casamento" class="register" method="post">
                    
                    <h3><a href="/"><img src="/res/images/logo/logo-dd716f.png" alt="Amar Casar" width="200" class="media-object"></a></h3>

                    <p class="center-text font-18 font-type-color-3">Crie o seu site, você vai amar casar!</p>

                    <p id="phrase2" class="center-text font-14"></p>

                    <?php if( $errorRegister != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $errorRegister, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <p class="form-row">
                        <input type="text" id="name" name="name" class="input-text" value="<?php echo htmlspecialchars( $registerValues["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome Completo">
                    </p>


                    <p class="form-row">
                        <input type="email" id="email" name="email" class="input-text" value="<?php echo htmlspecialchars( $registerValues["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="E-mail">
                    </p>


                    <p class="form-row">
                        <input type="password" id="password" name="password" class="input-text" placeholder="Senha">
                    </p>

                    <p class="form-row form-row-last">
                        <input type="password" id="confirmation-register" name="confirmation-register" class="input-text" placeholder="Confirmar Senha">
                    </p>


                    <!--<p class="form-row">
                        <input type="hidden" id="plan" name="inplan" class="input-text" value="<?php echo htmlspecialchars( $plan["inplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>-->

                    <p class="form-row">
                        <input type="hidden" id="inplan" name="inplan" class="input-text" value="<?php echo htmlspecialchars( $plan["inplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>

                    <div class="clear"></div>
                    <p>
                        <div class="g-recaptcha" data-sitekey="6LecaWEUAAAAAH50e2RkIw1kifQB875SAGBNpx4C"></div>
                    </p>
                    <p class="form-row">
                        <input type="submit" value="Criar Conta" name="login" class="button btn-register">
                    </p>

                    <p class="center-text font-12">Ao se registrar, você aceita os nossos <a style="color:#dd716f" href="/termos-uso" target="_blank">Termos de Uso</a>.</p>

                    <div class="clear"></div>
                </form>     

            </div><!--col-md-12-->

            <div class="col-md-6">
                
                <div class="iframe-slide">

                    <ul id="slides">

                        <li class="slide">

                        <div class="slide-partial slide-left">
                            <img src="/res/images/register/slide_01-left.jpg"/>
                        </div>

                        <div class="slide-partial slide-right">
                            <img src="/res/images/register/slide_01-right.jpg"/>
                        </div>

                        <h1 class="title">

                            <span id="text-slide1" class="title-text">Compartilhe suas fotos, vídeos, mensagens e eventos</span>

                        </h1>

                        </li>

                        <li class="slide">

                        <div class="slide-partial slide-left">
                            <img src="/res/images/register/slide_02-left.jpg"/>
                        </div>

                        <div class="slide-partial slide-right">
                            <img src="/res/images/register/slide_02-right.jpg"/>
                        </div>

                        <h1 class="title">

                            <span id="text-slide2" class="title-text">Tenha acesso a uma das listas com melhores preços e condições do mercado!</span>

                        </h1>

                        </li>

                    </ul>


                    <ul id="slide-select">

                        <li class="selector"></li>
                        <li class="selector"></li>

                    </ul>

                </div><!--iframe-slide-->

            </div>

        </div>

    </div><!--container-->
    

</section>
