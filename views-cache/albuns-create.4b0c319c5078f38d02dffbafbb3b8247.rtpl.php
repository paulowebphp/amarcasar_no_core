<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-3 text-center">

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
                    <form method="post" action="/dashboard/album/adicionar" enctype="multipart/form-data">


                        <div>
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui">
                        </div>


                        <div>
                        <label for="desalbum">Titulo</label>
                        <input type="text" class="form-control" id="desalbum" name="desalbum" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="descategory">Categoria</label>
                        <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div>
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui">
                        </div>
                        
                
                        <div>
                        <label for="inalbumstatus">Status</label>
                        <input type="text" class="form-control" id="inalbumstatus" name="inalbumstatus" placeholder="Digite o nome aqui">
                        </div>


                        <div>
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="" alt="">
                            </div>
                        </div>
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/album" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        

                        
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

