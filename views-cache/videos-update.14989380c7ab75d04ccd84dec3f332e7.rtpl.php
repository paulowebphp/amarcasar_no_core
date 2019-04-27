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
                    <?php if( $videoMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $videoMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $videoError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $videoError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/videos/<?php echo htmlspecialchars( $video["idvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desvideo">Video</label>
                        <input type="text" class="form-control" id="desvideo" name="desvideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["desvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="desurl">Endereço</label>
                        <input type="text" class="form-control" id="desurl" name="desurl" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
       

                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idvideo" name="idvideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $video["idvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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