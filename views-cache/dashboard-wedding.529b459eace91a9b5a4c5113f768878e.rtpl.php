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
                    <form method="post" action="/dashboard/meu-casamento">


                        <div class="form-group">
                        <label for="desconsortname">Nome do Cônjuge</label>
                        <input type="text" class="form-control" id="desconsortname" name="desconsortname" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desconsortname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="dtwedding">Data do Casamento</label>
                        <input type="text" class="form-control" id="dtwedding" name="dtwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["dtwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        
                        <div class="form-group">
                        <label for="desweddinglocation">Local do Casamento</label>
                        <input type="text" class="form-control" id="desweddinglocation" name="desweddinglocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desweddinglocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="desweddingdescription">Descrição do Casamento</label>
                        <input type="text" class="form-control" id="desweddingdescription" name="desweddingdescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["desweddingdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="dtparty">Data da Festa</label>
                        <input type="text" class="form-control" id="dtparty" name="dtparty" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["dtparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                 

                        <div class="form-group">
                        <label for="despartylocation">Local da Festa</label>
                        <input type="text" class="form-control" id="despartylocation" name="despartylocation" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["despartylocation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="despartydescription">Descrição da Festa</label>
                        <input type="text" class="form-control" id="despartydescription" name="despartydescription" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["despartydescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idwedding" name="idwedding" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $wedding["idwedding"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>