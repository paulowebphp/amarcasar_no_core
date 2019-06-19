<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

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





                <div class="col-md-9 text-center dash-main-area">

                    <?php if( $dashboardMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $dashboardMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $dashboardError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $dashboardError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 



                    <div class="col-md-6 dashboard-init-box-wrapper">

                        <div class="dashboard-init-box">

                            <i class="fa fa-angle-left"></i>
                            <p><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

                        </div>

                    </div><!--col-lg-3-->




                    <div class="col-md-6 dashboard-init-box-wrapper">

                        <div class="dashboard-init-box">

                            <i class="fa fa-angle-left"></i>
                            <p><?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

                        </div>

                    </div><!--col-lg-3-->




                    <div class="col-md-6 dashboard-init-box-wrapper">

                        <div class="dashboard-init-box">

                            <i class="fa fa-angle-left"></i>
                            <p><?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

                        </div>

                    </div><!--col-lg-3-->




                    <div class="col-md-6 dashboard-init-box-wrapper">

                        <div class="dashboard-init-box">

                            <i class="fa fa-angle-left"></i>
                            <p>Template </p>

                        </div>

                    </div><!--col-lg-3-->






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

