<?php if(!class_exists('Rain\Tpl')){exit;}?><section id="dashboard-init">

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

                    <?php if(  $maxBestFriends > $numBestFriends  ){ ?>
                 
                    <div class="box-header pull-right">
                        <a href="/dashboard/padrinhos-madrinhas/adicionar" class="btn btn-default">Criar Padrinho ou Madrinha</a>
                    </div>

                    <?php } ?>

                    

                    <div class="cart-collaterals">
                        <h2>Padrinhos e Madrinhas &nbsp;&nbsp;&nbsp; <?php echo htmlspecialchars( $numBestFriends, ENT_COMPAT, 'UTF-8', FALSE ); ?> / <?php echo htmlspecialchars( $maxBestFriends, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                    </div>
                    
                    <?php if( $bestFriendMsg != '' ){ ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars( $bestFriendMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
                    <?php if( $bestFriendError != '' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $bestFriendError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>

                    

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Foto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($bestFriend) && ( is_array($bestFriend) || $bestFriend instanceof Traversable ) && sizeof($bestFriend) ) foreach( $bestFriend as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars( $value1["inposition"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                                <td><?php echo htmlspecialchars( $value1["desbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["instatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><img src="/uploads/bestfriends/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></td>
                                <td style="width:222px;">
                                    <a class="btn btn-default" href="/dashboard/padrinhos-madrinhas/<?php echo htmlspecialchars( $value1["idbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Editar</a>
                                    <a class="btn btn-warning" onclick="return confirm('Deseja realmente excluir este registro?')"  href="/dashboard/padrinhos-madrinhas/<?php echo htmlspecialchars( $value1["idbestfriend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/deletar" role="button">Deletar</a>
                                </td>
                            </tr>
                            <?php }else{ ?>
                            <div class="alert alert-info">
                                Nenhum padrinho ou madrinha foi encontrado.
                            </div>
                            <?php } ?>
                        </tbody>
                    </table>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

