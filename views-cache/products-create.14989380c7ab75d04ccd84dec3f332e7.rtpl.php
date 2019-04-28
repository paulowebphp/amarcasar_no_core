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
                    <form method="post" action="/dashboard/presentes-virtuais/adicionar">

                        <div class="form-group">
                        <label for="desproduct">Presente</label>
                        <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="vlprice">Valor</label>
                        <input type="text" class="form-control" id="vlprice" name="vlprice" placeholder="Digite o nome aqui">
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="inbought" name="inbought" placeholder="Digite o nome aqui">
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