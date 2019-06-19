<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

    <div class="container-fluid">            
            

            
        <div class="row">

                


            <div class="col-md-3 dash-menu">


                <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-free");?>

                <?php }else{ ?>

                    <?php require $this->checkTemplate("dashboard-menu");?>

                <?php } ?>
                    

            </div><!--col-->




            <div class="col-md-9 dash-panel">


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

                <form id="dash-form" method="post" action="/dashboard/pagina-inicial">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row">

                                <label for="inparty">Minha Festa</label>
                                <input type="text" class="form-control" id="inparty" name="inparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="inbestfriend">Padrinhos e Madrinhas</label>
                                <input type="text" class="form-control" id="inbestfriend" name="inbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="inalbum">Padrinhos e Madrinhas</label>
                                <input type="text" class="form-control" id="inalbum" name="inalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="invideo">Confirmação de Presença</label>
                                <input type="text" class="form-control" id="invideo" name="invideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["invideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <input type="hidden" class="form-control" id="idinitialpage" name="idinitialpage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["idinitialpage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                                

                        </div><!--col-md-6-->





                        <div class="col-md-6">
                            
                            
                            
                            &nbsp;

                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-12">

                            <div class="dash-input-row">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </div><!--dash-input-row-->
                            
                        </div><!--col-->

                    </div><!--row-->



                </form>



            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

