const botao_pedido = document.querySelector(".botao_pedido");

botao_pedido.addEventListener("click", () => {window.location.href = "novo_pedido.php"})


// Declara a variavel do carrinho
const carrinho = [];

// Atualiza a bosta do carrinho
function atualizarCarrinho() {
    const conteudoCarrinho = document.getElementById("conteudo_carrinho");
    conteudoCarrinho.innerHTML = ""; // Limpa o conteúdo atual do carrinho

    carrinho.forEach((product, index) => {
        const productDiv = document.createElement("div");

        let recheiosInfo = "";
        if (product.recheios) {
            recheiosInfo = `<p>Recheios: ${product.recheios.join(', ')}</p>`;
        }

        productDiv.innerHTML = `
        <div class="nome_preco">
            <p>${product.nome}</p>
            <p>R$ ${(product.preco * product.quantity).toFixed(2)}</p>
        </div>
        <div class="quantidade_recheios">
            <p>Quantidade: ${product.quantity * product.unidades} un.</p>
            ${recheiosInfo}
        </div>
            <button class="diminuirQuantidade" data-index="${index}">-</button>
            <button class="aumentarQuantidade" data-index="${index}">+</button>
            <button class="removerCarrinho" data-index="${index}">Remover</button>
        `;

        productDiv.classList.add('item_carrinho'); // Adiciona uma classe pa div la

        conteudoCarrinho.appendChild(productDiv);
    });

    // Os eventos lá de aumentar, diminuir a quantidade e remover o bagulho do carrinho
    document.querySelectorAll(".aumentarQuantidade").forEach(button => {
        button.addEventListener("click", (e) => {
            const index = e.target.getAttribute("data-index");
            carrinho[index].quantity++;
            atualizarCarrinho();
        });
    });

    document.querySelectorAll(".diminuirQuantidade").forEach(button => {
        button.addEventListener("click", (e) => {
            const index = e.target.getAttribute("data-index");
            if (carrinho[index].quantity > 1) {
                carrinho[index].quantity--;
                atualizarCarrinho();
            }
        });
    });

    document.querySelectorAll(".removerCarrinho").forEach(button => {
        button.addEventListener("click", (e) => {
            const index = e.target.getAttribute("data-index");
            carrinho.splice(index, 1);
            atualizarCarrinho();
        });
    });
}

// Quando clicar no trem, adiciona itens no carrinho
document.querySelectorAll(".carrinho_buy").forEach(button => {
    button.addEventListener("click", () => {
        const productElement = button.closest("tr");

        if (productElement) {
            const nome = productElement.querySelector(".nome_doce") ? productElement.querySelector(".nome_doce").textContent : productElement.querySelector(".quantidade_fatias").textContent;
            const fatiasElement = productElement.querySelector(".quantidade_fatias");
            const fatias = fatiasElement ? fatiasElement.textContent : "";
            const precoTexto = productElement.querySelector(".valor_doce") ? productElement.querySelector(".valor_doce").textContent : productElement.querySelector(".valor_bolo").textContent;
            const unidadesPreco = productElement.querySelector(".quantidade_doce") ? productElement.querySelector(".quantidade_doce").textContent : "1 un.";
            const preco = parseFloat(precoTexto.replace("R$", "").replace(",", ".").trim());
            const unidades = parseInt(unidadesPreco.replace("un.", "").trim());

            // Vai capturar recheio só se for bolo sabosta
            let recheiosSelecionados = [];
            const tipoArticle = productElement.closest("article").classList.contains("article_bolos");

            if (tipoArticle) {
                recheiosSelecionados = Array.from(document.querySelectorAll('input[name="recheio"]:checked')).map(checkbox => checkbox.value);
            }

            // Vai ver se o corno selecionou recheio
            if (fatias && fatias.includes("FATIAS") && recheiosSelecionados.length === 0 && tipoArticle) {
                alert("Por favor, selecione pelo menos um recheio para o bolo.");
                return;
            }

            // Verifica se o produto já ta no carrinho, pq se tiver, a quantidade aumenta em 1
            const verifProdutoExiste = carrinho.findIndex(product =>
                product.nome === nome &&
                product.fatias === fatias &&
                (tipoArticle ? igualarArray(product.recheios, recheiosSelecionados) : true)
            );

            if (verifProdutoExiste !== -1) {
                carrinho[verifProdutoExiste].quantity++;
            } else {
                carrinho.push({
                    nome,
                    fatias,
                    preco,
                    quantity: 1,
                    unidades,
                    recheios: tipoArticle && recheiosSelecionados.length > 0 ? recheiosSelecionados : null
                });
            }

            atualizarCarrinho();
            mostrarDialogo();
        }
    });
});

// Função para mostrar o pop-up "item adicionado ao carrineo hehehe"
function mostrarDialogo() {
    const popupAdicionar = document.getElementById("popup_adicionar");
    popupAdicionar.show();
    setTimeout(() => {
        popupAdicionar.close();
    }, 3000); // O diálogo será fechado após 3 segundos
}


// Ve se os arrays são iguais (isso é pra evitar que recheios diferentes não sejam separados)
function igualarArray(arr1, arr2) {
    if (arr1 === arr2) return true;
    if (arr1 == null || arr2 == null) return false;
    if (arr1.length !== arr2.length) return false;

    for (let i = 0; i < arr1.length; i++) {
        if (arr1[i] !== arr2[i]) return false;
    }

    return true;
}

// Botão de abrir e fechar (la ele)
const abrirCarrinho = document.getElementById("div_carrinho");
const modalCarrinho = document.getElementById("dialog_carrinho");
const fecharCarrinho = document.getElementById("fechar");

abrirCarrinho.addEventListener("click", () => {
    modalCarrinho.showModal();
    atualizarCarrinho();
});

fecharCarrinho.addEventListener("click", () => {
    modalCarrinho.close();
});

// Limite de checkboxes que podem ser marcados
const limite = 3;

// Capturando todos os checkboxes
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Adicionando evento de escuta para cada checkbox
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        // Contando quantos checkboxes estão marcados
        const marcadas = document.querySelectorAll('input[type="checkbox"]:checked');
        // Se o número de checkboxes marcados for maior que o limite, desmarca o último checkbox marcado e emite alerta
        if (marcadas.length > limite) {
            this.checked = false;
            alert("Você pode escolher no máximo 3 recheios");
        }
    });
});
