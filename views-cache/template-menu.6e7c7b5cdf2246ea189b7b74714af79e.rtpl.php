<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Páginas
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a href="/<?php echo getDesdomain(); ?>" class="list-group-item list-group-item-action">Home</a>

        <?php if( setTemplateMenu('wedding') ){ ?><a href="/<?php echo getDesdomain(); ?>/cerimonia" class="list-group-item list-group-item-action">Cerimônia</a><?php } ?>

        <?php if( setTemplateMenu('party') ){ ?><a href="/<?php echo getDesdomain(); ?>/festa" class="list-group-item list-group-item-action">Festa</a><?php } ?>



        <?php if( setTemplateMenu('bestfriend') ){ ?><a href="/<?php echo getDesdomain(); ?>/padrinhos-madrinhas" class="list-group-item list-group-item-action">Padrinhos e Madrinhas</a><?php } ?>

        


        <?php if( setTemplateMenu('rsvp') ){ ?><a href="/<?php echo getDesdomain(); ?>/rsvp" class="list-group-item list-group-item-action">RSVP</a><?php } ?>

        
    

        <?php if( setTemplateMenu('message') ){ ?><a href="/<?php echo getDesdomain(); ?>/mural-mensagens" class="list-group-item list-group-item-action">Mensagens</a><?php } ?>

        

        <?php if( setTemplateMenu('store') ){ ?><a href="/<?php echo getDesdomain(); ?>/loja" class="list-group-item list-group-item-action">Loja</a><?php } ?>

        

        <?php if( setTemplateMenu('event') ){ ?><a href="/<?php echo getDesdomain(); ?>/eventos" class="list-group-item list-group-item-action">Eventos</a><?php } ?>
        
        

        <?php if( setTemplateMenu('album') ){ ?><a href="/<?php echo getDesdomain(); ?>/album" class="list-group-item list-group-item-action">Album</a><?php } ?>
        
        

        <?php if( setTemplateMenu('video') ){ ?><a href="/<?php echo getDesdomain(); ?>/videos" class="list-group-item list-group-item-action">Vídeos</a>  <?php } ?>

         

        <?php if( setTemplateMenu('stakeholder') ){ ?><a href="/<?php echo getDesdomain(); ?>/fornecedores" class="list-group-item list-group-item-action">Fornecedores</a> <?php } ?>
        
          

        <?php if( setTemplateMenu('outerlist') ){ ?><a href="/<?php echo getDesdomain(); ?>/listas-de-fora" class="list-group-item list-group-item-action">Listas de Fora</a><?php } ?>
  </div>
</div>

