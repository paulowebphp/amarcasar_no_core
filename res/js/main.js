$(document).ready(function(){




    $("#btn-bars").on("click", function(){
        
        $("#header-mobile").toggleClass("open-menu");

    });



    $("#menu-mobile-mask, .btn-close").on("click", function(){

        $("#header-mobile").removeClass("open-menu");


    });

    


    


    



});//END ready