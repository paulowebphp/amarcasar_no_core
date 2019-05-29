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
                    <form method="post" action="/dashboard/menu">


                        <div class="form-group">
                        <label for="inwedding">Meu Casamento</label>
                        <input type="text" class="form-control" id="inwedding" name="inwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                                          
                        <div class="form-group">
                        <label for="inparty">Minha Festa</label>
                        <input type="text" class="form-control" id="inparty" name="inparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="inbestfriend">Padrinhos e Madrinhas</label>
                        <input type="text" class="form-control" id="inbestfriend" name="inbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="inrsvp">Confirmação de Presença</label>
                        <input type="text" class="form-control" id="inrsvp" name="inrsvp" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                 

                        <div class="form-group">
                        <label for="inmessage">Mural de Mensagens</label>
                        <input type="text" class="form-control" id="inmessage" name="inmessage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="instore">Loja</label>
                        <input type="text" class="form-control" id="instore" name="instore" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["instore"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="inevent">Eventos</label>
                        <input type="text" class="form-control" id="inevent" name="inevent" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="inalbum">Album</label>
                        <input type="text" class="form-control" id="inalbum" name="inalbum" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inalbum"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="invideo">Vídeos</label>
                        <input type="text" class="form-control" id="invideo" name="invideo" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["invideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="instakeholder">Fornecedores</label>
                        <input type="text" class="form-control" id="instakeholder" name="instakeholder" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["instakeholder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="inouterlist">Outras Listas</label>
                        <input type="text" class="form-control" id="inouterlist" name="inouterlist" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["inouterlist"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idmenu" name="idmenu" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $menu["idmenu"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>