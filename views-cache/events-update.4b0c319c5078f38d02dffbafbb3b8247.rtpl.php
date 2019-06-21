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

               <form id="dash-form" method="post" action="/dashboard/eventos/<?php echo htmlspecialchars( $event["idevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" enctype="multipart/form-data">

                    <div class="row">


                        
                        <div class="col-md-6 dash-column">




                        <div class="dash-input-row input-date">
                                
                            <div class="input-group mb-3">

                              <div class="input-group-prepend">

                                <label class="input-group-text" for="ineventstatus">Visível</label>

                              </div><!--input-group-prepend-->

                              <select id="ineventstatus" name="ineventstatus" class="custom-select">

                                <option value="0" <?php if( $event["ineventstatus"] == '0' ){ ?>selected<?php } ?>>Não</option>
                                <option value="1" <?php if( $event["ineventstatus"] == '1' ){ ?>selected<?php } ?>>Sim</option>

                              </select>

                            
                            </div><!--mb-3-->

                        </div><!--dash-input-row-->







                        


                            <div class="dash-input-row input-date">


                                <label for="dtevent">Data</label>
                                <input type="date" class="form-control" id="dtevent" name="dtevent" value="<?php echo htmlspecialchars( $event["dtevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->





                            <div class="dash-input-row input-date">


                                <label for="tmevent">Horário</label>
                                <input type="time" class="form-control" id="tmevent" name="tmevent" value="<?php echo htmlspecialchars( $event["tmevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->







                            <div class="row dash-input-row">

                                <div class="col-md-2">

                                    <label for="nrddd">DDI</label>

                                    <div id="nrcountryarea">

                                        <input type="text" placeholder="Mês" id="nrcountryarea" name="nrcountryarea" class="form-control" value="<?php echo htmlspecialchars( $event["nrcountryarea"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->


                                <div class="col-md-2">

                                    <label for="nrddd">DDD</label>

                                    <div id="nrddd">

                                        <input type="text" placeholder="Mês" id="nrddd" name="nrddd" class="form-control" value="<?php echo htmlspecialchars( $event["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-8">

                                    <label for="nrphone">Telefone</label>

                                    <div id="nrphone">

                                        <input type="text" placeholder="Ano" id="nrphone" name="nrphone" class="form-control" value="<?php echo htmlspecialchars( $event["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                            </div><!--dash-input-row-->









                            <div class="dash-input-row">


                                <label for="desevent">Evento</label>
                                <input type="text" class="form-control" id="desevent" name="desevent" value="<?php echo htmlspecialchars( $event["desevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->


   






                            <div class="dash-input-row">

                                <div>
                                    <label for="desdescription">Descrição</label>
                                    <!--<input type="text" class="form-control" id="desdescription" name="desdescription" placeholder="Digite o nome aqui" ">-->
                                </div>
                                
                                <textarea rows="10" maxlength="500" id="desdescription" name="desdescription"><?php echo htmlspecialchars( $event["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>

                            </div><!--dash-input-row-->








                            <div class="dash-input-row">

                                 <input type="hidden" class="form-control" id="idevent" name="idevent" value="<?php echo htmlspecialchars( $event["idevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->


                            

                                    

                        </div><!--col-md-6-->













                        <div class="col-md-6">
                            
                            
                            
                            <div class="dash-input-row">


                                <label for="desaddress">Logradouro</label>
                                <input type="text" class="form-control" id="desaddress" name="desaddress" value="<?php echo htmlspecialchars( $event["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="desnumber">Número</label>
                                <input type="text" class="form-control" id="desnumber" name="desnumber" value="<?php echo htmlspecialchars( $event["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="descomplement">Complemento (opcional)</label>
                                <input type="text" class="form-control" id="descomplement" name="descomplement" value="<?php echo htmlspecialchars( $event["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="desdistrict">Bairro (opcional)</label>
                                <input type="text" class="form-control" id="desdistrict" name="desdistrict" value="<?php echo htmlspecialchars( $event["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->



 



                            <div class="dash-input-row">

                                <label for="descity">Cidade</label>
                                <input type="text" class="form-control" id="descity" name="descity" value="<?php echo htmlspecialchars( $event["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="desstate">Estado</label>
                                <input type="text" class="form-control" id="desstate" name="desstate" value="<?php echo htmlspecialchars( $event["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="descountry">País</label>
                                <input type="text" class="form-control" id="descountry" name="descountry" value="<?php echo htmlspecialchars( $event["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

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
                                        <img class="img-responsive" id="image-preview" src="/uploads/events/<?php echo htmlspecialchars( $event["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    </div>

                                
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



