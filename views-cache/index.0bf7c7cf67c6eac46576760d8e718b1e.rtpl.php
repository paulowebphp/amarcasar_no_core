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





    
<section id="template">
    
    <div class="domain">
        
        <div class="container">
        

            <div class="row">
                

                <div class="col-md-12 ">




                        <div id="frame">       

                            <img src="/uploads/banners/<?php echo htmlspecialchars( $customstyle["desbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                        </div><!--couple-->




                </div><!--col-md-12-->

            </div><!--row-->





            <div class="row">
                

                <div class="col-md-12 text-center">
                    



                    <div class="banner-title-wrapper">

                        
                        <div class="banner-title-box">
                            
                            <h1><?php echo htmlspecialchars( $user["desnick"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1> <h1>&</h1> <h1><?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                        </div><!--banner-title-box-->
                        

                        <div class="banner-date-box">

                            <h2><?php echo getDateDiff($wedding["dtwedding"]); ?></h2>
                            

                        </div><!--banner-date-box-->


                    </div><!--"banner-title-wrapper-->


                </div><!--col-->


            </div><!--row-->



        </div><!--container-->

    </div>
    

</section>












<section id="wedding">
    
    <div class="domain">


        <div class="container">


            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="section-title">
                        

                        <h3>
                            Casamento
                        </h3>
                        <hr>


                    </div>


                </div>

            </div>
        


            <div class="row section-centralizer">
                

                <div class="col-md-5 ">



                    <div>
                        
                        <img src="/uploads/weddings/<?php echo htmlspecialchars( $wedding["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                    </div>


                </div><!--col-md-6-->


                

                <div class="col-md-7">
                    
                    

                    <div class="row">
                        
                        <div class="section-box">
                            
                            


                            <div class="row section-2-column section-row">
                                


                                <div class="col-md-6">
                                    <div>
                                        <h6>                           
                                            <?php echo formatDate($wedding["dtwedding"]); ?>
                                        </h6>
                                    </div>
                                    <div class="section-box-detail">
                                        Data
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                    <div>
                                        <h6>
                                            <?php echo formatTime($wedding["tmwedding"]); ?>
                                        </h6>
                                    </div>
                                    <div class="section-box-detail">
                                        Horário
                                    </div>
                                </div>


                            </div><!--row-->






                            <div class="row">
                                


                                <div class="col-md-12 section-row">                           
                                    <div class="description-area">
                                        <?php echo htmlspecialchars( $wedding["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                    </div>
                                </div>





                                <div class="col-md-12 section-row">                           
                                    Traje: <?php echo htmlspecialchars( $wedding["descostume"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </div>




                                <div class="col-md-12 section-row">
                                    Local: <?php echo htmlspecialchars( $wedding["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $wedding["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php if( $wedding["desdistrict"] != '' ){ ?> - <?php echo htmlspecialchars( $wedding["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?> - <?php echo htmlspecialchars( $wedding["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $wedding["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php if( $wedding["descountry"] != '' ){ ?> - <?php echo htmlspecialchars( $wedding["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>
                                </div>



                                <div class="col-md-12  section-row">
                                    Ponto de Referência: <?php echo htmlspecialchars( $wedding["desdirections"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </div>

                
                            </div><!--row-->



                        </div>


                    </div>






                </div><!--col-->


            </div><!--row-->







        </div><!--container-->
        

    </div>
    

</section>


























<section id="party">
    
    <div class="domain">
        
        <div class="container">

            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="section-title">
                        

                        <h3>
                            Festa
                        </h3>
                        <hr>


                    </div>


                </div>

            </div>
        



            <div class="row section-centralizer">
                

                           

                <div class="col-md-7">
                    
                    





                    <div class="row">
                        
                        <div class="section-box">
                            
                            

                            <div class="row section-2-column section-row">
                                


                                <div class="col-md-6">
                                    <div>
                                        <h6>                           
                                            <?php echo formatDate($party["dtparty"]); ?>
                                        </h6>
                                    </div>
                                    <div class="section-box-detail">
                                        Data
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    
                                    <div>
                                        <h6>
                                            <?php echo formatTime($party["tmparty"]); ?>
                                        </h6>
                                    </div>
                                    <div class="section-box-detail">
                                        Horário
                                    </div>
                                </div>


                            </div><!--row-->







                            <div class="row">
                                


                                <div class="col-md-12 section-row">                           
                                    <div class="description-area">
                                        <?php echo htmlspecialchars( $party["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                    </div>
                                </div>




                                <div class="col-md-12 section-row">                           
                                    Traje: <?php echo htmlspecialchars( $party["descostume"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </div>




                                <div class="col-md-12 section-row">
                                    Local: <?php echo htmlspecialchars( $party["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $party["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php if( $party["desdistrict"] != '' ){ ?> - <?php echo htmlspecialchars( $party["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?> - <?php echo htmlspecialchars( $party["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $party["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php if( $party["descountry"] != '' ){ ?> - <?php echo htmlspecialchars( $party["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>
                                </div>



                                <div class="col-md-12 section-row">
                                    Ponto de Referência: <?php echo htmlspecialchars( $party["desdirections"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </div>

                
                            </div><!--row-->



                        </div>


                    </div>




                </div><!--col-->



                <div class="col-md-5 ">



                    <div>
                        
                        <img src="/uploads/parties/<?php echo htmlspecialchars( $party["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                    </div>


                </div><!--col-md-6-->



            </div><!--row-->



        </div><!--container-->
    

    </div>

</section>



















<section id="bestfriend">
    
    <div class="domain">
        
        <div class="container">


            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="section-title">
                        

                        <h3>
                            Padrinhos e Madrinhas
                        </h3>
                        <hr>


                    </div>


                </div>

            </div>

        

            <div class="row">
                
                <div class="col-md-12">
                         

                    <div class="card-wrapper">




                        <?php $counter1=-1;  if( isset($bestfriend) && ( is_array($bestfriend) || $bestfriend instanceof Traversable ) && sizeof($bestfriend) ) foreach( $bestfriend as $key1 => $value1 ){ $counter1++; ?>
                            <div class="card">
                                



                                
                                    
                                <div class="card-photo">
                                    
                                    <img src="/uploads/bestfriends/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                </div>







                                <div class="card-detail">
                                    



                                    <div class="card-title">


                                        <h5><?php echo htmlspecialchars( $value1["desbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>

                                        <hr>


                                    </div>






                                    <div class="card-description">

                                        <span><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>

                                    </div>


                                    

                                    <div class="card-price-wrapper">

                                        <div class="card-currency"> 

                                            <span class="card-coin"></span> 


                                        </div><!--currency-->


                                        
                                        <span class="card-price"></span>

                                        <span></span>


                                    </div>

                                    

                                </div><!--card-detail-->
                                    

                            </div><!--card-->
                        <?php } ?>

         

                    </div>

                   
                </div><!--col-->
            
            </div><!--row-->


        </div><!--container-->

    </div>


</section>


