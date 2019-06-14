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





                <div class="col-md-9 dash-main-area text-center">

                    <div class="renewal-box">
                        <p>Renovar Plano</p>                   

                        <select id="plan-renewal" form="plan-renewal" name="plano">

                            <option value="<?php echo htmlspecialchars( $plan["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">1 mês</option> 
                            <option value="<?php echo htmlspecialchars( $plan["1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected="selected">3 meses</option> 
                            <option value="<?php echo htmlspecialchars( $plan["2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">4 meses</option> 
                            <option value="<?php echo htmlspecialchars( $plan["3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">6 meses</option> 
                            <option value="<?php echo htmlspecialchars( $plan["4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >9 meses</option> 
                            <option value="<?php echo htmlspecialchars( $plan["5"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">12 meses</option>
                        </select>

                        <form action="/dashboard/meu-plano/renovar/checkout" id="plan-renewal">
                            <input type="submit">
                        </form>


                    </div>


                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>


