<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                
                <h1>Confirmação de Presença N°<?php echo htmlspecialchars( $rsvp["idrsvp"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

                <h3>Parabéns, </h3><h1><?php echo htmlspecialchars( $rsvp["desguest"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h3>você enviou seu presente para o casal</h3>
                <br>
                <h1><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br>
                <h2>&</h2>
                <h1><?php echo htmlspecialchars( $consort["desconsort"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
                <br><br><br>

                <p>Seu Telefone: <b><?php echo htmlspecialchars( $rsvp["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Seu E-mail: <b><?php echo htmlspecialchars( $rsvp["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Quantidade de Acompanhantes Adultos:  <b><?php echo htmlspecialchars( $rsvp["inadultsconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Quantidade de Acompanhantes Crianças:  <b><?php echo htmlspecialchars( $rsvp["inchildrenconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Nome dos Acompanhantes:  <b><?php echo htmlspecialchars( $rsvp["desguestaccompanies"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>
                <p>Data da Confirmação: <b><?php echo htmlspecialchars( $rsvp["dtconfirmed"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></p>



            </div>

        </div>
        
    </div>
</div>