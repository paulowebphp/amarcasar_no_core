<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

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


                        <div>
                        <label for="dtwedding">Data do Casamento</label>
                        <input type="text" class="form-control" id="dtwedding" name="dtwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["dtwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="desdescription">História do Casal</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        
                        <div>
                        <label for="deslocation">Local do Casamento</label>
                        <input type="text" class="form-control" id="deslocation" name="deslocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["deslocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <input type="hidden" class="form-control" id="idwedding" name="idwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["idwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="/uploads/weddings/<?php echo htmlspecialchars( $wedding["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                            </div>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

