<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-3 text-center">

                    <div>

                        <?php if( !validatePlanEnd($user["dtplanend"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-expirated");?>

                        <?php }elseif( validatePlanFree($user["inplancontext"]) ){ ?>

                            <?php require $this->checkTemplate("dashboard-menu-free");?>

                        <?php }else{ ?>

                            <?php require $this->checkTemplate("dashboard-menu");?>

                        <?php } ?>
                        

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

                    <form id="dash-form" method="post" action="/dashboard/meus-dados">

                        <div class="row">
                            
                            <div class="col-md-6">

                                
                                    
                                    <div class="input-rows">
                                    <label for="desemail">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                                    </div>

                                    <div class="input-rows">
                                    <label for="desperson">Nome completo</label>
                                    <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>


                                    <div class="input-rows">
                                    <label for="desnick">Escolha um apelido</label>
                                    <input type="text" class="form-control" id="desnick" name="desnick" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $user["desnick"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    
                                    <div class="row row-2-columns input-rows">

                                    <div class="col-md-2">
                                         <label for="nrddd">DDD</label>
                                        <div id="payment_cardmonth_1_field">
                                            <input type="text" placeholder="Mês" id="nrddd" name="nrddd" value="<?php echo htmlspecialchars( $user["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control">
                                            
                                        </div>
                                    </div>



                                    <div class="col-md-10">
                                        <label for="nrphone">Telefone</label>
                                        <div id="payment_cardyear_1_field">
                                            <input type="text" placeholder="Ano" id="nrphone" name="nrphone" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="form-control">
                                            
                                        </div>
                                    </div>

                                </div>


                                    

                            </div><!--col-md-6-->

                            <div class="col-md-6">
                                
                                
                                    <div class="input-rows">
                                    <label for="deszipcode">CEP</label>
                                    <input type="text" class="form-control" id="deszipcode" name="deszipcode" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $address["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    <div class="input-rows">
                                    <label for="desaddress">Endereço</label>
                                    <input type="text" class="form-control" id="desaddress" name="desaddress" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    
                                    <div class="input-rows">
                                    <label for="desnumber">Número</label>
                                    <input type="tel" class="form-control" id="desnumber" name="desnumber" placeholder="Digite o telefone aqui" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    <div class="input-rows">
                                    <label for="descomplement">Complemento (opcional)</label>
                                    <input type="text" class="form-control" id="descomplement" name="descomplement" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    <div class="input-rows">
                                    <label for="desdistrict">Bairro</label>
                                    <input type="text" class="form-control" id="desdistrict" name="desdistrict" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    



                                    <div class="state-city-dash">
                                        
                                            <label for="state">Estado</label>
                                        
                                            <select id="state" form="checkout-form" name="desstate">
                                                <?php $counter1=-1;  if( isset($state) && ( is_array($state) || $state instanceof Traversable ) && sizeof($state) ) foreach( $state as $key1 => $value1 ){ $counter1++; ?>
                                                    <option value="<?php echo htmlspecialchars( $value1["desstatecode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" <?php if( $value1["desstatecode"] == $address["desstate"] ){ ?>selected="selected"<?php } ?>><?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                                <?php } ?>
                                            </select>

                                    </div>





                                    <div class="state-city-dash">
                                            <label for="city">Cidade</label>
                                        
                                            <select id="city" form="checkout-form" name="descity">
                                                <?php $counter1=-1;  if( isset($city) && ( is_array($city) || $city instanceof Traversable ) && sizeof($city) ) foreach( $city as $key1 => $value1 ){ $counter1++; ?>
                                                    <option value="<?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" <?php if( $value1["descity"] == $address["descity"] ){ ?>selected="selected"<?php } ?>><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                                <?php } ?>
                                        </select>

                                    </div>









                                    <div class="input-rows">
                                    <input type="hidden" class="form-control" id="descountry" name="descountry" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>

                                    <div class="input-rows">
                                    <input type="hidden" class="form-control" id="idaddress" name="idaddress" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["idaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>


                                
                                
                            </div><!--col-md-6-->

                        </div><!--row-->
                        <div class="row input-rows">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div><!--row-->
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

