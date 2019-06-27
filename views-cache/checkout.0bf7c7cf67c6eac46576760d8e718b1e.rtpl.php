<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="checkout">
    
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
									<span>R$<?php echo formatPrice($value1["vlprice"]); ?></span>
								</td>
								<td>
									<strong><?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>
								</td>
								<td>
									<span>R$<?php echo formatPrice($value1["vltotal"]); ?></span>
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
						                    <option value="1" selected="selected">À vista - <?php echo formatPrice($cart["vltotal"]); ?></option> 
						                    <option value="2">2 x R$ <?php echo formatPrice($cart["vltotal"]/2); ?></option> 
						                    <option value="3">3 x R$ <?php echo formatPrice($cart["vltotal"]/3); ?></option> 
						                    <option value="4" >4 x R$ <?php echo formatPrice($cart["vltotal"]/4); ?></option> 
						                    <option value="5">5 x R$ <?php echo formatPrice($cart["vltotal"]/5); ?></option>
						                    <option value="6">6 x R$ <?php echo formatPrice($cart["vltotal"]/6); ?></option>
						                </select>
								</td>
                            </tr>
								
							<tr>
								<td align="right" class="column2" colspan="3">Total</td>
								<td class="column2"><strong><span>R$<?php echo formatPrice($cart["vltotal"]); ?></span></strong> </td>
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
											<input type="text" placeholder="Número de quem está dando o presente!" id="payment_name_1" name="desname" class="input-text">
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
							                    	<option value="1">Acre</option> 
							                    	<option value="2">Alagoas</option> 
							                    	<option value="3">Amazonas</option> 
							                    	<option value="4">Amapá</option> 
							                    	<option value="5">Bahia</option> 
							                    	<option value="6">Ceará</option> 
							                    	<option value="7">Distrito Federal</option> 
							                    	<option value="8">Espírito Santo</option> 
							                    	<option value="9">Goiás</option> 
							                    	<option value="10">Maranhão</option> 
							                    	<option value="11">Minas Gerais</option> 
							                    	<option value="12">Mato Grosso do Sul</option> 
							                    	<option value="13">Mato Grosso</option> 
							                    	<option value="14">Pará</option> 
							                    	<option value="15">Paraíba</option> 
							                    	<option value="16">Pernambuco</option> 
							                    	<option value="17">Piauí</option> 
							                    	<option value="18">Paraná</option> 
							                    	<option value="19">Rio de Janeiro</option> 
							                    	<option value="20">Rio Grande do Norte</option> 
							                    	<option value="21">Rondônia</option> 
							                    	<option value="22">Roraima</option> 
							                    	<option value="23">Rio Grande do Sul</option> 
							                    	<option value="24">Santa Catarina</option> 
							                    	<option value="25">Sergipe</option> 
							                    	<option value="26">São Paulo</option> 
							                    	<option value="27">Tocantins</option> 
							                	</select>

											</div>
										</div>





										<div class="row state-city">
											<div class="col-md-2">
												<label class="checkout-label" for="city">Cidade</label>
											</div>
											
											<div class="col-md-10">
												<select id="city" form="checkout-form" name="desholdercity">
							                    	<option value="Acrelândia">Acrelândia</option> 
							                    	<option value="Assis Brasil">Assis Brasil</option> 
							                    	<option value="Brasiléia">Brasiléia</option> 
							                    	<option value="Bujari">Bujari</option> 
							                    	<option value="Capixaba">Capixaba</option> 
							                    	<option value="Cruzeiro do Sul">Cruzeiro do Sul</option> 
							                    	<option value="Epitaciolândia">Epitaciolândia</option> 
							                    	<option value="Feijó">Feijó</option> 
							                    	<option value="Jordão">Jordão</option> 
							                    	<option value="Mâncio Lima">Mâncio Lima</option> 
							                    	<option value="Manoel Urbano">Manoel Urbano</option> 
							                    	<option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option> 
							                    	<option value="Plácido de Castro">Plácido de Castro</option> 
							                    	<option value="Porto Acre">Porto Acre</option> 
							                    	<option value="Porto Walter">Porto Walter</option> 
							                    	<option value="Rio Branco">Rio Branco</option> 
							                    	<option value="Rodrigues Alves">Rodrigues Alves</option> 
							                    	<option value="Santa Rosa do Purus">Santa Rosa do Purus</option> 
							                    	<option value="Sena Madureira">Sena Madureira</option> 
							                    	<option value="Senador Guiomard">Senador Guiomard</option> 
							                    	<option value="Tarauacá">Tarauacá</option> 
							                    	<option value="Xapuri">Xapuri</option> 
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
