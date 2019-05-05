<?php if(!class_exists('Rain\Tpl')){exit;}?>     <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-angle-right"></i>
                        <p><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-angle-right"></i>
                        <p><?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-angle-right"></i>
                        <p><?php echo htmlspecialchars( $user["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-angle-right"></i>
                        <p>Template <?php echo htmlspecialchars( $user["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
 