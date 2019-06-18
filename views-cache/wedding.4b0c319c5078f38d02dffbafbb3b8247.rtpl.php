<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-3 text-center">

                    <div>

                        <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                        <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-free");?>

                        <?php }else{ ?>

                            <?php require $this->checkTemplate("dashboard-menu");?>

                        <?php } ?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

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
                    <form method="post" action="/dashboard/meu-casamento" enctype="multipart/form-data">


                        <div class="input-rows input-date">
                        <label for="dtwedding">Data do Casamento</label>
                        <input type="datetime-local" class="form-control" id="dtwedding" name="dtwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["dtwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="input-rows">
                        <label for="deslocation">Local do Casamento</label>
                        <input type="text" class="form-control" id="deslocation" name="deslocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["deslocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="input-rows">
                            <div>
                            <label for="desdescription">História do Casal</label>
                            <!--<input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">-->
                            </div>
                            <textarea rows="10" cols="90" maxlength="500" id="desdescription" name="desdescription"><?php echo htmlspecialchars( $wedding["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
                        </div>
                        

                        <div>
                        <input type="hidden" class="form-control" id="idwedding" name="idwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["idwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="input-photo input-rows">
                            
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                              </div>
                              <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Selecionar imagem</label>

                              </div>
                            </div>
                            <div class="input-rows">
                                <img class="img-responsive" id="image-preview" src="/uploads/weddings/<?php echo htmlspecialchars( $wedding["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                            </div>

                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

