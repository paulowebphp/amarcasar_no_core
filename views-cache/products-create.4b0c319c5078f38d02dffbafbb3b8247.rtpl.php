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

               <form method="post" action="/dashboard/presentes-virtuais/adicionar" enctype="multipart/form-data">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row input-date">

                                <label for="desproduct">Nome do Presente</label>
                                <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome aqui">

                            </div><!--dash-input-row-->





                            <!--<div class="dash-input-row">


                                <label for="incategory">Categoria</label>
                                <input type="text" class="form-control" id="incategory" name="incategory" placeholder="Digite o nome aqui">


                            </div>-->




                            <div class="dash-input-row input-date">
                                
                                <div class="input-group mb-3">

                                  <div class="input-group-prepend">

                                    <label class="input-group-text" for="incategory">Categoria</label>

                                  </div><!--input-group-prepend-->

                                  <select id="incategory" name="incategory" class="custom-select">

                                    <option value="1">Bar e Adega</option>
                                    <option value="2">Cama, Mesa e Banho</option>
                                    <option value="3">Cozinha</option>
                                    <option value="4">Eletrodomésticos</option>
                                    <option value="5">Eletrônicos</option>
                                    <option value="6">Lua de Mel</option>
                                    <option value="7">Móveis</option>

                                  </select>

                                
                                </div><!--mb-3-->

                            </div><!--dash-input-row-->




                            <div class="dash-input-row">


                                <label for="vlprice">Valor</label>
                                <input type="text" class="form-control" id="vlprice" name="vlprice" placeholder="Digite o nome aqui">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">


                                <input type="hidden" class="form-control" id="inbought" name="inbought" placeholder="Digite o nome aqui">


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
                                        <img class="img-responsive" id="image-preview" src="/uploads/weddings/0.jpg" alt="">
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

                                <a href="/dashboard/presentes-virtuais" class="btn btn-danger">Cancelar</a>

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

