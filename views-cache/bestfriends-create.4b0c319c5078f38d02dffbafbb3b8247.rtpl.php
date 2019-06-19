<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

    <div class="container-fluid">            
            

            
        <div class="row">

                


            <div class="col-md-3 dash-menu">


                <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                    <?php require $this->checkTemplate("dashboard-menu-free");?>

                <?php }else{ ?>

                    <?php require $this->checkTemplate("dashboard-menu");?>

                <?php } ?>
                    

            </div><!--col-->




            <div class="col-md-9 dash-panel">


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

               <form method="post" action="/dashboard/padrinhos-madrinhas/adicionar" enctype="multipart/form-data">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row input-inposition">

                                <label for="inposition">Posição</label>
                                <input type="text" class="form-control" id="inposition" name="inposition">

                            </div><!--dash-input-row-->





                        


                            <div class="dash-input-row">


                                <label for="desbestfriend">Nome</label>
                                <input type="text" class="form-control" id="desbestfriend" name="desbestfriend">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">


                                <label for="descategory">Categoria</label>
                                <input type="text" class="form-control" id="descategory" name="descategory">


                            </div><!--dash-input-row-->


   






                            <div class="dash-input-row">

                                <div>
                                    <label for="desdescription">Descrição</label>
                                    <!--<input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" ">-->
                                </div>
                                
                                <textarea rows="10" cols="90" maxlength="500" id="desdescription" name="desdescription"></textarea>

                            </div><!--dash-input-row-->








                           

                            <div class="dash-input-row input-date">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="inalbumstatus">Visível</label>

                                  </div><!--input-group-prepend-->

                                  <select id="inalbumstatus" name="inalbumstatus" class="custom-select">

                                    <option value="0">Não</option>
                                    <option value="1" selected>Sim</option>

                                  </select>

                                
                                </div><!--mb-3-->

                            </div><!--dash-input-row-->






                            







                            <div class="dash-input-row input-photo">

                            
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="file">Selecionar imagem</label>

                                      </div>
                                    </div>
                                    <div class="input-rows">
                                        <img class="img-responsive" id="image-preview" src="/uploads/images/0.jpg" alt="">
                                    </div>

                                
                            </div><!--dash-input-row-->


                            





                                

                        </div><!--col-md-6-->





                        <div class="col-md-6">
                            
                            
                            
                            &nbsp;

                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-6">

                            <div class="dash-input-row input-footer">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                                <a href="/dashboard/padrinhos-madrinhas" class="btn btn-danger">Cancelar</a>

                            </div><!--dash-input-row-->
                            
                        </div><!--col-->



                        <div class="col-md-6">

                            &nbsp;
                            
                        </div><!--col-->



                    </div><!--row-->



                </form>



            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

