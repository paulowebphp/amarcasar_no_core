<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                
                <div class="box-header pull-right">
                    <a href="/<?php echo htmlspecialchars( $user["desdomain"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/mural-mensagens/enviar" class="btn btn-default">Enviar Mensagem</a>
                </div>

            </div>

        </div>
           
           <div class="row"> 
            <div class="col-md-12 text-center">

                <?php if( $numevents === 0 ){ ?>
                    <h1>Ainda não há mensagens no Mural</h1>
                <?php }else{ ?>

                    <?php $counter1=-1;  if( isset($event) && ( is_array($event) || $event instanceof Traversable ) && sizeof($event) ) foreach( $event as $key1 => $value1 ){ $counter1++; ?>

                        <?php if( $value1["ineventstatus"] == 1 ){ ?>

                            <h1><?php echo htmlspecialchars( $value1["desevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                            <br>
                            <h4>Data: <?php echo htmlspecialchars( $value1["dtevent"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <h4>Descrição: <?php echo htmlspecialchars( $value1["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <h4>Telefone: <?php echo htmlspecialchars( $value1["nrddd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-<?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <h4>Endereço: <?php echo htmlspecialchars( $value1["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $value1["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <h4>Bairro: <?php echo htmlspecialchars( $value1["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <h4>Cidade/UF: <?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                            <br>
                            <img src="/uploads/events/<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            <br><br>
                            <a target="_blank" href=<?php echo setQueryString($value1["desaddress"],$value1["desnumber"],$value1["descomplement"],$value1["desdistrict"],$value1["descity"],$value1["desstate"],'driving'); ?>><button>Carro</button></a>


                            <a target="_blank" href=<?php echo setQueryString($value1["desaddress"],$value1["desnumber"],$value1["descomplement"],$value1["desdistrict"],$value1["descity"],$value1["desstate"],'transit'); ?>><button>Ônibus</button></a>

                            <a target="_blank" href=<?php echo setQueryString($value1["desaddress"],$value1["desnumber"],$value1["descomplement"],$value1["desdistrict"],$value1["descity"],$value1["desstate"],'bicycling'); ?>><button>Bicicleta</button></a>
                            <br><br><br><br>
                        <?php } ?>

                    <?php } ?>

                <?php } ?>       






            </div>

        </div>
        
    </div>
</div>