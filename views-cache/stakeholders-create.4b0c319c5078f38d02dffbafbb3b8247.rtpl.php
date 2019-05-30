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
                    <?php if( $stakeholderMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $stakeholderMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $stakeholderError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $stakeholderError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/fornecedores/adicionar">


                        <div class="form-group">
                        <label for="inposition">Posição</label>
                        <input type="text" class="form-control" id="inposition" name="inposition" placeholder="Digite o nome aqui">
                        </div>


                        <div class="form-group">
                        <label for="desstakeholder">Fornecedor</label>
                        <input type="text" class="form-control" id="desstakeholder" name="desstakeholder" placeholder="Digite o nome aqui">
                        </div>

                        
                        <div class="form-group">
                        <label for="descategory">Categoria</label>
                        <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome aqui">
                        </div>

                        
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="nrphone">Telefone</label>
                        <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o nome aqui">
                        </div>
                        

                        <div class="form-group">
                        <label for="dessite">Site</label>
                        <input type="text" class="form-control" id="dessite" name="dessite" placeholder="Digite o nome aqui">
                        </div>

                        <div class="form-group">
                        <label for="desemail">Email</label>
                        <input type="text" class="form-control" id="desemail" name="desemail" placeholder="Digite o nome aqui">
                        </div>
                
                        <div class="form-group">
                        <label for="instatus">Status</label>
                        <input type="text" class="form-control" id="instatus" name="instatus" placeholder="Digite o nome aqui">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/fornecedores" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        

                        
                    </form>
            </div>
        </div>
    </div>
</div>