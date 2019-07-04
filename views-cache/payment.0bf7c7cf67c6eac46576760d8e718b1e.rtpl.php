<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">

body{
    font-size: 1rem;
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: <?php if( $customstyle["desfontfamilytext"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>;
}

a:hover{
    color: <?php if( $customstyle["descolorlinkhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorlinkhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}

header {
    height: 130px;
    z-index: 2;
    position: relative;
    box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 30px 1px rgba(0,0,0,0.75);
}

header #domain-dropdown-menu a:hover{
    color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
header .shopping-item a:hover {
    color: <?php if( $customstyle["descolortext"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
header .shopping-item:hover {
    background: none repeat scroll 0 0 <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    border-color: <?php if( $customstyle["descolorheaderhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
}
header .container-fluid {
    width: 100%;
    padding: 2%  5%;
    position: relative;
}
header #menu-mobile{
  display: none;
}


/*header #header-mobile.open-menu #menu-mobile-mask
{
  display: none;
}*/
header #menu-condensed
{
  display: none;
}

#template {
    background: url("/res/images/template/banner/banner1.jpg") no-repeat center;
    background-size: cover;
    width: 100%;
    position: relative;
    /*top: -100px;  */
}
#frame{
    background: url("/res/images/frame/frame1.png") no-repeat center;
    background-size: contain;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    margin: 0 auto;
    height: 400px;
}
.section-title{
    margin-bottom: 10%;
}
section h1{
    color: <?php if( $customstyle["descolorh1"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh1"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'    <?php } ?>';
}

section h2{
    color: <?php if( $customstyle["descolorh2"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh2"] != '' ){ ?>'<?php echo htmlspecialchars( $customstyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'<?php }else{ ?>'Norican'<?php } ?>';
}

section h3{
    color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh3"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';
}
.section-title hr{
    width: 10%;
    height: 10px;
    background-color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}
.light-button button{
  background-color: #fff;
  border: none;
  color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>
}
section h4{
    color: <?php if( $customstyle["descolorh4"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh4"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}
section h5{
    color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh5"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'Norican'<?php } ?>';


}
section h6{
    color: <?php if( $customstyle["descolorh6"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
    font-family: '<?php if( $customstyle["desfontfamilyh6"] != '' ){ ?><?php echo htmlspecialchars( $customstyle["desfontfamilyh6"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>'OpenSans'<?php } ?>';
}
.card-title span{
  font-size: 1.5rem;
  font-weight: 500;
  color: <?php if( $customstyle["descolorh5"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh5"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}

.card-title hr{
    width: 20%;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    background-color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>; 
}
.order-total{
    color: <?php if( $customstyle["descolorh3"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#333333<?php } ?>;
}

footer{
    padding: 5% 15% 5% 15%;
    font-size: 24px;
    background-color: <?php if( $customstyle["desbgcolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#DD716F<?php } ?>;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#FFFFFF<?php } ?>;
}
footer .container{ 
    width: 100%     
}
footer a{
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item{
    margin: 2% 0;
    background: none;
    color: <?php if( $customstyle["descolorfooter"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer a:hover{
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
footer .list-group-item:hover{
    background: none;
    color: <?php if( $customstyle["descolorfooterhover"] != '' ){ ?>#<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>#F7D9E1<?php } ?>;
}
</style>



<section class="domain domain-cart">

    <div class="container">            
            
        
            
            <div class="order-box light-box">




                <div class="row section-row">
                    
                    <div class="col-md-12">

                        <div class="section-title">
                            

                            <h3>
                                Presente Virtual enviado!
                            </h3>
                            <hr>


                        </div>
                        
                        <?php if( $error != '' ){ ?>
                            <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                        <?php } ?>

                    </div><!--col-->

                </div><!--row-->






                <div class="row section-row">
                    
                    <div class="col-md-12">

                        <div class="section-subtitle">
                            

                            <span>
                                Muito obrigado, <strong><?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>,
                                você enviou seu presente para o casal
                            </span>
                                
                            <div class="subtitle-couple-name">
                                <h5><?php echo htmlspecialchars( $user["desnick"], ENT_COMPAT, 'UTF-8', FALSE ); ?> & <?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                            </div>
                            



                        </div>
                        

                        
                    </div><!--col-->

                </div><!--row-->









            
                <div class="row section-row">
                
                    <div class="col-md-12">
                         
 
                            
                            <table align="center" cellpadding="15" cellspacing="10">
                                <thead align="center" >
                                    <tr>
                                        <th>#</th>
                                        <th>Presente</th>
                                        <th>Valor Unitário</th>
                                        <th>Qtd</th>
                                        <th>Valor Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td>
                                            <?php echo htmlspecialchars( $counter1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                                        </td>
                                        <td>
                                            R$ <?php echo formatPrice($value1["vlprice"]); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td>
                                            R$ <?php echo formatPrice($value1["vltotal"]); ?>
                                        </td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5"></td>
                                    </tr>
                                       
                                    <tr>
                                        <td colspan="4" align="right">Valor Total</td>
                                        <td><strong><span class="order-total">R$ <?php echo formatPrice($order["vltotal"]); ?></span></strong></td>
                                    </tr>
                                    
                                </tfoot>
                            </table>
                    
                   
                    </div><!--col-->
                
                </div><!--row-->

                <div class="row section-row">
                    
                    <div class="col-md-12 text-center">
                        
                        <div class="order-info">
                            
                            <div>
                                <span>Data da Compra:</span> <?php echo formatDate($order["dtregister"]); ?>
                            </div>
                            <div>
                                <span>ID Pagamento:</span>  <?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                            <div>
                                <span>Comprador:</span>  <?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                            <div>
                                <span>Telefone:</span>  <?php echo htmlspecialchars( $order["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>
                            <div>
                                <span>E-mail:</span>  <?php echo htmlspecialchars( $order["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                            </div>

                        </div>
                        

                    </div><!--col-->

                    

                </div><!--row-->

                





                <div class="row section-row">
                    
                    <div class="col-md-6">
                        

                        &nbsp;

                    </div><!--col-->

                    <div style="font-size: 0.7rem; background-color: #ddd; border-radius: 4px; margin-top: 10%;" class="col-md-6">
                            *Espaço reservado para testes*<br>

                            ID Payment: <b><?php echo htmlspecialchars( $order["idpayment"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Code Payment: <b><?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            <?php if( $order["intypedoc"] === '0'  ){ ?>CPF<?php }else{ ?>CNPJ<?php } ?>:  <b><?php echo htmlspecialchars( $order["desdocument"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Customer ID: <b><?php echo htmlspecialchars( $order["descustomercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Card ID: <b><?php echo htmlspecialchars( $order["descardcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Order ID: <b><?php echo htmlspecialchars( $order["desordercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>
                            Payment ID: <b><?php echo htmlspecialchars( $order["despaymentcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b><br>

                       

                    </div><!--col-->

                </div><!--row-->


            

            </div><!--cart-box-->







    </div><!--container-->

</section>



