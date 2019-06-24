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

                <form id="dash-form" method="post" action="/dashboard/personalizar-site">

                    <div class="row">
                        
                        <div class="col-md-12 dash-column">


                            


                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-6">

                                    <label for="descolorheader">Cor da Fonte do Header</label>

                                    <div id="descolorheader">

                                        <input type="color" class="form-control" id="descolorheader" name="descolorheader" value="<?php echo htmlspecialchars( $customstyle["descolorheader"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-6">

                                    <label for="descolorheaderhover">Cor da Fonte do Header | Efeito Hover</label>

                                    <div id="nrphone">

                                        <input type="color" class="form-control" id="descolorheaderhover" name="descolorheaderhover" value="<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                            </div><!--row-->


















                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="desbgcolorfooter">Footer | Background Color</label>

                                    <div id="desbgcolorfooter">

                                        <input type="color" class="form-control" id="desbgcolorfooter" name="desbgcolorfooter" value="<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorfooter">Cor da Fonte do Footer</label>

                                    <div id="descolorfooter">

                                        <input type="color" class="form-control" id="descolorfooter" name="descolorfooter" value="<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorfooterhover">Cor da Fonte do Footer | Efeito Hover</label>

                                    <div id="descolorfooterhover">

                                        <input type="color" class="form-control" id="descolorfooterhover" name="descolorfooterhover" value="<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                            </div><!--row-->










                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="descolorh1">Cor do H1</label>

                                    <div id="descolorh1">

                                        <input type="color" class="form-control" id="descolorh1" name="descolorh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorh1hover">Cor do H1 | Efeito Hover</label>

                                    <div id="descolorh1hover">

                                        <input type="color" class="form-control" id="descolorh1hover" name="descolorh1hover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh1hover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <div class="dash-input-row input-date">
                                
                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend">

                                            <label class="input-group-text" for="desfontfamilyh1">Tipo de Fonte do H1</label>

                                          </div><!--input-group-prepend-->

                                          <select id="desfontfamilyh1" name="desfontfamilyh1" class="custom-select">

                                            <option value="OpenSans" <?php if( $customstyle["desfontfamilyh1"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                                            <option value="Norican" <?php if( $customstyle["desfontfamilyh1"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                          </select>

                                        
                                        </div><!--mb-3-->

                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->











                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="descolorh2">Cor do H2</label>

                                    <div id="descolorh2">

                                        <input type="color" class="form-control" id="descolorh2" name="descolorh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorh2hover">Cor do H2 | Efeito Hover</label>

                                    <div id="descolorh2hover">

                                        <input type="color" class="form-control" id="descolorh2hover" name="descolorh2hover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh2hover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <div class="dash-input-row input-date">
                                
                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend">

                                            <label class="input-group-text" for="desfontfamilyh2">Tipo de Fonte do H2</label>

                                          </div><!--input-group-prepend-->

                                          <select id="desfontfamilyh2" name="desfontfamilyh2" class="custom-select">

                                            <option value="OpenSans" <?php if( $customstyle["desfontfamilyh2"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                                            <option value="Norican" <?php if( $customstyle["desfontfamilyh2"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                          </select>

                                        
                                        </div><!--mb-3-->

                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->













                        <!--</div>





                        <div class="col-md-6">-->
                            
                            

                            
                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="descolorh3">Cor do H3</label>

                                    <div id="descolorh3">

                                        <input type="color" class="form-control" id="descolorh3" name="descolorh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorh3hover">Cor do H3 | Efeito Hover</label>

                                    <div id="descolorh3hover">

                                        <input type="color" class="form-control" id="descolorh3hover" name="descolorh3hover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh3hover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <div class="dash-input-row input-date">
                                
                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend">

                                            <label class="input-group-text" for="desfontfamilyh3">Tipo de Fonte do H3</label>

                                          </div><!--input-group-prepend-->

                                          <select id="desfontfamilyh3" name="desfontfamilyh3" class="custom-select">

                                            <option value="OpenSans" <?php if( $customstyle["desfontfamilyh3"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                                            <option value="Norican" <?php if( $customstyle["desfontfamilyh3"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                          </select>

                                        
                                        </div><!--mb-3-->

                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->















                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="descolorh4">Cor do H4</label>

                                    <div id="descolorh4">

                                        <input type="color" class="form-control" id="descolorh4" name="descolorh4" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorh4hover">Cor do H4 | Efeito Hover</label>

                                    <div id="descolorh4hover">

                                        <input type="color" class="form-control" id="descolorh4hover" name="descolorh4hover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh4hover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <div class="dash-input-row input-date">
                                
                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend">

                                            <label class="input-group-text" for="desfontfamilyh4">Tipo de Fonte do H4</label>

                                          </div><!--input-group-prepend-->

                                          <select id="desfontfamilyh4" name="desfontfamilyh4" class="custom-select">

                                            <option value="OpenSans" <?php if( $customstyle["desfontfamilyh4"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                                            <option value="Norican" <?php if( $customstyle["desfontfamilyh4"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                          </select>

                                        
                                        </div><!--mb-3-->

                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->














                            <div class="row dash-input-row row-2-columns">



                                <div class="col-md-4">

                                    <label for="descolortext">Cor do Texto</label>

                                    <div id="descolortext">

                                        <input type="color" class="form-control" id="descolortext" name="descolortext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrddd-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <label for="descolorlinkhover">Cor dos Links | Efeito Hover</label>

                                    <div id="descolorlinkhover">

                                        <input type="color" class="form-control" id="descolorlinkhover" name="descolorlinkhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorlinkhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-4">

                                    <div class="dash-input-row input-date">
                                
                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend">

                                            <label class="input-group-text" for="desfontfamilytext">Tipo de Fonte do Texto</label>

                                          </div><!--input-group-prepend-->

                                          <select id="desfontfamilytext" name="desfontfamilytext" class="custom-select">

                                            <option value="OpenSans" <?php if( $customstyle["desfontfamilytext"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                                            <option value="Norican" <?php if( $customstyle["desfontfamilytext"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                          </select>

                                        
                                        </div><!--mb-3-->

                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->












                            <div class="row dash-input-row row-2-columns">



                                
                        

                                <div class="col-md-6">

                                    <label for="desroundbordersize">Tamanho da Borda Arredondada: <span id="border-size"><?php echo htmlspecialchars( $customstyle["desroundbordersize"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></label>

                                    <div>

                                        <input type="range"  min="1" max="12" class="form-control" id="desroundbordersize" name="desroundbordersize" value="<?php echo htmlspecialchars( $customstyle["desroundbordersize"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        
                                    </div><!--nrphone-->

                                </div><!--col-->



                                <div class="col-md-6">

                                    <div class="dash-input-row input-photo">

                            
                                            <div class="input-group mb-3">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Foto do Casal</span>
                                              </div>
                                              <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="file">Selecionar imagem</label>

                                              </div>
                                            </div>
                                            <div class="input-rows">
                                                <img class="img-responsive" id="image-preview" src="/uploads/banners/<?php echo htmlspecialchars( $customstyle["desbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                            </div>

                                        
                                    </div><!--dash-input-row-->

                                </div><!--col-->



                            </div><!--row-->













                            <div class="row dash-input-row">

                                

                            </div><!--dash-input-row-->









                    




                            
















                            <div class="dash-input-row">
                                <input type="hidden" class="form-control" id="idcustomstyle" name="idcustomstyle" value="<?php echo htmlspecialchars( $customstyle["idcustomstyle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>




                            <div class="dash-input-row">
                                <input type="hidden" class="form-control" id="idtemplate" name="idtemplate" value="<?php echo htmlspecialchars( $customstyle["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>



                            


                            
                            
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

