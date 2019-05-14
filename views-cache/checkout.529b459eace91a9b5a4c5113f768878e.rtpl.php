<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Pagamento</h2>
				</div>
			</div><!--col-md-12-->
		</div><!--row-->
		
	</div><!--container-->
</div><!--product-big-title-area-->
<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="product-content-right">
					<form action="/checkout/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="checkout" method="post" name="checkout">
						<div id="customer_details" class="col2-set">

							<?php if( $error != '' ){ ?>
							<div class="alert alert-danger">
								<?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
							</div>
							<?php } ?>

							<div class="row">
								<div class="col-md-6">

									

									<div class="woocommerce-billing-fields">

										<h3>Endereço de entrega</h3>



										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_cep_1">Cep <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_cep_1" name="zipcode" class="input-text ">
											<!--<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">-->
										</p>

										

										<!--<div class="row">

											<div class="col-sm-9">
												<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
													<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
												</p>
											</div>



											<div class="col-sm-3">
												<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
													<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
												</p>
											</div>

										</div>-->


										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
										</p>
										<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
										</p>
										<p id="billing_address_2_field" class="form-row form-row-wide address-field">
											<input type="text" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement" class="input-text ">
                                        </p>
                                        <p id="billing_district_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_district">Bairro <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_district" name="desdistrict" class="input-text ">
										</p>
										<p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_city">Cidade <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_city" name="descity" class="input-text ">
										</p>
										<p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
											<label class="" for="billing_state">Estado</label>
											<input type="text" id="billing_state" name="desstate" placeholder="Estado" value="<?php echo htmlspecialchars( $address["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="input-text ">
										</p>
										
										<div class="clear"></div>


										<!-- order_review_heading e payment -->


									</div><!--woocommerce-billing-fields-->
								</div><!--col-md-6-->







								<div class="col-md-6">

									

									<div class="woocommerce-billing-fields">

										<h3>Informações de Pagamento</h3>


										<!--
										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_cep_1">Cep <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $address["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_cep_1" name="zipcode" class="input-text ">
											<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">
										</p>



										<div class="row">

											<div class="col-sm-9">
												<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
													<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
												</p>
											</div>



											<div class="col-sm-3">
												<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
													<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
												</p>
											</div>

										</div>-->


										<p id="payment_name_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="payment_name_1">Nome <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome" id="payment_name_1" name="desperson" class="input-text" disabled>
										</p>


										<p id="payment_email_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_email_1">E-mail <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="E-mail" id="payment_email_1" name="desemail" class="input-text" disabled>
										</p>

										<p id="payment_document_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="payment_document_1">CPF <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome" id="payment_document_1" name="desdocument" class="input-text ">
										</p>
										

										<p id="payment_birth_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_birth_1">Nascimento <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nascimento" id="payment_birth_1" name="dtbirth" class="input-text ">
										</p>

                                        <p id="payment_nrphone_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_nrphone_1">Telefone <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Telefone" id="payment_nrphone_1" name="nrphone" class="input-text ">
										</p>

										<p id="payment_cardnumber_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_cardnumber_1">Número do Cartão <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_number"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
										</p>

										<p id="payment_cardname_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_cardname_1">Nome tal como está impresso no cartão <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["desholdername"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome tal como está impresso no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
										</p>

										<p id="payment_cardmonth_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_cardmonth_1">Mês <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_month"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
										</p>

										<p id="payment_cardyear_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_cardyear_1">Ano <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_year"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Ano" id="payment_cardyear_1" name="descardcode_year" class="input-text ">
										</p>

										<p id="payment_cardcvv_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_cardcvv_1">Código de Segurança <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_cvv"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Código de Segurança" id="payment_cardcvv_1" name="descardcode_cvv" class="input-text ">
										</p>

										

										<div class="clear"></div>


										<h3 id="order_review_heading" style="margin-top:30px;">Detalhes do Pedido</h3>
										<div id="order_review" style="position: relative;">
											<table class="shop_table">
												<thead>
													<tr>
														<th class="product-name">Plano</th>
														<th class="product-total">Periodo</th>
														<th class="product-total">Valor</th>
													</tr>
												</thead>
												<tbody>
													<tr class="cart_item">
														<td class="product-name">
															<?php echo htmlspecialchars( $inplan["desplan"], ENT_COMPAT, 'UTF-8', FALSE ); ?>  
														</td>
														<td class="product-total">
															<span class="amount"><strong class="product-quantity"><?php echo htmlspecialchars( $inplan["inperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></span>
														</td>
														<td class="product-total">
															<span class="amount">R$<?php echo formatPrice($inplan["vlprice"]); ?></span>
														</td>
                                                    </tr>
												</tbody>
												<tfoot>
														
													<tr class="order-total">
														<th colspan="2">Total do Pedido</th>
														<td><strong><span class="amount">R$<?php echo formatPrice($inplan["vlprice"]); ?></span></strong> </td>
													</tr>
												</tfoot>
											</table>

																					

											<div id="payment">
												<div class="form-row place-order">
													<input type="submit" data-value="Place order" value="Continuar" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
												</div>
												<div class="clear"></div>
											</div><!--payment-->
										</div><!--orders_reveiw-->
									</div><!--woocommerce-billing-fields-->
								</div><!--col-md-6-->




							</div><!--row-->
						</div><!--customer_details-->
					</form>
				</div><!--product-content-right-->
			</div><!--col-md-12-->
		</div><!--row-->
	</div><!--container-->
</div><!--single-product-area-->