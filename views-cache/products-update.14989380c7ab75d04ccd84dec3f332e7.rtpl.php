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
                    <?php if( $productMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $productMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $productError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $productError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post"  enctype="multipart/form-data" action="/dashboard/presentes-virtuais/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="desproduct">Nome</label>
                        <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="incategory">Categoria</label>
                        <input type="text" class="form-control" id="incategory" name="incategory" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $product["incategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="vlprice">Valor</label>
                        <input type="text" class="form-control" id="vlprice" name="vlprice" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $product["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="/uploads/products/<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="inbought" name="inbought" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $product["inbought"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idproduct" name="idproduct" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/presentes-virtuais" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>