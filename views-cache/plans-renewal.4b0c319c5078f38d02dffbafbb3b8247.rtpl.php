<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

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





                <div class="col-md-9 dash-main-area-box text-center">

                    <div class="plan-box-dash"> 
                        
                        <div id="plans">
                        <h1>Renovar <?php echo htmlspecialchars( $plan["1"]["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>






                        <div class="plan">

                            <h2 class="plan-title"><strong>Por Apenas</strong></h2> 
                          
                            <h3 class="plan-subtitle"></h3> 
                            
                            

                            <div class="pricing">

                              <div class="currency">

                                <strong>6x</strong>
                                <span class="plan-coin">R$</span>

                              </div><!--currency-->
                                
                              <span id="plan2-vlinteger" class="price"><?php echo getValuePartial($plan["1"]["vlsaleprice"]/6,1); ?></span>
                              <span id="plan2-vldecimal">,<?php echo getValuePartial($plan["1"]["vlsaleprice"]/6,0); ?></span> 

                            </div><!--pricing-->



                            <p>ou</p>
                            <p class="plan-description"><span id="plan2-vlsaleprice">R$ <?php echo formatPrice($plan["1"]["vlsaleprice"]); ?></span> por um período de mais:</p>




                            
                            <select id="plan2" form="plan2" name="plano">
                                    <?php $counter1=-1;  if( isset($plan) && ( is_array($plan) || $plan instanceof Traversable ) && sizeof($plan) ) foreach( $plan as $key1 => $value1 ){ $counter1++; ?>
                                    <option value="<?php echo htmlspecialchars( $value1["inplancode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlsaleprice="<?php echo htmlspecialchars( $value1["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($value1["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($value1["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($value1["vlsaleprice"]/6,0); ?>'<?php if( $value1["inperiod"] == '3' ){ ?> selected="selected" <?php } ?>><?php echo htmlspecialchars( $value1["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $value1["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - R$ <?php echo formatPrice($value1["vlsaleprice"]); ?></option> 
                                    <?php } ?>
                                   
                                </select>

                                
                                <form action="/dashboard/meu-plano/renovar/checkout" id="plan2">
                                    <button type="submit" class="plan-box-button">Comece já</button>
                                </form>



                        </div><!--plan-->

                      

                    </div>

                    </div>


                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>
