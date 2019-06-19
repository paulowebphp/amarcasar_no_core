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




            <div id="plans" class="col-md-9 dash-panel tablersw">


                      
                    <div class="row">
                      



                      

                      <div class="col-md-4">
                      
                        <div class="plan">

                            <h2 class="plan-title"><strong>BÁSICO</strong></h2>

                            <h3 class="plan-subtitle">Plano básico</h3>



                            <div class="pricing">

                              <div class="currency">

                                <strong>6x</strong>

                                <span class="plan-coin">R$</span> 

                              </div><!--currency-->

                              <span id="plan1-vlinteger" class="price"><?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,1); ?></span>
                              <span id="plan1-vldecimal">,<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,0); ?></span> 

                            </div><!--pricing-->



                            <p>ou</p>
                            <p class="plan-description"><span id="plan1-vlsaleprice">R$ <?php echo formatPrice($plans["103"]["vlsaleprice"]); ?></span> pelo período de:</p>



                            
                            <select id="plan1" form="1" name="plano">
                                    <option value="103" data-nrinstallment="6" data-vlsaleprice="<?php echo htmlspecialchars( $plans["103"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["103"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,0); ?>' selected="selected">3 meses</option> 
                                    <option value="104" data-nrinstallment="6" data-vlsaleprice="<?php echo htmlspecialchars( $plans["104"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["104"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["104"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["104"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                                    <option value="106" data-vlsaleprice="<?php echo htmlspecialchars( $plans["106"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["106"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["106"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["106"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                                    <option value="109" data-vlsaleprice="<?php echo htmlspecialchars( $plans["109"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["109"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["109"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["109"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                                    <option value="112" data-vlsaleprice="<?php echo htmlspecialchars( $plans["112"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["112"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["112"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["112"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                                </select>

                                <form action="/dashboard/meu-plano/comprar/checkout" id="1">
                                  <button type="submit" class="plan-box-button">Comece já</button>
                                </form>




                          </div><!--plan--> 
                        
                        </div><!--col-->









                        <div class="col-md-4">

                          <div class="plan">

                            <h2 class="plan-title"><strong>CLÁSSICO</strong></h2> 
                          
                            <h3 class="plan-subtitle">Intermediário</h3> 
                            
                            

                            <div class="pricing">

                              <div class="currency">

                                <strong>6x</strong>
                                <span class="plan-coin">R$</span>

                              </div><!--currency-->
                                
                              <span id="plan2-vlinteger" class="price"><?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,1); ?></span>
                              <span id="plan2-vldecimal">,<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,0); ?></span> 

                            </div><!--pricing-->



                            <p>ou</p>
                            <p class="plan-description"><span id="plan2-vlsaleprice">R$ <?php echo formatPrice($plans["203"]["vlsaleprice"]); ?></span> pelo período de:</p>




                            <select id="plan2" form="2" name="plano">
                                    <option value="203" data-vlsaleprice="<?php echo htmlspecialchars( $plans["203"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["203"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,0); ?>' selected="selected">3 meses</option> 
                                    <option value="204" data-vlsaleprice="<?php echo htmlspecialchars( $plans["204"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["204"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["204"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["204"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                                    <option value="206" data-vlsaleprice="<?php echo htmlspecialchars( $plans["206"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["206"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["206"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["206"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                                    <option value="209" data-vlsaleprice="<?php echo htmlspecialchars( $plans["209"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["209"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["209"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["209"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                                    <option value="212" data-vlsaleprice="<?php echo htmlspecialchars( $plans["212"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["212"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["212"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["212"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                                </select>

                                <form action="/dashboard/meu-plano/comprar/checkout"id="2">
                                    <button type="submit" class="plan-box-button">Comece já</button>
                                </form>



                        </div><!--plan-->

                      </div><!--col-->
                      
                      




                      <div class="col-md-4">

                        <div id="plan-advanced" class="plan"> 

                          <h2 class="plan-title">

                            <strong>GOLD</strong>

                          </h2>

                          <h3 class="plan-subtitle">Tudo incluso</h3> 

                          <div class="pricing">

                              <div class="currency"> 

                                <strong>6x</strong> 
                                <span class="plan-coin">R$</span> 

                              </div><!--currency-->

                              <span id="plan3-vlinteger" class="price"><?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,1); ?></span>
                              <span id="plan3-vldecimal">,<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,0); ?></span> 

                            </div><!--pricing-->



                            <p>ou</p>
                            <p class="plan-description"><span id="plan3-vlsaleprice">R$ <?php echo formatPrice($plans["303"]["vlsaleprice"]); ?></span> pelo período de:</p>
                          
                          


                          <select id="plan3" form="3" name="plano">
                                    <option value="303" data-vlsaleprice="<?php echo htmlspecialchars( $plans["303"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["303"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,0); ?>' data-selected="selected">3 meses</option> 
                                    <option value="304" data-vlsaleprice="<?php echo htmlspecialchars( $plans["304"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["304"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["304"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["304"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                                    <option value="306" data-vlsaleprice="<?php echo htmlspecialchars( $plans["306"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["306"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["306"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["306"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                                    <option value="309" data-vlsaleprice="<?php echo htmlspecialchars( $plans["309"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["309"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["309"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["309"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                                    <option value="312" data-vlsaleprice="<?php echo htmlspecialchars( $plans["312"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["312"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["312"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["312"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                                </select>

                                <form action="/dashboard/meu-plano/comprar/checkout"id="3">
                                    <button type="submit" id="plan-gold-button" class="plan-box-button">Comece já</button>
                                </form>






                        </div><!--plan-->

                      </div><!--col-->



                    </div><!--row-->
        
                    <div class="row comparison">
      




        

                      <div class="col-md-4">

                        <div class="comparison-plan"> 

                          <h3>Plano Básico</h3>

                          <p>O Plano Básico é indicado para os casais que desejam um site mais simples, contendo os recursos essenciais para divulgar o momento mais lindo de suas vidas.</p>

                        </div><!--comparison-->

                      </div><!--col-->







                    <div class="col-md-4">


                      <div class="comparison-plan">

                        <h3>Plano Clássico</h3>

                        <p>O Plano Clássico contém todos os recursos do Plano Básico, e adiciona outros que deixam seu site de casamento ainda mais sofisticado e elegante!</p>

                      </div><!--comnparison-->

                    </div><!---->





                    <div class="col-md-4">

                      <div class="comparison-plan">

                        <h3>Plano Gold</h3>

                        <p>O Plano Gold contém o pacote completo com todos os recursos do site, para que os casais possam divulgar seu casamento com toda a comodidade e vantagens que o Amar Casar oferece.</p>

                      </div><!--comparison-->

                    </div><!--col-->





                 </div><!--row-->


      
            </div><!--col-->
        

        </div><!--row-->
    
    </div><!--container-->

</section>



















