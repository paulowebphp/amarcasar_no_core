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

                <form id="dash-form" method="post" action="/dashboard/rsvp/configurar">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">





                            <div class="dash-input-row">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="inclosed">Encerrar Confirmação de Presença</label>

                                  </div><!--input-group-prepend-->

                                  <select id="inclosed" name="inclosed" class="custom-select">

                                    <option value="1" <?php if( $rsvpconfig["inclosed"] == '1' ){ ?>selected<?php } ?>>Sim</option>
                                    <option value="0" <?php if( $rsvpconfig["inclosed"] == '0' ){ ?>selected<?php } ?>>Não</option>

                                  </select>

                                
                                </div><!--mb-3-->

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="inmaxadultsconfig">Quantidade Máxima de Adults para Todos os Convidados</label>
                                <input type="text" class="form-control" id="inmaxadultsconfig" name="inmaxadultsconfig" value="<?php echo htmlspecialchars( $rsvpconfig["inmaxadultsconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->








                            <div class="dash-input-row">

                                <label for="inmaxchildrenconfig">Quantidade Máxima de Crianças para Todos os Convidados</label>
                                <input type="text" class="form-control" id="inmaxchildrenconfig" name="inmaxchildrenconfig" value="<?php echo htmlspecialchars( $rsvpconfig["inmaxchildrenconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <input type="hidden" class="form-control" id="idrsvpconfig" name="idrsvpconfig" value="<?php echo htmlspecialchars( $rsvpconfig["idrsvpconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

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








