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
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                    <?php if( $customStyleMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $customStyleMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $customStyleError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $customStyleError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?> 
                    <form method="post" action="/dashboard/personalizar-site">


                        <div class="form-group">
                        <label for="idtemplate">Template do Casal</label>
                        <input type="text" class="form-control" id="idtemplate" name="idtemplate" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["idtemplate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="desbanner">Foto do Casal</label>
                        <input type="text" class="form-control" id="desbanner" name="desbanner" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        
                        <div class="form-group">
                        <label for="descolorheader">Cor do Header</label>
                        <input type="text" class="form-control" id="descolorheader" name="descolorheader" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorheader"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="descolorheadertext">Cor da Fonte do Header</label>
                        <input type="text" class="form-control" id="descolorheadertext" name="descolorheadertext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorheadertext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        

                        <div class="form-group">
                        <label for="descolorheaderhover">Cor quando mouse está por cima de um Link - Header</label>
                        <input type="text" class="form-control" id="descolorheaderhover" name="descolorheaderhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                 

                        <div class="form-group">
                        <label for="descolorfooter">Cor do Footer</label>
                        <input type="text" class="form-control" id="descolorfooter" name="descolorfooter" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="descolorfootertext">Cor da Fonte do Footer</label>
                        <input type="text" class="form-control" id="descolorfootertext" name="descolorfootertext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorfootertext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="descolorfooterhover">Cor quando mouse está por cima de um Link - Footer</label>
                        <input type="text" class="form-control" id="descolorfooterhover" name="descolorfooterhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="descolorh1">Cor do H1</label>
                        <input type="text" class="form-control" id="descolorh1" name="descolorh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontfamilyh1">Fonte do H1</label>
                        <input type="text" class="form-control" id="desfontfamilyh1" name="desfontfamilyh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontsizeh1">Tamanho do H1</label>
                        <input type="text" class="form-control" id="desfontsizeh1" name="desfontsizeh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontsizeh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>

                        <div class="form-group">
                        <label for="descolorh2">Cor do h2</label>
                        <input type="text" class="form-control" id="descolorh2" name="descolorh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontfamilyh2">Fonte do h2</label>
                        <input type="text" class="form-control" id="desfontfamilyh2" name="desfontfamilyh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontsizeh2">Tamanho do h2</label>
                        <input type="text" class="form-control" id="desfontsizeh2" name="desfontsizeh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontsizeh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>


                        <div class="form-group">
                        <label for="descolorh3">Cor do h3</label>
                        <input type="text" class="form-control" id="descolorh3" name="descolorh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontfamilyh3">Fonte do h3</label>
                        <input type="text" class="form-control" id="desfontfamilyh3" name="desfontfamilyh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontsizeh3">Tamanho do h3</label>
                        <input type="text" class="form-control" id="desfontsizeh3" name="desfontsizeh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontsizeh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="descolortext">Cor do Texto</label>
                        <input type="text" class="form-control" id="descolortext" name="descolortext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontfamilytext">Fonte do Texto</label>
                        <input type="text" class="form-control" id="desfontfamilytext" name="desfontfamilytext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                    

                        <div class="form-group">
                        <label for="desfontsizetext">Tamanho do Texto</label>
                        <input type="text" class="form-control" id="desfontsizetext" name="desfontsizetext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["desfontsizetext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                                          

                        

                        <div class="form-group">
                        <input type="hidden" class="form-control" id="idcustomstyle" name="idcustomstyle" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customStyle["idcustomstyle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</div>