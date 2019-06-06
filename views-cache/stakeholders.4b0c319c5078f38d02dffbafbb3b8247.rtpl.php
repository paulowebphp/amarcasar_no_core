<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

     <div class="container-fluid">            
            

            
            <div class="row">

                


                <div class="col-md-2 text-center">

                    <div>

                        <?php require $this->checkTemplate("dashboard-menu");?>
                        

                    </div><!--media-->

                </div><!--col-lg-3-->





                <div class="col-md-9 dash-main-area">

                    <?php if(  $maxStakeholders > $numStakeholders  ){ ?>
                 
                <div class="box-header pull-right">
                    <a href="/dashboard/fornecedores/adicionar" class="btn btn-default">Criar Fornecedor</a>
                </div>

                <?php } ?>
                

                <div class="cart-collaterals">
                    <h2>Fornecedores &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numStakeholders, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxStakeholders, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

                

                <table class="table">
                    <thead>
                        <tr>
                            <th>Pos</th>
                            <th>Fornecedor</th>
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Telefone</th>
                            <th>Site</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($stakeholder) && ( is_array($stakeholder) || $stakeholder instanceof Traversable ) && sizeof($stakeholder) ) foreach( $stakeholder as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <td><?php echo htmlspecialchars( $value1["desstakeholder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["dessite"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td style="width:222px;">
                                <a class="btn btn-default" href="/dashboard/fornecedores/<?php echo htmlspecialchars( $value1["idstakeholder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Editar</a>
                                <a class="btn btn-warning" onclick="return confirm('Deseja realmente excluir este registro?')"  href="/dashboard/fornecedores/<?php echo htmlspecialchars( $value1["idstakeholder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deletar" role="button">Deletar</a>
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum Fornecedor foi encontrado.
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

