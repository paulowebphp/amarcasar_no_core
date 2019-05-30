<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Meu Casamento</h2>
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
                    <form method="post" action="/dashboard/videos/adicionar">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui">
                        </div>


                        <div class="form-group">
                        <label for="desvideo">Video</label>
                        <input type="text" class="form-control" id="desvideo" name="desvideo" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="desurl">URL</label>
                        <input type="text" class="form-control" id="desurl" name="desurl" placeholder="Digite o nome aqui">
                        </div>
                        
                
                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/videos" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        

                        
                    </form>
            </div>
        </div>
    </div>
</div>