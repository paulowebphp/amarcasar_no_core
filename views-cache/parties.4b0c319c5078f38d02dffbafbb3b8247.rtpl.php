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
                    <form method="post" action="/dashboard/festa-de-casamento" enctype="multipart/form-data">

                        <div>
                        <label for="inpartystatus">Data</label>
                        <input type="text" class="form-control" id="inpartystatus" name="inpartystatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $party["inpartystatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="dtparty">Data</label>
                        <input type="text" class="form-control" id="dtparty" name="dtparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $party["dtparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div>
                        <label for="desdescription">
                        Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $party["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="deslocation">Local</label>
                        <input type="text" class="form-control" id="deslocation" name="deslocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $party["deslocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <input type="hidden" class="form-control" id="idparty" name="idparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $party["idparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="/uploads/images/<?php echo htmlspecialchars( $party["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                            </div>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

