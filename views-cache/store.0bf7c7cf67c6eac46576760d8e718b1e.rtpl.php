<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="domain domain-store">

    <div class="container-fluid">            
            

            
        <div class="row">
            
            <div class="col-md-12">
                     

                <?php if( $success != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?> 

               
            </div><!--col-->
        
        </div><!--row-->
    





        <div class="row">
            
            <div class="col-md-12">
                     

                <div class="card-wrapper">




                    <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                        <div class="card">
                            



                            
                                
                            <div class="card-photo">
                                
                                <img src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div>







                            <div class="card-detail">
                                



                                <div class="card-title">


                                    <span><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>

                                    <hr>


                                </div>






                                <div class="card-category">

                                    <span><?php echo getCategoryName($value1["incategory"]); ?></span>

                                </div>


                                

                                <div class="card-price-wrapper">

                                    <div class="card-currency"> 

                                        <span class="card-coin">R$</span> 


                                    </div><!--currency-->


                                    
                                    <span class="card-price"><?php echo getValuePartial(getInterest($value1["vlprice"],'1','1',$productconfig["incharge"]),1); ?></span>

                                    <span>,<?php echo getValuePartial(getInterest($value1["vlprice"],'1','1',$productconfig["incharge"]),0); ?></span>




                                </div>

                                

                            </div><!--card-detail-->
                                




                            <div class="card-buttons-wrapper">


                                <a class="btn card-add-cart" href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/adicionar" role="button">
                                
                                    
                                    <button class="card-buttons-cart">Comprar</button>


                                </a>


                                <a class="btn card-add-continue" href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/continuar" role="button">
                                    
                                    <button>
                                        Adicionar e Continuar Comprando

                                    </button>

                                </a>

                                

                            </div><!--card-buttons-wrappe-->



                           

                            


                        </div><!--card-->
                    <?php } ?>







                    


                </div>

               
            </div><!--col-->
        
        </div><!--row-->









        <div class="row">
            
            <div class="col-md-12">
                     

                <div class="footer-wrapper">
                    

                    <div>
                        <form action="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/loja">
                            <div class="input-group input-group-sm pull-right" style="width: 150px;">
                                <input type="text" name="search" class="form-control pull-right" placeholder="Buscar..." value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <ul class="pagination pagination-sm no-margin pull-left">
                            <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                            <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>



                </div>

               
            </div><!--col-->
        
        </div><!--row-->







    </div><!--container-->

</section>



