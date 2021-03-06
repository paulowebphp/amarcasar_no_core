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




            <div class="col-md-9 dash-panel">


                <div class="row">
                    
                    <div class="col-md-12">

                        <?php if(  $maxvideos > $numvideos  ){ ?>
                 
                            <div class="button-header pull-right">
                                <a href="/dashboard/videos/adicionar" class="btn btn-default">Criar Video</a>
                            </div>

                        <?php } ?>
                        

                        <div class="dash-title">
                            <h1>Videos &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numvideos, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxvideos, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
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

                        
                    </div>

                </div>

                


                

                    <div class="row">

                        
                        <div id="dash-data" class="col-md-12">


                           
                                

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Video</th>
                                        <th>Descrição</th>
                                        <th>Endereço</th>
                                        <th>ID</th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $counter1=-1;  if( isset($video) && ( is_array($video) || $video instanceof Traversable ) && sizeof($video) ) foreach( $video as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td scope="row"><?php echo htmlspecialchars( $value1["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desvideo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                        <td><?php echo htmlspecialchars( $value1["desvideocode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
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
                            <div class="dash-search pull-right">
                                <form action="/dashboard/videos">
                                    <div class="input-group input-group-sm">
                                        
                                            <input type="text" name="search" class="form-control pull-right" placeholder="Buscar..." value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="dash-pagination clearfix">
                                <ul class="pagination pagination-sm no-margin">
                                    <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            
                            
                        </div><!--col-md-6-->


                    </div><!--row-->


               

            </div><!--col-->
        



      
        </div><!--row-->
    
    </div><!--container-->

</section>

