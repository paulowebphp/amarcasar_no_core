<?php if(!class_exists('Rain\Tpl')){exit;}?>
<section id="checkout">
    
    <div class="container-fluid">
        


    	<div class="checkout-accounts-rows row">
    			
    		<div class="col-md-12">
    			
    			<div class="checkout-warn">
    				
    				<h1>Estamos na última etapa, <?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?><h1>

	    			<p>Agora, por favor, preencha com os dados do titular do cartão!</p>


	    			<p id="checkout-desdocument-warn">Sabemos que é chato, mas pedimos que nos ajude a nos proteger de compras fraudulentas, e preencha com os dados exatos do titular do cartão de crédito, inclusive o endereço!</p>

    			</div>

    		</div><!--col-->

    	</div><!--row-->




    	<div class="row">
    			
    		<div class="col-md-12">
    			
    			<div class="payment-warn">
    				
    				<h2>Escolha sua forma de Pagamento<h2>

    			</div>	

    		</div><!--col-->

    	</div><!--row-->

    	<div class="checkout-accounts-rows row">
    			
    		<div class="payment-option-row col-md-6">
    			   				
    				<a id="block1" href="#">
						<div id="round-block1" class="roundblock">
							<i class="fa fa-code"></i>
						</div>
                    </a><br>
                    <p id="paragraph-block1">
                        Cartão de Crédito
                    </p>

    		</div><!--col-->

    		<div class="payment-option-row col-md-6">
    			
    			<a id="block2" href="#">
					<div id="round-block2" class="roundblock">
						<i class="fa fa-connectdevelop"></i>
					</div>
                </a><br>
                <p id="paragraph-block2">
                    Boleto
                </p>	

    		</div><!--col-->

    	</div><!--row-->








    	<div class="container">
				<div class="row">

					<div class="col-md-6">
						
					</div>

					<div class="col-md-6">
						
					</div>

				</div>
			</div>













        <div class="checkout-accounts-rows row">
            

            <div class="col-md-6 columns">

                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                

				<form id="checkout" action="/checkout/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="checkout" method="post" name="checkout">
                

					<div id="payment_holdername_1_field">
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholdername"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome do Titular do Cartão" id="payment_holdername_1" name="desholdername" class="input-text">
					</div>


					


					<div class="row">

						<div class="col-md-3">
							<div id="payment_inholdertypedoc_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["inholdertypedoc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Tipo" id="payment_inholdertypedoc_1" name="inholdertypedoc" class="input-text ">
								
							</div>
						</div>



						<div class="col-md-9">
							<div id="payment_holderdocument_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["desholderdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Documento" id="payment_holderdocument_1" name="desholderdocument" class="input-text ">
							</div>
						</div>

					</div>	



					

					<div id="payment_holderbirth_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $payment["dtholderbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nascimento" id="payment_holderbirth_1" name="dtholderbirth" class="input-text ">
					</div>

					<div class="row">

						<div class="col-md-3">
							<div id="payment_nrddd_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["nrholderddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="DDD" id="payment_nrholderddd_1" name="nrholderddd" class="input-text ">
							</div>
						</div>



						<div class="col-md-9">
							<div id="payment_nrphone_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["nrholderphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Telefone" id="payment_nrholderphone_1" name="nrholderphone" class="input-text ">
							</div>
						</div>

					</div>



                   

            </div><!--col-->

            <div class="col-md-6 columns">
                
                
				<div id="billing_cep_1_field">
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholderzipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="CEP do Titular do Cartão" id="billing_cep_1" name="zipcode" class="input-text ">
					<!--<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">-->
				</div>

				<div id="billing_holderaddress_1_field" class="form-row form-row-wide holderaddress-field validate-required">
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholderaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, rua, avenida" id="billing_holderaddress_1" name="desholderaddress" class="input-text ">
				</div>
				<div id="billing_holdernumber_1_field" class="form-row form-row-wide holdernumber-field validate-required">
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholdernumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desholdernumber" class="input-text ">
				</div>
				<div id="billing_desholdercomplement_1_field" class="form-row form-row-wide address-field">
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholdercomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_desholdercomplement_1" name="desholdercomplement" class="input-text ">
                </div>
                <div id="billing_holderdistrict_field" data-o>
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholderdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Bairro" id="billing_holderdistrict" name="desholderdistrict" class="input-text ">
				</div>
				<div id="billing_holdercity_field" data-o>
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholdercity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_holdercity" name="desholdercity" class="input-text ">
				</div>
				<div id="billing_holderstate_field" data-o>
					<input type="text" value="<?php echo htmlspecialchars( $payment["desholderstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="UF" id="billing_holderstate" name="desholderstate" class="input-text ">
				</div>

            </div><!--col-->

        </div><!--row-->



        <div class="checkout-accounts-rows row">
            

            <div class="col-md-6 columns">


				<h4>Detalhes do Pedido</h4>
						<div id="purchase-resume">
							<table width="100%" border="0" cellspacing="2" cellpadding="15">
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




            <div id="checkout-payment" class="col-md-6 columns">
                

            		<select form="checkout" name="installment">
                        <option value="1" selected="selected">1 x - </option> 
                        <option value="2">2 x - </option> 
                        <option value="3">3 x - </option> 
                        <option value="4" >4 x - </option> 
                        <option value="5">5 x - </option>
                        <option value="6">6 x - </option>
                    </select>


	            	<div id="payment_cardnumber_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_number"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
					</div>

					<div id="payment_cardname_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $payment["desholdername"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome tal como está impresso no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
					</div>


					<div class="row">

						<div class="col-md-3">
							<div id="payment_cardmonth_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_month"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
								
							</div>
						</div>



						<div class="col-md-9">
							<div id="payment_cardyear_1_field">
								<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_year"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Ano" id="payment_cardyear_1" name="descardcode_year" class="input-text ">
								
							</div>
						</div>

					</div>



					<div id="payment_cardcvc_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $payment["descardcode_cvc"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Código de Segurança" id="payment_cardcvc_1" name="descardcode_cvc" class="input-text ">
					</div>		


					<div>
						<div>
							<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout">
						</div>
						<div class="clear"></div>
					</div><!--payment-->



            	</form>

            </div><!--col-->

        </div><!--row-->





    </div><!--container-->
    

</section>
