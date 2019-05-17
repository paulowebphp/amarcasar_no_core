<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard-menu");?>
            </div>
            <div class="col-md-9">
                <?php if( $rsvpconfigSuccess != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $rsvpconfigSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $rsvpconfigError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $rsvpconfigError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>                
                <form method="post" action="/dashboard/rsvp/configurar">

                    <div class="form-group">
                    <label for="innameconfirm">Confirmar Nome</label>
                    <input type="text" class="form-control" id="innameconfirm" name="innameconfirm" value="<?php echo htmlspecialchars( $rsvpconfig["innameconfirm"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="inmaxadultsconfig">Quantidade Máxima de Adults para Todos os Convidados</label>
                    <input type="text" class="form-control" id="inmaxadultsconfig" name="inmaxadultsconfig" value="<?php echo htmlspecialchars( $rsvpconfig["inmaxadultsconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="inmaxchildrenconfig">Quantidade Máxima de Crianças para Todos os Convidados</label>
                    <input type="text" class="form-control" id="inmaxchildrenconfig" name="inmaxchildrenconfig" value="<?php echo htmlspecialchars( $rsvpconfig["inmaxchildrenconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="inaccompaniesconfirm">Confirmar Nome dos Acompanhantes</label>
                    <input type="text" class="form-control" id="inaccompaniesconfirm" name="inaccompaniesconfirm" value="<?php echo htmlspecialchars( $rsvpconfig["inaccompaniesconfirm"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                    <div class="form-group">
                    <input type="hidden" class="form-control" id="idrsvpconfig" name="idrsvpconfig" value="<?php echo htmlspecialchars( $rsvpconfig["idrsvpconfig"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>