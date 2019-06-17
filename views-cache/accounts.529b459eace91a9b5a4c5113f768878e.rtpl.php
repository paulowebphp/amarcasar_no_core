<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="register">
    
    <div class="container">
        


    	<div class="register-accounts-rows row">
    			
    		<div class="col-md-12 register-warn">
    			
    			<h1>Olá, <?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?><h1>

    			<p>Preencha com seus dados pessoais</p>


    			<p id="register-desdocument-warn">O CPF utilizado aqui deve ser o mesmo da conta bancária que irá receber os valores</p>

    		</div><!--col-->

    	</div><!--row-->


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


        <div class="register-accounts-rows row">
            

            <div class="col-md-6">

                <div id="banner1"></div>

                     

            </div><!--col-->

            <div class="col-md-6">
                
                <div class="accounts-box">
                	
                	<form id="register-form" action="/cadastrar/<?php echo htmlspecialchars( $hash, ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="register" method="post" name="register">
                

                	<div id="payment_name_1_field">
					<input class="register-accounts-disabled" type="text" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome" id="payment_name_1" name="desperson" class="input-text" disabled>
					</div>


					<div id="payment_email_1_field">
						<input class="register-accounts-disabled" type="text" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="E-mail" id="payment_email_1" name="desemail" class="input-text" disabled>
					</div>

					<div id="payment_document_1_field">
						<input type="text" placeholder="CPF" id="payment_document_1" name="desdocument" class="input-text ">
					</div>
					

					<div class="row row-2-columns">

						<div class="col-sm-3">
							<p id="payment_nrddd_1_field">
								<input type="text" placeholder="DDD" id="payment_nrddd_1_field" name="nrddd" class="input-text ">
							</p>
						</div>



						<div class="col-sm-9">
							<p id="payment_nrphone_1_field">
								<input type="text" placeholder="Telefone" id="payment_nrphone_1_field" name="nrphone" class="input-text ">
							</p>
						</div>

					</div>

					<div id="payment_birth_1_field">
						<input type="date" placeholder="Nascimento" id="payment_birth_1" name="dtbirth" class="input-text ">
					</div>


                </div>
                

                

            </div><!--col-->

        </div><!--row-->



        <div class="register-accounts-rows row">
            

            <div class="col-md-6">


					<div id="billing_address_1_field">
						<input type="text" placeholder="CEP apenas com números" id="billing_cep_1" name="zipcode" class="input-text ">
						<!--<input type="submit" value="Atualizar CEP" id="place_order" class="button alt" formaction="/cadastrar" formmethod="get">-->
					</div>

					
					<div id="billing_address_1_field">
						<input type="text" placeholder="Logradouro, rua, avenida" id="billing_address_1" name="desaddress" class="input-text ">
					</div>
					<div id="billing_number_1_field">
						<input type="text" placeholder="Número" id="billing_address_1" name="desnumber" class="input-text ">
					</div>
					<div id="billing_address_2_field" class=" address-field">
						<input type="text" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement" class="input-text ">
		            </div>
		            <div id="billing_district_field">
						<input type="text" placeholder="Bairro" id="billing_district" name="desdistrict" class="input-text ">
					</div>
					

					<div class="row state-city">
						<div class="col-md-2">
							<label for="state">Estado</label>
						</div>
						
						<div class="col-md-10">
							<select id="state" form="register-form" name="desstate">
			                    <?php $counter1=-1;  if( isset($state) && ( is_array($state) || $state instanceof Traversable ) && sizeof($state) ) foreach( $state as $key1 => $value1 ){ $counter1++; ?>
			                    	<option value="<?php echo htmlspecialchars( $value1["idstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option> 
			                    <?php } ?>
			                </select>

						</div>
					</div>




					<div class="row state-city">
						<div class="col-md-2">
							<label for="city">Cidade</label>
						</div>
						
						<div class="col-md-10">
							<select id="city" form="register-form" name="descity">
			                    <?php $counter1=-1;  if( isset($city) && ( is_array($city) || $city instanceof Traversable ) && sizeof($city) ) foreach( $city as $key1 => $value1 ){ $counter1++; ?>
			                    	<option value="<?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option> 
			                    <?php } ?>
			                </select>

						</div>
					</div>




	                
	                


					


					<div class="clear"></div>

					<div>
						<input type="submit" value="Continuar" id="register-accounts-button" name="register-accounts-button">
					</div>

					<div id="payment_interms_1_field">
						
						<input type="checkbox" class="input-text" id="payment_interms_1" name="interms" value="1">
						<div id="payment_interms_1_text" for="payment_interms_1">Li e Concordo com os <a href="/termos-uso">Termos de Uso</a>, os <a href="/termos-lista">Termos da Lista de Presentes Virtuais</a> e a <a href="/politica-privacidade">Política de Privacidade</a>.</div>
					</div>

				</form>

            </div><!--col-->




            <div class="col-md-6">
                
                 <div id="banner2"></div>

            </div><!--col-->

        </div><!--row-->





    </div><!--container-->
    

</section>
