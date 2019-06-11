<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section id="checkout">
    
    <div class="container-fluid">
        


    	<div class="checkout-accounts-rows row">
    			
    		<div class="col-md-12">
    			
    			<div class="payment-warn">
    				
    				<h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, está quase no fim!<h1>

	    			
    			</div>

                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>

    		</div><!--col-->

    	</div><!--row-->







        <div class="checkout-accounts-rows row">
            

        	




            





            <div class="col-md-6 columns">
                
                
				<div id="purchase-resume">
					<table width="100%" border="0" cellspacing="2" cellpadding="30">
						<thead>
							<tr>
								<th class="column1">Plano</th>
								<th class="column1">Periodo</th>
								<th class="column1">Valor</th>
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
								<td align="right" class="column2" colspan="2">Total do Pedido</td>
								<td class="column2"><strong><span>R$<?php echo formatPrice($inplan["vlsaleprice"]); ?></span></strong> </td>
							</tr>
						</tfoot>
					</table>

														
				</div><!--purchase-resume-->

            </div><!--col-->






            <div class="col-md-6 columns">


            	<div class="row">
            	
            		<div class="col-md-12">

            			

            			
            			<ul class="nav">
	    					<li id="options-payments1" class="nav-item options-button"><button>Boleto</button></li>
	    					<li id="options-payments2" class="nav-item options-button"><button>Cartão de Crédito Próprio</button></li>
	    					<li id="options-payments3" class="nav-item options-button"><button>Cartão de Crédito de Terceiro</button></li>

	    				</ul>

            		</div>


            	</div>


            	<div class="row">
            		
            		<div class="col-md-12">
            			
            			<div id="payment-inputs"></div>

            		</div>

            	</div>



            	

            </div><!--col-->





        </div><!--row-->



  





    </div><!--container-->
    

</section>
