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

               <form method="post" action="/dashboard/listas-de-fora/<?php echo htmlspecialchars( $outerlist["idouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">





                            <div class="dash-input-row input-date">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="instatus">Visível</label>

                                  </div><!--input-group-prepend-->

                                  <select id="instatus" name="instatus" class="custom-select">

                                    <option value="0" <?php if( $outerlist["instatus"] == '0' ){ ?>selected<?php } ?>>Não</option>
                                    <option value="1" <?php if( $outerlist["instatus"] == '1' ){ ?>selected<?php } ?>>Sim</option>

                                  </select>

                                
                                </div><!--mb-3-->

                            </div><!--dash-input-row-->








                            <div class="dash-input-row input-inposition">

                                <label for="inposition">Posição</label>
                                <input type="text" class="form-control" id="inposition" name="inposition" value="<?php echo htmlspecialchars( $outerlist["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                        


                            <div class="dash-input-row input-date">


                                <label for="desouterlist">Título</label>
                                <input type="text" class="form-control" id="desouterlist" name="desouterlist" value="<?php echo htmlspecialchars( $outerlist["desouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->









                            <div class="dash-input-row">


                                <label for="nrphone">Telefone</label>
                                <input type="text" class="form-control" id="nrphone" name="nrphone" value="<?php echo htmlspecialchars( $outerlist["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->








                            <div class="dash-input-row">


                                <label for="dessite">Site</label>
                                <input type="text" class="form-control" id="dessite" name="dessite" value="<?php echo htmlspecialchars( $outerlist["dessite"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->


   



                            



                           

                            <div class="dash-input-row">


                                <label for="deslocation">Endereço</label>
                                <input type="text" class="form-control" id="deslocation" name="deslocation" value="<?php echo htmlspecialchars( $outerlist["deslocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->










                            <div class="dash-input-row">

                                <div>
                                    <label for="desdescription">Descrição</label>
                                </div>
                                
                                <textarea rows="10" cols="90" maxlength="500" id="desdescription" name="desdescription"><?php echo htmlspecialchars( $outerlist["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>

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

                                <a href="/dashboard/listas-de-fora" class="btn btn-danger">Cancelar</a>

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

