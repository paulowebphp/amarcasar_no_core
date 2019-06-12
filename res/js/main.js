$(document).ready(function(){


/******************** MENU SALSICHA ***************************************************/

$("#btn-bars").on("click", function(){
    
    $("#header-mobile").toggleClass("open-menu");

});//end on



$("#menu-mobile-mask, .btn-close").on("click", function(){

    $("#header-mobile").removeClass("open-menu");


});//end on







/******************** PLANS ***************************************************/


$('#plan1').on('change', function(){

	let vlsaleprice = $("option:selected", this).attr('data-vlsaleprice');
	$('#plan1-vlsaleprice').html('R$ '+vlsaleprice.replace('.',','));

	let vlinteger = $("option:selected", this).attr('data-vlinteger');
	$('#plan1-vlinteger').html(vlinteger);

	let vldecimal = $("option:selected", this).attr('data-vldecimal');
	$('#plan1-vldecimal').html(','+vldecimal);


});//end on




$('#plan2').on('change', function(){

	let vlsaleprice = $("option:selected", this).attr('data-vlsaleprice');
	$('#plan2-vlsaleprice').html('R$ '+vlsaleprice.replace('.',','));

	let vlinteger = $("option:selected", this).attr('data-vlinteger');
	$('#plan2-vlinteger').html(vlinteger);

	let vldecimal = $("option:selected", this).attr('data-vldecimal');
	$('#plan2-vldecimal').html(','+vldecimal);


});//end on




$('#plan3').on('change', function(){

	let vlsaleprice = $("option:selected", this).attr('data-vlsaleprice');
	$('#plan3-vlsaleprice').html('R$ '+vlsaleprice.replace('.',','));

	let vlinteger = $("option:selected", this).attr('data-vlinteger');
	$('#plan3-vlinteger').html(vlinteger);

	let vldecimal = $("option:selected", this).attr('data-vldecimal');
	$('#plan3-vldecimal').html(','+vldecimal);


});//end on












$('#state').change(function(e){

	var idstate = $(this).val();


	 $.ajax({

        type:"GET",
        data: "idstate="+idstate,
        url: "/state/city"

    }).done( function( data ) {


        var city = '';

        $.each($.parseJSON(data), function(key,value){

            city += '<option value="'+ value.idcity+'">' + value.descity + '</option>';
        });

        $('#city').html(city);


    }).fail(function(data){

        console.error("Houve um erro no carregamento das cidades devido a uma lentidão na internet, tente novamente");

    });



});















 







let formHeader = ``;



let ownCard = `<div class="payment-block">
					          					
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

	</div>`;






	let thirdPartyCard = `<div class="payment-block">
					          					
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
				<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout-third-party-card">
			</div>
			<div class="clear"></div>
		</div><!--payment-->


		</form>

	</div>`;





$('#options-payments1').on('click', function(){


	html = `<div class="row">

		
		<div class="col-md-12">

			`+formHeader+ownCard+`	

		</div>

		

	</div>

	`;



	$(this).addClass('options-selected');

	$('#options-payments2').removeClass('options-selected');
	$('#options-payments3').removeClass('options-selected');
	$('#installment').css('display','block');
	$('#installment-title').css('display','block');
	$('#payment-inputs').html(html);
	$('#checkout').css('min-height', '1200px');

});











$('#options-payments2').on('click', function(){

	let html = `<div class="payment-block">
				
				<div>
					<input id="checkout-button" type="submit" value="Gerar Boleto" name="checkout-boleto">
				</div>
				<div class="clear"></div>
				</form>
			</div>`;

	$(this).addClass('options-selected');
	$('#options-payments1').removeClass('options-selected');
	$('#options-payments3').removeClass('options-selected');
	$('#installment').css('display','none');
	$('#installment-title').css('display','none');
	$('#payment-inputs').html(formHeader+html);
	$('#checkout').css('min-height', '1200px');

});








$('#options-payments3').on('click', function(){

	let html = `<div class="row">

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
				                				
						
						<div id="payment_holdername_1_field">
						<input type="text" placeholder="Nome do Titular do Cartão" id="payment_holdername_1" name="desholdername" class="input-text">
						</div>


						<div class="row">

							<div class="col-md-4">
								<div id="payment_inholdertypedoc_1_field">
									<input type="text" placeholder="Tipo" id="payment_inholdertypedoc_1" name="inholdertypedoc" class="input-text ">
									
								</div>
							</div>



							<div class="col-md-8">
								<div id="payment_holderdocument_1_field">
									<input type="text" placeholder="Documento" id="payment_holderdocument_1" name="desholderdocument" class="input-text ">
								</div>
							</div>

						</div>	



						

						<div id="payment_holderbirth_1_field">
							<input type="text" placeholder="Nascimento" id="payment_holderbirth_1" name="dtholderbirth" class="input-text ">
						</div>

						<div class="row">

							<div class="col-md-4">
								<div id="payment_nrddd_1_field">
									<input type="text" placeholder="DDD" id="payment_nrholderddd_1" name="nrholderddd" class="input-text ">
								</div>
							</div>



							<div class="col-md-8">
								<div id="payment_nrphone_1_field">
									<input type="text" placeholder="Telefone" id="payment_nrholderphone_1" name="nrholderphone" class="input-text ">
								</div>
							</div>

						</div>

					</div><!--payment-block--->

				</div>

				<div class="col-md-4">

					<div class="payment-block">
				
						<div id="billing_cep_1_field">
							<input type="text" placeholder="CEP do Titular do Cartão" id="billing_cep_1" name="zipcode" class="input-text ">
							<!--<input type="submit" Atualizar CEP" id="place_order" class="button alt" formaction="/checkout" formmethod="get">-->
						</div>

						<div id="billing_holderaddress_1_field" class="form-row form-row-wide holderaddress-field validate-required">
							<input type="text" placeholder="Logradouro, rua, avenida" id="billing_holderaddress_1" name="desholderaddress" class="input-text ">
						</div>
						<div id="billing_holdernumber_1_field" class="form-row form-row-wide holdernumber-field validate-required">
							<input type="text" placeholder="Número" id="billing_address_1" name="desholdernumber" class="input-text ">
						</div>
						<div id="billing_desholdercomplement_1_field" class="form-row form-row-wide address-field">
							<input type="text" placeholder="Complemento (opcional)" id="billing_desholdercomplement_1" name="desholdercomplement" class="input-text ">
		                </div>
		                <div id="billing_holderdistrict_field" data-o>
							<input type="text" placeholder="Bairro" id="billing_holderdistrict" name="desholderdistrict" class="input-text ">
						</div>
						<div id="billing_holdercity_field" data-o>
							<input type="text" placeholder="Cidade" id="billing_holdercity" name="desholdercity" class="input-text ">
						</div>
						<div id="billing_holderstate_field" data-o>
							<input type="text" placeholder="UF" id="billing_holderstate" name="desholderstate" class="input-text ">
						</div>

					</div>


				</div>

			

				


				<div class="col-md-4">

					`+thirdPartyCard+`

				</div>


			</div>`;

	$(this).addClass('options-selected');
	$('#options-payments1').removeClass('options-selected');
	$('#options-payments2').removeClass('options-selected');
	$('#installment').css('display','block');
	$('#installment-title').css('display','block');
	$('#payment-inputs').html(formHeader+html);
	$('#checkout').css('min-height', '1200px');

});















});//END ready