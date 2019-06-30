<?php if(!class_exists('Rain\Tpl')){exit;}?><footer class="text-center">

    <div class="container-fluid">

        <div id="footer-first-row" class="row">



            <div class="col-md-4 footer-column text-left">


                <div style="font-family: 'KaushanScript'" class="caption">
                    <h1><?php echo htmlspecialchars( $user["desnick"], ENT_COMPAT, 'UTF-8', FALSE ); ?> & <?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                </div>

                <div class="caption">

                    &nbsp;

                </div><!--caption-->


                
                

            </div><!--col-lg-6-->





        





            <div class="col-md-4 footer-column text-left">


                <div class="caption">

                    <h2>Páginas</h2>

                    <a href="/<?php echo getDesdomain(); ?>" class="list-group-item list-group-item-action">Home</a>

                    <?php if( setTemplateMenu('wedding') ){ ?><a href="/<?php echo getDesdomain(); ?>/cerimonia" class="list-group-item list-group-item-action">Cerimônia</a><?php } ?>

                    <?php if( setTemplateMenu('party') ){ ?><a href="/<?php echo getDesdomain(); ?>/festa" class="list-group-item list-group-item-action">Festa</a><?php } ?>


                    <?php if( setTemplateMenu('bestfriend') ){ ?><a href="/<?php echo getDesdomain(); ?>/padrinhos-madrinhas" class="list-group-item list-group-item-action">Padrinhos e Madrinhas</a><?php } ?>


                    <?php if( setTemplateMenu('rsvp') ){ ?><a href="/<?php echo getDesdomain(); ?>/rsvp" class="list-group-item list-group-item-action">RSVP</a><?php } ?>


                    <?php if( setTemplateMenu('message') ){ ?><a href="/<?php echo getDesdomain(); ?>/mural-mensagens" class="list-group-item list-group-item-action">Mensagens</a><?php } ?>


                    <?php if( setTemplateMenu('store') ){ ?><a href="/<?php echo getDesdomain(); ?>/loja" class="list-group-item list-group-item-action">Loja</a><?php } ?>

                    

                    <?php if( setTemplateMenu('event') ){ ?><a href="/<?php echo getDesdomain(); ?>/eventos" class="list-group-item list-group-item-action">Eventos</a><?php } ?>
                    
                    

                    <?php if( setTemplateMenu('album') ){ ?><a href="/<?php echo getDesdomain(); ?>/album" class="list-group-item list-group-item-action">Album</a><?php } ?>
                    
                    

                    <?php if( setTemplateMenu('video') ){ ?><a href="/<?php echo getDesdomain(); ?>/videos" class="list-group-item list-group-item-action">Vídeos</a>  <?php } ?>

                     

                    <?php if( setTemplateMenu('stakeholder') ){ ?><a href="/<?php echo getDesdomain(); ?>/fornecedores" class="list-group-item list-group-item-action">Fornecedores</a> <?php } ?>
                    
                      

                    <?php if( setTemplateMenu('outerlist') ){ ?><a href="/<?php echo getDesdomain(); ?>/listas-de-fora" class="list-group-item list-group-item-action">Listas de Fora</a><?php } ?>
                    

                </div><!--caption-->                


            </div><!--col-md-3-->







            <div class="col-md-4 footer-column text-left">

            

                 <div class="caption">

                    <h2>Redes Sociais</h2>

                    <!-- <div class="col-xs-4 text-center"> <a href="#"><img src="&lt;?php echo DIR_RESOURCES; ?&gt;/images/twitter64.png" alt="Placeholder image" width="86" height="86" class="img-responsive"></a></div> -->


                    <ul class="list-unstyled list-group list-group-horizontal">

                        <li class="list-group-item"><a href="https://www.facebook.com/amarcasaroficial/"> <img src="/res/images/facebook64.png" alt="Placeholder image" width="86" height="86" class="img-responsive"></a></li>                
                        <li class="list-group-item"><a href="https://www.instagram.com/amarcasaroficial"><img src="/res/images/instagram64.png" alt="Placeholder image" width="86" height="86" class="img-responsive"></a></li>                
           
                    </ul>


                </div><!--caption-->



               





            </div><!--col-md-3-->




    </div><!--row-->


















    <div class="row">

        <div class="col-md-12 bottom-footer">

            <div class="caption">

                <p><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?> e <?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?> © <?php echo getYear(); ?><br><a href="termos-uso">Termos de Uso</a> | <a href="termos-lista">Termos da Lista de Presentes Virtuais</a> | <a href="politica-privacidade">Política de Privacidade</a> | <a href="/contato">Dúvidas e Suporte</a></p>

            <h6><img src="res/images/protected.png" alt=""/>&nbsp;&nbsp;Site Protegido</h6>

            </div><!--caption-->

        </div><!--col-xs-12-->

    </div><!--row-->









    </div><!--container-->

</footer>
   
    <!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
    
    <script src="/res/js/jquery-3.4.1.min.js"></script>
    <script src="/res/js/jquery-ui.min.js"></script>
    <script src="/res/js/jquery.easing.1.3.min.js"></script>


    <script src="/res/js/jscolor.js"></script>


    <!-- Biblioteca Handlebars tem que vir depois do JQuery -->
    <script src="/res/js/handlebars-v4.0.10.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="/res/js/bootstrap.bundle.min.js"></script>
    <script src="/res/js/bootstrap.min.js"></script>
    


    
    <!-- jQuery sticky menu -->
    <script src="/res/js/owl.carousel.min.js"></script>
    <script src="/res/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    
    <!-- Main Script -->
    <script src="/res/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="/res/js/bxslider.min.js"></script>
	<script type="text/javascript" src="/res/js/script.slider.js"></script>


   




  </body>
</html>