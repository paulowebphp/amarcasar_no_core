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

               <form method="post" action="/dashboard/rsvp/<?php echo htmlspecialchars( $rsvp["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row">

                                <label for="desguest">Convidado</label>
                                <input type="text" class="form-control" id="desguest" name="desguest" value="<?php echo htmlspecialchars( $rsvp["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                        


                            <div class="dash-input-row input-inposition">


                                <label for="inmaxadults">Quantidade Máxima de Adultos</label>
                                <input type="text" class="form-control" id="inmaxadults" name="inmaxadults" value="<?php echo htmlspecialchars( $rsvp["inmaxadults"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->









                            <div class="dash-input-row input-inposition">


                                <label for="inmaxchildren">Quantidade Máxima de Crianças</label>
                                <input type="text" class="form-control" id="inmaxchildren" name="inmaxchildren" value="<?php echo htmlspecialchars( $rsvp["inmaxchildren"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->





                            <div class="dash-input-row">


                                <input type="hidden" class="form-control" id="idrsvp" name="idrsvp" value="<?php echo htmlspecialchars( $rsvp["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->


                                

                        </div><!--col-md-6-->





                        <div class="col-md-6">
                            
                            
                            
                            &nbsp;

                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-6">

                            <div class="dash-input-row input-footer">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                                <a href="/dashboard/rsvp" class="btn btn-danger">Cancelar</a>

                            </div><!--dash-input-row-->
                            
                        </div><!--col-->



                        <div class="col-md-6">

                            &nbsp;
                            
                        </div><!--col-->



                    </div><!--row-->



                </form>



            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

