<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="plans">

  <div class="container">




      <div class="row">
        

        <div class="plans-title col-md-12">

          <h1>Planos para Site de Casamento</h1>
          <p>Confira nossos planos e Compare</p> 

        </div><!--col-->


      </div><!--row-->

        





        <div class="row">




          <div class="col-md-3">
            
            <div class="plan plan-free">

              <h2 class="plan-title">15 DIAS FREE</h2>

              <h3 class="plan-subtitle">Aproveite!</h3> 

              <div class="pricing"> 

                <div class="currency"> 

                  <strong>&nbsp;</strong> 

                  <span class="plan-coin">R$</span> 

                </div><!--currency-->

                <span class="price">0</span> 

                <span>,00</span>

              </div><!--pricing-->

              <p>&nbsp;</p> 

              <b>&nbsp;</b> 



              <p class="plan-description"><strong>Nenhum</strong>  cartão será solicitado</p>




              <form action="/criar-site-de-casamento" id="0">
                        <input type="hidden" name="plano" value="0">
                         <button type="submit" class="plan-box-button">Teste por 15 dias</button>
                    </form>

            </div><!--plan-->

          </div><!--col-->




          <div class="col-md-3">
          
            <div class="plan">

                <h2 class="plan-title"><strong>BÁSICO</strong></h2>

                <h3 class="plan-subtitle">Plano básico</h3>



                <div class="pricing">

                  <div class="currency">

                    <strong>6x</strong>

                    <span class="plan-coin">R$</span> 

                  </div><!--currency-->

                  <span id="plan1-vlinteger" class="price"><?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,1); ?></span>
                  <span id="plan1-vldecimal">,<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,0); ?></span> 

                </div><!--pricing-->



                <p>ou</p>
                <p class="plan-description"><span id="plan1-vlsaleprice">R$ <?php echo formatPrice($plans["103"]["vlsaleprice"]); ?></span> pelo período de:</p>



                
                <select id="plan1" form="1" name="plano">
                        <option value="103" data-nrinstallment="6" data-vlsaleprice="<?php echo htmlspecialchars( $plans["103"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["103"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["103"]["vlsaleprice"]/6,0); ?>' selected="selected">3 meses</option> 
                        <option value="104" data-nrinstallment="6" data-vlsaleprice="<?php echo htmlspecialchars( $plans["104"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["104"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["104"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["104"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                        <option value="106" data-vlsaleprice="<?php echo htmlspecialchars( $plans["106"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["106"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["106"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["106"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                        <option value="109" data-vlsaleprice="<?php echo htmlspecialchars( $plans["109"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["109"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["109"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["109"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                        <option value="112" data-vlsaleprice="<?php echo htmlspecialchars( $plans["112"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["112"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["112"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["112"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                    </select>

                    <form action="/criar-site-de-casamento" id="1">
                      <button type="submit" class="plan-box-button">Comece já</button>
                    </form>




              </div><!--plan--> 
            
            </div><!--col-->









            <div class="col-md-3">

              <div class="plan">

                <h2 class="plan-title"><strong>CLÁSSICO</strong></h2> 
              
                <h3 class="plan-subtitle">Intermediário</h3> 
                
                

                <div class="pricing">

                  <div class="currency">

                    <strong>6x</strong>
                    <span class="plan-coin">R$</span>

                  </div><!--currency-->
                    
                  <span id="plan2-vlinteger" class="price"><?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,1); ?></span>
                  <span id="plan2-vldecimal">,<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,0); ?></span> 

                </div><!--pricing-->



                <p>ou</p>
                <p class="plan-description"><span id="plan2-vlsaleprice">R$ <?php echo formatPrice($plans["203"]["vlsaleprice"]); ?></span> pelo período de:</p>




                <select id="plan2" form="2" name="plano">
                        <option value="203" data-vlsaleprice="<?php echo htmlspecialchars( $plans["203"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["203"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["203"]["vlsaleprice"]/6,0); ?>' selected="selected">3 meses</option> 
                        <option value="204" data-vlsaleprice="<?php echo htmlspecialchars( $plans["204"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["204"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["204"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["204"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                        <option value="206" data-vlsaleprice="<?php echo htmlspecialchars( $plans["206"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["206"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["206"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["206"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                        <option value="209" data-vlsaleprice="<?php echo htmlspecialchars( $plans["209"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["209"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["209"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["209"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                        <option value="212" data-vlsaleprice="<?php echo htmlspecialchars( $plans["212"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["212"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["212"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["212"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                    </select>

                    <form action="/criar-site-de-casamento"id="2">
                        <button type="submit" class="plan-box-button">Comece já</button>
                    </form>



            </div><!--plan-->

          </div><!--col-->
          
          




          <div class="col-md-3">

            <div id="plan-advanced" class="plan"> 

              <h2 class="plan-title">

                <strong>GOLD</strong>

              </h2>

              <h3 class="plan-subtitle">Tudo incluso</h3> 

              <div class="pricing">

                  <div class="currency"> 

                    <strong>6x</strong> 
                    <span class="plan-coin">R$</span> 

                  </div><!--currency-->

                  <span id="plan3-vlinteger" class="price"><?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,1); ?></span>
                  <span id="plan3-vldecimal">,<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,0); ?></span> 

                </div><!--pricing-->



                <p>ou</p>
                <p class="plan-description"><span id="plan3-vlsaleprice">R$ <?php echo formatPrice($plans["303"]["vlsaleprice"]); ?></span> pelo período de:</p>
              
              


              <select id="plan3" form="3" name="plano">
                        <option value="303" data-vlsaleprice="<?php echo htmlspecialchars( $plans["303"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["303"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["303"]["vlsaleprice"]/6,0); ?>' data-selected="selected">3 meses</option> 
                        <option value="304" data-vlsaleprice="<?php echo htmlspecialchars( $plans["304"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["304"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["304"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["304"]["vlsaleprice"]/6,0); ?>'>4 meses</option> 
                        <option value="306" data-vlsaleprice="<?php echo htmlspecialchars( $plans["306"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["306"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["306"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["306"]["vlsaleprice"]/6,0); ?>'>6 meses</option> 
                        <option value="309" data-vlsaleprice="<?php echo htmlspecialchars( $plans["309"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["309"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["309"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["309"]["vlsaleprice"]/6,0); ?>'>9 meses</option> 
                        <option value="312" data-vlsaleprice="<?php echo htmlspecialchars( $plans["312"]["vlsaleprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-vlinstallment='<?php echo roundValue($plans["312"]["vlsaleprice"]/6); ?>' data-vlinteger='<?php echo getValuePartial($plans["312"]["vlsaleprice"]/6,1); ?>' data-vldecimal='<?php echo getValuePartial($plans["312"]["vlsaleprice"]/6,0); ?>'>12 meses</option>
                    </select>

                    <form action="/criar-site-de-casamento"id="3">
                        <button type="submit" id="plan-gold-button" class="plan-box-button">Comece já</button>
                    </form>






            </div><!--plan-->

          </div><!--col-->



      </div><!--row-->
      







      <div class="row comparison">
      




        <div class="col-md-3">
  
          <div class="comparison-plan"> <h3>15 Dias Free</h3>

            <p>Está em dúvidas sobre qual plano escolher? Teste o site gratuitamente por 15 dias, com todos os recursos liberados (exceto Loja Virtual). Confira a lista de todos os recursos abaixo.</p>

          </div><!--comparison-->

        </div><!--col-->





        <div class="col-md-3">

          <div class="comparison-plan"> 

            <h3>Plano Básico</h3>

            <p>O Plano Básico é indicado para os casais que desejam um site mais simples, contendo os recursos essenciais para divulgar o momento mais lindo de suas vidas.</p>

          </div><!--comparison-->

        </div><!--col-->







      <div class="col-md-3">


        <div class="comparison-plan">

          <h3>Plano Clássico</h3>

          <p>O Plano Clássico contém todos os recursos do Plano Básico, e adiciona outros que deixam seu site de casamento ainda mais sofisticado e elegante!</p>

        </div><!--comnparison-->

      </div><!---->





      <div class="col-md-3">

        <div class="comparison-plan">

          <h3>Plano Gold</h3>

          <p>O Plano Gold contém o pacote completo com todos os recursos do site, para que os casais possam divulgar seu casamento com toda a comodidade e vantagens que o Amar Casar oferece.</p>

        </div><!--comparison-->

      </div><!--col-->





    </div><!--row-->






<div id="comparison-hidden" class="row">


<div class="col-md-12">



<table id="plans-table">



  <thead id="table-thead">

    <tr>
      
      <th class="plan-table-title">Compare as funcionalidades</th>

      <th>Básico</th> 

      <th>Clássico</th> 

      <th>Gold</th>

    </tr>

  </thead>

  



  <tbody>



    <tr>

      <td>

        <strong>Introdução Animada</strong>
        <span>Coloque um slideshow para aparecer no início do seu site</span>

      </td> 

      <td>&nbsp;</td> 

      <td>&nbsp;</td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr>







    <tr> 
  
      <td>

        <strong>Música de fundo</strong>
        <span>Playlist do Casal</span>

      </td> 

      <td><span >3 músicas</span></td> 

      <td><span >10 músicas</span></td> 

    </tr> 







    <tr>

      <td> 

        <strong>Álbum de fotos</strong> 
        <span>A história do Casal em imagens</span> 

      </td> 

      <td><span >90 MB</span></td> 

      <td><span >150 MB</span></td> 

      <td><span >Ilimitado</span></td> 

    </tr> 







    <tr>

      <td> 

        <strong>Saques gratuitos</strong>
        <span>Não pague nada para transferir seu dinheiro para sua conta</span> 

      </td>

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 





    <tr>

      <td>

        <strong>Domínio Personalizado</strong>
        <span>Personalize o endereço com que os convidados acessarão seu site</span>

      </td>

      <td><span >R$ 59,90</span></td>

      <td><span >R$ 59,90</span></td>

      <td><img src="/res/images/red-arrow.png"></td>

    </tr>





    <tr>

      <td> 

        <strong>Páginas</strong>
        <span>Personalize os títulos e conteúdos das suas páginas</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td>

    </tr> 





    <tr>

      <td>

        <strong>Confirmação de presença</strong>
        <span>Receba sua lista de convidados de forma ágil</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td>

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td>

    </tr> 








    <tr>

      <td>

        <strong>Suporte por chat</strong>
        <span>Chat ao vivo para te ajudar e tirar suas dúvidas</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 







    <tr>

      <td>

        <strong>Layouts</strong> 
        <span>Layouts modernos para você encantar seus convidados</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 







    <tr>

      <td>

        <strong>Lista de presentes</strong>
        <span>Crie sua Loja Virtual com presentes personalizados</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 







    <tr>

      <td>

        <strong>Lista em lojas físicas</strong>
        <span>Divulgue as lojas em que você criou suas listas</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 








    <tr>

      <td>

        <strong>Mapas com rotas</strong>
        <span>Ajude seus convidados a encontrar os eventos do seu casamento</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 









    <tr>

      <td>

        <strong>Contagem regressiva</strong>
        <span>Rumo ao grande dia!</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 







    <tr>

      <td>

        <strong>Contador de acessos</strong>
        <span>Saiba o número de visitas do seu site</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 







    <tr>

      <td>

        <strong>Habilitar/Desabilitar páginas</strong>
        <span>Escolha quais páginas aparecem em seu site</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 











    <tr>

      <td>

        <strong>Fontes personalizadas</strong>
        <span>Estilize as fontes do seu site</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 








    <tr>

      <td>

        <strong>Estatísticas</strong>
        <span>Verifique o resumo dos presentes, visitas e mensagens recebidos</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 








    <tr>

      <td>

        <strong>Notificações em tempo real</strong>
        <span>Fique por dentro de tudo o que acontece em seu site</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 








    <tr>

      <td>

        <strong>Sobre o casal</strong>
        <span>Conte a história do casal para seus convidados</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

    </tr> 






    <tr>

      <td>

        <strong>Mural de Mensagens</strong>
        <span>Emocione-se com as mensagens dos seus convidados</span>

      </td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td> 

      <td><img src="/res/images/red-arrow.png"></td>

    </tr>








    <tr>

      <td>

        <strong>Padrinhos e Madrinhas</strong>
        <span>Homenageie estas pessoas tão especiais para você</span>

      </td>

      <td><img src="/res/images/red-arrow.png"></td>

      <td><img src="/res/images/red-arrow.png"></td>

      <td><img src="/res/images/red-arrow.png"></td>

    </tr>









    <tr>

      <td>

          <strong>Eventos</strong>
          <span>Divulgue os detalhes de cada evento do seu casamento</span>

      </td>

      <td><img src="/res/images/red-arrow.png"></td>

      <td><span><img src="/res/images/red-arrow.png"></span></td>

      <td><span><img src="/res/images/red-arrow.png"></span></td>

    </tr>






    </tbody>

  </table>







  </div><!--col-->

</div><!--row-->










  </div><!--container-->

</section>