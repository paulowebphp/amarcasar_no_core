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
                
                <form method="post" action="/dashboard/eventos/<?php echo htmlspecialchars( $event["idevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">


                    <div class="row">
                    
                        <div class="col-md-6">


                        <div class="form-group">
                        <label for="ineventstatus">Status</label>
                        <input type="text" class="form-control" id="ineventstatus" name="ineventstatus" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["ineventstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>


                        <div class="form-group">
                        <label for="dtevent">Data</label>
                        <input type="text" class="form-control" id="dtevent" name="dtevent" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $event["dtevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desevent">Evento</label>
                        <input type="text" class="form-control" id="desevent" name="desevent" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        
                        <div class="form-group">
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>


                        <div class="form-group">
                        <label for="nrddd">DDD</label>
                        <input type="text" class="form-control" id="nrddd" name="nrddd" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>
                        

                        <div class="form-group">
                        <label for="nrphone">Telefone</label>
                        <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>



                        </div><!--col-md-6-->

                        <div class="col-md-6">



                        <div class="form-group">
                        <label for="desaddress">Logradouro</label>
                        <input type="text" class="form-control" id="desaddress" name="desaddress" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <label for="desnumber">Número</label>
                        <input type="text" class="form-control" id="desnumber" name="desnumber" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <label for="descomplement">Complemento</label>
                        <input type="text" class="form-control" id="descomplement" name="descomplement" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <label for="desdistrict">Bairro</label>
                        <input type="text" class="form-control" id="desdistrict" name="desdistrict" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <label for="descity">Cidade</label>
                        <input type="text" class="form-control" id="descity" name="descity" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <label for="desstate">Estado</label>
                        <input type="text" class="form-control" id="desstate" name="desstate" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idevent" name="idevent" placeholder="Digite o nome aqui" value=<?php echo htmlspecialchars( $event["idevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>>
                        </div>
                 
                        <div class="form-group">
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="/uploads/events/<?php echo htmlspecialchars( $event["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                            </div>
                        </div>
                        </div>
                

                        </div><!--col-md-6-->

                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-header pull-right">
                                    <a href="/dashboard/eventos" class="btn btn-default">Cancelar</a>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </div>

                        </div><!--row-->

                    </form>



            </div>
        </div>
    </div>
</div>