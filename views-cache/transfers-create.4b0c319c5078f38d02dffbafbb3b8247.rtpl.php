<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

    <div class="container-fluid">            
            

            
        <div class="row">

                


            <div class="col-md-3 dash-menu">


                <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-free");?>

                <?php }else{ ?>

                    <?php require $this->checkTemplate("dashboard-menu");?>

                <?php } ?>
                    

            </div><!--col-->




            <div class="col-md-9 dash-panel">


                <?php if( $success != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $error != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?> 

               <form method="post" action="/dashboard/transferencias/transferir-saldo">

                    <div class="row">
                        
                        <div class="col-md-9 dash-column">


                                

                            <!--<div class="dash-input-row">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="desbanknumber">Instituição Bancária</label>

                                  </div>

                                  <select form="dataBank" id="desbanknumber" name="desbanknumber" class="custom-select">

                                    <?php $counter1=-1;  if( isset($bankvalues) && ( is_array($bankvalues) || $bankvalues instanceof Traversable ) && sizeof($bankvalues) ) foreach( $bankvalues as $key1 => $value1 ){ $counter1++; ?>
                                        <option <?php if( $bankvalues["$counter1"]["value"] == $bank["desbanknumber"] ){ ?>selected<?php } ?> value="<?php echo htmlspecialchars( $bankvalues["$counter1"]["value"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $bankvalues["$counter1"]["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                    <?php } ?>

                                  </select>
                                
                                </div>

                            </div>-->



                            <div class="dash-input-row">

                                <label for="desbanknumber">Instituição Bancária</label>
                                <input type="text" class="form-control" id="desbanknumber" name="desbanknumber" value='<?php echo getBankName($bank["desbanknumber"]); ?>' disabled>

                            </div><!--dash-input-row-->







                            <!--<div class="dash-input-row input-date">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="desaccounttype">Tipo de Conta</label>

                                  </div>

                                  <select form="dataBank" id="desaccounttype" name="desaccounttype" class="custom-select">

                                    <option <?php if( $bank["desaccounttype"] === 'SAVING' ){ ?>selected<?php } ?> value="SAVING">Conta Poupança</option>
                                    <option <?php if( $bank["desaccounttype"] === 'CHECKING' ){ ?>selected<?php } ?> value="CHECKING">Conta Corrente</option>

                                  </select>

                                
                                </div>

                            </div>-->

                            


                            <div class="dash-input-row input-half">

                                <label for="desaccounttype">Tipo de Conta</label>
                                <input type="text" class="form-control" id="desaccounttype" name="desaccounttype" value='<?php if( $bank["desaccounttype"] == 'CHECKING' ){ ?>Conta Corrente<?php }else{ ?>Conta Poupança<?php } ?>' disabled>

                            </div><!--dash-input-row-->






                            <div class="row dash-input-row row-2-columns account-row">



                                <div class="col-md-9">

                                    <label for="desagencynumber">Agência</label>

                                    <div id="desagencynumber">

                                        <input type="text" class="form-control" id="desagencynumber" name="desagencynumber" value="<?php echo htmlspecialchars( $bank["desagencynumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>

                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-3">

                                    <label for="desagencycheck">Dígito Verificador</label>

                                    <div id="desagencycheck">

                                        <input type="text" class="form-control" id="desagencycheck" name="desagencycheck" value="<?php echo htmlspecialchars( $bank["desagencycheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                            </div><!--row-->










                            <div class="row dash-input-row row-2-columns account-row">



                                <div class="col-md-9">

                                    <label for="desaccountnumber">Número da Conta</label>

                                    <div id="desaccountnumber">

                                        <input type="text" class="form-control" id="desaccountnumber" name="desaccountnumber" value="<?php echo htmlspecialchars( $bank["desaccountnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>


                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-3">

                                    <label for="desaccountcheck">Dígito Verificador</label>

                                    <div id="desaccountcheck">

                                        <input type="text" class="form-control" id="desaccountcheck" name="desaccountcheck" value="<?php echo htmlspecialchars( $bank["desaccountcheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                            </div><!--row-->


                            






                            <div class="dash-input-row">


                                <label for="vlamount">Valor a transferir</label>
                                <input type="number" min="0.01" step="0.01" class="form-control" id="vlamount" name="vlamount">


                            </div><!--dash-input-row-->





                       

                        </div><!--col-md-6-->







                        <div class="col-md-3">
                            
                            
                            &nbsp;

                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-6">

                            <div class="dash-input-row input-footer">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                                <a href="/dashboard/painel-financeiro" class="btn btn-danger">Cancelar</a>

                            </div><!--dash-input-row-->
                            
                        </div><!--col-->



                        <div class="col-md-6">

                            &nbsp;
                            
                        </div><!--col-->



                    </div><!--row-->



                </form>


                <!--<select form="1" name="plano">
                    <option value="001">001 - Banco do Brasil S.A.</option>
                    <option value="003">003 - Banco da Amazônia S.A.</option>
                    <option value="004">004 - Banco do Nordeste do Brasil S.A. (BNB)</option>
                    <option value="021">021 - Banco do Estado do Espírito Santo S.A. (BANESTES)</option>
                    <option value="025">025 - Banco Alfa S.A.</option>
                    <option value="027">027 - Banco do Estado de Santa Catarina S.A.</option>
                    <option value="033">033 - Banco Santander S.A. (Santander Banespa)</option>
                    <option value="037">037 - Banco do Estado do Pará S.A. (BANPARA)</option>
                    <option value="041">041 - Banco do Estado do Rio Grande do Sul S.A. (BANRISUL)</option>
                    <option value="047">047 - Banco do Estado de Sergipe S.A. (BANESE)</option>
                    <option value="063">063 - Banco Ibi Banco Múltiplo S.A. (Banco Ibi)</option>
                    <option value="065">065 - Lemon Bank Banco Múltiplo S.A.</option>
                    <option value="069">069 - BPN Brasil Banco Múltiplo S.A. (BPN)</option>
                    <option value="070">070 - Banco de Brasília S.A. (BRB)</option>
                    <option value="077">077 - Banco Intermedium S.A.</option>
                    <option value="085">085 - Cooperativa Central de Crédito Urbano (CECRED)</option>
                    <option value="104">104 - Caixa Econômica Federal</option>
                    <option value="107">107 - Banco BBM S.A.</option>
                    <option value="136">136 - Confederação Nacional das Cooperativas Centrais (UNICRED)</option>
                    <option value="151">151 - Banco Nossa Caixa S.A.</option>
                    <option value="208">208 - Banco BTG Pactual S.A.</option>
                    <option value="212">212 - Banco Original S.A.</option>
                    <option value="215">215 - Banco Acomercial e de Investimento Sudameris S.A. (SUDAMERIS)</option>
                    <option value="229">229 - Banco Cruzeiro do Sul S.A.</option>
                    <option value="237">237 - Banco Bradesco S.A.</option>
                    <option value="252">252 - Banco Fininvest S.A.</option>
                    <option value="263">263 - Banco Cacique S.A.</option>
                    <option value="318">318 - Banco BMG S.A.</option>
                    <option value="341">341 - Banco Itaú S.A.</option>
                    <option value="356">356 - Banco ABN AMRO Real S.A.</option>
                    <option value="389">389 - Banco Mercantil do Brasil S.A.</option>
                    <option value="399">399 - HSBC Bank Brasil Banco Múltiplo S.A. </option>
                    <option value="409">409 - União de Bancos Brasileiros S.A. (UNIBANCO)</option>
                    <option value="422">422 - Banco Safra S.A.</option>
                    <option value="479">479 - Banco Itaubank S.A.</option>
                    <option value="623">623 - Banco Panamericano S.A.</option>
                    <option value="633">633 - Banco Rendimento S.A.</option>
                    <option value="655">655 - Banco Votorantim S.A.</option>
                    <option value="719">719 - Banco Internacional do Funchal S.A. (BANIF)</option>
                    <option value="745">745 - Banco Citibank S.A.</option>
                    <option value="748">748 - Banco Cooperativo Sicredi S.A.</option>
                    <option value="749">749 - Banco Simples S.A.</option>
                    <option value="756">756 - Banco Cooperativo do Brasil S.A. (BANCOOB)</option>
                </select>

                <form action="/criar-site-de-casamento"id="1">
                    <input type="submit">
                </form>-->
            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>





