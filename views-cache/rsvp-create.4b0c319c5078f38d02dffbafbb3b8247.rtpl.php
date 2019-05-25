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
                    <?php if( $rsvpMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $rsvpMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $rsvpError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $rsvpError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/rsvp/adicionar">


                        <div class="form-group">
                        <label for="desguest">Convidado</label>
                        <input type="text" class="form-control" id="desguest" name="desguest" placeholder="Digite o nome aqui">
                        </div>

                                            
                        <div class="form-group">
                        <label for="inmaxadults">Quantidade Máxima de Adultos</label>
                        <input type="text" class="form-control" id="inmaxadults" name="inmaxadults" placeholder="Digite o nome aqui">
                        </div>
                        
                        <div class="form-group">
                        <label for="inmaxchildren">Quantidade Máxima de Crianças</label>
                        <input type="text" class="form-control" id="inmaxchildren" name="inmaxchildren" placeholder="Digite o nome aqui">
                        </div>
                        

                        <div class="box-header pull-right">
                            <a href="/dashboard/rsvp" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        

                        
                    </form>
            </div>
        </div>
    </div>
</div>