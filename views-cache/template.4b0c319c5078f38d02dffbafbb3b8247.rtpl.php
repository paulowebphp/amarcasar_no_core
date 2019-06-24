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







                <form id="dash-form" method="post" action="/dashboard/meu-template">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">






                    
                            <!--<div class="dash-input-row">

                                <label for="idtemplate">Template 1</label>
                                <input type="text" class="form-control" id="idtemplate" name="idtemplate" value="<?php echo htmlspecialchars( $customstyle["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div>--><!--dash-input-row-->


                            


                            <div class="dash-input-row">
                                
                                <label for="idtemplate1">Template 1</label>
                                <input type="radio" class="form-control" id="idtemplate1" name="idtemplate" value="1" <?php if( $customstyle["idtemplate"] == '1' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->


                            <div class="dash-input-row">
                                
                                <label for="idtemplate2">Template 2</label>
                                <input type="radio" class="form-control" id="idtemplate2" name="idtemplate" value="2" <?php if( $customstyle["idtemplate"] == '2' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->


                            <div class="dash-input-row">
                                
                                <label for="idtemplate3">Template 3</label>
                                <input type="radio" class="form-control" id="idtemplate3" name="idtemplate" value="3" <?php if( $customstyle["idtemplate"] == '3' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->



                            <div class="dash-input-row">
                                
                                <label for="idtemplate4">Template 4</label>
                                <input type="radio" class="form-control" id="idtemplate4" name="idtemplate" value="4" <?php if( $customstyle["idtemplate"] == '4' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">
                                
                                <label for="idtemplate5">Template 5</label>
                                <input type="radio" class="form-control" id="idtemplate5" name="idtemplate" value="5" <?php if( $customstyle["idtemplate"] == '5' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">
                                
                                <label for="idtemplate6">Template 6</label>
                                <input type="radio" class="form-control" id="idtemplate6" name="idtemplate" value="6" <?php if( $customstyle["idtemplate"] == '6' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->




                            <div class="dash-input-row">
                                
                                <label for="idtemplate7">Template 7</label>
                                <input type="radio" class="form-control" id="idtemplate7" name="idtemplate" value="7" <?php if( $customstyle["idtemplate"] == '7' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->




                            <div class="dash-input-row">
                                
                                <label for="idtemplate8">Template 8</label>
                                <input type="radio" class="form-control" id="idtemplate8" name="idtemplate" value="8" <?php if( $customstyle["idtemplate"] == '8' ){ ?>checked="checked"<?php } ?>>

                            </div><!--dash-input-row-->




                            <div class="dash-input-row">

                                <input type="hidden" class="form-control" id="idcustomstyle" name="idcustomstyle" value="<?php echo htmlspecialchars( $customstyle["idcustomstyle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

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
