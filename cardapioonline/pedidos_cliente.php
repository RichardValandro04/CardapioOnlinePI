    <?php
    $csscustomiza = "pedidos_cliente.css";
    include 'header_3.php';

    ?>

    <div class="identificador_pagina">
        <img src="imagens/icone_pedidos.png" alt="" id="icone_pessoa">
        <h1>MEUS PEDIDOS</h1>
    </div>

    <article>
        <section>
            <table>
                <div class="legendas_tabela">
                    <legend>Aguardando Confirmação</legend>
                    <p>|</p>
                    <legend>Em Andamento</legend>
                    <p>|</p>
                    <legend>Concluídos</legend>
                    <p>|</p>
                    <legend>Cancelados</legend>
                </div>

                <div class="titulos">
                    <p>Pedido</p>
                    <p>Data do Pedido</p>
                    <p>Valor Total</p>
                </div>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0003</td>
                    <td class="date">22/03/2024</td>
                    <td class="valor">R$ 19,90</td>
                </tr>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0002</td>
                    <td class="date">15/02/2024</td>
                    <td class="valor">R$ 29,90</td>
                </tr>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0001</td>
                    <td class="date">21/12/2024</td>
                    <td class="valor">R$ 134,00</td>
                </tr>
            </table>
        </section>
    </article>



    <?php
    $cssfooter= "footer_2.css";
    include 'footer_2.php';

    ?>
    
