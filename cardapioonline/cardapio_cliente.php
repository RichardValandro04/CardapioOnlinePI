<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    
    <link rel="stylesheet" href="css/cardapio_clientes.css">
    
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" defer></script>
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/cardapio_cliente.js" defer></script>
</head>

<body>

    <!--header que inclui uma saudação, juntamente com a logo da empresa, um texto de informação, um botão de carrinho e um botão de voltar-->
    <header>
        <div class="saudacao_usuario">
            <img src="imagens/icone_perfil.png" alt="Conta" class="icone_perfil">
            <p>Olá, Marta!</p>
        </div>

        <div class="informacao_tela">
            <h1>CARDÁPIO</h1>
        </div>

        <div class="div_carrinho" id="div_carrinho">
            <img src="imagens/icone_carrinho.png" class="icone_carrinho">
            <p>Carrinho</p>
        </div>

        <div class="voltar">
            <div class="icone_voltar">
                <img src="imagens/icone_voltar_rosa.png" alt="icone-voltar">
            </div>
        </div>

        <dialog class="dialog_carrinho" id="dialog_carrinho">
            <div>
                <span class="fechar" id="fechar"><img src="imagens/seta_modal_fechar.png" alt=""></span>
            </div>
            <div class="carrinho_info">
                <p>CARRINHO</p>
            </div>
            <div id="conteudo_carrinho">

            </div>
        </dialog>
    </header>


    <!--section que inclui 3 articles, doces, recheios e bolos-->
    <section>

        <dialog class="popup_adicionar" id="popup_adicionar">
            <p>Pedido adicionado ao carrinho</p>
        </dialog>
        <!--article que inclui uma legend, uma table que inclui os doces, seus ingredientes -->
        <article class="article_doces">
            <legend class="titulo_table">DOCES</legend>
            <table class="table_doces">
                <tr>
                    <td><img src="imagens/brigadeiro.jpg" class="imagens_doces" alt=""></td>
                    <td class="td_info_doces">
                        <div>
                            <p class="nome_doce">BRIGADEIROS</p>
                            <p class="ingredientes_doce">Leite condensado, cacau em pó e granulado</p>
                        </div>
                    </td>
                    <td class="td_info_valores">
                        <div>
                            <p class="valor_doce">R$ 6,00</p>
                            <p class="quantidade_doce">10 un.</p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id="brigadeiros" alt=""></td>
                </tr>

                <tr>
                    <td><img src="imagens/beijinho.jpg" class="imagens_doces" alt=""></td>
                    <td class="td_info_doces">
                        <div>
                            <p class="nome_doce">BEIJINHO DE COCO</p>
                            <p class="ingredientes_doce">Leite condensado e coco ralado</p>
                        </div>
                    </td>
                    <td class="td_info_valores">
                        <div>
                            <p class="valor_doce">R$ 5,50</p>
                            <p class="quantidade_doce">10 un.</p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id="beijinho" alt=""></td>

                </tr>

                <tr>
                    <td><img src="imagens/cajuzinho.jpg" class="imagens_doces" alt=""></td>
                    <td class="td_info_doces">
                        <div>
                            <p class="nome_doce">CAJUZINHO</p>
                            <p class="ingredientes_doce">Leite condensado, cacau em pó e amendoim</p>
                        </div>
                    </td>
                    <td class="td_info_valores">
                        <div>
                            <p class="valor_doce">R$ 8,50</p>
                            <p class="quantidade_doce">10 un.</p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id="cajuzinho" alt=""></td>

                </tr>

                <tr>
                    <td><img src="imagens/romeu_julieta.jpg" class="imagens_doces" alt=""></td>
                    <td class="td_info_doces">
                        <div>
                            <p class="nome_doce">ROMEU E JULIETA</p>
                            <p class="ingredientes_doce">Leite condensado, queijo ralado e goiabada</p>
                        </div>
                    </td>
                    <td class="td_info_valores">
                        <div>
                            <p class="valor_doce">R$ 9,00</p>
                            <p class="quantidade_doce">10 un.</p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id="romeujulieta" alt=""></td>

                </tr>

                <tr>
                    <td><img src="imagens/brigadeiro_cafe.jpg" class="imagens_doces" alt=""></td>
                    <td class="td_info_doces">
                        <div>
                            <p class="nome_doce">BRIGADEIRO DE CAFÉ</p>
                            <p class="ingredientes_doce">Leite condensado, cacau em pó e café</p>
                        </div>
                    </td>
                    <td class="td_info_valores">
                        <div>
                            <p class="valor_doce">R$ 6,99</p>
                            <p class="quantidade_doce">10 un.</p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id="brigcafe" alt=""></td>

                </tr>


            </table>
        </article>

        <!--article que inclui uma legend, uma table que inclui diversos checkbox acerca dos recheios escolhidos -->
        <article class="article_recheios">
            <legend class="titulo_table">RECHEIOS</legend>
            <table class="table_recheios">
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Ninho com Morango"> Ninho com Morango</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Ninho com Nutella"> Ninho com Nutella</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Brigadeiro Branco"> Brigadeiro Branco</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Brigadeiro Cremoso"> Brigadeiro Cremoso</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Doce de Leite"> Doce de Leite</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Ferrero Rocher"> Ferrero Rocher</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Abacaxi com Coco"> Abacaxi com Coco</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="4 Leites com KitKat"> 4 Leites com KitKat</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="recheio" class="checkbox_config" value="Oreo"> Óreo</td>
                </tr>
            </table>
        </article>

        <!--article que inclui uma legend, uma table que inclui a quantidade de fatias que um bolo suporta (média) e seu preço -->
        <article class="article_bolos">
            <legend class="titulo_table">BOLOS</legend>
            <table class="table_bolos">
                <td>
                    <div>
                        <p class="quantidade_fatias">4 FATIAS</p>
                        <p class="barra"></p>
                    </div>
                </td>
                <td>
                    <div>
                        <p class="valor_bolo">R$ 40,00</p>
                        <p class="barra"></p>
                    </div>
                </td>

                <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>

                <tr>

                    <td>
                        <div>
                            <p class="quantidade_fatias">10 FATIAS</p>
                            <p class="barra"></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p class="valor_bolo">R$ 80,00</p>
                            <p class="barra"></p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>

                </tr>

                <tr>

                    <td>
                        <div>
                            <p class="quantidade_fatias">20 FATIAS</p>
                            <p class="barra"></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p class="valor_bolo">R$ 140,00</p>
                            <p class="barra"></p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>

                </tr>

                <tr>

                    <td>
                        <div>
                            <p class="quantidade_fatias">35 FATIAS</p>
                            <p class="barra"></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p class="valor_bolo">R$ 200,00</p>
                            <p class="barra"></p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>

                </tr>

                <tr>

                    <td>
                        <div>
                            <p class="quantidade_fatias">45 FATIAS</p>
                            <p class="barra"></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <p class="valor_bolo">R$ 250,00</p>
                            <p class="barra"></p>
                        </div>
                    </td>

                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>


                </tr>


            </table>
        </article>

    </section>

    <!--footer que inclui um botão do tipo submit-->
    <footer>
        <button type="submit" class="botao_pedido"> REALIZAR PEDIDO</button>
    </footer>

</body>

</html>