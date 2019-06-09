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

   


    



});//END ready