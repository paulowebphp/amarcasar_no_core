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

 





$('#options-payments1').on('click', function(){

	let html = `<div>
				<div>
					<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout">
				</div>
				<div class="clear"></div>
			</div>`;

	$('#options-payments2').toggleClass('options-selected');
	$('#options-payments1').addClass('options-selected');

	$('#payment-inputs').html(html);


});



let card = `<div class="payment-block">
					          					
			<div id="payment_cardnumber_1_field">
			<input type="text" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
		</div>

		<div id="payment_cardname_1_field">
			<input type="text" placeholder="Nome tal como está impresso no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
		</div>


		<div class="row">

			<div class="col-md-3">
				<div id="payment_cardmonth_1_field">
					<input type="text" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
					
				</div>
			</div>



			<div class="col-md-9">
				<div id="payment_cardyear_1_field">
					<input type="text" placeholder="Ano" id="payment_cardyear_1" name="descardcode_year" class="input-text ">
					
				</div>
			</div>

		</div>



		<div id="payment_cardcvc_1_field">
			<input type="text" placeholder="Código de Segurança" id="payment_cardcvc_1" name="descardcode_cvc" class="input-text ">
		</div>		


		<select id="installment" form="checkout" name="installment">
            <option value="1" selected="selected">1 x - </option> 
            <option value="2">2 x - </option> 
            <option value="3">3 x - </option> 
            <option value="4" >4 x - </option> 
            <option value="5">5 x - </option>
            <option value="6">6 x - </option>
        </select>





		<div>
			<div>
				<input id="checkout-button" type="submit" value="Efetuar Pagamento" name="checkout">
			</div>
			<div class="clear"></div>
		</div><!--payment-->


	</form>

	</div>`;

$('#options-payments2').on('click', function(){

	$('#options-payments2').toggleClass('options-selected');
	$('#payment-inputs').html(card);

});





$('#options-payments3').on('click', function(){

	let html = `<div class="payment-warn">
    				

				<p>Preencha com os dados do titular do cartão!</p>


				<p id="checkout-desdocument-warn">Sabemos que é chato, mas pedimos que nos ajude a nos proteger de compras fraudulentas, e preencha com os dados exatos do titular do cartão de crédito, inclusive o endereço!</p>

			</div>

			<div class="payment-block">
				                				
				<form id="checkout" action="/checkout/{$hash}" class="checkout" method="post" name="checkout">


				<div id="payment_holdername_1_field">
				<input type="text" placeholder="Nome do Titular do Cartão" id="payment_holdername_1" name="desholdername" class="input-text">
				</div>


				<div class="row">

					<div class="col-md-3">
						<div id="payment_inholdertypedoc_1_field">
							<input type="text" placeholder="Tipo" id="payment_inholdertypedoc_1" name="inholdertypedoc" class="input-text ">
							
						</div>
					</div>



					<div class="col-md-9">
						<div id="payment_holderdocument_1_field">
							<input type="text" placeholder="Documento" id="payment_holderdocument_1" name="desholderdocument" class="input-text ">
						</div>
					</div>

				</div>	



				

				<div id="payment_holderbirth_1_field">
					<input type="text" placeholder="Nascimento" id="payment_holderbirth_1" name="dtholderbirth" class="input-text ">
				</div>

				<div class="row">

					<div class="col-md-3">
						<div id="payment_nrddd_1_field">
							<input type="text" placeholder="DDD" id="payment_nrholderddd_1" name="nrholderddd" class="input-text ">
						</div>
					</div>



					<div class="col-md-9">
						<div id="payment_nrphone_1_field">
							<input type="text" placeholder="Telefone" id="payment_nrholderphone_1" name="nrholderphone" class="input-text ">
						</div>
					</div>

				</div>

			</div><!--payment-block--->

			


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

			</div>`+card;

	$('#options-payments3').toggleClass('options-selected');

	$('#payment-inputs').html(html);

});










});//END ready