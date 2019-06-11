<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section id="checkout">
    
    <div class="container-fluid">
        


    	<!--<div class="checkout-accounts-rows row">
    			
    		<div class="col-md-12">
    			
    			<div class="payment-warn">
    				
    				<h1>, está quase no fim!<h1>

	    			
    			</div>

                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

    		</div>

    	</div>-->







        <div id="checkout-box" class="checkout-accounts-rows row">
            

        




            <div class="col-md-5 columns">
               
                
				<div id="purchase-resume">
					<table width="100%" border="0" cellspacing="2" cellpadding="20">
						<thead>
							<tr>
								<th class="column2">Plano</th>
								<th class="column2">Periodo</th>
								<th class="column2">Valor</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="left">
									<?php echo htmlspecialchars( $inplan["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>  
								</td>
								<td>
									<span><strong><?php echo htmlspecialchars( $inplan["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <?php echo htmlspecialchars( $inplan["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></span>
								</td>
								<td>
									<span>R$<?php echo formatPrice($inplan["vlsaleprice"]); ?></span>
								</td>
                            </tr>

                            
                            
						</tbody>
						<tfoot>
							<tr>

                            	<td id="tfoot-tr-firs-child" align="left">
                            		
                            		<div id="installment-title" align="right"><span>Parcelamento</span></div>
                            	</td>
								<td colspan="2" align="left">
									  <select id="installment" form="checkout-form" name="installment">
						                    <option value="1" selected="selected">À vista - <?php echo formatPrice($inplan["vlsaleprice"]); ?></option> 
						                    <option value="2">2 x R$ <?php echo formatPrice($inplan["vlsaleprice"]/2); ?></option> 
						                    <option value="3">3 x R$ <?php echo formatPrice($inplan["vlsaleprice"]/3); ?></option> 
						                    <option value="4" >4 x R$ <?php echo formatPrice($inplan["vlsaleprice"]/4); ?></option> 
						                    <option value="5">5 x R$ <?php echo formatPrice($inplan["vlsaleprice"]/5); ?></option>
						                    <option value="6">6 x R$ <?php echo formatPrice($inplan["vlsaleprice"]/6); ?></option>
						                </select>
								</td>
                            </tr>
								
							<tr>
								<td align="right" class="column2" colspan="2">Total</td>
								<td class="column2"><strong><span>R$<?php echo formatPrice($inplan["vlsaleprice"]); ?></span></strong> </td>
							</tr>
						</tfoot>
					</table>

														
				</div><!--purchase-resume-->

				

            </div><!--col-->






            <div class="col-md-7 columns">


            	<div class="row">
            	
            		<div class="col-md-12">

            			

            			
            			<ul class="nav">
	    					<li id="options-payments1" class="nav-item options-button options-selected"><button>Cartão de Crédito Próprio</button></li>
	    					<li id="options-payments2" class="nav-item options-button"><button>Boleto</button></li>
	    					<li id="options-payments3" class="nav-item options-button"><button>Cartão de Crédito de Terceiro</button></li>

	    				</ul>

            		</div>


            	</div>


            	<div class="row">
            		
            		<div class="col-md-12">

            			
            			<div id="error-container">
            				
            				<?php if( $error != '' ){ ?>
			                <div class="alert alert-danger alert-dismissible fade show" role="alert">
			                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
			                </div>
			                <?php } ?>
            			</div><!--error-container-->
		               

            			<form id="checkout-form" action="/checkout/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="checkout" method="post" name="checkout">



            			<div id="payment-inputs">
            				
							            				

            				<div class="row">

            					
            					

            					<div class="col-md-12">
            						
            						

	            				<div class="payment-block">
						          					
									<div id="payment_cardnumber_1_field">
									<input type="text" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
								</div>

								<div id="payment_cardname_1_field">
									<input type="text" placeholder="Nome tal como está impresso no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
								</div>


								<div class="row">

									<div class="col-md-4">
										<div id="payment_cardmonth_1_field">
											<input type="text" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
											
										</div>
									</div>



									<div class="col-md-8">
										<div id="payment_cardyear_1_field">
											<input type="text" placeholder="Ano" id="payment_cardyear_1" name="descardcode_year" class="input-text ">
											
										</div>
									</div>

								</div>



								<div id="payment_cardcvc_1_field">
									<input type="text" placeholder="Código de Segurança" id="payment_cardcvc_1" name="descardcode_cvc" class="input-text ">
								</div>		


								<div>
									<div>
										<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout-own-card">
									</div>
									<div class="clear"></div>
								</div><!--payment-->


							</form>

            					</div>

            					

            				</div>

							</div>

            			</div>
          			
            		</div>

            	</div>
           	
            </div><!--col-->

        </div><!--row-->


    </div><!--container-->
    

</section>
