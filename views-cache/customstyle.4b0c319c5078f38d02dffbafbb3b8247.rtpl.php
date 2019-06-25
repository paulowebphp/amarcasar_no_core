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

                <form id="dash-form" method="post" action="/dashboard/personalizar-site" enctype="multipart/form-data">

                    <div class="row">
                        
                        <div class="col-md-12 dash-column">


                            
















                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="descolorheader">Cor da Fonte do Header</label>

                                            <div>   

                                                <input type="text" class="jscolor form-control" id="descolorheader" name="descolorheader" value="<?php echo htmlspecialchars( $customstyle["descolorheader"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                
                                            </div><!--nrddd-->

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="descolorheaderhover">Cor da Fonte do Header | Efeito Hover</label>

                                            <div>

                                                <input type="text" class="jscolor form-control" id="descolorheaderhover" name="descolorheaderhover" value="<?php echo htmlspecialchars( $customstyle["descolorheaderhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                
                                            </div><!--nrphone-->

                                        </div>

                                    </div>
                                    

                                </div><!--col-->






                                <div class="col-md-4 custom-style-row">


                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            <label for="descolorfooter">Cor da Fonte do Footer</label>
                                            <input type="text" class="jscolor form-control" id="descolorfooter" name="descolorfooter" value="<?php echo htmlspecialchars( $customstyle["descolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="descolorfooterhover">Cor da Fonte do Footer | Efeito Hover</label>

        
                                            <input type="text" class="jscolor form-control" id="descolorfooterhover" name="descolorfooterhover" value="<?php echo htmlspecialchars( $customstyle["descolorfooterhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>

                                    




                                </div><!--col-->




                                <div class="col-md-4 custom-style-row">
                                    
                                    <label for="desbgcolorfooter">Footer | Background Color</label>
                                    <input type="text" class="jscolor form-control" id="desbgcolorfooter" name="desbgcolorfooter" value="<?php echo htmlspecialchars( $customstyle["desbgcolorfooter"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        

                                </div><!--col-->




                            </div><!--row-->






































                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="desbgcolorbutton">Cor de Fundo dos Botões</label>


                                            <input type="text" class="jscolor form-control" id="desbgcolorbutton" name="desbgcolorbutton" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desbgcolorbutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            <label for="desbgcolorbuttonhover">Cor de Fundo dos Botões | Efeito Hover</label>


                                            <input type="text" class="jscolor form-control" id="desbgcolorbuttonhover" name="desbgcolorbuttonhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desbgcolorbuttonhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>


                                    </div>
                                    

                                </div><!--col-->






                                <div class="col-md-4 custom-style-row">


                                    


                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="descolorbutton">Cor do Texto dos Botões</label>


                                            <input type="text" class="jscolor form-control" id="descolorbutton" name="descolorbutton" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorbutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            <label for="descolorbuttonhover">Cor do Texto dos Botões | Efeito Hover</label>


                                            <input type="text" class="jscolor form-control" id="descolorbuttonhover" name="descolorbuttonhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorbuttonhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>


                                    </div>
                                    


                                </div><!--col-->




                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="desbordercolorbutton">Cor da Borda dos Botões</label>


                                            <input type="text" class="jscolor form-control" id="desbordercolorbutton" name="desbordercolorbutton" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desbordercolorbutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            <label for="desbordercolorbuttonhover">Cor da Borda dos Botões | Efeito Hover</label>


                                            <input type="text" class="jscolor form-control" id="desbordercolorbuttonhover" name="desbordercolorbuttonhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["desbordercolorbuttonhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>


                                    </div>
                                        

                                </div><!--col-->




                            </div><!--row-->




































                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    

                                    <div class="row">

                                        <div class="col-md-12">

                                            <label for="desfontfamilyh1">Tipo de Fonte dos Botões</label>

                                            <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilybutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilybutton" name="desfontfamilybutton" class="custom-select">

                                                <option value="Arial" data-fontfamily="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilybutton"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                                <option value="Heebo" data-fontfamily="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilybutton"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                                <option value="OpenSans" data-fontfamily="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilybutton"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                 
                                                <option value="Poppins" data-fontfamily="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilybutton"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                                <option value="Roboto" data-fontfamily="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilybutton"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                                <option value="Euphoria" data-fontfamily="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilybutton"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                                <option value="KaushanScript" data-fontfamily="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilybutton"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                                <option value="Norican" data-fontfamily="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilybutton"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                                <option value="Pacifico" data-fontfamily="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilybutton"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                                <option value="Satisfy" data-fontfamily="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilybutton"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                            </select>

                                        </div>


                                    </div>



                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            
                                            <label for="desborderradiusbutton">Arredondamento dos Botões: <strong id="border-radius"><?php echo htmlspecialchars( $customstyle["desborderradiusbutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></label>


                                            <input type="range"  min="1" max="12" class="form-control" id="desborderradiusbutton" name="desborderradiusbutton" value="<?php echo htmlspecialchars( $customstyle["desborderradiusbutton"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>
                                    

                                </div><!--col-->






                                <div class="col-md-4 custom-style-row">


                                    


                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                        
                                            <label for="descolorlinkhover">Cor dos Links | Efeito Hover</label>


                                            <input type="text" class="jscolor form-control" id="descolorlinkhover" name="descolorlinkhover" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorlinkhover"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            &nbsp;

                                        </div>


                                    </div>
                                    


                                </div><!--col-->




                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="desroundbordersize">Espessura da Borda das Imagens: <strong id="border-size"><?php echo htmlspecialchars( $customstyle["desroundbordersize"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></label>


                                            <input type="range"  min="1" max="12" class="form-control" id="desroundbordersize" name="desroundbordersize" value="<?php echo htmlspecialchars( $customstyle["desroundbordersize"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">

                                            &nbsp;

                                        </div>


                                    </div>
                                        

                                </div><!--col-->




                            </div><!--row-->

























































                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            <label for="descolorh1">Cor do H1</label>


                                            <input type="text" class="jscolor form-control" id="descolorh1" name="descolorh1" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="desfontfamilyh1">Tipo de Fonte do H1</label>

                                            <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilyh1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilyh1" name="desfontfamilyh1" class="custom-select">

                                                <option value="Arial" data-fontfamily="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilyh1"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                                <option value="Heebo" data-fontfamily="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilyh1"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                                <option value="OpenSans" data-fontfamily="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilyh1"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                 
                                                <option value="Poppins" data-fontfamily="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilyh1"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                                <option value="Roboto" data-fontfamily="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilyh1"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                                <option value="Euphoria" data-fontfamily="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilyh1"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                                <option value="KaushanScript" data-fontfamily="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilyh1"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                                <option value="Norican" data-fontfamily="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilyh1"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                                <option value="Pacifico" data-fontfamily="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilyh1"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                                <option value="Satisfy" data-fontfamily="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilyh1"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                            </select>

                                        </div>

                                    </div>
                                    

                                </div><!--col-->






                                <div class="col-md-4 custom-style-row">


                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            <label for="descolorh2">Cor do H2</label>


                                            <input type="text" class="jscolor form-control" id="descolorh2" name="descolorh2" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="desfontfamilyh2">Tipo de Fonte do H2</label>

                                            <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilyh2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilyh2" name="desfontfamilyh2" class="custom-select">

                                                <option data-fontfamily="Arial" value="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilyh2"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                                <option data-fontfamily="Heebo" value="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilyh2"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                                <option data-fontfamily="OpenSans" value="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilyh2"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                 
                                                <option data-fontfamily="Poppins" value="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilyh2"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                                <option data-fontfamily="Roboto" value="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilyh2"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                                <option data-fontfamily="Euphoria" value="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilyh2"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                                <option data-fontfamily="KaushanScript" value="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilyh2"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                                <option data-fontfamily="Norican" value="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilyh2"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                                <option data-fontfamily="Pacifico" value="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilyh2"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                                <option data-fontfamily="Satisfy" value="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilyh2"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                            </select>

                                        </div>

                                    </div>

                                    




                                </div><!--col-->




                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">


                                            <label for="descolorh3">Cor do H3</label>


                                            <input type="text" class="jscolor form-control" id="descolorh3" name="descolorh3" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            
                                            
                                        

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                           <label for="desfontfamilyh3">Tipo de Fonte do H3</label>

                                            <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilyh3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilyh3" name="desfontfamilyh3" class="custom-select">

                                                <option value="Arial" data-fontfamily="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilyh3"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                                <option value="Heebo" data-fontfamily="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilyh3"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                                <option value="OpenSans" data-fontfamily="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilyh3"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                 
                                                <option value="Poppins" data-fontfamily="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilyh3"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                                <option value="Roboto" data-fontfamily="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilyh3"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                                <option value="Euphoria" data-fontfamily="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilyh3"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                                <option value="KaushanScript" data-fontfamily="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilyh3"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                                <option value="Norican" data-fontfamily="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilyh3"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                                <option value="Pacifico" data-fontfamily="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilyh3"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                                <option value="Satisfy" data-fontfamily="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilyh3"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                            </select>


                                        </div>

                                    </div>
                                        

                                </div><!--col-->




                            </div><!--row-->


































                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                             <label for="descolorh4">Cor do H4</label>


                                            <input type="text" class="jscolor form-control" id="descolorh4" name="descolorh4" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolorh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="desfontfamilyh4"><span>Tipo de Fonte do H4</span></label>

                                            <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilyh4"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilyh4" name="desfontfamilyh4" class="custom-select">

                                                <option value="Arial" data-fontfamily="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilyh4"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                                <option value="Heebo" data-fontfamily="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilyh4"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                                <option value="OpenSans" data-fontfamily="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilyh4"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
                 
                                                <option value="Poppins" data-fontfamily="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilyh4"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                                <option value="Roboto" data-fontfamily="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilyh4"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                                <option value="Euphoria" data-fontfamily="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilyh4"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                                <option value="KaushanScript" data-fontfamily="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilyh4"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                                <option value="Norican" data-fontfamily="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilyh4"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                                <option value="Pacifico" data-fontfamily="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilyh4"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                                <option value="Satisfy" data-fontfamily="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilyh4"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                            </select>

                                        </div>

                                    </div>
                                    

                                </div><!--col-->






                                <div class="col-md-4 custom-style-row">


                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            <label for="descolortext">Cor do Texto</label>


                                            <input type="text" class="jscolor form-control" id="descolortext" name="descolortext" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $customstyle["descolortext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            <label for="desfontfamilytext">Tipo de Fonte do Texto</label>

                                    <select style="font-family: '<?php echo htmlspecialchars( $customstyle["desfontfamilytext"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'" id="desfontfamilytext" name="desfontfamilytext" class="custom-select">

                                        <option value="Arial" data-fontfamily="Arial" style="font-family: 'Arial'" <?php if( $customstyle["desfontfamilytext"] == 'Arial' ){ ?>selected<?php } ?>>Arial</option>

                                        <option value="Heebo" data-fontfamily="Heebo" style="font-family: 'Heebo'" <?php if( $customstyle["desfontfamilytext"] == 'Heebo' ){ ?>selected<?php } ?>>Heebo</option>

                                        <option value="OpenSans" data-fontfamily="OpenSans" style="font-family: 'OpenSans'" <?php if( $customstyle["desfontfamilytext"] == 'OpenSans' ){ ?>selected<?php } ?>>OpenSans</option>
         
                                        <option value="Poppins" data-fontfamily="Poppins" style="font-family: 'Poppins'" <?php if( $customstyle["desfontfamilytext"] == 'Poppins' ){ ?>selected<?php } ?>>Poppins</option>

                                        <option value="Roboto" data-fontfamily="Roboto" style="font-family: 'Roboto'" <?php if( $customstyle["desfontfamilytext"] == 'Roboto' ){ ?>selected<?php } ?>>Roboto</option>

                                        <option value="Euphoria" data-fontfamily="Euphoria" style="font-family: 'Euphoria'" <?php if( $customstyle["desfontfamilytext"] == 'Euphoria' ){ ?>selected<?php } ?>>Euphoria</option>

                                        <option value="KaushanScript" data-fontfamily="KaushanScript" style="font-family: 'KaushanScript'" <?php if( $customstyle["desfontfamilytext"] == 'KaushanScript' ){ ?>selected<?php } ?>>KaushanScript</option>

                                        <option value="Norican" data-fontfamily="Norican" style="font-family: 'Norican'" <?php if( $customstyle["desfontfamilytext"] == 'Norican' ){ ?>selected<?php } ?>>Norican</option>

                                        <option value="Pacifico" data-fontfamily="Pacifico" style="font-family: 'Pacifico'" <?php if( $customstyle["desfontfamilytext"] == 'Pacifico' ){ ?>selected<?php } ?>>Pacifico</option>

                                        <option value="Satisfy" data-fontfamily="Satisfy" style="font-family: 'Satisfy'" <?php if( $customstyle["desfontfamilytext"] == 'Satisfy' ){ ?>selected<?php } ?>>Satisfy</option>

                                    </select>

                                        </div>

                                    </div>

                                    




                                </div><!--col-->




                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            
                                            &nbsp;

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            &nbsp;


                                        </div>

                                    </div>
                                        

                                </div><!--col-->




                            </div><!--row-->

















































                            







                            <div class="row dash-input-row row-2-columns">






                                <div class="col-md-4 custom-style-row">

                                    

                                    <div class="row">

                                        <div class="col-md-12">

                                            &nbsp;

                                        </div>


                                    </div>



                                    <div class="row">
                                        
                                        <div class="col-md-12">

                                            
                                            &nbsp;


                                        </div>

                                    </div>
                                    

                                </div><!--col-->



                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            
                                            &nbsp;

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            &nbsp;


                                        </div>

                                    </div>
                                        

                                </div><!--col-->



                                <div class="col-md-4 custom-style-row">

                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            
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
                                                    <img class="img-responsive" id="image-preview" src="/uploads/banners/<?php echo htmlspecialchars( $customstyle["desbanner"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                                </div>

                                                
                                            </div><!--dash-input-row-->

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-md-12">
                                            
                                            &nbsp;


                                        </div>

                                    </div>
                                        

                                </div><!--col-->




                                




                                




                            </div><!--row-->










                    




                            
















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

