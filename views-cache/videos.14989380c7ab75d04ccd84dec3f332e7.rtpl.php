<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("dashboard\dashboard-menu");?>
            </div>
            <div class="col-md-9">
                
                <?php if(  $maxVideos > $numVideos  ){ ?>
                 
                <div class="box-header pull-right">
                    <a href="/dashboard/videos/adicionar" class="btn btn-default">Criar Video</a>
                </div>

                <?php } ?>
                

                <div class="cart-collaterals">
                    <h2>Videos &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numVideos, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxVideos, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>

                

                <table class="table">
                    <thead>
                        <tr>
                            <th>Pos</th>
                            <th>Video</th>
                            <th>Descrição</th>
                            <th>Endereço</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($video) && ( is_array($video) || $video instanceof Traversable ) && sizeof($video) ) foreach( $video as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <td><?php echo htmlspecialchars( $value1["desvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td style="width:222px;">
                                <a class="btn btn-default" href="/dashboard/videos/<?php echo htmlspecialchars( $value1["idvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Editar</a>
                                <a class="btn btn-warning" onclick="return confirm('Deseja realmente excluir este registro?')"  href="/dashboard/videos/<?php echo htmlspecialchars( $value1["idvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deletar" role="button">Deletar</a>
                            </td>
                        </tr>
                        <?php }else{ ?>
                        <div class="alert alert-info">
                            Nenhum Video foi encontrado.
                        </div>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="box-tools">
                <form action="/dashboard/videos">
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

            </div>
        </div>
    </div>
</div>