<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width:device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->


    <title>Amar Casar</title>
    <link rel="icon" type="image/png" href="public/images/icons/favicon.ico"/>
    <link rel="stylesheet" media="screen" type="text/css" href="/res/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="/res/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/res/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/res/css/owl.carousel.css">
    <link rel="stylesheet" href="/res/css/dashboard/stylesheet.css">
    <link rel="stylesheet" href="/res/css/dashboard/stylesheet-mobile.css">


</head>



<body>
    

    <header>

        <div id="header-device" class="container-fluid">
            

            <div class="row">
                

                <div class="col-md-3">
                    


                    <div id="logo">

                        <img id="logotipo" src="/res/images/logo/logo-white.png" width="233" height="50" alt="Logotipo">

                    </div>
         

                </div><!--col-md-->






                <div class="col-md-9">
                                       
                        
                    <div id="menu-header">
                        <ul>
                            <?php if( checkLogin(false) ){ ?>

                                <?php if( checkDesdomain() ){ ?><li><a target="_blank" href="/<?php echo view(); ?>"><i class="fa fa-eye"></i>Ver Site</a></li><?php } ?>


                                <li><a href="/dashboard"><i class="fa fa-user"></i> <?php echo getUserName(); ?></a></li>

                                <li><a href="/logout"><i class="fa fa-close"></i> Sair</a></li>

                            <?php }else{ ?>

                                <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>

                            <?php } ?>
                        </ul>
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
                        <?php if( checkLogin(false) ){ ?>

                            <li><a target="_blank" href="/<?php echo view(); ?>"><i class="fa fa-eye"></i>Ver Site</a></li>


                            <li><a href="/dashboard"><i class="fa fa-user"></i> <?php echo getUserName(); ?></a></li>

                            <li><a href="/logout"><i class="fa fa-close"></i> Sair</a></li>

                        <?php }else{ ?>

                            <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>

                        <?php } ?>
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
