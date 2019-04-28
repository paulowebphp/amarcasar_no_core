<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                    <?php if( $storyMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $storyMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $storyError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $storyError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/historia-casal">


                        <div class="form-group">
                        <label for="desstory">Título</label>
                        <input type="text" class="form-control" id="desstory" name="desstory" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $story["desstory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $story["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idstory" name="idstory" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $story["idstory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>