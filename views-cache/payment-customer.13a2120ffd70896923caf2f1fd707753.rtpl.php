<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width"/>
        <title>Amar Casar</title>
    <style type="text/css">
        @font-face {
            font-family: 'OpenSans';
            src: url("/res/fonts/Open_Sans/OpenSans-Regular.ttf");
            font-size: 1em;
        }

        @font-face {
            font-family: 'Norican';
            src: url("/res/fonts/Norican/Norican-Regular.ttf");
            font-size: 1em;
        }
        body{
            padding: 0;
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.3rem;
        }
        #table-row{
            border-collapse: collapse; 
            mso-table-lspace: 0pt; 
            mso-table-rspace: 0pt;
        }
        #table-container{
            margin: 0 auto;
        }
        #email-box{
            font-family: 'OpenSans', 'Arial';
            padding: 8%;
        }
        #email-box td:first-child{
          width: 20%;
        }   
        #email-button{
            background: #945d9e;
            color: #fff;
            text-shadow:4px 4px 4px rgba(0, 0, 0, .35);
            border-radius: 12px;
            padding: 12px 38px;
            border: 2px solid #945d9e;
            font-family: 'Norican', 'Arial';
            text-decoration: none;
        }
        #title{
            color: #945d9e;
            font-family: 'Norican', 'Arial';
            font-size: 1.6rem;
        }
        #email-support{
            color: #945d9e;
            text-decoration: none;
        }
        
        table .column1{
            background: #ccc;
        }
        table .column2{
            background: #ddd;
        }
    </style>
    </head>


    <body id="amarcasar-email">
        <!-- section-2 "hero" -->
        <table id="table-row" width="100%" align="center" cellspacing="0" cellpadding="5 5" border="0">
            <!-- margin-top -->
            <tr>
                <td>
                    <table id="table-container" width="50%" align="center" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <!-- column-1  -->
                                <table id="email-box" width="100%" align="left" border="0" cellspacing="2" cellpadding="15 0">
                                    <tr>
                                        <td colspan="3" id="title" align="left">
                                            <span>Resumo da Compra</span>
                                        </td>
                                        <td align="right" border="0" cellspacing="0" cellpadding="0">
                                            <img src="/res/images/logo/email/logo-email.png" width="100" height="100"/>
                                        </td>
                                    </tr>
                                    <!-- horizontal gap -->
                                    <tr><td colspan="4" height="40"></td></tr>
                                    <tr>
                                        <td colspan="4">
                                            <strong>Olá, <?php echo htmlspecialchars( $order["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>!</strong>
                                        </td>
                                    </tr>
                                    <!-- horizontal gap -->
                                    <tr><td colspan="4"></td></tr>
                                    <tr>
                                        <td colspan="4">
                                            Você efetuou uma compra na Loja Virtual de <strong><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?> e <?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>. Confira os dados abaixo:
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>    
                                        <td colspan="4" align="left">
                                            <strong>Informações do Comprador </strong>
                                        </td>  
                                    </tr>
                                    <tr>    
                                        <td align="left" class="column1">
                                            <strong># </strong>
                                        </td>
                                        <td colspan="3" align="left" class="column2">
                                            <?php echo htmlspecialchars( $order["desordercode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" class="column1">
                                            <strong>Telefone </strong>
                                        </td>
                                        <td colspan="3" align="left" class="column2">
                                            <?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" class="column1">
                                            <strong>E-mail </strong>
                                        </td>
                                        <td colspan="3" align="left" class="column2">
                                            <?php echo htmlspecialchars( $order["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="left" class="column1">
                                            <strong>Endereço </strong>   
                                        </td>
                                        <td colspan="3" align="left" class="column2">   
                                            <?php echo htmlspecialchars( $order["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $order["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>(<?php echo htmlspecialchars( $order["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>) - <?php echo htmlspecialchars( $order["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $order["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="left" class="column1">
                                            <strong>Data </strong>   
                                        </td>
                                        <td colspan="3" align="left" class="column2">   
                                            <?php echo htmlspecialchars( $order["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>

                                    <!-- horizontal gap -->
                                    <tr>
                                        <td colspan="4" height="40"></td>

                                    </tr>
                                                                       <!-- horizontal gap -->
                                    <tr>    
                                        <td colspan="4" align="left">
                                            <strong>Detalhes da compra</strong>
                                        </td>  
                                    </tr>


                                    <tr>
                                        <td align="left" class="column1">   
                                            <strong>Nome</strong>
                                        </td>
                                        <td align="center" class="column1">   
                                            <strong>Preço Unitário</strong>
                                        </td>
                                        <td align="center" class="column1">   
                                            <strong>Quantidade</strong>
                                        </td>
                                        <td align="center" class="column1">   
                                            <strong>Total</strong>
                                        </td>
                                    </tr>
                                    <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td align="left">   
                                            <?php echo htmlspecialchars( $counter1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?>. <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td align="center">   
                                            <?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td align="center">   
                                            <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                        <td align="center">   
                                            <?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3" align="right" class="column2">
                                            <strong>Total </strong>   
                                        </td>
                                        <td align="center" class="column2">   
                                            <strong><?php echo htmlspecialchars( $order["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong>
                                        </td>
                
                                    </tr>

                                    <!-- horizontal gap -->
                                    <tr>
                                        <td colspan="4" height="40"></td>

                                    </tr>


                                    <tr>
                                        <td colspan="4">
                                            Busque o nome do casal no <strong>Amar Casar </strong>para confirmar sua presença, mandar mensagens, encantar-se com histórias, fotos, vídeos e muito mais!
                                        </td>
                                    </tr>
                                    <!-- horizontal gap -->
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="left">
                                            <a id="email-button" href="https://amarcasar.com/buscar" target="_blank">Buscar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" height="40"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="left" valign="middle">
                                            <hr>
                                            <p>Precisa de ajuda? <a id="email-support" href="https://amarcasar.com/contato"target="_blank"><strong>Fale conosco</a></p>
                                        </td>
                                    </tr>
                                </table><!-- END column-1 -->
                            </td>
                        </tr>
                    </table><!-- END container -->
                </td>
            </tr>
        </table><!-- END wrapper -->
    </body>
</html>
