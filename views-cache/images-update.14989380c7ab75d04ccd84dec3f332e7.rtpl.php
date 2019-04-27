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
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                    <?php if( $imageMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $imageMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $imageError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $imageError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/album/<?php echo htmlspecialchars( $image["idimage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $image["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desimage">image</label>
                        <input type="text" class="form-control" id="desimage" name="desimage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $image["desimage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $image["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
       

                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $image["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idimage" name="idimage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $image["idimage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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