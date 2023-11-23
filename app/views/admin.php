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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
    <link rel="shortcut icon" href="public/assets/images/logo-original.png" type="image">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        img {
            max-width: 50px;
            max-height: 50px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="page">

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

    
    <div class="container-admin">

        <div class="banner-admin">
            <div class="text-banner-admin">
                <p>Página do Administrador</p>
            </div>
        </div>

        <div class="form-inserir-admin">
            <section class="boxLogin form-container">
                <div class="content">
                    
                    <form class="login" method="post" name="login" id="addProductForm">
                        <h1><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> Inserir Novo Produto</h1>
                        <div class="padding">
                            <label for="name" class="form-label">Nome do Produto:</label>
                            <input type="text" class="form-control campos" id="name" name="name" required>
                            <label for="price" class="form-label">Preço:</label>
                            <input type="number" class="form-control campos" id="price" name="price" step="0.01" required>
                            <label for="image" class="form-label">Imagem do Produto:</label>
                            <input type="file" class="form-control campos" id="image" name="image" accept="image/*" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Salvar Produto</button>
                        </div><!--padding-->
                    </form>
                </div>
            </section>
        </div>

        <table id="productTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <!-- Os produtos serão exibidos aqui -->
                <tr>
                    <td>1</td>
                    <td><input type="hidden" id="productId" name="id" value=""></td>
                    <td><input type="text" class="edit" value=""></td>
                    <td><input type="text" class="edit" value=""></td>
                    <td><input type="text" class="edit" value=""></td>
                    <td>
                        <button class="btnSave">Salvar</button>
                        <button class="btnDelete" data-id="1">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
        <br>
    </div>


    <script>

        /*Exibir, alterar e excluir produtos */

        $(document).ready(function () {
            // Função para carregar os produtos na tabela
            function loadProducts() {
                $.ajax({
                    url: 'products/add', 
                    method: 'GET',
                    success: function (response) {
                        var products = JSON.parse(response);
                        var tbody = $('#productTable tbody');
                        tbody.empty();

                        $.each(products, function (index, product) {
                            var row = '<tr>' +
                                '<td>' + product.id + '</td>' +
                                '<td><input type="text" class="edit" value="' + product.name + '"></td>' +
                                '<td><input type="text" class="edit" value="' + product.image + '"></td>' +
                                '<td><input type="text" class="edit" value="' + product.price + '"></td>' +
                                '<td>' +
                                    '<button class="btnSave">Salvar</button>' +
                                    '<button class="btnDelete" data-id="' + product.id + '">Excluir</button>' +
                                '</td>' +
                                '</tr>';
                            tbody.append(row);
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error("Erro na requisição: " + error);
                    }
                });
            }

            // Carrega os produtos ao carregar a página
            loadProducts();

            // Evento de clique no botão "Salvar" para cada linha
            $(document).on('click', '.btnSave', function () {
                var row = $(this).closest('tr');
                var productId = row.find('td:eq(0)').text(); // ID
                var editedName = row.find('td:eq(1) input').val(); // Nome
                var editedImage = row.find('td:eq(2) input').val(); // Imagem
                var editedPrice = row.find('td:eq(3) input').val(); // Preço

                // Faça uma requisição AJAX para a função put do seu backend
                $.ajax({
                    url: 'products/add',
                    method: 'PUT',
                    data: {
                        id: productId,
                        name: editedName,
                        price: editedPrice,
                        image: editedImage
                    },
                    success: function (response) {
                        console.log(response);
                        // Recarrega os produtos após a edição
                        loadProducts();
                    },
                    error: function (xhr, status, error) {
                        console.error("Erro na requisição: " + error);
                    }
                });
            });

            // Evento de clique no botão "Excluir"
            $(document).on('click', '.btnDelete', function () {
                var productId = $(this).data('id');
                $.ajax({
                    url: 'products/add',
                    method: 'DELETE',
                    data: { id: productId },
                    success: function (response) {
                        console.log(response);
                        // Limpe os campos do formulário após o sucesso
                        $('#addProductForm')[0].reset();
                        loadProducts();
                    },
                    error: function (xhr, status, error) {
                        console.error("Erro na requisição: " + error);
                    }
                });
            });

            $('#addProductForm').submit(function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                // Adicione o ID com valor 0
                formData.append('id', '0');

                // Formate o preço para um número decimal
                formData.set('price', parseFloat(formData.get('price')));

                $.ajax({
                    url: 'products/add',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        // Limpe os campos do formulário após o sucesso
                        $('#addProductForm')[0].reset();
                        alert("Produto incluído com sucesso!");
                        loadProducts();
                    },
                    error: function(xhr, status, error) {
                        console.error("Erro na requisição: " + error);
                    }
                });
            });

        });

        /* Inserir novos produtos */

    </script>

    <script>
        
        
    </script>
    
    

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <p>Mestre dos Salgados</p>
                <img src="public/assets/images/logo-original.png" alt="" width="45%">
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Páginas</h3>
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
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        
        var acc = document.getElementsByClassName("accordion-section3-index");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active-section3-index");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>
    
</body>
</html>