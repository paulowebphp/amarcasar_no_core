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







                <form method="post" action="/dashboard/dominio">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">






                    
                            <div class="dash-input-row">

                                <label for="desdomain">Domínio</label>
                                <input type="text" class="form-control" id="desdomain" name="desdomain" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

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
