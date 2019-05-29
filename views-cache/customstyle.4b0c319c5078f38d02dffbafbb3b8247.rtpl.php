<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
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
                    <form method="post" action="/dashboard/personalizar-site">

                        <div class="row">
                        
                            <div class="col-md-6">

                            
                                <div class="form-group">
                                <label for="descolorheader">Cor do Header</label>
                                <input type="text" class="form-control" id="descolorheader" name="descolorheader" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorheader"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                                

                                <div class="form-group">
                                <label for="descolorheadertext">Cor da Fonte do Header</label>
                                <input type="text" class="form-control" id="descolorheadertext" name="descolorheadertext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorheadertext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                                

                                <div class="form-group">
                                <label for="descolorheaderhover">Cor quando mouse está por cima de um Link - Header</label>
                                <input type="text" class="form-control" id="descolorheaderhover" name="descolorheaderhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                         

                                <div class="form-group">
                                <label for="descolorfooter">Cor do Footer</label>
                                <input type="text" class="form-control" id="descolorfooter" name="descolorfooter" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="descolorfootertext">Cor da Fonte do Footer</label>
                                <input type="text" class="form-control" id="descolorfootertext" name="descolorfootertext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorfootertext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="descolorfooterhover">Cor quando mouse está por cima de um Link - Footer</label>
                                <input type="text" class="form-control" id="descolorfooterhover" name="descolorfooterhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="descolorh1">Cor do H1</label>
                                <input type="text" class="form-control" id="descolorh1" name="descolorh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="desfontfamilyh1">Fonte do H1</label>
                                <input type="text" class="form-control" id="desfontfamilyh1" name="desfontfamilyh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="desfontsizeh1">Tamanho do H1</label>
                                <input type="text" class="form-control" id="desfontsizeh1" name="desfontsizeh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontsizeh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>

                                <div class="form-group">
                                <label for="descolorh2">Cor do h2</label>
                                <input type="text" class="form-control" id="descolorh2" name="descolorh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="desfontfamilyh2">Fonte do h2</label>
                                <input type="text" class="form-control" id="desfontfamilyh2" name="desfontfamilyh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>
                            

                                <div class="form-group">
                                <label for="desfontsizeh2">Tamanho do h2</label>
                                <input type="text" class="form-control" id="desfontsizeh2" name="desfontsizeh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontsizeh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                </div>



                            </div><!--col-md-6-->

                        <div class="col-md-6">



                            <div class="form-group">
                            <label for="descolorh3">Cor do h3</label>
                            <input type="text" class="form-control" id="descolorh3" name="descolorh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontfamilyh3">Fonte do h3</label>
                            <input type="text" class="form-control" id="desfontfamilyh3" name="desfontfamilyh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontsizeh3">Tamanho do h3</label>
                            <input type="text" class="form-control" id="desfontsizeh3" name="desfontsizeh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontsizeh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        


                            <div class="form-group">
                            <label for="descolorh4">Cor do h4</label>
                            <input type="text" class="form-control" id="descolorh4" name="descolorh4" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontfamilyh4">Fonte do h4</label>
                            <input type="text" class="form-control" id="desfontfamilyh4" name="desfontfamilyh4" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontfamilyh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontsizeh4">Tamanho do h4</label>
                            <input type="text" class="form-control" id="desfontsizeh4" name="desfontsizeh4" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontsizeh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>

                            <div class="form-group">
                            <label for="descolortext">Cor do Texto</label>
                            <input type="text" class="form-control" id="descolortext" name="descolortext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>

                            <div class="form-group">
                            <label for="descolortexthover">Cor do Hover do Texto</label>
                            <input type="text" class="form-control" id="descolortexthover" name="descolortexthover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolortexthover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontfamilytext">Fonte do Texto</label>
                            <input type="text" class="form-control" id="desfontfamilytext" name="desfontfamilytext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        

                            <div class="form-group">
                            <label for="desfontsizetext">Tamanho do Texto</label>
                            <input type="text" class="form-control" id="desfontsizetext" name="desfontsizetext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desfontsizetext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                                              

                            <div class="form-group">
                            <label for="desroundbordersize">Tamanho da Borda Arredondada</label>
                            <input type="text" class="form-control" id="desroundbordersize" name="desroundbordersize" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desroundbordersize"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>

                            <div class="form-group">
                            <label for="desbanner">Foto do Casal</label>
                            <input type="text" class="form-control" id="desbanner" name="desbanner" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>

                            <div class="form-group">
                            <input type="hidden" class="form-control" id="idcustomstyle" name="idcustomstyle" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["idcustomstyle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>

                            <div class="form-group">
                            <input type="hidden" class="form-control" id="idtemplate" name="idtemplate" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>


                        </div><!--col-md-6-->

                    </div><!--row-->

                    <div class="row">

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Salvar</button>

                        </div>

                    </div><!--row-->

                </form>

            </div>
        </div>
    </div>
</div>