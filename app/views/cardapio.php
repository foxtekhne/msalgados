<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mestre dos Salgados</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style5.css">
    <link rel="stylesheet" type="text/css" href="public/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css” rel=“stylesheet”>
    <script src="public/assets/js/script-darkmode.js" defer></script>
    <link rel="shortcut icon" href="public/assets/images/logo-original.png" type="image">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>

	<style>
        .header-cardapio {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
        }
        
        .modal-body{
            text-align:justify;
        }
        

	
	.col-md-4 {
	    padding: 10px; 
	}
	
	.card {
	    height: 400px; 
	    text-align: center;
	}
	.card:hover {
	    height: 400px; 
	    text-align: center;
	    background-color: #DDDDDD;
	}	
	.card-img-top {
	    width: 90%; 
	    height: 200px; 
	    object-fit: cover; 
	    text-align: center;
	}	
	.card .btn-primary {
	    width: 90%;
	    margin: 0 auto; 
	    display: block; 
	    text-align: center;
	}
	.card-title, .card-text {
	    width: 90%;
	    font-weight: bold; 
    	    margin: 0 auto; 
	    display: block; 
	    text-align: center;
	}
	
    </style>
	

</head>
<body class="page">
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Atenção!</h4>
            </div>
            <div class="modal-body">
              	<p>Prezados clientes,</p>
              	<br>
                <p>Para assegurar sua experiência segura de compra, informamos que o pagamento é realizado exclusivamente na loja, durante a retirada dos produtos.</p>
                <p>Após a escolha dos produtos, você será redirecionado automaticamente para o WhatsApp através de um link, facilitando o envio do seu pedido diretamente para a loja.</p>
                <p>Por favor, esteja ciente de que a disponibilidade dos produtos está sujeita à confirmação da loja. </p>
                <p>Aguarde a confirmação dos nossos atendentes pelo WhatsApp, onde eles fornecerão orientações sobre a forma de pagamento e retirada dos seus produtos.</p>
                <br>
                <p>Agradecemos pela compreensão e aguardamos ansiosamente para atendê-los da melhor forma possível.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
    </div>
      

    <section class="container-body">

        <header class="menu-nav header-cardapio">
            <nav id="menu">
               <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

                    <a href="home">
                        <i class="fa-solid fa-house" style="color: #ffffff;"></i> <span>Início</span>
                    </a>
                    <a href="sobrenos">
                        <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i> <span>Sobre Nós</span>
                    </a>
                    <a href="cardapio">
                        <i class="fa-solid fa-utensils" style="color: #ffffff;"></i> <span>Cardápio</span>
                    </a>
                    <a href="https://instagram.com/mdossalgados?utm_source=qr&igshid=MThlNWY1MzQwNA==">
                        <i class="fa-brands fa-instagram" style="color: #ffffff;"></i> <span>Instagram</span>
                    </a>
                    <a href="login">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i> <span>Login</span>
                    </a> 
                     <a href="cadastro">
                        <i class="fa-solid fa-user" style="color: #ffffff;"></i> <span>Cadastro</span>
                    </a>        
                </div>
                <div id="main">
                    <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></button>  
                </div>
            </nav>
            
            <div class="title-logo">
                <a href="index.php">
                    <img src="public/assets/images/logo-original.png" alt="Coxinha Logo da Empresa" width="10%"> Mestre dos Salgados
                </a>
            </div>
            
            <div id="darkmode">
                <div>
                    <input type="checkbox" name="change-theme" id="change-theme"/>
                    <label for="change-theme">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i>
                    </label>
                </div>
            </div>
            
        </header>

        <div class="banner-cardapio">
            <div class="text-banner-cardapio">
                <p>Cardápio</p>
            </div>
        </div>

        <div class="section2-cardapio">
            
            <section class="container normal-section">

                <!--<h2 class="section2-cardapio-title">
                    Selecione os produtos do seu pedido!
                </h2>-->

                <div id="products-container">
					<!--Aqui vão os dados dos Produtos-->
                </div>
             
            </section>


            <section class="carrinho">

                <h2 class="section2-carrinho-title">
                    Carrinho 
                </h2>

                <section class="container normal-section">

                    <table class="cart-table">

                        <thead>
                            <tr>
                            <th class="table-head-item first-col">Item</th>
                            <th class="table-head-item second-col">Preço Unitário</th>
                            <th class="table-head-item thrird-col">Quantidade</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- <tr class="cart-product">
                            <td class="product-identification">
                                <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                                <strong class="cart-product-title">Miniatura</strong>
                            </td>
                            <td>
                                <span class="cart-product-price">R$69,90</span>
                            </td>
                            <td>
                                <textarea class="product-observations" placeholder="Observações"></textarea>
                            </td>
                            <td>
                                <input type="number" value="2" min="0" class="product-qtd-input">
                                <button type="button" class="remove-product-button">Remover</button>
                            </td>
                            </tr>
                            <tr class="cart-product">
                            <td class="product-identification">
                                <img src="images/poster3.png" alt="Poster 3" class="cart-product-image">
                                <strong class="cart-product-title">Poster 3</strong>
                            </td>
                            <td>
                                <span class="cart-product-price">R$19,99</span>
                            </td>
                            <td>
                                <input type="number" value="1" min="0" class="product-qtd-input">
                                <button type="button" class="remove-product-button">Remover</button>
                            </td>
                            </tr> -->
                        </tbody>

                        <tfoot>
                            <tr>
                            <td colspan="3" class="cart-total-container">
                                <strong>Total</strong>
                                <span>R$0,00</span>
                            </td>
                            </tr>
                        </tfoot>
                    </table>

                <button type="button" class="purchase-button" onclick="carrinho.makePurchase();">Finalizar Compra</button>
    
            </section>
            </section>
            

    </div>
</section>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <p>Mestre dos Salgados</p>
                <img src="public/assets/images/logo-original.png" alt="" width="45%">
            </div>
            
            <ul class="footer-list">
                <li>
                         <h2>Páginas</h2>
                </li>
                <li>
                    <i class="fa-solid fa-house" style="color: #ffffff;"></i><a href="home" class="footer-link"> Página inicial </a>
                </li>
                <li>
                    <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i><a href="sobrenos" class="footer-link"> Sobre nós</a>
                </li>
                <li>
                    <i class="fa-solid fa-utensils" style="color: #ffffff;"></i><a href="cardapio" class="footer-link"> Cardápio</a>
                </li>
                <li id="footer_social_media">
                    <a href="https://instagram.com/mdossalgados?utm_source=qr&igshid=MThlNWY1MzQwNA==" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="mailto:mestredossalgados.vilario@gmail.com" class="footer-link" id="mail">
                        <i class="fa fa-envelope"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=551123044699&text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20fazer%20meu%20pedido!" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
                
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Endereço</h3>
                </li>
                <li>
                    <a href="https://maps.app.goo.gl/xzCu7BZrwQD9iDrDA#" class="footer-link"> Avenida Salgado Filho, 3309 <br> Jardim Iporanga, Guarulhos - SP    </a>
                </li>
                <li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.540951509781!2d-46.5362064!3d-23.440944100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51f701954eb%3A0x11e33a46ff712e62!2sAv.%20Salgado%20Filho%2C%203309%20-%20Jardim%20Iporanga%2C%20Guarulhos%20-%20SP%2C%2007115-000!5e0!3m2!1spt-BR!2sbr!4v1700185329424!5m2!1spt-BR!2sbr" width="70%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Desenvolvido por Fox Tekhne</h3>

                <p>
                    &#169 Todos os direitos reservados
                </p>

                <a href="https://foxtekhne.talentosdoifsp.gru.br" style="text-decoration:none;">
                    <img src="public/assets/images/logofox.png" alt="" width="50%">
                </a>


            </div>
        </div>
    </footer>


<script>
	class Carrinho {
		constructor() {
			this.produtos = [];
			this.total = 0;
		}

		adicionarProduto(produto) {
			const produtoNoCarrinho = this.produtos.find(p => p.id === produto.id);
			if (produtoNoCarrinho) {
			    produtoNoCarrinho.quantidade++;
			} else {
			    this.produtos.push({ ...produto, quantidade: 1 });
			}
			this.atualizarTotal();
			}

			removerProduto(id) {
                const index = this.produtos.findIndex(p => p.id.toString() === id.toString());
                if (index > -1) {
                    this.produtos.splice(index, 1);
                }
                this.atualizarTotal();
		}
	    
		makePurchase() {
			console.table(this.getProdutos());
			if (this.getTotal() === 0) {
				alert("Seu carrinho está vazio!");
			} else {
				let purchaseMessage = "Iremos te redirecionar ao Whatsapp para enviar seu pedido! Lá você pode falar com um de nossos atendentes sobre a retirada e o pagamento.\n\nProdutos selecionados:\n\n";
				this.getProdutos().forEach(item => {
					purchaseMessage += `${item.name} - Quantidade: ${item.quantidade}\n`;
				});
				purchaseMessage += `\nValor do pedido: R$${this.getTotal()}\n\nAgradecemos pela preferência! :)`;
				alert(purchaseMessage);
				this.generateWhatsAppURL();
				document.querySelector(".cart-table tbody").innerHTML = "";
		    		this.produtos = [];
		    		this.atualizarTotal();
			}
		}

		generateWhatsAppURL() {
			const pedidoItens = this.getProdutos().map(item => `*${item.name}* - Quantidade: ${item.quantidade}`).join('\n');
			const valorTotal = this.getTotal().replace(".", ",");
			const mensagem = encodeURIComponent(
				`*Olá! Selecionei os itens do meu pedido pelo site, e gostaria de retirar na loja.*\n\n` +
				`*Pedido:*\n\n` +
				`${pedidoItens}\n\n` +
				`*Valor total:*\n\n` +
				`R$${valorTotal}\n\n` +
				`Agradecemos pela preferência! :)`
			);
			const numeroTelefone = "551123044699"; 
			const urlBaseWhatsApp = "https://wa.me/";
			const urlWhatsApp = `${urlBaseWhatsApp}${numeroTelefone}/?text=${mensagem}`;
			window.open(urlWhatsApp, '_blank');
		}
		atualizarTotal() {
			this.total = this.produtos.reduce((acc, produto) => acc + (produto.price * produto.quantidade), 0);
		}

		getProdutos() {
			return this.produtos;
		}

		getTotal() {
			return this.total.toFixed(2);
		}
	}

	var carrinho = new Carrinho();
	var products = []; 


	function adicionarNoCarrinho(produto) {
		if (produto) {
			carrinho.adicionarProduto(produto);
			atualizarTabelaCarrinho();
		}
	}

	function atualizarTabelaCarrinho() {
	    const tbody = document.querySelector('.cart-table tbody');
	    tbody.innerHTML = ''; 
	    carrinho.getProdutos().forEach(item => {
		const tr = document.createElement('tr');
		tr.classList.add('cart-product');
		tr.innerHTML = 
		'    <td class="product-identification">' +
		'        <img src="public/assets/uploaded_img/' + item.image + '" alt="' + item.name + '" class="cart-product-image">' +
		'        <strong class="cart-product-title">' + item.name + '</strong>' +
		'    </td>' +
		'    <td>' +
		'        <span class="cart-product-price">R$' + item.price + '</span>' +
		'    </td>' +
		'    <td>' +
		'        <input type="text" readonly value="' + item.quantidade + '" min="0" class="product-qtd-input">' +
		'        <button type="button" class="remove-product-button" onclick="removerDoCarrinho(' + item.id + ')">Remover</button>' +
		'    </td>';

		tbody.appendChild(tr);
	    });

	    atualizarTotal();
	}

	function atualizarTotal() {
	    const totalElement = document.querySelector('.cart-total-container span');
	    totalElement.textContent = `R$${carrinho.getTotal()}`;
	}

	function removerDoCarrinho(id) {
        carrinho.removerProduto(Number(id));
        atualizarTabelaCarrinho();
    }

	function openNav() {
	    document.getElementById("mySidebar").style.width = "250px";
	    document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidebar").style.width = "0";
	    document.getElementById("main").style.marginLeft = "0";
	}

	var acc = document.getElementsByClassName("accordion-section3-index");
	for (var i = 0; i < acc.length; i++) {
	    acc[i].addEventListener("click", function () {
		this.classList.toggle("active-section3-index");
		var panel = this.nextElementSibling;
		if (panel.style.display === "block") {
		    panel.style.display = "none";
		} else {
		    panel.style.display = "block";
		}
	    });
	}

	$(document).ready(function () {
		$('#myModal').modal('show');

		$.get("products").done(function (data) {
			data = JSON.parse(data);
			products = data;
			console.table(products);
			var htmlOut = "";
			$.each(data, function (index, product) {
			    htmlOut +=
				"<div class='col-md-4'>" + // Coluna para cada card
				"   <div class='card'>" +
				"       <img src='public/assets/uploaded_img/" + product.image + "' alt='" + product.name + "' class='card-img-top'>" +
				"       <div class='card-body'>" +
				"           <h5 class='card-title'>" + product.name + "</h5>" +
				"           <p class='card-text'>R$" + product.price + "</p>" +
				"           <button type='button' class='btn btn-primary' onclick='adicionarNoCarrinho(" + JSON.stringify(product) + ")'>Adicionar ao carrinho</button>" +
				"       </div>" +
				"   </div>" +
				"</div>";
			});
			$("#products-container").html(htmlOut);
	    	});
	});
</script>

    
</body>
</html>
