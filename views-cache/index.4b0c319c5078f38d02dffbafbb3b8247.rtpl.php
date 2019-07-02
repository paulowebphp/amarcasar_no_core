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

                    <div class="row resume-row">
                        
                        <div class="col-md-6 resume-wrapper">

                            <div class="resume-box">

                                

                                <div class="resume-content">
                                    <h2><?php echo htmlspecialchars( $rsvp_confirmed, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                                    <h6>Presenças Confirmadas</h6>
                                </div>

                            </div>

                        </div><!--col-lg-3-->




                        <div class="col-md-6 resume-wrapper">

                            <div class="resume-box">

                                

                                <div class="resume-content">
                                    <h2><?php echo htmlspecialchars( $message, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                                    <h6>Mensagens Recebidas</h6>
                                </div>



                            </div>

                        </div><!--col-lg-3-->


                    </div><!--row-->



                    <div class="row resume-row">
                        

                        <div class="col-md-6 resume-wrapper">

                            <div class="resume-box">

                                <div class="resume-content">
                                    <h2>R$ <?php echo formatPrice($balances["current"]); ?></h2>
                                    <h6>Saldo Corrente</h6>
                                </div>

                            </div>

                        </div><!--col-lg-3-->




                        <div class="col-md-6 resume-wrapper">

                            <div class="resume-box">

                                

                                <div class="resume-content">
                                    <h2>R$ <?php echo formatPrice($balances["future"]); ?></h2>
                                    <h6>Saldo Futuro</h6>
                                </div>

                            </div>

                        </div><!--col-lg-3-->


                    </div><!--row-->



                </form>



            </div><!--col-->
        


      
        </div><!--row-->
    
    </div><!--container-->

</section>

