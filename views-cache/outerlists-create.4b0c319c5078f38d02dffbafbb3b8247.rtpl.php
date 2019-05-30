<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
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
                    <form method="post" action="/dashboard/listas-de-fora/adicionar">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui">
                        </div>


                        <div class="form-group">
                        <label for="desouterlist">Título</label>
                        <input type="text" class="form-control" id="desouterlist" name="desouterlist" placeholder="Digite o nome aqui">
                        </div>

                        
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="dessite">Site</label>
                        <input type="text" class="form-control" id="dessite" name="dessite" placeholder="Digite o nome aqui">
                        </div>
                        

                        <div class="form-group">
                        <label for="deslocation">Endereço</label>
                        <input type="text" class="form-control" id="deslocation" name="deslocation" placeholder="Digite o nome aqui">
                        </div>

                        <div class="form-group">
                        <label for="nrddd">DDD</label>
                        <input type="text" class="form-control" id="nrddd" name="nrddd" placeholder="Digite o nome aqui">
                        </div>

                        <div class="form-group">
                        <label for="nrphone">Telefone</label>
                        <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o nome aqui">
                        </div>
                
                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui">
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