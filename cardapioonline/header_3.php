<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_3.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/home_cliente.js" defer></script>
    <script src="javascript/pedidos_cliente.js" defer></script>


    <?php 
        $csscustomiza;
        echo "<link rel='stylesheet' href='css/" . $csscustomiza .  "'>"
    
    ?>
    
</head>
<body>
    <!--HEADER-->
    <header>
        <!-- Nome e Logo do sistema -->
        <div class="divlogo">
            <img src="imagens/logo_mirian.png" alt="Logo Mirian" class="logo">
            <p>Mirian Cakes <span>Confeitaria Artesanal</span></p>

        </div>

        <!-- Saudação ao usuário logado -->
        <div class="saudacao_usuario">
            <img src="imagens/icone_perfil.png" alt="Conta" class="icone_perfil">
            <p>Olá, Marta!</p>

        </div>
    </header>
</body>
</html>