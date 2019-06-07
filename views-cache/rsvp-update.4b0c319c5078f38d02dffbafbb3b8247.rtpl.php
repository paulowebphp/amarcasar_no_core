<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

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
                    <form method="post" action="/dashboard/rsvp/<?php echo htmlspecialchars( $rsvp["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                        <div>
                        <label for="desguest">Convidado</label>
                        <input type="text" class="form-control" id="desguest" name="desguest" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $rsvp["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div>
                        <label for="inmaxadults">Quantidade Máxima de Adultos</label>
                        <input type="text" class="form-control" id="inmaxadults" name="inmaxadults" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $rsvp["inmaxadults"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div>
                        <label for="inmaxchildren">Quantidade Máxima de Crianças</label>
                        <input type="text" class="form-control" id="inmaxchildren" name="inmaxchildren" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $rsvp["inmaxchildren"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                               

                        <div>
                        <input type="hidden" class="form-control" id="idrsvp" name="idrsvp" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $rsvp["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="box-header pull-right">
                            <a href="/dashboard/rsvp" class="btn btn-default">Cancelar</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>





                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

