<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="register">
    
    <div class="container">
        


    	<div class="register-accounts-rows row">
    			
    		<div class="col-md-12 register-warn">
    			
    			<h1>Olá, <?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?><h1>

    			<p>Preencha com seus dados pessoais</p>


    			<p id="register-desdocument-warn">O CPF utilizado aqui deve ser o mesmo da conta bancária que irá receber os valores</p>

    		</div><!--col-->

    	</div><!--row-->






        <div class="register-accounts-rows row">
            

            <div class="col-md-6">

                <div id="banner1"></div>

                     

            </div><!--col-->

            <div class="col-md-6">
                
                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                

                <form action="/cadastrar/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="checkout" method="post" name="checkout">
                
	            	<p id="billing_address_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $account["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="CEP apenas com números" id="billing_cep_1" name="zipcode" class="input-text ">
						<!--<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/cadastrar" formmethod="get">-->
					</p>

					
					<p id="billing_address_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $account["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, rua, avenida" id="billing_address_1" name="desaddress" class="input-text ">
					</p>
					<p id="billing_number_1_field">
						<input type="text" value="<?php echo htmlspecialchars( $account["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
					</p>
					<p id="billing_address_2_field" class=" address-field">
						<input type="text" value="<?php echo htmlspecialchars( $account["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement" class="input-text ">
	                </p>
	                <p id="billing_district_field" data-o_class="">
						<input type="text" value="<?php echo htmlspecialchars( $account["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Bairro" id="billing_district" name="desdistrict" class="input-text ">
					</p>
					<p id="billing_city_field" data-o_class="">
						<input type="text" value="<?php echo htmlspecialchars( $account["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_city" name="descity" class="input-text ">
					</p>
					<p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
						<input type="text" id="billing_state" name="desstate" placeholder="UF" value="<?php echo htmlspecialchars( $account["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="input-text ">
					</p>


            </div><!--col-->

        </div><!--row-->



        <div class="register-accounts-rows row">
            

            <div class="col-md-6">


				<p id="payment_name_1_field">
					<input class="register-accounts-disabled" type="text" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome" id="payment_name_1" name="desperson" class="input-text" disabled>
				</p>


				<p id="payment_email_1_field">
					<input class="register-accounts-disabled" type="text" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="E-mail" id="payment_email_1" name="desemail" class="input-text" disabled>
				</p>

				<p id="payment_document_1_field">
					<input type="text" value="<?php echo htmlspecialchars( $account["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="CPF" id="payment_document_1" name="desdocument" class="input-text ">
				</p>
				

				<p id="payment_birth_1_field">
					<input type="text" value="<?php echo htmlspecialchars( $account["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nascimento" id="payment_birth_1" name="dtbirth" class="input-text ">
				</p>




				<div class="row">

					<div class="col-sm-3">
						<p id="payment_nrddd_1_field">
							<input type="text" value="<?php echo htmlspecialchars( $account["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="DDD" id="payment_nrddd_1_field" name="nrddd" class="input-text ">
						</p>
					</div>



					<div class="col-sm-9">
						<p id="payment_nrphone_1_field">
							<input type="text" value="<?php echo htmlspecialchars( $account["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Telefone" id="payment_nrphone_1_field" name="nrphone" class="input-text ">
						</p>
					</div>

				</div>



				<div class="clear"></div>

				<p>
					<input type="submit" value="Continuar" id="register-accounts-button" name="register-accounts-button">
				</p>

				<div id="payment_interms_1_field">
					
					<input type="checkbox" class="input-text" id="payment_interms_1" name="interms" value="1">
					<div id="payment_interms_1_text" for="payment_interms_1">Li e Concordo com os <a href="/termos-uso">Termos de Uso</a>, os <a href="/termos-lista">Termos da Lista de Presentes Virtuais</a> e a <a href="/politica-privacidade">Política de Privacidade</a>.</div id="">
				</div>

			</form>

            </div><!--col-->




            <div class="col-md-6">
                
                 <div id="banner2"></div>

            </div><!--col-->

        </div><!--row-->





    </div><!--container-->
    

</section>
