
    <?php
        $csscustomiza= "pedidos_confeitaria.css";
        include 'header_1.php';

    ?>

    <!-- Article que agrupa todos os componentes da página, com exceção do header -->
    <article>

        <!-- Section meus-clientes inclui um ícone de pessoas e o texto clientes, identificando a página  -->
        <section class="identificador_pagina">
            <img src="imagens/icone_pedidos.png" alt="clientes_icon">
            <p>PEDIDOS</p>
        </section>


        <!-- Section que agrupa as diferentes situações/estados que um pedido pode estar (representado por uma table) -->
        <section class="menu_situacao">
            <div class="container_situacao">
                <table class="tabela_situacao">
                    <th class="situacao_aguardando">Aguardando Confirmação</th>
                    <th class="situacao_andamento">Em Andamento</th>
                    <th class="situacao_concluidos">Concluidos</th>
                    <th class="situacao_cancelados">Cancelados</th>
                </table>
            </div>
        </section>

        <!-- Section que inclui um container -->
        <section>

            <!-- Container que inclui uma tabela com os dados do pedido (numero do pedido, data, preço total e dois botões, aceitar e recusar) -->
            <div class="container">
                <section class="section_table">
                    <fieldset class="caixa">

                        <table class="tabela_cliente">
                            <th class="coluna_pedido">PEDIDO</th>
                            <th class="coluna_data">REALIZADO EM</th>
                            <th class="coluna_valor">VALOR TOTAL</th>


                            <tr class="linha_tabela">
                                <td class="numero_pedido">
                                    #0001
                                </td>
                                <td class="data_realizada">
                                    23/03/2024 - 17:30
                                </td>

                                <td class="valor_total">
                                    R$ 19,90
                                </td>

                                <td class="coluna_botao">
                                    <div class="botoes">
                                        <p class="btn_aceitar">ACEITAR</p>
                                        <p class="btn_recusar">RECUSAR</p>
                                    </div>

                                </td>

                            </tr>

                            <tr class="linha_tabela">
                                <td class="numero_pedido">
                                    #0002
                                </td>

                                <td class="data_realizada">
                                    24/03/2024 - 18:14
                                </td>

                                <td class="valor_total">
                                    R$ 29,90
                                </td>

                                <td class="coluna_botao">
                                    <div class="botoes">
                                        <p class="btn_aceitar">ACEITAR</p>
                                        <p class="btn_recusar">RECUSAR</p>
                                    </div>

                                </td>
                            </tr>

                            <tr class="linha_tabela">
                                <td class="numero_pedido">
                                    #0003
                                </td>
                                <td class="data_realizada">
                                    24/03/2024 - 12:10
                                </td>

                                <td class="valor_total">
                                    R$ 134,00
                                </td>

                                <td class="coluna_botao">
                                    <div class="botoes">
                                        <p class="btn_aceitar">ACEITAR</p>
                                        <p class="btn_recusar">RECUSAR</p>
                                    </div>

                                </td>

                            </tr>




                        </table>
                    </fieldset>

                </section>
            </div>

        </section>
    </article>

    <?php

    $cssfooter= "footer_2.css";
    include 'footer_2.php';

    ?>
