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





                <div class="col-md-9 dash-main-area text-center">

                <div id="tags-title">
                    <h1>Tags e Papelaria</h1>
                </div>

                <?php if( $tagSuccess != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $tagSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $tagError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $tagError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>


               

                    <div class="row-tags row">


                            <div class="col-md-12">
                                <h3 style="color: #5e299a">Tags de Mesa - Freedom</h3>
                            </div>
                            
                            <div class="col-md-12">


                                <div class="tags-box">
                                    <ul>
                                        <?php $counter1=-1;  if( isset($tag["freedom"]) && ( is_array($tag["freedom"]) || $tag["freedom"] instanceof Traversable ) && sizeof($tag["freedom"]) ) foreach( $tag["freedom"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/freedom/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/freedom/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            


                            </div>
                           
                        </div>


                        <div class="row-tags row">
                            <div class="col-md-12">
                                <h3 style="color: #dd716f">Tags de Mesa - Love</h3>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="tags-box">
                                    <ul>
                                        <?php $counter1=-1;  if( isset($tag["love"]) && ( is_array($tag["love"]) || $tag["love"] instanceof Traversable ) && sizeof($tag["love"]) ) foreach( $tag["love"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/love/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/love/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                
                            </div>
                           
                        </div>

                        <div class="row-tags row">
                            <div class="col-md-12">
                                <h3 style="color: #49a1de">Tags de Mesa - Classic</h3>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="tags-box"><ul>
                                    <?php $counter1=-1;  if( isset($tag["classic"]) && ( is_array($tag["classic"]) || $tag["classic"] instanceof Traversable ) && sizeof($tag["classic"]) ) foreach( $tag["classic"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/classic/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/classic/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                
                            </div>
                           
                        </div>

                        <div class="row-tags row">
                            <div class="col-md-12">
                                <h3 style="color: #CFB53B">Tags de Mesa - Gold</h3>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="tags-box"><ul>
                                    <?php $counter1=-1;  if( isset($tag["gold"]) && ( is_array($tag["gold"]) || $tag["gold"] instanceof Traversable ) && sizeof($tag["gold"]) ) foreach( $tag["gold"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/gold/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/gold/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            
                                
                            </div>
                           
                        </div>


                        <div class="row-tags row">
                            <div class="col-md-12">
                                <h3 style="color: #5e299a">Convites</h3>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="tags-box">
                                    <ul>
                                    <?php $counter1=-1;  if( isset($tag["convite"]) && ( is_array($tag["convite"]) || $tag["convite"] instanceof Traversable ) && sizeof($tag["convite"]) ) foreach( $tag["convite"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/convite/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/convite/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            
                                
                            </div>
                           
                        </div>

                        <div class="row-tags row">
                            <div class="col-md-12">
                                
                                <h3 style="color: #CFB53B">Plaquinhas para Festa</h3>
                            </div>
                            
                            <div class="col-md-12">

                                <div class="tags-box">
                                    <ul>
                                    <?php $counter1=-1;  if( isset($tag["plaquinha"]) && ( is_array($tag["plaquinha"]) || $tag["plaquinha"] instanceof Traversable ) && sizeof($tag["plaquinha"]) ) foreach( $tag["plaquinha"] as $key1 => $value1 ){ $counter1++; ?>
                                        <li><a target="_blank" href="/res/images/papelaria/plaquinha/tag/<?php echo htmlspecialchars( $value1["tag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><img src="/res/images/papelaria/plaquinha/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a></li>
                                        <?php } ?>
                                    </ul>   
                                </div>
                            
                                
                            </div>
                           
                        </div>






                </div><!--col-->
        



      
            </div><!--row-->
    
    </div><!--container-->

</section>

