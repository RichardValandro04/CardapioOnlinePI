<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_1.css">
    <!-- <link rel="stylesheet" href="echo $url"> -->


    <?php 
        $csscustomiza;
        echo "<link rel='stylesheet' href='css/" . $csscustomiza .  "'>"
    
    ?>

    

    

    <!-- <link rel="stylesheet" href="css/cardapio_confeitaria.css"> -->
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/cardapio_confeitaria.js" defer></script>
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/pedidos_confeitaria.js" defer></script>
</head>
<body>
    <!-- Header inclui a logo da empresa e uma saudação à confeiteira que está logada -->
    <header>
        <div class="saudacao_logado">
            <img src="imagens/logo_mirian.png" alt="Logo MirianCakes" id="img_mirian">
            <h2 id="txt_ola_mirian">Olá, Mirian!</h2>
        </div>
    </header>
