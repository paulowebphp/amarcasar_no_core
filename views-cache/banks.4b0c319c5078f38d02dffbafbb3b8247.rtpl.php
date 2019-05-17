<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard-menu");?>
            </div>
            <div class="col-md-9">
                <?php if( $bankSuccess != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $bankSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $bankError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $bankError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>                
                <form id="dataBank" method="post" action="/dashboard/conta-bancaria">

                    <div class="form-group">
                        <label for="desbanknumber">Instituição Bancária</label>
                        <div class="clear"></div>
                        <select id="desbanknumber" form="dataBank" name="desbanknumber">

                            <?php $counter1=-1;  if( isset($bankvalues) && ( is_array($bankvalues) || $bankvalues instanceof Traversable ) && sizeof($bankvalues) ) foreach( $bankvalues as $key1 => $value1 ){ $counter1++; ?>
                            <option <?php if( $bankvalues["$counter1"]["value"] === $bank["desbanknumber"] ){ ?>selected<?php } ?> value="<?php echo htmlspecialchars( $bankvalues["$counter1"]["value"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $bankvalues["$counter1"]["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                            <?php } ?>


                           
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="desaccounttype">Instituição Bancária</label>
                        <div class="clear"></div>
                        <select id="desaccounttype" form="dataBank" name="desaccounttype">
                            <option <?php if( $bank["desaccounttype"] === 'SAVING' ){ ?>selected<?php } ?> value="SAVING">Conta Poupança</option>
                            <option <?php if( $bank["desaccounttype"] === 'CHECKING' ){ ?>selected<?php } ?> value="CHECKING">Conta Corrente</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="desagencynumber">Agência Sem o Dígito Verificador</label>
                    <input type="text" class="form-control" id="desagencynumber" name="desagencynumber" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bank["desagencynumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="desagencycheck">Dígito Verificador da Agência</label>
                    <input type="text" class="form-control" id="desagencycheck" name="desagencycheck" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $bank["desagencycheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="desaccountnumber">Número da Conta sem o Dígito Verificador</label>
                    <input type="text" class="form-control" id="desaccountnumber" name="desaccountnumber" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $bank["desaccountnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group">
                    <label for="desaccountcheck">Dígito Verificador da Conta</label>
                    <input type="text" class="form-control" id="desaccountcheck" name="desaccountcheck" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $bank["desaccountcheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>


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





