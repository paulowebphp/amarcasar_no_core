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

                    <?php if(  $maxProducts > $numProducts  ){ ?>
                 
                <div class="button-header pull-right">
                    <a href="/dashboard/presentes-virtuais/adicionar" class="btn btn-default">Criar Presente</a>
                </div>

                <div class="box-header pull-right">
                    <a href="/dashboard/presentes-virtuais/lista-pronta" class="btn btn-default">Adicionar da Lista Pronta</a>
                </div>

                <?php } ?>
                

                <div class="cart-collaterals">
                    <h2>Presentes &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numProducts, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxProducts, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

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

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Comprado</th>
                            <th>Foto</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["incategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["inbought"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><img src="/uploads/products/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></td>
                            <td style="width:222px;">
                                <a class="btn btn-default" href="/dashboard/presentes-virtuais/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Editar</a>
                                <a class="btn btn-warning" onclick="return confirm('Deseja realmente excluir este registro?')"  href="/dashboard/presentes-virtuais/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deletar" role="button">Deletar</a>
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum Produto foi encontrado.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="box-tools">
                <form action="/dashboard/presentes-virtuais">
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

