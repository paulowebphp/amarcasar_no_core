<?php if(!class_exists('Rain\Tpl')){exit;}?><section>
		
    <div id="row">
            
        <div class="container">
            
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?> & <?php echo htmlspecialchars( $user["desconsortname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </h1>
                    <h2><?php echo htmlspecialchars( $user["dtwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 text-center">
                    <h1>Local do Casamento
                    </h1>
                    <h2><?php echo htmlspecialchars( $user["desweddinglocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                    <p><?php echo htmlspecialchars( $user["desweddingdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                </div>

                <div class="col-md-6 text-center">
                    <h1>Data do Casamento
                    </h1>
                    <h2><?php echo htmlspecialchars( $user["dtwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                    <p><?php echo getDateDiff($user["dtwedding"]); ?></p>
                </div>

            </div>



                    
                    <?php if(  $user["desphoto_1"] !== '0.jpg' ){ ?>
                    <div class="row">

                        <div class="col-md-6 text-center">

                            <img src="/uploads/images/<?php echo htmlspecialchars( $user["desphoto_1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                        </div>

                        <div class="col-md-6 text-center">
                            <h2 style="color:green"><?php echo htmlspecialchars( $user["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                            
                        </div>
                        
                    </div>
                    <?php }else{ ?>

                    <div class="col-md-12 text-center">
                            <h2><?php echo htmlspecialchars( $user["desconsortname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                        
                    </div>
                    <?php } ?>

                


            </div>

            
        </div>

    </div>

    
   