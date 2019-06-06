<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

                    <?php if(  $numConfirmed > 0  ){ ?>

                <div class="box-header pull-right">
                    <a href="/dashboard/rsvp/download" class="btn btn-default">Baixar Lista de Confirmados em CSV</a>
                </div>

                <?php } ?>
                

                <div class="cart-collaterals">
                    <h2>Lista de Confirmados &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numConfirmed, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

                

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Adultos</th>
                            <th>Crianças</th>
                            <th>Confirmado</th>
                            <th>Data da Confirmação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($rsvp) && ( is_array($rsvp) || $rsvp instanceof Traversable ) && sizeof($rsvp) ) foreach( $rsvp as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo htmlspecialchars( $value1["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inadultsconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inchildrenconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["dtconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            
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

