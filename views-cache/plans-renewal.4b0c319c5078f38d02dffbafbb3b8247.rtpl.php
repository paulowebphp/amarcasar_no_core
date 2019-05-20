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
            
            <div class="col-md-12 col-sm-12">
                <div class="single-promo promo2">
                    <i class="fa fa-angle-left"></i>
                    <p>Renovar Plano</p>                   

                    <select form="planRenewal" name="plano">

                        <option value="<?php echo htmlspecialchars( $wirecard["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">1 mês</option> 
                        <option value="<?php echo htmlspecialchars( $wirecard["1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" selected="selected">3 meses</option> 
                        <option value="<?php echo htmlspecialchars( $wirecard["2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">4 meses</option> 
                        <option value="<?php echo htmlspecialchars( $wirecard["3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">6 meses</option> 
                        <option value="<?php echo htmlspecialchars( $wirecard["4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >9 meses</option> 
                        <option value="<?php echo htmlspecialchars( $wirecard["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">12 meses</option>
                    </select>

                    <form action="/dashboard/meu-plano/renovar/checkout"id="planRenewal">
                        <input type="submit">
                    </form>


                </div>
            </div>
            
            
        </div>
    </div>
</div> <!-- End promo area -->
