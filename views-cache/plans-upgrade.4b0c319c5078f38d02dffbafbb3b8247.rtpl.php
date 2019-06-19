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




            <div class="col-md-9 dash-panel tablersw conteudo-upgrade">

              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 planos plano-basico">
                <table class="table table-bordered" plano="2">
                  <thead>
                    <th>Básico</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="description_rsw">Perfeito para quem quer um site com as funcionalidades básicas, mas com funcionalidades importantes como:</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Presentes virtuais</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Confirmação de presença</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-times" style="color:red"></i> Músicas de fundo</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-times" style="color:red"></i> Introdução animada</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-times" style="color:red"></i> Domínio personalizado</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if( $user["inplancontext"] == 1  ){ ?> 

                          <button class="seu-plano-atual">Seu plano Atual</button> 

                        <?php }elseif( $user["inplancontext"] == 2 ){ ?> 

                          <button class="seu-plano-atual">Plano Indisponível</button>

                        <?php } ?>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 planos plano-classico">
                <table class="table table-bordered" plano="3">
                  <thead>
                    <th>Clássico</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="description_rsw">Funcionalidades clássicas para divulgar seu casamento, todos os recursos do Plano Básico e mais alguns como:</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Presentes virtuais</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Confirmação de presença</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Músicas de fundo</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-times" style="color:red"></i> Introdução animada</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-times" style="color:red"></i> Domínio personalizado</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if( $user["inplancontext"] == 1  ){ ?> 

                            <form action="/dashboard/meu-plano/upgrade/checkout" id="2">
                                <input type="hidden" name="plano" value="2<?php echo htmlspecialchars( $sufix, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <button class="plan-box-button" type="submit">Plano Clássico</button>
                            </form>

                        <?php }elseif( $user["inplancontext"] == 3 ){ ?>

                            <button class="seu-plano-atual">Seu Plano Atual</button>
                        
                        <?php } ?>
                      </td>
                    </tr>
                               
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 planos plano-gold">
                <table class="table table-bordered" plano="4">
                  <thead>
                    <th>Gold</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="description_rsw">Plano completo e avançado com todos os recursos e vantagens que o Amar Casar oferece ao Casal</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Presentes virtuais</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Confirmação de presença</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Músicas de fundo</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Introdução animada</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check" style="color:green"></i> Domínio personalizado</td>
                    </tr>
                    <tr>
                      <td>
                        <?php if( ($user["inplancontext"] == 1) or ($user["inplancontext"] == 2) ){ ?> 
                          <form action="/dashboard/meu-plano/upgrade/checkout"id="3">
                              <input type="hidden" name="plano" value="3<?php echo htmlspecialchars( $sufix, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                              <button class="plan-box-button" type="submit">Plano Gold</button>
                          </form>
                        <?php } ?> 
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>

              </div><!--row-->

            </div><!--col-->
    
    </div><!--container-->

</section>

