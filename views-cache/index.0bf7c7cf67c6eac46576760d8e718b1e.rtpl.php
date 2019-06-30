<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">
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
footer{
    background-color: <?php if( $customstyle["desbgcolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>
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
                            
                            <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1> <h1>&</h1> <h1><?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                        </div><!--banner-title-box-->
                        

                        <div class="banner-date-box">

                            <?php if( $menu["inrsvp"] == '1' ){ ?>
                                <a href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/rsvp"><button type="button" class="btn template-button"><h2><?php echo getDateDiff($wedding["dtwedding"]); ?></h2></button></a>
                            <?php }else{ ?>
                                <h2><?php echo getDateDiff($wedding["dtwedding"]); ?></h2>
                            <?php } ?>
                            

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
                            
                            <div class="row">
                        


                        <div class="col-md-12 text-center">

                            <div class="section-title">              
                                <h4>Cerimônia</h4>
                            </div>

                        </div>

        
                    </div><!--row-->




                    <div class="row section-2-column section-row">
                        


                        <div class="col-md-6">
                            <div>
                                <h5>                           
                                    <?php echo formatDate($wedding["dtwedding"]); ?>
                                </h5>
                            </div>
                            <div class="section-box-detail">
                                Data
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <div>
                                <h5>
                                    <?php echo formatTime($wedding["tmwedding"]); ?>
                                </h5>
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
                            
                            <div class="row">
                        


                        <div class="col-md-12 text-center">

                            <div class="section-title">              
                                <h4>Festa</h4>
                            </div>

                        </div>

        
                    </div><!--row-->




                    <div class="row section-2-column section-row">
                        


                        <div class="col-md-6">
                            <div>
                                <h5>                           
                                    <?php echo formatDate($party["dtparty"]); ?>
                                </h5>
                            </div>
                            <div class="section-box-detail">
                                Data
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <div>
                                <h5>
                                    <?php echo formatTime($party["tmparty"]); ?>
                                </h5>
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



                        <div class="col-md-12  section-row">
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



















<section id="store">
    
    <div class="domain">
        
        <div class="container">


            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="section-title">
                        

                        <h3>
                            Loja
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


                                        <span><?php echo htmlspecialchars( $value1["desbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>

                                        <hr>


                                    </div>






                                    <div class="card-category">

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


