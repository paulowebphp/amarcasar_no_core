<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="persons">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-3 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

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

                    <form method="post" action="/dashboard/meus-dados">

                        <div class="row">
                            
                            <div class="col-md-6">

                                
                                    
                                    <div>
                                    <label for="desemail">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" disabled>
                                    </div>
                                    <div>
                                    <label for="desperson">Nome completo</label>
                                    <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="nrddd">DDD</label>
                                    <input type="tel" class="form-control" id="nrddd" name="nrddd" placeholder="Digite o telefone aqui" value="<?php echo htmlspecialchars( $user["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="nrphone">Telefone</label>
                                    <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone aqui" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    

                            </div><!--col-md-6-->

                            <div class="col-md-6">
                                
                                
                                    <div>
                                    <label for="deszipcode">CEP</label>
                                    <input type="text" class="form-control" id="deszipcode" name="deszipcode" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $address["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="desaddress">Endereço</label>
                                    <input type="text" class="form-control" id="desaddress" name="desaddress" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    
                                    <div>
                                    <label for="desnumber">Número</label>
                                    <input type="tel" class="form-control" id="desnumber" name="desnumber" placeholder="Digite o telefone aqui" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="descomplement">Complemento</label>
                                    <input type="text" class="form-control" id="descomplement" name="descomplement" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="desdistrict">Bairro</label>
                                    <input type="text" class="form-control" id="desdistrict" name="desdistrict" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="descity">Cidade</label>
                                    <input type="text" class="form-control" id="descity" name="descity" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <label for="desstate">Estado</label>
                                    <input type="text" class="form-control" id="desstate" name="desstate" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <input type="hidden" class="form-control" id="descountry" name="descountry" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                    <div>
                                    <input type="hidden" class="form-control" id="idaddress" name="idaddress" placeholder="Digite seu domínio aqui" value="<?php echo htmlspecialchars( $address["idaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>


                                
                                
                            </div><!--col-md-6-->

                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </div>

                        </div><!--row-->
                    </form>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

