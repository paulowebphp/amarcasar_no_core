<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">

body{
    font-size: 1rem;
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: <?php if( $customstyle["desfontfamilytext"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>;
}

a:hover{
    color: <?php if( $customstyle["descolorlinkhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorlinkhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}

header {
    height: 130px;
    z-index: 2;
    position: relative;
    box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
}

header #domain-dropdown-menu a:hover{
    color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
header .shopping-item a:hover {
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
header .shopping-item:hover {
    background: none repeat scroll 0 0 <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    border-color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
}
header .container-fluid {
    width: 100%;
    padding: 2%  5%;
    position: relative;
}
header #menu-mobile{
  display: none;
}


/*header #header-mobile.open-menu #menu-mobile-mask
{
  display: none;
}*/
header #menu-condensed
{
  display: none;
}

#template {
    background: url("/res/images/template/banner/banner1.jpg") no-repeat center;
    background-size: cover;
    width: 100%;
    position: relative;
    /*top: -100px;  */
}
#frame{
    background: url("/res/images/frame/frame1.png") no-repeat center;
    background-size: contain;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    margin: 0 auto;
    height: 400px;
}
.section-title{
    margin-bottom: 10%;
}
section h1{
    color: <?php if( $customstyle["descolorh1"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh1"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'    <?php } ?>';
}

section h2{
    color: <?php if( $customstyle["descolorh2"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh2"] != '' ){ ?>'<?php echo htmlspecialchars( $customstyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'<?php }else{ ?>'Norican'<?php } ?>';
}

section h3{
    color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh3"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';
}
.section-title hr{
    width: 10%;
    height: 10px;
    background-color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
.light-button button{
  background-color: #fff;
  border: none;
  color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>
}
section h4{
    color: <?php if( $customstyle["descolorh4"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh4"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}
section h5{
    color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh5"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';


}
section h6{
    color: <?php if( $customstyle["descolorh6"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh6"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}

.card-title hr{
    width: 20%;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    background-color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>; 
}



footer{
    padding: 5% 15% 5% 15%;
    font-size: 24px;
    background-color: <?php if( $customstyle["desbgcolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#FFFFFF<?php } ?>;
}
footer .container{ 
    width: 100%     
}
footer a{
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item{
    margin: 2% 0;
    background: none;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer a:hover{
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item:hover{
    background: none;
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
</style>




<section id="message">
    
    <div class="domain">


        <div class="container">




            <div class="row">

                <div class="col-md-12 text-center">
                    
                    <div class="template-button pull-right">
                        <a href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/mural-mensagens/enviar" class="btn btn-default">Enviar Mensagem</a>
                    </div>

                </div>

            </div>




            <div class="row">

                <div class="col-md-12 text-center">
                    
                    <div class="section-title">
                        

                        <h3>
                            Mural de Mensagens
                        </h3>
                        <hr>


                    </div>


                    <?php if( $error != '' ){ ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                        </div>
                    <?php } ?>

                </div>

            </div>



            <?php if( $numMessages === 0 ){ ?>
                <h1>Ainda não há mensagens no Mural</h1>
            <?php }else{ ?>

                <?php $counter1=-1;  if( isset($message) && ( is_array($message) || $message instanceof Traversable ) && sizeof($message) ) foreach( $message as $key1 => $value1 ){ $counter1++; ?>

                    <?php if( $value1["instatus"] == 1 ){ ?>
            


                        <div class="row">
                            

                            <div class="col-md-12 section-centralizer">

                                
                                
                                <div class="message-box section-box light-box text-center">

                        
     
                        

                                    <div class="input-row message-description">

                                        <span><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                        
                                    </div><!--dash-input-row-->


                                    <div class="row">
                                        
                                        <div class="col-md-6">

                                            <div>
                                                <h5><?php echo htmlspecialchars( $value1["desmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                                            </div>

                                            <div class="section-box-detail">
                                                Enviador por
                                            </div>
                                            
                                        </div><!--dash-col-md-6-->



                                        <div class="col-md-6">

                                            <div>
                                                <h5><?php echo formatDate($value1["dtregister"]); ?></h5>
                                            </div>

                                            <div class="section-box-detail">
                                                Data
                                            </div>
                                            
                                        </div><!--dash-col-md-6-->

                                    </div>
                                


                                </div><!--light-box-->


                            </div><!--col-->


                        </div><!--row-->


                    <?php } ?>

                <?php } ?>

            <?php } ?>     




        </div><!--container-->
        

    </div>
    

</section>







