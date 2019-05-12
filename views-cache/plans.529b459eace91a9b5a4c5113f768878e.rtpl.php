<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">
.promo-area select option{
    color: black;
}   

.promo-area select{
    color: black;
}  

</style>>

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-angle-left"></i>

                    <p>Plano Free</p>
                   
                    <form action="/checkout" id="0" method="post">
                        <input type="hidden" name="plano" value="0">
                        <input type="submit">
                    </form>

                </div>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Básico</p>                   

                    <select form="1" name="plano">
                        <option value="103" selected="selected">3 meses</option> 
                        <option value="104">4 meses</option> 
                        <option value="106">6 meses</option> 
                        <option value="109" >9 meses</option> 
                        <option value="112">12 meses</option>
                    </select>

                    <form action="/checkout" id="1" method="post">
                        <input type="submit">
                    </form>


                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Intermediário</p>

                    <select form="2" name="plano">
                        <option value="203">3 meses</option> 
                        <option value="204">4 meses</option> 
                        <option value="206">6 meses</option> 
                        <option value="209" >9 meses</option> 
                        <option value="212">12 meses</option>
                    </select>

                    <form action="/checkout" id="2" method="post">
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-angle-left"></i>
                    <p>Plano Avançado</p>

                    <select form="3" name="plano">
                        <option value="303">3 meses</option> 
                        <option value="304">4 meses</option> 
                        <option value="306">6 meses</option> 
                        <option value="309" >9 meses</option> 
                        <option value="312">12 meses</option>
                    </select>

                    <form action="/checkout" id="3" method="post">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->



<!--<section class="row plans"> 


    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> 

        <div class="plan plan-free"> 

            <h2 class="plan-title">iCasei <strong>Trial</strong> <small>®</small></h2> <h3 class="plan-subtitle">Experimente, você vai amar!</h3> <div class="pricing"> <div class="currency"> <strong class="plots">&nbsp;</strong> <span class="coin">R$</span> </div> <span class="price">0</span> <span class="cents">,00</span> </div> <p class="description">Não se preocupe, seu cartão<br><strong>não será solicitado.</strong></p> <button class="btn-rounded" onclick="location.href='/criar-site-de-casamento';" data-tracking="Botão: Teste por 10 dias">Teste por 10 dias</button>

        </div>

     </div>






    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

        <div class="plan plan-smart"> 

            <div class="ribbon-wrapper"> <div class="ribbon">70% OFF</div> </div>

            <h2 class="plan-title">iCasei <strong>Smart</strong> <small>®</small></h2> 

            <h3 class="plan-subtitle">Plano básico (Site + <a href="https://suporte.icasei.com.br/hc/pt-br/articles/360004693292" target="_blank">App</a>)</h3> 

            <div class="pricing"> <div class="currency"> <strong class="plots">3x</strong> <span class="coin">R$</span> </div> <span class="price">5</span> <span class="cents">,79</span> </div> 


            <p class="description description-promo" style="display:block"><span class="full-price" style="text-decoration: line-through;">R$ 57,90</span> por <span class="full-price-promo">R$ 17,37</span> à vista</p> 


            <p class="description description-not-promo" style="display:none">ou <span class="full-price">R$ 57,90</span> à vista</p>

            <p class="description2">Selecione o período que deseja manter seu site no ar:</p> 

            <select class="period"> 

                <option selected="" id="smart-0" value="4" data-instalment="3" data-priceinst="19.30" data-priceinst-promo="5,79" data-price-promo="17,37" data-price="57,90" data-month="3"> 3 meses - 70% OFF </option> 
                <option id="smart-1" value="102" data-instalment="4" data-priceinst="17.48" data-priceinst-promo="5,24" data-price-promo="20,97" data-price="69,90" data-month="4"> 4 meses - 70% OFF </option> 
                <option id="smart-2" value="3" data-instalment="6" data-priceinst="15.48" data-priceinst-promo="4,65" data-price-promo="27,87" data-price="92,90" data-month="6"> 6 meses - 70% OFF </option> 
                <option id="smart-3" value="101" data-instalment="9" data-priceinst="12.88" data-priceinst-promo="3,86" data-price-promo="34,77" data-price="115,90" data-month="9"> 9 meses - 70% OFF </option> 
                <option id="smart-4" value="2" data-instalment="12" data-priceinst="11.66" data-priceinst-promo="3,50" data-price-promo="41,97" data-price="139,90" data-month="12"> 12 meses - 70% OFF </option> 

            </select> 

            <button type="button" class="btn-rounded" data-tracking="Botão: Comece já" onclick="goToPlan('smart', 'Página: Planos / Botão: Comece já (smart)')">Comece já</button>



        </div> 

    </div>





    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="plan plan-classic"> <div class="ribbon-wrapper"> <div class="ribbon">60% OFF</div> </div> <h2 class="plan-title">iCasei <strong>Classic</strong> <small>®</small></h2> <h3 class="plan-subtitle">O preferido (Site + <a href="https://suporte.icasei.com.br/hc/pt-br/articles/360004693292" target="_blank">App</a>)</h3> <div class="pricing"> <div class="currency"> <strong class="plots">3x</strong> <span class="coin">R$</span> </div> <span class="price">13</span> <span class="cents">,99</span> </div> <p class="description description-promo" style="display:block"><span class="full-price" style="text-decoration: line-through;">R$ 104,90</span> por <span class="full-price-promo">R$ 41,96</span> à vista</p> <p class="description description-not-promo" style="display:none">ou <span class="full-price">R$ 104.90</span> à vista</p> <p class="description2">Selecione o período que deseja manter seu site no ar:</p> <select class="period"> <option selected="" id="classic-0" value="7" data-instalment="3" data-priceinst="34.97" data-priceinst-promo="13,99" data-price-promo="41,96" data-price="104,90" data-month="3"> 3 meses - 60% OFF </option> <option id="classic-1" value="104" data-instalment="4" data-priceinst="28.98" data-priceinst-promo="11,59" data-price-promo="46,36" data-price="115,90" data-month="4"> 4 meses - 60% OFF </option> <option id="classic-2" value="6" data-instalment="6" data-priceinst="23.32" data-priceinst-promo="9,33" data-price-promo="55,96" data-price="139,90" data-month="6"> 6 meses - 60% OFF </option> <option id="classic-3" value="103" data-instalment="9" data-priceinst="18.10" data-priceinst-promo="7,24" data-price-promo="65,16" data-price="162,90" data-month="9"> 9 meses - 60% OFF </option> <option id="classic-4" value="5" data-instalment="12" data-priceinst="16.49" data-priceinst-promo="6,60" data-price-promo="79,16" data-price="197,90" data-month="12"> 12 meses - 60% OFF </option> </select> <button type="button" class="btn-rounded" data-tracking="Botão: Comece já" onclick="goToPlan('classic', 'Página: Planos / Botão: Comece já (classic)')">Comece já</button> </div> </div> 




    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="plan plan-black"> <div class="ribbon-wrapper"> <div class="ribbon">50% OFF</div> </div> <h2 class="plan-title">iCasei <strong>Black</strong> <small>®</small></h2> <h3 class="plan-subtitle">All inclusive (Site + <a href="https://suporte.icasei.com.br/hc/pt-br/articles/360004693292" target="_blank">App</a>)</h3> <div class="pricing"> <div class="currency"> <strong class="plots">3x</strong> <span class="coin">R$</span> </div> <span class="price">30</span> <span class="cents">,98</span> </div> <p class="description description-promo" style="display:block"><span class="full-price" style="text-decoration: line-through;">R$ 185,90</span> por <span class="full-price-promo">R$ 92,95</span> à vista</p> <p class="description description-not-promo" style="display:none">ou <span class="full-price">R$ 185.90</span> à vista</p> <p class="description2">Selecione o período que deseja manter seu site no ar:</p> <select class="period"> <option selected="" id="black-0" value="10" data-instalment="3" data-priceinst="61.97" data-priceinst-promo="30,98" data-price-promo="92,95" data-price="185,90" data-month="3"> 3 meses - 50% OFF </option> <option id="black-1" value="106" data-instalment="4" data-priceinst="52.23" data-priceinst-promo="26,11" data-price-promo="104,45" data-price="208,90" data-month="4"> 4 meses - 50% OFF </option> <option id="black-2" value="9" data-instalment="6" data-priceinst="38.82" data-priceinst-promo="19,41" data-price-promo="116,45" data-price="232,90" data-month="6"> 6 meses - 50% OFF </option> <option id="black-3" value="105" data-instalment="9" data-priceinst="28.43" data-priceinst-promo="14,22" data-price-promo="127,95" data-price="255,90" data-month="9"> 9 meses - 50% OFF </option> <option id="black-4" value="8" data-instalment="12" data-priceinst="23.33" data-priceinst-promo="11,66" data-price-promo="139,95" data-price="279,90" data-month="12"> 12 meses - 50% OFF </option> </select> <button type="button" class="btn-rounded" data-tracking="Botão: Comece já" onclick="goToPlan('black', 'Página: Planos / Botão: Comece já (black)')">Comece já</button> </div> </div> 



</section>-->