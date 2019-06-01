<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
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
                    <form method="post" action="/dashboard/pagina-inicial">


                        <div class="form-group">
                        <label for="inparty">Minha Festa</label>
                        <input type="text" class="form-control" id="inparty" name="inparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                                          
                        <div class="form-group">
                        <label for="inbestfriend">Minha Festa</label>
                        <input type="text" class="form-control" id="inbestfriend" name="inbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="inalbum">Padrinhos e Madrinhas</label>
                        <input type="text" class="form-control" id="inalbum" name="inalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["inalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="invideo">Confirmação de Presença</label>
                        <input type="text" class="form-control" id="invideo" name="invideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["invideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                 


                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idinitialpage" name="idinitialpage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $initialpage["idinitialpage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>