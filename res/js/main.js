$(document).ready(function(){


/******************** MENU SALSICHA ***************************************************/

$("#btn-bars").on("click", function(){
    
    $("#header-mobile").toggleClass("open-menu");

});//end on



$("#menu-mobile-mask, .btn-close").on("click", function(){

    $("#header-mobile").removeClass("open-menu");


});//end on




$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});





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












$(document).on('change', '#state', function(e){

	var idstate = $(this).val();


	 $.ajax({

        type:"GET",
        data: "idstate="+idstate,
        url: "/state/city"

    }).done( function( data ) {



        var city = '';

        $.each($.parseJSON(data), function(key,value){

            city += '<option value="'+ value.descity+'">' + value.descity + '</option>';
        });

        $('#city').html(city);


    }).fail(function(data){

        console.error("Houve um erro no carregamento das cidades devido a uma lentidão na internet, tente novamente");

    });



});






/*$('#state').on('change', function(e){

	var idstate = $(this).val();


	 $.ajax({

        type:"GET",
        data: "idstate="+idstate,
        url: "/state/city"

    }).done( function( data ) {


        var city = '';

        $.each($.parseJSON(data), function(key,value){

            city += '<option value="'+ value.descity+'">' + value.descity + '</option>';
        });

        $('#city').html(city);


    }).fail(function(data){

        console.error("Houve um erro no carregamento das cidades devido a uma lentidão na internet, tente novamente");

    });



});*/





 









let ownCard = `<div class="payment-block">
					          					
			<div id="payment_cardnumber_1_field">
			<input type="text" placeholder="Número do Cartão" id="payment_cardnumber_1" name="descardcode_number" class="input-text ">
		</div>

		<div id="payment_cardname_1_field">
			<input type="text" placeholder="Nome tal como está impresso no cartão" id="payment_cardname_1" name="desholdername" class="input-text own-card-font-size">
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
			<input type="text" placeholder="Nome como está no cartão" id="payment_cardname_1" name="desholdername" class="input-text ">
		</div>


		<div class="row row-2-columns">

			<div class="col-md-5">
				<div id="payment_cardmonth_1_field">
					<input type="text" placeholder="Mês" id="payment_cardmonth_1" name="descardcode_month" class="input-text ">
					
				</div>
			</div>



			<div class="col-md-7">
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



	</div>`;





$('#options-payments1').on('click', function(){


	html = `<div class="row">

		
		<div class="col-md-12">

			`+ownCard+`	

		</div>

		

	</div>

	`;



	$(this).addClass('options-selected');

	$('#options-payments2').removeClass('options-selected');
	$('#options-payments3').removeClass('options-selected');
	$('#installment').css('display','block');
	$('#installment-title').css('display','block');
	$('#payment-inputs').html(html);
	$('#checkout').css('min-height', '1000px');

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
	$('#payment-inputs').html(html);
	$('#checkout').css('min-height', '1000px');

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
									<input type="text" placeholder="DDD" id="payment_nrholderddd_1" name="nrholderddd" class="input-text ">
								</div>
							</div>



							<div class="col-md-7">
								<div id="payment_nrphone_1_field">
									<input type="text" placeholder="Telefone" id="payment_nrholderphone_1" name="nrholderphone" class="input-text ">
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
							<input type="text" placeholder="CEP do Titular" id="billing_cep_1" name="zipcode" class="input-text ">
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
								<label class="checkout-label for="city">Cidade</label>
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

					`+thirdPartyCard+`

				</div>


			</div>`;

	$(this).addClass('options-selected');
	$('#options-payments1').removeClass('options-selected');
	$('#options-payments2').removeClass('options-selected');
	$('#installment').css('display','block');
	$('#installment-title').css('display','block');
	$('#payment-inputs').html(html);
	$('#checkout').css('min-height', '1000px');

});







$(document).on('mouseover', '#dtbirth-field', function(e){


	$("#dtbirth-warn").fadeIn();

});


$(document).on('mouseleave', '#dtbirth-field', function(e){


	$("#dtbirth-warn").fadeOut();

});










});//END ready