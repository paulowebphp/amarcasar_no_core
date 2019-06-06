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
                    <form method="post" action="/dashboard/meu-template">


                        <div class="form-group">
                        <label for="idtemplate">Template do Casal</label>
                        <input type="text" class="form-control" id="idtemplate" name="idtemplate" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idcustomstyle" name="idcustomstyle" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["idcustomstyle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

