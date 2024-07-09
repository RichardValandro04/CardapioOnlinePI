
    <?php

        $csscustomiza = "clientes_confeitaria.css";
        include 'header_1.php';      

    ?>



    <article>

        <!-- Section meus-clientes inclui um ícone de pessoas e o texto clientes, identificando a página  -->
        <section class="identificador_pagina">
            <img src="imagens/icone_clientes.png" alt="clientes_icon">
            <p>CLIENTES</p>
        </section>

        <!-- Section clientes inclui a tabela de clientes -->
        <section class="clientes">
            <table class="tabela_clientes">
                <th class="coluna_nome">Nome Completo</th>
                <th class="coluna_telefone">Telefone</th>
                <th class="coluna_pedidos">Quantidade de Pedidos</th>



                <tr class="linha_tabela">
                    <td> Elisama Lima </td>
                    <td class="telefone"> (27) 9 2222-0000 </td>
                    <td> 15 </td>
                </tr>

                <tr class="linha_tabela">
                    <td> Henrique Cardoso Pandolfi </td>
                    <td class="telefone"> (27) 9 0000-1111 </td>
                    <td> 8 </td>
                </tr>

                <tr class="linha_tabela">
                    <td> João Pedro Parpaiolla </td>
                    <td class="telefone"> (27) 9 1111-2222 </td>
                    <td> 3 </td>
                </tr>

                <tr class="linha_tabela">
                    <td> Marta Talitha Mendes </td>
                    <td class="telefone"> (27) 9 1234-5678 </td>
                    <td> 19 </td>
                </tr>

                <tr class="linha_tabela">
                    <td> Ríchard Batista Valandro </td>
                    <td class="telefone"> (27) 9 9862-8468 </td>
                    <td> 10 </td>
                </tr>

                <tr class="linha_tabela">
                    <td> Samara Santos Souza </td>
                    <td class="telefone"> (27) 9 3214-0101 </td>
                    <td> 7 </td>
                </tr>
            </table>
        </section>
    </article>

    <?php
    
    $cssfooter= "footer_2.css";
    include 'footer_2.php';

    ?>