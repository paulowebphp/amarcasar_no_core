<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                <?php if( $transferSuccess != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $transferSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $transferError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $transferError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>                
                <form method="post" action="/dashboard">
                    <div class="form-group">
                    <label for="desbanknumber">Instituição</label>
                    <input type="text" class="form-control" id="desbanknumber" name="desbanknumber" value="<?php echo htmlspecialchars( $bank["desbanknumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label for="desaccounttype">Tipo de Conta</label>
                    <input type="text" class="form-control" id="desaccounttype" name="desaccounttype" value="<?php echo htmlspecialchars( $bank["desaccounttype"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label for="desagencynumber">Agência Sem Dígito Verificador</label>
                    <input type="text" class="form-control" id="desagencynumber" name="desagencynumber" value="<?php echo htmlspecialchars( $bank["desagencynumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label for="desagencycheck">Dígito Verificador da Agência</label>
                    <input type="text" class="form-control" id="desagencycheck" name="desagencycheck" pvalue="<?php echo htmlspecialchars( $bank["desagencycheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    
                    <div class="form-group">
                    <label for="desaccountnumber">Conta Sem Dígito Verificador</label>
                    <input type="text" class="form-control" id="desaccountnumber" name="desaccountnumber" value="<?php echo htmlspecialchars( $bank["desaccountnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label for="desaccountcheck">Dígito Verificador da Conta</label>
                    <input type="text" class="form-control" id="desaccountcheck" name="desaccountcheck" value="<?php echo htmlspecialchars( $bank["desaccountcheck"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                    </div>
                    <div class="form-group">
                    <label for="vlamount">Valor a transferir</label>
                    <input type="text" class="form-control" id="vlamount" name="vlamount" value="<?php echo htmlspecialchars( $transfer["vlamount"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Realizar Transferência</button>
                </form>
            </div>
        </div>
    </div>
</div>