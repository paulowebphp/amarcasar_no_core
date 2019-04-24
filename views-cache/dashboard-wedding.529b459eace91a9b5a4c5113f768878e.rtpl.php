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
                    <?php if( $weddingMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $weddingMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $weddingError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $weddingError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard-wedding">
                        <div class="form-group">
                        <label for="desconsortname">Nome completo</label>
                        <input type="text" class="form-control" id="desconsortname" name="desconsortname" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desconsortname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>