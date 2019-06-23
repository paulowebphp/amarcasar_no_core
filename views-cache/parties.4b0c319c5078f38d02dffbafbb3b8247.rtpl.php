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

                <form method="post" action="/dashboard/festa-de-casamento" enctype="multipart/form-data">

                    <div class="row">
                        
                        <div class="col-md-6 dash-column">


                         



                            <div class="dash-input-row input-date">

                                <label for="dtparty">Data da Festa</label>
                                <input type="date" class="form-control" id="dtparty" name="dtparty" value="<?php echo htmlspecialchars( $party["dtparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row input-date">

                                <label for="tmparty">Horário da Festa</label>
                                <input type="time" class="form-control" id="tmparty" name="tmparty" value="<?php echo htmlspecialchars( $party["tmparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="descostume">Traje</label>
                                <input type="text" class="form-control" id="descostume" name="descostume" value="<?php echo htmlspecialchars( $party["descostume"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->








                            <div class="dash-input-row">

                                <div>
                                    <label for="desdescription">Descrição</label>
                                    <!--<input type="text" class="form-control" id="desdescription" name="desdescription" value="<?php echo htmlspecialchars( $party["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">-->
                                </div>
                                
                                <textarea rows="10" cols="90" maxlength="500" id="desdescription" name="desdescription"><?php echo htmlspecialchars( $party["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>

                            </div><!--dash-input-row-->


                            






                            









                            <div class="dash-input-row">

                                <input type="hidden" class="form-control" id="idparty" name="idparty" value="<?php echo htmlspecialchars( $party["idparty"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->











                            <div class="dash-input-row input-photo">

                            
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Selecionar imagem</label>

                                      </div>
                                    </div>
                                    <div class="input-rows">
                                        <img class="img-responsive" id="image-preview" src="/uploads/parties/<?php echo htmlspecialchars( $party["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    </div>

                                
                            </div><!--dash-input-row-->




                            <!--   <label for="file">Foto</label>
                                <input type="file" class="form-control" id="file" name="file">
                                <div class="box box-widget">
                                    <div class="box-body">
                                        <img class="img-responsive" id="image-preview" src="/uploads/images/<?php echo htmlspecialchars( $party["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Foto">
                                    </div>
                                </div>
                            -->


                                

                        </div><!--col-md-6-->





                        <div class="col-md-6">
                            
                            
                            
                            <div class="dash-input-row">


                                <label for="desaddress">Logradouro</label>
                                <input type="text" class="form-control" id="desaddress" name="desaddress" value="<?php echo htmlspecialchars( $party["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">


                            </div><!--dash-input-row-->






                            <div class="dash-input-row">

                                <label for="desnumber">Número</label>
                                <input type="text" class="form-control" id="desnumber" name="desnumber" value="<?php echo htmlspecialchars( $party["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->




      



                            <div class="dash-input-row">

                                <label for="desdistrict">Bairro (opcional)</label>
                                <input type="text" class="form-control" id="desdistrict" name="desdistrict" value="<?php echo htmlspecialchars( $party["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->



 



                            <div class="dash-input-row">

                                <label for="descity">Cidade</label>
                                <input type="text" class="form-control" id="descity" name="descity" value="<?php echo htmlspecialchars( $party["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->





                            <div class="dash-input-row">

                                <label for="desstate">Estado</label>
                                <input type="text" class="form-control" id="desstate" name="desstate" value="<?php echo htmlspecialchars( $party["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->







                            <div class="dash-input-row">

                                <label for="descountry">País (opcional)</label>
                                <input type="text" class="form-control" id="descountry" name="descountry" value="<?php echo htmlspecialchars( $party["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                            </div><!--dash-input-row-->









                            <div class="dash-input-row">

                                <div>
                                    <label for="desdirections">Pontos de Referência</label>
                                    <!--<input type="text" class="form-control" id="desdirections" name="desdirections" value="<?php echo htmlspecialchars( $party["desdirections"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">-->
                                </div>
                                
                                <textarea rows="4" cols="90" maxlength="500" id="desdirections" name="desdirections"><?php echo htmlspecialchars( $party["desdirections"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>

                            </div><!--dash-input-row-->


                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->





                    <div class="row">

                        <div class="col-md-12">

                            <div class="dash-input-row">
                                
                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </div><!--dash-input-row-->
                            
                        </div><!--col-->

                    </div><!--row-->



                </form>



            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

