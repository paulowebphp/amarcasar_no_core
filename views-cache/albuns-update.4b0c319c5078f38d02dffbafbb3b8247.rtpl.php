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
                    <form method="post" action="/dashboard/album/<?php echo htmlspecialchars( $album["idalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desalbum">Título</label>
                        <input type="text" class="form-control" id="desalbum" name="desalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["desalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="descategory">Categoria</label>
                        <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
       

                        <div class="form-group">
                        <label for="inalbumstatus">Status</label>
                        <input type="text" class="form-control" id="inalbumstatus" name="inalbumstatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["inalbumstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idalbum" name="idalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $album["idalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/album" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>