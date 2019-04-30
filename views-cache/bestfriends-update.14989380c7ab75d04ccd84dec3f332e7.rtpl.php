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
                    <?php if( $bestFriendMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $bestFriendMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $bestFriendError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $bestFriendError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/padrinhos-madrinhas/<?php echo htmlspecialchars( $bestFriend["idbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">


                        <div class="form-group">
                        <label for="desbestfriend">Nome</label>
                        <input type="text" class="form-control" id="desbestfriend" name="desbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bestFriend["desbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bestFriend["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        
                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bestFriend["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bestFriend["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idbestfriend" name="idbestfriend" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $bestFriend["idbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                            <img class="img-responsive" id="image-preview" src="/uploads/images/<?php echo htmlspecialchars( $bestFriend["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
                            </div>
                        </div>
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/padrinhos-madrinhas" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>