<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="dashboard">

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

                    <?php if(  $maxRsvp > $numRsvp  ){ ?>

                 <div class="button-header pull-right">
                    <a href="/dashboard/rsvp/confirmados" class="btn btn-default">Lista de Confirmados</a>
                </div>

                <div class="box-header pull-right">
                    <a href="/dashboard/rsvp/configurar" class="btn btn-default">Configurações</a>
                </div>


                <div class="box-header pull-right">
                    <a href="/dashboard/rsvp/adicionar" class="btn btn-default">Adicionar Convidado</a>
                </div>
                               

                <?php } ?>
                

                <div class="cart-collaterals">
                    <h2>RSVP &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numRsvp, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxRsvp, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

                <?php if( $rsvpMsg != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $rsvpMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $rsvpError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $rsvpError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?> 

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Adultos</th>
                            <th>Crianças</th>
                            <th>Telefone</th>
                            <th>E-mail</th>

                            <th>Confirmado</th>
                            
                            <th>Nomes dos Acompanhantes</th>
                            <th>Data da Confirmação</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($rsvp) && ( is_array($rsvp) || $rsvp instanceof Traversable ) && sizeof($rsvp) ) foreach( $rsvp as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo htmlspecialchars( $value1["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php if( $value1["inadultsconfirmed"] > 0 ){ ?><?php echo htmlspecialchars( $value1["inadultsconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>0<?php } ?> / <?php echo htmlspecialchars( $value1["inmaxadults"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php if( $value1["inchildrenconfirmed"] > 0 ){ ?><?php echo htmlspecialchars( $value1["inchildrenconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?>0<?php } ?> / <?php echo htmlspecialchars( $value1["inmaxchildren"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desguestaccompanies"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

                            <td><?php echo htmlspecialchars( $value1["dtconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td>
                                <?php if( $value1["inconfirmed"] == 0 ){ ?>
                                    <a class="btn btn-default" href="/dashboard/rsvp/<?php echo htmlspecialchars( $value1["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Editar</a>

                                <?php } ?>
                                <a class="btn btn-warning" onclick="return confirm('Deseja realmente excluir este registro?')"  href="/dashboard/rsvp/<?php echo htmlspecialchars( $value1["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deletar" role="button">Deletar</a>
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum Convidado foi encontrado.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="box-tools">
                <form action="/dashboard/fornecedores">
                    <div class="input-group input-group-sm pull-right" style="width: 150px;">
                    <input type="text" name="search" class="form-control pull-right" placeholder="Buscar..." value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-left">
                        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                        <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

