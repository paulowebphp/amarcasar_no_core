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
                    <form method="post" action="/dashboard/meu-amor" enctype="multipart/form-data">


                        <div>
                        <label for="desconsort">Nome</label>
                        <input type="text" class="form-control" id="desconsort" name="desconsort" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="desemail"><abbr title="Não obrigatório" class="required">E-mail</abbr></label>
                        <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $consort["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <input type="hidden" class="form-control" id="idconsort" name="idconsort" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $consort["idconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="/uploads/images/<?php echo htmlspecialchars( $consort["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                            </div>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

