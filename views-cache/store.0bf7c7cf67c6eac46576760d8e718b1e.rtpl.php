<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="domain">

    <div class="container">            
            

            
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
                            



                            <a href="">
                                
                                <div class="card-photo">
                                    
                                    <img src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                </div>


                            </a>




                            <a href="">

                                <div class="card-details">
                                    
                                    <div>
                                        <p><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                    </div>

                                    <div>
                                        <p><?php echo htmlspecialchars( $value1["incategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                    </div>

                                    <div>
                                        <p><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                    </div>

                                </div>
                                

                            </a>






                            <a href="">
                                

                            </a>


                        </div><!--card-->
                    <?php } ?>
























                    


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Comprado</th>
                                <th>Foto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                                <th scope="row"></th>
                                <td><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["incategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["inbought"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td style="width:150px;"><img src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></td>
                                <td style="width:222px;">
                                    <a class="btn btn-default" href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/continuar" role="button">Adicionar ao Carrinho</a>
                                    <a class="btn btn-warning" href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/carrinho/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/adicionar" role="button">Comprar</a>
                                </td>
                            </tr>
                            <?php }else{ ?>
                            <div class="alert alert-info">
                                Nenhum Produto foi encontrado.
                            </div>
                            <?php } ?>
                        </tbody>
                    </table>
                    


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



