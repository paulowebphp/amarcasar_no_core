<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">
.promo-area select option{
    color: black;
}   

.promo-area select{
    color: black;
}  
</style>

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-angle-left"></i>

                    <p>Plano Free</p>
                   
                    <form action="/criar-site-de-casamento"id="0">
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

                    <form action="/criar-site-de-casamento"id="1">
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

                    <form action="/criar-site-de-casamento"id="2">
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

                    <form action="/criar-site-de-casamento"id="3">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->
