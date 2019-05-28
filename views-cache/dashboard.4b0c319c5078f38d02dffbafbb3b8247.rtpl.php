<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard-menu");?>
            </div>
            <div class="col-md-9">
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
                <div class="promo-area">
                    <div class="zigzag-bottom"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="single-promo promo1">
                                    <i class="fa fa-angle-left"></i>
                                    <p><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-promo promo2">
                                    <i class="fa fa-angle-left"></i>
                                    <p><?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-promo promo3">
                                    <i class="fa fa-angle-left"></i>
                                    <p><?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-promo promo4">
                                    <i class="fa fa-angle-left"></i>
                                    <p>Template </p>
                                </div>
                            </div>
                        </div>
                </div> <!-- End promo area -->

            </div>
        </div>
    </div>
</div>