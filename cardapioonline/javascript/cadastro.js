
document.querySelector(".formulario_dados").onsubmit = function(){
    var nome = document.querySelector("#nome_completo").value;
    var email = document.querySelector("#email").value;
    var cpf = document.querySelector("#cpf").value;
    var telefone = document.querySelector("#telefone").value;
    var senha = document.querySelector("#senha").value;
    var conf_senha = document.querySelector("#conf_senha").value;

    var cep = document.querySelector("#cep").value;
    var rua = document.querySelector("#rua").value;
    var bairro = document.querySelector("#bairro").value;
    var cidade = document.querySelector("#cidade").value;
    var uf = document.querySelector("#uf").value;
    var num = document.querySelector("#numero").value;
    var complemento = document.querySelector("#complemento").value;

    var erros= [];
    const regexName = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/;
    const regexCep = /^\d{5}-?\d{3}$/;
    const regexNum = /^\d+$/;



    
    if (!nome || !email || !cpf || !telefone || !senha || !conf_senha || !cep || !rua || !bairro || !cidade || !uf || !num || !complemento) {
        alert('Preencha todos os campos para prosseguir!');
        return false;
    } else if (nome && email && cpf && telefone && senha && conf_senha && cep && rua && bairro && cidade && uf && num && complemento){
        //Validação Nome
        if (nome.length < 2 || nome.length > 50) {
            erros.push("O nome deve ter entre 2 e 50 caracteres!");
        }
        if (!regexName.test(nome)) {
            erros.push("O nome pode conter apenas letras e espaços!");
        }

        //Validação Cpf

        //Validação Telefone

        //Validação Senha
        if(senha.length < 8){
            erros.push("A senha precisa conter no mínimo 8 caracteres!");
        }

        if(senha != conf_senha){
            erros.push("As senhas não são iguais!");
        }

        //Validação CEP
        

        //Validação NUM

        //Validação Complemento


        if(erros.length === 0){
            return true
        }else{
            alert("Erros Encontrados: \n" + erros.join("\n"));
            return false;
        }

    }


}








/*ERROS: 
 * APÓS PREENCHIDO O ENDEREÇO, EU CONSIGO MUDAR O VALOR DE CEP
 * AO DIGITAR LETRAS, O CODIGO FICA ESTÁTICO
 * PRECISA DE UM TRATAMENTO DE ERROS MELHOR E COMENTAR O QUE JA ESTA FEITO
*/


const campo_cep = document.querySelector("#cep");


campo_cep.addEventListener("blur", () => {
    var num_cep = campo_cep.value;
    var url = `https://viacep.com.br/ws/${num_cep}/json/`;

    fetch(url).then(resultado => {
        return resultado.json();
    }).then(dados => {
        if (dados.erro) {
            alert("O CEP DIGITADO ESTÁ INVÁLIDO");
            return;
        }
        preencherCampos(dados);
        })
    

})

function preencherCampos(dados) {
    var rua = document.querySelector("#rua");
    var bairro = document.querySelector("#bairro");
    var cidade = document.querySelector("#cidade");
    var uf = document.querySelector("#uf");

    rua.value = dados.logradouro;
    bairro.value = dados.bairro;
    cidade.value = dados.localidade;
    uf.value = dados.uf;
}

/*
//Capturando o botão de registro na tela de cadastro
const botao_registro = document.querySelector(".botao_registro");

//Deverá ser implementada na função do evento abaixo a lógica de validação de cadastro

//Adicionando evento de click para abrir um alert informando que o cadastro foi realizado
botao_registro.addEventListener("click", () => { alert("Cadastro Realizado!"); window.location.href = "home_cliente.php" });

*/
