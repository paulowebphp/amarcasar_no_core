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

               <form method="post" action="/dashboard/eventos/adicionar" enctype="multipart/form-data">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                            <div class="dash-input-row input-inposition">

                                <label for="inposition">Posição</label>
                                <input type="text" class="form-control" id="inposition" name="inposition">

                            </div><!--dash-input-row-->





                        


                            <div class="dash-input-row input-date">


                                <label for="dtevent">Data</label>
                                <input type="datetime-local" class="form-control" id="dtevent" name="dtevent">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">


                                <label for="desevent">Evento</label>
                                <input type="text" class="form-control" id="desevent" name="desevent" placeholder="Digite o nome aqui">


                            </div><!--dash-input-row-->


   






                            <div class="dash-input-row">

                                <div>
                                    <label for="desdescription">Descrição</label>
                                    <!--<input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" ">-->
                                </div>
                                
                                <textarea rows="10" maxlength="500" id="desdescription" name="desdescription" placeholder="Descrição"></textarea>

                            </div><!--dash-input-row-->








                            <div class="row dash-input-row">


                                <div class="col-md-2">

                                    <label for="nrddd">DDD</label>

                                    <div id="nrddd">

                                        <input type="text" placeholder="Mês" id="nrddd" name="nrddd" class="form-control">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-10">

                                    <label for="nrphone">Telefone</label>

                                    <div id="nrphone">

                                        <input type="text" placeholder="Ano" id="nrphone" name="nrphone" class="form-control">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



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









                            <div class="dash-input-row">

                                 <input type="hidden" class="form-control" id="idevent" name="idevent" placeholder="Digite o nome aqui">

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
                                        <img class="img-responsive" id="image-preview" src="/uploads/events/0.jpg" alt="">
                                    </div>

                                
                            </div><!--dash-input-row-->


                                    

                        </div><!--col-md-6-->













                        <div class="col-md-6">
                            
                            
                            
                            <div class="dash-input-row">


                                <label for="desaddress">Logradouro</label>
                                <input type="text" class="form-control" id="desaddress" name="desaddress">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="desnumber">Número</label>
                                <input type="text" class="form-control" id="desnumber" name="desnumber">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="descomplement">Complemento (opcional)</label>
                                <input type="text" class="form-control" id="descomplement" name="descomplement">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="desdistrict">Bairro</label>
                                <input type="text" class="form-control" id="desdistrict" name="desdistrict">

                            </div><!--dash-input-row-->



 



                            <div class="dash-input-row">
                                
                                <div class="dash-state-city">
                                
                                    <label for="state">Estado</label>
                                
                                    <select id="state" form="dash-form" name="desstate">

                                        <option value="1" selected>Acre</option> 
                                        <option value="2">Alagoas</option> 
                                        <option value="3">Amazonas</option> 
                                        <option value="4">Amapá</option> 
                                        <option value="5">Bahia</option> 
                                        <option value="6">Ceará</option> 
                                        <option value="7">Distrito Federal</option> 
                                        <option value="8">Espírito Santo</option> 
                                        <option value="9">Goiás</option> 
                                        <option value="10">Maranhão</option> 
                                        <option value="11">Minas Gerais</option> 
                                        <option value="12">Mato Grosso do Sul</option> 
                                        <option value="13">Mato Grosso</option> 
                                        <option value="14">Pará</option> 
                                        <option value="15">Paraíba</option> 
                                        <option value="16">Pernambuco</option> 
                                        <option value="17">Piauí</option> 
                                        <option value="18">Paraná</option> 
                                        <option value="19">Rio de Janeiro</option> 
                                        <option value="20">Rio Grande do Norte</option> 
                                        <option value="21">Rondônia</option> 
                                        <option value="22">Roraima</option> 
                                        <option value="23">Rio Grande do Sul</option> 
                                        <option value="24">Santa Catarina</option> 
                                        <option value="25">Sergipe</option> 
                                        <option value="26">São Paulo</option> 
                                        <option value="27">Tocantins</option> 
                                        
                                    </select>

                                </div><!--dash-state-city-->

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">
                                
                                <div class="dash-state-city">

                                    <label for="city">Cidade</label>
                                
                                    <select id="city" form="dash-form" name="descity">

                                        <option value="Acrelândia" selected>Acrelândia</option> 
                                        <option value="Assis Brasil">Assis Brasil</option> 
                                        <option value="Brasiléia">Brasiléia</option> 
                                        <option value="Bujari">Bujari</option> 
                                        <option value="Capixaba">Capixaba</option> 
                                        <option value="Cruzeiro do Sul">Cruzeiro do Sul</option> 
                                        <option value="Epitaciolândia">Epitaciolândia</option> 
                                        <option value="Feijó">Feijó</option> 
                                        <option value="Jordão">Jordão</option> 
                                        <option value="Mâncio Lima">Mâncio Lima</option> 
                                        <option value="Manoel Urbano">Manoel Urbano</option> 
                                        <option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option> 
                                        <option value="Plácido de Castro">Plácido de Castro</option> 
                                        <option value="Porto Acre">Porto Acre</option> 
                                        <option value="Porto Walter">Porto Walter</option> 
                                        <option value="Rio Branco">Rio Branco</option> 
                                        <option value="Rodrigues Alves">Rodrigues Alves</option> 
                                        <option value="Santa Rosa do Purus">Santa Rosa do Purus</option> 
                                        <option value="Sena Madureira">Sena Madureira</option> 
                                        <option value="Senador Guiomard">Senador Guiomard</option> 
                                        <option value="Tarauacá">Tarauacá</option> 
                                        <option value="Xapuri">Xapuri</option> 

                                    </select>

                                </div><!--dash-state-city-->

                            </div><!--dash-input-row-->







                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-6">

                            <div class="dash-input-row input-footer">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                                <a href="/dashboard/eventos" class="btn btn-danger">Cancelar</a>

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



