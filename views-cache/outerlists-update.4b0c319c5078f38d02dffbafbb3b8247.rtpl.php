<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard-menu");?>
            </div>
            <div class="col-md-9">
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
                    <form method="post" action="/dashboard/listas-de-fora/<?php echo htmlspecialchars( $outerlist["idouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desouterlist">Título</label>
                        <input type="text" class="form-control" id="desouterlist" name="desouterlist" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["desouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                        <div class="form-group">
                        <label for="dessite">Site</label>
                        <input type="text" class="form-control" id="dessite" name="dessite" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["dessite"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        </div>

                        <div class="form-group">
                        <label for="deslocation">Endereço</label>
                        <input type="text" class="form-control" id="deslocation" name="deslocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["deslocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="nrddd">DDD</label>
                        <input type="text" class="form-control" id="nrddd" name="nrddd" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="nrphone">Telefone</label>
                        <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
        

                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="nrcountryarea" name="nrcountryarea" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["nrcountryarea"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idouterlist" name="idouterlist" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $outerlist["idouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/listas-de-fora" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>