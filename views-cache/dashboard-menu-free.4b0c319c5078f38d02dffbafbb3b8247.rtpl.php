<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="list-group" id="menu">

    <div class="menu-body-color">
        
        <a href="/dashboard" class="list-group-item list-group-item-action">Início</a>


        <a href="/dashboard/meus-dados" class="list-group-item list-group-item-action">Meus Dados</a>

        <a href="/dashboard/meu-plano" class="list-group-item list-group-item-action">Meu Plano</a>

    </div>
    

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn" data-toggle="collapse" data-target="#collapseOne">Configurações</button>                                 
                </h2>
            </div>
            <div id="collapseOne" class="collapse<?php if( in_array(getUri($_SERVER['REQUEST_URI']) , ['dominio','meu-template','personalizar-site','menu','pagina-inicial']) ){ ?> show<?php } ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body card-body-text">
                    <p>
                        
    
                        <a href="/dashboard/dominio" class="list-group-item list-group-item-action">Domínio</a>

                        <a href="/dashboard/meu-template" class="list-group-item list-group-item-action">Meu Template</a>

                        <a href="/dashboard/personalizar-site" class="list-group-item list-group-item-action">Personalizar Site</a>

                        <a data-toggle="modal" data-target="#ExemploModalCentralizado" class="list-group-item list-group-item-action disabled-links">Menu</a>

                        <a data-toggle="modal" data-target="#ExemploModalCentralizado" class="list-group-item list-group-item-action disabled-links">Página Inicial</a>


                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo">Meu Casamento</button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse<?php if( in_array(getUri($_SERVER['REQUEST_URI']) , ['meu-casamento','meu-amor','festa-de-casamento','padrinhos-madrinhas']) ){ ?> show<?php } ?>" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body card-body-text">
                    


                        <a href="/dashboard/meu-casamento" class="list-group-item list-group-item-action">Meu Casamento</a>
    
                        <a href="/dashboard/meu-amor" class="list-group-item list-group-item-action">Meu Amor</a>
                        
                        <a data-toggle="modal" data-target="#ExemploModalCentralizado" class="list-group-item list-group-item-action" >Festa de Casamento</a>
                        
                        
                        <a href="/dashboard/padrinhos-madrinhas" class="list-group-item list-group-item-action">Padrinhos e 
                        Madrinhas</a>

                        
                      

                </div>
            </div>
        </div>
   



        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn collapsed" data-toggle="collapse" data-target="#collapseThree">Loja</button>
                </h2>
            </div>
            <div id="collapseThree" class='collapse<?php if( in_array(getUri($_SERVER['REQUEST_URI']) , ['painel-financeiro','presentes-virtuais']) ){ ?> show<?php } ?>' aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body card-body-text">
                
                        
                        <a href="/dashboard/presentes-virtuais" class="list-group-item list-group-item-action">Presentes Virtuais</a>


                        <a data-toggle="modal" data-target="#ExemploModalCentralizado" title="Tooltip na parte inferior" class="list-group-item list-group-item-action disabled-links">Painel Financeiro</a>
           
                        



                </div>
            </div>
        </div>




    </div><!--accordion-->

    
    <div class="menu-body-color">

        <a href="/dashboard/rsvp" class="list-group-item list-group-item-action">RSVP</a>
    
        <a href="/dashboard/mensagens" class="list-group-item list-group-item-action">Mensagens</a>

        <a href="/dashboard/album" class="list-group-item list-group-item-action">Album</a>
        
        <a href="/dashboard/videos" class="list-group-item list-group-item-action">Vídeos</a>
        
        <a href="/dashboard/eventos" class="list-group-item list-group-item-action">Eventos</a>

        <a href="/dashboard/fornecedores" class="list-group-item list-group-item-action">Fornecedores</a>   
        
        <a data-toggle="modal" data-target="#ExemploModalCentralizado" class="list-group-item list-group-item-action disabled-links">Listas de Fora</a> 
          
        
        <a data-toggle="modal" data-target="#ExemploModalCentralizado" class="list-group-item list-group-item-action disabled-links">Tags e Papelaria</a>

        <a href="/dashboard/change-password" class="list-group-item list-group-item-action">Alterar Senha</a>
        
        
        <a href="/logout" class="list-group-item list-group-item-action">Sair</a>

    </div>

</div>