if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
} else {
  ready()
}

var totalAmount = "0,00"

var cartItems = [] // Array para armazenar os itens do carrinho

function ready() {
  // Botão remover produto
  const removeCartProductButtons = document.getElementsByClassName("remove-product-button")
  for (var i = 0; i < removeCartProductButtons.length; i++) {
    removeCartProductButtons[i].addEventListener("click", removeProduct)
  }

  // Mudança valor dos inputs
  const quantityInputs = document.getElementsByClassName("product-qtd-input")
  for (var i = 0; i < quantityInputs.length; i++) {
    quantityInputs[i].addEventListener("change", checkIfInputIsNull)
  }

  // Botão add produto ao carrinho
  const addToCartButtons = document.getElementsByClassName("button-hover-background")
  for (var i = 0; i < addToCartButtons.length; i++) {
    addToCartButtons[i].addEventListener("click", addProductToCart)
  }

  // Botão comprar
  const purchaseButton = document.getElementsByClassName("purchase-button")[0]
  purchaseButton.addEventListener("click", makePurchase)
}

function removeProduct(event) {
  event.target.parentElement.parentElement.remove()
  updateTotal()
  updateCartItems()
}

function checkIfInputIsNull(event) {
  if (event.target.value === "0") {
    event.target.parentElement.parentElement.remove()
  }

  updateTotal()
  updateCartItems()
}

function addProductToCart(event) {
  const button = event.target
  const productInfos = button.parentElement.parentElement
  const productId = productInfos.getAttribute("data-product-id"); // Obtém o ID exclusivo do produto
  const productImage = productInfos.getElementsByClassName("product-image")[0].src
  const productName = productInfos.getElementsByClassName("product-title")[0].innerText
  const productPrice = productInfos.getElementsByClassName("product-price")[0].innerText
  
  

  const productsCartNames = document.getElementsByClassName("cart-product-title")
  for (var i = 0; i < productsCartNames.length; i++) {
    if (productsCartNames[i].innerText === productName) {
      productsCartNames[i].parentElement.parentElement.getElementsByClassName("product-qtd-input")[0].value++
      updateTotal()
      return
    }
    
   const existingItem = cartItems.find(item => item.name === productName);

  if (existingItem) {
    existingItem.quantity++;
  } else {
    // Adicionar novo item ao carrinho
    const newItem = {
      name: productName,
      price: parseFloat(productPrice.replace("R$", "").replace(",", ".")),
      quantity: 1
    };
    cartItems.push(newItem);
  }

  updateCartItems(); // Atualiza os itens do carrinho
  updateTotal(); // Atualiza o valor total
   
  }

  let newCartProduct = document.createElement("tr")
  newCartProduct.classList.add("cart-product")

  newCartProduct.innerHTML =
    `
      <td class="product-identification">
        <img src="${productImage}" alt="${productName}" class="cart-product-image">
        <strong class="cart-product-title">${productName}</strong>
      </td>
      <td>
        <span class="cart-product-price">${productPrice}</span>
      </td>
      <td>
        <input type="number" value="1" min="0" class="product-qtd-input">
        <button type="button" class="remove-product-button">Remover</button>
      </td>
    `
  
  const tableBody = document.querySelector(".cart-table tbody")
  tableBody.append(newCartProduct)
  updateTotal()

  newCartProduct.getElementsByClassName("remove-product-button")[0].addEventListener("click", removeProduct)
  newCartProduct.getElementsByClassName("product-qtd-input")[0].addEventListener("change", checkIfInputIsNull)

// Verificar se o produto já está no carrinho
  const existingItem = cartItems.find(item => item.name === productName)

  if (existingItem) {
    existingItem.quantity++;
  } else {
    // Adicionar novo item ao carrinho
    const newItem = {
      name: productName,
      price: parseFloat(productPrice.replace("R$", "").replace(",", ".")),
      quantity: 1
    };
    cartItems.push(newItem);
  }

  updateCartItems();
  updateTotal();
}



function makePurchase() {
  if (totalAmount === "0,00") {
    alert("Seu carrinho está vazio!")
  } else {
	
	// Criar mensagem com os produtos comprados
    let purchaseMessage = "Iremos te redirecionar ao Whatsapp para enviar seu pedido! Lá você pode falar com um de nossos atendentes sobre a retirada e o pagamento.\n\nProdutos selecionados:\n\n";
    cartItems.forEach(item => {
      purchaseMessage += `${item.name} - Quantidade: ${item.quantity}\n`;
    });
    purchaseMessage += `\nValor do pedido: R$${totalAmount}\n\nAgradecemos pela preferência! :)`;

    alert(purchaseMessage);
	generateWhatsAppURL();
    document.querySelector(".cart-table tbody").innerHTML = "";
    cartItems = []; // Limpar o array de itens do carrinho
    updateTotal();
    
  }
}

// Atualizar o valor total do carrinho
function updateTotal() {
  const cartProducts = document.getElementsByClassName("cart-product")
  totalAmount = 0

  for (var i = 0; i < cartProducts.length; i++) {
    const productPrice = cartProducts[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$", "").replace(",", ".")
    const productQuantity = cartProducts[i].getElementsByClassName("product-qtd-input")[0].value

    totalAmount += parseFloat(productPrice) * parseFloat(productQuantity);
  }
  
  totalAmount = totalAmount.toFixed(2)
  totalAmount = totalAmount.replace(".", ",")
  document.querySelector(".cart-total-container span").innerText = "R$" + totalAmount
}

// Atualizar os itens do carrinho
function updateCartItems() {
  cartItems = [];
  const cartProducts = document.getElementsByClassName("cart-product");

  for (var i = 0; i < cartProducts.length; i++) {
    const productName = cartProducts[i].getElementsByClassName("cart-product-title")[0].innerText;
    const productPrice = parseFloat(cartProducts[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$", "").replace(",", "."));
    const productQuantity = parseInt(cartProducts[i].getElementsByClassName("product-qtd-input")[0].value);

    const newItem = {
      name: productName,
      price: productPrice,
      quantity: productQuantity
    };
    cartItems.push(newItem);
  }
}

// Função para gerar a URL do WhatsApp com as informações do pedido
function generateWhatsAppURL() {
  // Recupera as informações do pedido
  const pedidoItens = cartItems.map(item => `(${item.name}) - Quantidade: ${item.quantity}`).join('\n');
  const valorTotal = totalAmount.replace(",", ".");

  // Formata a mensagem para a URL do WhatsApp
  const mensagem = encodeURIComponent(
    `Olá! Selecionei os itens do meu pedido pelo site e gostaria de retirar na loja.
    
*Pedido:*

${pedidoItens}

*Valor total:*

R$${valorTotal}`);

  // Número de telefone e URL base do WhatsApp
  const numeroTelefone = "551123044699"; // Número de telefone
  const urlBaseWhatsApp = "https://wa.me/";
  
  // Monta a URL final
  const urlWhatsApp = `${urlBaseWhatsApp}${numeroTelefone}/?text=${mensagem}`;

  // Abre a URL no navegador
  window.open(urlWhatsApp, '_blank');
}





