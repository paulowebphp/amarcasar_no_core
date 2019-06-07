<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

                    <div class="col-md-4 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Básico</p>

                    <?php if( $user["inplancontext"] == 1  ){ ?> 

                    Seu plano Atual 

                    <?php }elseif( $user["inplancontext"] == 2 ){ ?> 

                    Plano Indisponível

                    <?php } ?>                 

                    <!--<select form="1" name="plano">
                        <option value="103" selected="selected">3 meses</option> 
                    </select>

                    <form action="/dashboard/meu-plano/upgrade/checkout" id="1">
                        <input type="submit">
                    </form>-->

                </div>
            </div>


            <div class="col-md-4 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Intermediário</p>

                    <?php if( $user["inplancontext"] == 1  ){ ?> 

                        <select form="2" name="plano">
                            <option value="2<?php echo htmlspecialchars( $sufix, ENT_COMPAT, 'UTF-8', FALSE ); ?>">Plano Intermediário</option> 
                         </select>

                        <form action="/dashboard/meu-plano/upgrade/checkout" id="2">
                            <input type="submit">
                        </form>

                    <?php }elseif( $user["inplancontext"] == 2 ){ ?>

                        Seu Plano Atual

                    <?php } ?> 

                    
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Avançado</p>

                     <?php if( ($user["inplancontext"] == 1) or ($user["inplancontext"] == 2) ){ ?> 

                        <select form="3" name="plano">
                        <option value="3<?php echo htmlspecialchars( $sufix, ENT_COMPAT, 'UTF-8', FALSE ); ?>">Plano Gold</option> 
                        </select>

                        <form action="/dashboard/meu-plano/upgrade/checkout"id="3">
                            <input type="submit">
                        </form>

                    <?php } ?> 

                    
                </div>
            </div>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

