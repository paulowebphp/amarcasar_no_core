<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width:device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->


    <title>Amar Casar</title>
    <link rel="icon" type="image/png" href="public/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/res/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/res/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/res/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/res/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/res/css/template/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="/res/css/template/stylesheet-mobile.css">


</head>



<body>
    

    <header>

        <div id="header-device" class="container-fluid">
            

            <div class="row">
                

                <div class="col-md-3">
                    


                    <div id="logo">

                        <img id="logotipo" src="/res/images/logo/logo-main.png" width="203" height="65" alt="Logotipo">

                    </div>
         

                </div><!--col-md-->






                <div class="col-md-9">


                    

                                       
                        
                    <div class="pull-right" id="menu">


                        <div class="shopping-item">
                            <a href="/carrrinho">Carrinho - <span class="cart-amunt">R$ <?php echo getCartVlSubTotal(); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo getCartNrQtd(); ?></span></a>
                        </div>


                        
                        <div id="domain-dropdown" class="dropdown">
                          <button id="domain-dropdown-button" class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Páginas
                          </button>
                          <div id="domain-dropdown-menu" class="dropdown-menu" aria-labelledby="domain-dropdown-button">

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
                          </div>
                        </div>


                    </div>



                </div><!--col-md-->


            </div><!--row-->


        </div>



    <div id="header-mobile" class="container-fluid">

        <div class="row">



            <div class="col-md-12">
                



                <div id="menu-condensed">
                        
                    <button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
                    
                </div>




                

                <div id="menu-mobile">
                    
                    <ul>
                        <li><a href="/<?php echo getDesdomain(); ?>" class="list-group-item list-group-item-action">Home</a></li>

                        <?php if( setTemplateMenu('wedding') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/cerimonia" class="list-group-item list-group-item-action">Cerimônia</a></li><?php } ?>

                        <?php if( setTemplateMenu('party') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/festa" class="list-group-item list-group-item-action">Festa</a></li><?php } ?>



                        <?php if( setTemplateMenu('bestfriend') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/padrinhos-madrinhas" class="list-group-item list-group-item-action">Padrinhos e Madrinhas</a></li><?php } ?>

                        


                        <?php if( setTemplateMenu('rsvp') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/rsvp" class="list-group-item list-group-item-action">RSVP</a></li><?php } ?>

                        
                    

                        <?php if( setTemplateMenu('message') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/mural-mensagens" class="list-group-item list-group-item-action">Mensagens</a></li><?php } ?>

                        

                        <?php if( setTemplateMenu('store') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/loja" class="list-group-item list-group-item-action">Loja</a></li><?php } ?>

                        

                        <?php if( setTemplateMenu('event') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/eventos" class="list-group-item list-group-item-action">Eventos</a></li><?php } ?>
                        
                        

                        <?php if( setTemplateMenu('album') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/album" class="list-group-item list-group-item-action">Album</a></li><?php } ?>
                        
                        

                        <?php if( setTemplateMenu('video') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/videos" class="list-group-item list-group-item-action">Vídeos</a></li>  <?php } ?>

                         

                        <?php if( setTemplateMenu('stakeholder') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/fornecedores" class="list-group-item list-group-item-action">Fornecedores</a></li> <?php } ?>
                        
                          

                        <?php if( setTemplateMenu('outerlist') ){ ?><li><a href="/<?php echo getDesdomain(); ?>/listas-de-fora" class="list-group-item list-group-item-action">Listas de Fora</a></li><?php } ?>

                    </ul>

                    <div class="bar-close">
                        <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
                    </div>

                </div>


                <div id="menu-mobile-mask"></div>



            </div><!--row-->



        </div><!--container-->

    </div><!--header-mobile-->
        
             
</header>






