
    <?php
    $csscustomiza = "cadastro.css";
    include 'header_2.php';

    include_once 'controllers/controllerCadastro.php';

    ?>

    <!-- Article contém uma section de dados do usuario, essa section contém o formulário de dados -->
    <article>
        <section class="section_dados_usuario">
            <!-- O formulario de dados é dividido em 2 div's, uma de dados pessoais e outra de endereço -->
            <form class="formulario_dados" action = "controllers/controllerCadastro.php" method = "POST">

                <!-- div dados pessoais, agrupa todos os campos de dados pessoais -->
                <div class = "form">
                    <div class="dados_pessoais">
                        <legend>DADOS PESSOAIS</legend>
                        <div class="campo_nome">
                            <label for="nome_completo"> Nome Completo</label>
                            <input type="text" name="nome_completo" id="nome_completo">
                        </div>

                        <div class="campo_email">
                            <label for="email"> Email </label>
                            <input type="email" name="email" id="email">
                        </div>

                        <div class="campo_cpf">
                            <label for="cpf"> CPF </label>
                            <input type="text" name="cpf" id="cpf">
                        </div>

                        <div class="campo_telefone">
                            <label for="telefone"> Telefone</label>
                            <input type="tel" name="telefone" id="telefone" placeholder = "DDD + Numero">
                        </div>

                        <div class="linha_senha">
                            <div class="campo_senha">
                                <label for="senha"> Senha</label>
                                <input type="password" name="senha" id="senha">
                            </div>

                            <div class="campo_conf_senha">
                                <label for="conf_senha"> Confirmar Senha</label>
                                <input type="password" name="conf_senha" id="conf_senha">
                            </div>
                        </div>
                    </div>

                    <!-- div endereço, agrupa todos os campos de endereço -->
                    <div class="endereco">
                        <legend>ENDEREÇO</legend>
                        <div class="campo_cep">
                            <label for="cep"> CEP</label>
                            <input type="text" name="cep" id="cep" maxlength = 8>
                        </div>

                        <div class="linha_rua_num">
                            <div class="campo_rua">
                                <label for="rua"> Rua </label>
                                <input type="text" name="rua" id="rua" readonly>
                            </div>

                            <div class="campo_num">
                                <label for="numero"> N° </label>
                                <input type="text" name="numero" id="numero">
                            </div>

                        </div>

                        <div class="campo_bairro">
                            <label for="bairro"> Bairro </label>
                            <input type="text" name="bairro" id="bairro" readonly>
                        </div>

                        <div class="linha_cidade_uf">

                            <div class="campo_cidade">
                                <label for="cidade"> Cidade </label>
                                <input type="text" name="cidade" id="cidade" readonly>
                            </div>

                            <div class="campo_uf">
                                <label for="uf"> UF </label>
                                <input type="text" name="uf" id="uf" readonly>
                            </div>

                        </div>

                        <div class="campo_complemento">
                            <label for="complemento"> Complemento </label>
                            <input type="text" name="complemento" id="complemento">
                        </div>
                    </div>

                </div>

                <!-- Botao do tipo submit para envio do formulario ao banco de dados -->
                <div class="botao">
                    <button type="submit" class="botao_registro" name = "botao_registro" value="incluir">REGISTRAR-SE</button>
                </div>
            </form>
        </section>
    </article>


    <?php

    $cssfooter= "footer_1.css";
    include 'footer_1.php';
    ?>
    