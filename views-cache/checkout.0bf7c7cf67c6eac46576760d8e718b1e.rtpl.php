<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">

body{
    font-size: 1.1rem;
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: <?php if( $customstyle["desfontfamilytext"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>;
}

a:hover{
    color: <?php if( $customstyle["descolorlinkhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorlinkhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}

header {
    height: 130px;
    z-index: 2;
    position: relative;
    box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
}

header #domain-dropdown-menu a:hover{
    color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
header .shopping-item a:hover {
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
header .shopping-item:hover {
    background: none repeat scroll 0 0 <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    border-color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
}
header .container-fluid {
    width: 100%;
    padding: 2%  5%;
    position: relative;
}
header #menu-mobile{
  display: none;
}


/*header #header-mobile.open-menu #menu-mobile-mask
{
  display: none;
}*/
header #menu-condensed
{
  display: none;
}

#template {
    background: url("/res/images/template/banner/banner1.jpg") no-repeat center;
    background-size: cover;
    width: 100%;
    position: relative;
    /*top: -100px;  */
}
#frame{
    background: url("/res/images/frame/frame1.png") no-repeat center;
    background-size: contain;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    margin: 0 auto;
    height: 400px;
}
.section-title{
    margin-bottom: 10%;
}
section h1{
    color: <?php if( $customstyle["descolorh1"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh1"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'    <?php } ?>';
}

section h2{
    color: <?php if( $customstyle["descolorh2"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh2"] != '' ){ ?>'<?php echo htmlspecialchars( $customstyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'<?php }else{ ?>'Norican'<?php } ?>';
}

section h3{
    color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh3"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';
}
.section-title hr{
    width: 10%;
    height: 10px;
    background-color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
.light-button button{
  background-color: #fff;
  border: none;
  color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>
}
section h4{
    color: <?php if( $customstyle["descolorh4"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh4"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}
section h5{
    color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh5"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';


}
section h6{
    color: <?php if( $customstyle["descolorh6"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh6"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}
.card-title span{
  font-size: 1.5rem;
  font-weight: 500;
  color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}

.card-title hr{
    width: 20%;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    background-color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>; 
}

footer{
    padding: 5% 15% 5% 15%;
    font-size: 24px;
    background-color: <?php if( $customstyle["desbgcolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#FFFFFF<?php } ?>;
}
footer .container{ 
    width: 100%     
}
footer a{
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item{
    margin: 2% 0;
    background: none;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer a:hover{
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item:hover{
    background: none;
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
</style>



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
								<th class="product-name">Presente</th>
								<th class="product-name">Valor Unitário</th>
								<th class="product-name">Quantidade</th>
								<th class="product-total">Valor</th>
							</tr>
						</thead>
						<tbody>


							
                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
							<tr>
								<td align="left">
									<?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
								</td>
								<td>
									<span>R$<?php echo formatPrice(getInterest($value1["vlprice"],'1','1',$productconfig["incharge"])); ?></span>
								</td>
								<td>
									<strong><?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>
								</td>
								<td>
									<span>R$<?php echo formatPrice(getInterest($value1["vlprice"],'1','1',$productconfig["incharge"])*$value1["nrqtd"]); ?></span>
								</td>
                            </tr>
         
                            <?php } ?>



                            
                            
                            
						</tbody>
						<tfoot>
							<tr>

                            	<td id="tfoot-tr-firs-child" colspan="2" align="left">
                            		
                            		<div id="installment-title" align="right"><span>Parcelamento</span></div>
                            	</td>
								<td colspan="2" align="left">
									  <select id="installment" form="checkout-form" name="installment">

						                    <option value="1" id="installment-first-child" data-interest='<?php echo roundValue(getInterestTotal("1","1",$productconfig["incharge"])); ?>'>À vista - <?php echo formatPrice(getInterestTotal("1","1",$productconfig["incharge"])); ?></option>

						                    <option value="2" data-interest='<?php echo roundValue(getInterestTotal("1","2",$productconfig["incharge"])); ?>'>2 x R$ <?php echo formatPrice(getInterestTotal('1','2',$productconfig["incharge"])/2); ?></option> 
						                    
						                    <option value="3" data-interest='<?php echo roundValue(getInterestTotal("1","3",$productconfig["incharge"])); ?>'>3 x R$ <?php echo formatPrice(getInterestTotal('1','3',$productconfig["incharge"])/3); ?></option> 
						                    
						                    <option value="4" data-interest='<?php echo roundValue(getInterestTotal("1","4",$productconfig["incharge"])); ?>'>4 x R$ <?php echo formatPrice(getInterestTotal('1','4',$productconfig["incharge"])/4); ?></option> 
						                    
						                    <option value="5" data-interest='<?php echo roundValue(getInterestTotal("1","5",$productconfig["incharge"])); ?>'>5 x R$ <?php echo formatPrice(getInterestTotal('1','5',$productconfig["incharge"])/5); ?></option>
						                    
						                    <option value="6" data-interest='<?php echo roundValue(getInterestTotal("1","6",$productconfig["incharge"])); ?>'>6 x R$ <?php echo formatPrice(getInterestTotal('1','6',$productconfig["incharge"])/6); ?></option>
						                
						                </select>
								</td>
                            </tr>
								
							<tr>
								<td align="right" class="column2" colspan="3">Total</td>
								<td class="column2"><strong><span id="interest" data-card='<?php echo formatPrice(getInterestTotal("1","1",$productconfig["incharge"])); ?>' data-boleto='<?php echo formatPrice(getInterestTotal("0","1",$productconfig["incharge"])); ?>'>R$<?php echo formatPrice(getInterestTotal('1','1',$productconfig["incharge"])); ?></span></strong> </td>
							</tr>
						</tfoot>
					</table>

														
				</div><!--purchase-resume-->

				

				<div id="user-credentials">
					

					<table width="100%" border="0" cellspacing="2" cellpadding="10">
						<tbody>
							<tr>
								<td colspan="3" align="right">
									<span><strong><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></span>
								</td>
                            </tr>
                            <tr>
								<td colspan="3" align="right">
									<span><strong><?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></span>
								</td>
                            </tr>
						</tbody>
					</table>

				</div>



            </div><!--col-->






            <div class="col-md-7 columns">


            	<div class="row">
            	
            		<div class="col-md-12 domain-checkout-buttons">

            			

            			
            			<ul class="nav">
	    					<!--<li id="options-payments1" class="nav-item options-button options-selected"><button>Cartão de Crédito Próprio</button></li>-->
	    					<li id="options-payments5" class="nav-item options-button options-selected"><button>Cartão de Crédito</button></li>
	    					<li id="options-payments4" class="nav-item options-button"><button>Boleto</button></li>
	    					

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
		               


            			<form id="checkout-form" action="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/checkout" class="checkout" method="post" name="checkout">



            			<div id="payment-inputs">
            				
							            				

            				<div class="row">

								<div class="col-md-12">

									<div class="payment-warn payment-block">
				    				

										<p>Preencha com os dados do titular do cartão!</p>


										<p id="checkout-desdocument-warn">Sabemos que é chato, mas pedimos que nos ajude a nos proteger de compras fraudulentas, e preencha com os dados exatos do titular do cartão de crédito, inclusive o endereço!</p>

									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-md-4">

									<div class="payment-block">
								                				
										

										<div id="payment_name_1_field">
											<input type="text" placeholder="Nome do titular do cartão" id="payment_name_1" name="desname" class="input-text">
										</div>



										<div id="payment_email_1_field">
											<input type="email" placeholder="E-mail do titular do cartão" id="payment_email_1" email="desemail" name="desemail" class="input-text">
										</div>
												
														
											
																			
										<div id="payment_inholdertypedoc_1_field">
											<select id="payment_inholdertypedoc_1" name="inholdertypedoc">
						                    	<option value="0" selected>Documento: CPF</option>
										    	<option value="1">Documento: CNPJ</option>
						              
						                	</select>
										</div>


											
								


										<div id="payment_holderdocument_1_field">
											<input type="text" placeholder="Número do documento" id="payment_holderdocument_1" name="desholderdocument" class="input-text ">
										</div>

										
										<div class="row row-2-columns">
											
											<div class="col-md-5">
												<div id="payment_nrddd_1_field">
													<input type="text" placeholder="DDD" id="payment_nrholderddd_1" name="nrholderddd" class="input-text">
												</div>
											</div>



											<div class="col-md-7">
												<div id="payment_nrphone_1_field">
													<input type="text" placeholder="Telefone" id="payment_nrholderphone_1" name="nrholderphone" class="input-text">
												</div>
											</div>

										</div>




										<div id="dtbirth-field" class="my-3" id="payment_holderbirth_1_field">
											<div id="dtbirth-warn"></div>
											<input type="date" placeholder="Nascimento" id="payment_holderbirth_1" name="dtholderbirth" class="input-text">
										</div>




									</div><!--payment-block--->

								</div>

								<div class="col-md-4">

									<div class="payment-block">
								
										<div id="billing_cep_1_field">
											<input type="text" placeholder="CEP do Titular" id="billing_cep_1" name="zipcode" class="input-text">
											<!--<input type="submit" Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">-->
										</div>

										<div id="billing_holderaddress_1_field">
											<input type="text" placeholder="Logradouro, rua, avenida" id="billing_holderaddress_1" name="desholderaddress" class="input-text">
										</div>

										<div id="billing_holdernumber_1_field">
											<input type="text" placeholder="Número" id="billing_address_1" name="desholdernumber" class="input-text">
										</div>

										<div id="billing_desholdercomplement_1_field">
											<input type="text" placeholder="Complemento (opcional)" id="billing_desholdercomplement_1" name="desholdercomplement" class="input-text">
						                </div>

						                <div id="billing_holderdistrict_field">
											<input type="text" placeholder="Bairro" id="billing_holderdistrict" name="desholderdistrict" class="input-text">
										</div>




										


										<div class="row state-city">
											<div class="col-md-2">
												<label class="checkout-label" for="state">Estado</label>
											</div>
											
											<div class="col-md-10">
												<select id="state" form="checkout-form" name="desholderstate">
							                    	<?php $counter1=-1;  if( isset($state) && ( is_array($state) || $state instanceof Traversable ) && sizeof($state) ) foreach( $state as $key1 => $value1 ){ $counter1++; ?>
							                    		<option value="<?php echo htmlspecialchars( $value1["idstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option> 
							                    	<?php } ?>
							                	</select>

											</div>
										</div>





										<div class="row state-city">
											<div class="col-md-2">
												<label class="checkout-label" for="city">Cidade</label>
											</div>
											
											<div class="col-md-10">
												<select id="city" form="checkout-form" name="desholdercity">
							                    	<?php $counter1=-1;  if( isset($city) && ( is_array($city) || $city instanceof Traversable ) && sizeof($city) ) foreach( $city as $key1 => $value1 ){ $counter1++; ?>
							                    		<option value="<?php echo htmlspecialchars( $value1["idcity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option> 
							                    	<?php } ?>
							                	</select>

											</div>
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="payment-block">
					          					
										<div id="payment_cardnumber_1_field">
											<input type="text" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
										</div>

										<div id="payment_cardname_1_field">
											<input type="text" placeholder="Nome como está no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
										</div>


										<div class="row row-2-columns">

											<div class="col-md-6">
												<div id="payment_cardmonth_1_field">
													<input type="text" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
													
												</div>
											</div>



											<div class="col-md-6">
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
												<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout-third-part-card">
											</div>
											<div class="clear"></div>
										</div><!--payment-->



									</div>

								</div>

							</div>

            			</div><!--payment-inputs-->
	
          			</form>
            		
            		</div>

            	</div>
           	
            </div><!--col-->

        </div><!--row-->


    </div><!--container-->
    

</section>
