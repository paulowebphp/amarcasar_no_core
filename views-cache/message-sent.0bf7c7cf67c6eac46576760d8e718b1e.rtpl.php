<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                
                <h1>Mensage N°<?php echo htmlspecialchars( $message["idmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                <h3>Muito obrigado, </h3><h1><?php echo htmlspecialchars( $message["desmessage"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h3>você enviou a sua mensagem para o casal</h3>
                <br>
                <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h2>&</h2>
                <h1><?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br><br><br>

                <p>Seu E-mail: <b><?php echo htmlspecialchars( $message["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Mensagem:  <b><?php echo htmlspecialchars( $message["desdescription"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Data da Mensagem: <b><?php echo htmlspecialchars( $message["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>



            </div>

        </div>
        
    </div>
</div>