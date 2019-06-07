<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

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
                
                <form method="post" action="/dashboard/eventos/adicionar" enctype="multipart/form-data">


                    <div class="row">
                    
                        <div class="col-md-6">


                        <div>
                        <label for="ineventstatus">Status</label>
                        <input type="text" class="form-control" id="ineventstatus" name="ineventstatus" placeholder="Digite o nome aqui">
                        </div>


                        <div>
                        <label for="dtevent">Data</label>
                        <input type="text" class="form-control" id="dtevent" name="dtevent" placeholder="Digite o nome aqui">
                        </div>


                        <div>
                        <label for="desevent">Evento</label>
                        <input type="text" class="form-control" id="desevent" name="desevent" placeholder="Digite o nome aqui">
                        </div>

                        
                        <div>
                        <label for="desdescription">Descrição</label>
                        <input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui">
                        </div>


                        <div>
                        <label for="nrddd">DDD</label>
                        <input type="text" class="form-control" id="nrddd" name="nrddd" placeholder="Digite o nome aqui">
                        </div>
                        

                        <div>
                        <label for="nrphone">Telefone</label>
                        <input type="text" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o nome aqui">
                        </div>



                        </div><!--col-md-6-->

                        <div class="col-md-6">



                        <div>
                        <label for="desaddress">Logradouro</label>
                        <input type="text" class="form-control" id="desaddress" name="desaddress" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="desnumber">Número</label>
                        <input type="text" class="form-control" id="desnumber" name="desnumber" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="descomplement">Complemento</label>
                        <input type="text" class="form-control" id="descomplement" name="descomplement" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="desdistrict">Bairro</label>
                        <input type="text" class="form-control" id="desdistrict" name="desdistrict" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="descity">Cidade</label>
                        <input type="text" class="form-control" id="descity" name="descity" placeholder="Digite o nome aqui">
                        </div>

                        <div>
                        <label for="desstate">Estado</label>
                        <input type="text" class="form-control" id="desstate" name="desstate" placeholder="Digite o nome aqui">
                        </div>

                                        
                        <div>
                        <label for="file">Foto</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div class="box box-widget">
                            <div class="box-body">
                                <img class="img-responsive" id="image-preview" src="" alt="">
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






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

