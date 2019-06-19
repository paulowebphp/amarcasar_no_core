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

                <form id="dash-form" method="post" action="/dashboard/menu">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row">

                                <label for="inwedding">Meu Casamento</label>
                                <input type="text" class="form-control" id="inwedding" name="inwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="inparty">Minha Festa</label>
                                <input type="text" class="form-control" id="inparty" name="inparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="inbestfriend">Padrinhos e Madrinhas</label>
                                <input type="text" class="form-control" id="inbestfriend" name="inbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->




                            <div class="dash-input-row">

                                <label for="inrsvp">Confirmação de Presença</label>
                                <input type="text" class="form-control" id="inrsvp" name="inrsvp" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="inmessage">Mural de Mensagens</label>
                                <input type="text" class="form-control" id="inmessage" name="inmessage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="instore">Loja</label>
                                <input type="text" class="form-control" id="instore" name="instore" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["instore"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="inevent">Eventos</label>
                                <input type="text" class="form-control" id="inevent" name="inevent" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="inalbum">Album</label>
                                <input type="text" class="form-control" id="inalbum" name="inalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="invideo">Vídeos</label>
                                <input type="text" class="form-control" id="invideo" name="invideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["invideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="instakeholder">Fornecedores</label>
                                <input type="text" class="form-control" id="instakeholder" name="instakeholder" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["instakeholder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="inouterlist">Outras Listas</label>
                                <input type="text" class="form-control" id="inouterlist" name="inouterlist" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <input type="hidden" class="form-control" id="idmenu" name="idmenu" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["idmenu"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div>




                                

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

