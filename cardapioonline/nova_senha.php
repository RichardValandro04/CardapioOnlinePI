
    <?php
    $csscustomiza = "nova_senha.css";
    include 'header_2.php';

    ?>

    <!--nav "container" que inclui uma div "nova-senha", a div "confirmar-senha" e o botão de confirmação de alteração de senha-->
    <nav class="container">
        <!--div que inclui um label, um input e uma tag "p"-->
        <div class="nova_senha">
            <label for="novasenha">Nova Senha</label>
            <input type="text" id="novasenha" name="novasenha">
            <p>Sua nova senha deve conter no mínimo 8 caracteres</p>
        </div>

        <!--div que inclui um label e um input-->
        <div class="confirmar_senha">
            <label for="confsenha">Confirmar Nova Senha</label>
            <input type="text" id="confsenha" name="confsenha">
        </div>
        <!--botao que realiza a alteração de senha-->
        <button type="submit" class="botao_alterar">ALTERAR</button>
    </nav>

    <?php
    $cssfooter= "footer_1.css";
    include 'footer_1.php';
    ?>
