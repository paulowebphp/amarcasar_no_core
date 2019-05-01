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
                    <?php if( $messageMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $messageMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $messageError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $messageError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/mensagens/<?php echo htmlspecialchars( $message["idmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div class="form-group">
                        <label for="dtmessage">Data</label>
                        <input type="text" class="form-control" id="dtmessage" name="dtmessage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["dtmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                        </div>

                        <div class="form-group">
                        <label for="desmessage">Nome</label>
                        <input type="text" class="form-control" id="desmessage" name="desmessage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["desmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                        </div>

                        <div class="form-group">
                        <label for="desemail">E-mail</label>
                        <input type="text" class="form-control" id="desemail" name="desemail" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                        </div>

                        <div class="form-group">
                        <label for="desdescription">Mensagem</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                        </div>

                        <div class="form-group">
                        <label for="desreply">Resposta</label>
                        <input type="text" class="form-control" id="desreply" name="desreply" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["desreply"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="dtreply">Data da Resposta</label>
                        <input type="text" class="form-control" id="dtreply" name="dtreply" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["dtreply"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
        

                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idmessage" name="idmessage" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $message["idmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/mensagens" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>