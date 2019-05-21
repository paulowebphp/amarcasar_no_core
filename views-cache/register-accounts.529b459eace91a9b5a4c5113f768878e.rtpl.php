<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="product-content-right">
					<form action="/cadastrar/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="checkout" method="post" name="checkout">
						<div id="customer_details" class="col2-set">

							<?php if( $error != '' ){ ?>
							<div class="alert alert-danger">
								<?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
							</div>
							<?php } ?>

							<div class="row">
								<div class="col-md-6">

									

									<div class="woocommerce-billing-fields">

										<h3>Endereço do Usuário</h3>



										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_cep_1">Cep <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_cep_1" name="zipcode" class="input-text ">
											<!--<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/cadastrar" formmethod="get">-->
										</p>

										

										<!--<div class="row">

											<div class="col-sm-9">
												<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
													<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $account["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
												</p>
											</div>



											<div class="col-sm-3">
												<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
													<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $account["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
												</p>
											</div>

										</div>-->


										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
										</p>
										<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
										</p>
										<p id="billing_address_2_field" class="form-row form-row-wide address-field">
											<input type="text" value="<?php echo htmlspecialchars( $account["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement" class="input-text ">
                                        </p>
                                        <p id="billing_district_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_district">Bairro <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_district" name="desdistrict" class="input-text ">
										</p>
										<p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_city">Cidade <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_city" name="descity" class="input-text ">
										</p>
										<p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
											<label class="" for="billing_state">Estado</label>
											<input type="text" id="billing_state" name="desstate" placeholder="Estado" value="<?php echo htmlspecialchars( $account["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="input-text ">
										</p>
										
										<div class="clear"></div>


										<!-- order_review_heading e payment -->


									</div><!--woocommerce-billing-fields-->
								</div><!--col-md-6-->







								<div class="col-md-6">

									

									<div class="woocommerce-billing-fields">

										<h3>Dados do Usuário</h3>


										<!--
										<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_cep_1">Cep <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_cep_1" name="zipcode" class="input-text ">
											<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">
										</p>



										<div class="row">

											<div class="col-sm-9">
												<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
													<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $account["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" class="input-text ">
												</p>
											</div>



											<div class="col-sm-3">
												<p id="billing_number_1_field" class="form-row form-row-wide number-field validate-required">
													<label class="" for="billing_number_1">Número <abbr title="required" class="required">*</abbr>
													</label>
													<input type="text" value="<?php echo htmlspecialchars( $account["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
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
											<input type="text" value="<?php echo htmlspecialchars( $account["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome" id="payment_document_1" name="desdocument" class="input-text ">
										</p>
										

										<p id="payment_birth_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_birth_1">Nascimento <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nascimento" id="payment_birth_1" name="dtbirth" class="input-text ">
										</p>

                                        <p id="payment_nrphone_1_field" class="form-row form-row-wide number-field validate-required">
											<label class="" for="payment_nrphone_1">Telefone <abbr title="required" class="required">*</abbr>
											</label>
											<input type="text" value="<?php echo htmlspecialchars( $account["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Telefone" id="payment_nrphone_1" name="nrphone" class="input-text ">
										</p>

										

										

										<div class="clear"></div>

										<div id="payment">
											<div class="form-row place-order">
												<input type="submit" data-value="Place order" value="Continuar" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
											</div>
											<div class="clear"></div>
										</div><!--payment-->
										
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