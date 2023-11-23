<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mestre dos Salgados</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style5.css">
    <link rel="stylesheet" type="text/css" href="public/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
    <link href=“https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css” rel=“stylesheet”>
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css” rel=“stylesheet”>
    <link rel="shortcut icon" href="public/assets/images/logo-original.png" type="image">

    <script src="public/assets/js/script-darkmode.js" defer></script>
</head>
<body class="page">

    <section class="container-body">

        <header class="menu-nav">
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
                <a href="index.html">
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

        <div class="banner-index">
            <div class="text-banner-index">
                <p>Uma explosão de sabor em cada salgado!</p>
                <br><br>
                <a href="sobrenos" class="bt1-banner-index"><span>Sobre Nós</span></a>
                <a href="cardapio" class="bt2-banner-index"><span>Ver Cardápio</span></a>
            </div>
        </div>

        <div class="section2-index">
            <div class="content-section2-index">
                <p class="title-section2-index">Uma história de sabor e dedicação!</p>
                <div class="texto-section2-index">
                    <br>
                    <p>
                        Somos uma empresa familiar apaixonada por criar sabores memoráveis desde 2021. 
                        Nossa jornada começou com uma missão: oferecer salgados fritos e assados irresistíveis, 
                        feitos com carinho e tradição. Localizada na Av. Salgado Filho, em 
                        Guarulhos - SP, nossa loja física é o ponto de encontro para quem busca delícias que 
                        aquecem o coração.
                    </p>
                    <p>
                        Além de atender os desejos dos paladares mais exigentes com preços convidativos, também nos orgulhamos 
                        em fazer parte das celebrações da sua vida. Transformamos festas em eventos inesquecíveis com nossos 
                        centos de salgados sob encomenda. A cada mordida, nossos clientes sentem o amor e a dedicação 
                        que colocamos em cada criação.
                    </p>
                    <p>
                        Experimente a tradição e o sabor que conquistaram a região. Venha nos visitar e faça parte 
                        dessa história de sucesso, porque no Mestre dos Salgados, sabor e paixão estão em cada detalhe!
                    </p>
                </div>
            </div>
            <div class="image-section2-index">
                <img src="public/assets/images/section2-index.png" alt="Massa de salgado">
            </div>
        </div>

        <div class="section3-index">
            <div class="content-section3-index">
                <p class="title-section3-index">
                    Sobre Nós
                </p>

                <button class="accordion-section3-index">
                    Missão
                </button>
                <div class="panel-section3-index">
                    <p>Proporcionar uma experiência gastronômica excepcional através de salgados fritos e assados autênticos, preparados com paixão e tradição. Desde 2021, cativamos a região de Guarulhos - SP com nossa variedade de sabores e preços acessíveis. Nosso compromisso é ser o local onde os clientes encontram qualidade, sabor e momentos inesquecíveis, seja em nossa loja física ou nos eventos que temos a honra de fazer parte.</p>
                </div>

                <button class="accordion-section3-index">
                    Visão
                </button>
                <div class="panel-section3-index">
                    <p>Ser reconhecida como a escolha irresistível de sabor e tradição, encantando paladares e transformando momentos especiais.</p>
                </div>

                <button class="accordion-section3-index">
                    Valores
                </button>
                <div class="panel-section3-index">
                    <p><b>Tradição em Cada Mordida:</b> Nossa história familiar e dedicação aos sabores autênticos guiam nossos processos e produtos.</p>
                    <p><b>Paixão e Qualidade:</b> Cada salgado é preparado com amor, usando ingredientes de alta qualidade para garantir uma experiência excepcional.</p>
                    <p><b>Atendimento Empático:</b> Nosso compromisso é criar um ambiente acolhedor, onde cada cliente se sinta valorizado e atendido com respeito.</p>
                    <p><b>Inovação Responsável:</b> Buscamos aprimorar nossos produtos com criatividade, mantendo a integridade dos sabores tradicionais que nossos clientes adoram.</p>
                    <p><b>Transparência e Integridade:</b> Mantemos relações honestas com nossos clientes, fornecedores e equipe, agindo com ética em todas as nossas interações.</p>
                </div>
            </div>
        </div>

        <div class="section2-index">
            <div class="content-section2-index">
                <p class="title-section2-index">Onde estamos localizados!</p>
                <div class="texto-section2-index">
                    <br>
                    <p>
                        Estamos localizados na Avenida Salgado Filho, número 3309, em Guarulhos - SP! 
                    </p>
                    <p>
                        Nossa empresa de salgados está estrategicamente situada nessa área dinâmica, 
                        pronta para encantar seu paladar com uma seleção incrível de quitutes saborosos. 
                    </p>
                    <p>
                        Venha nos visitar e descubra a excelência dos nossos salgados, todos preparados 
                        com dedicação e carinho. Seja para um lanche rápido ou para tornar sua festa 
                        ainda mais especial, estamos à sua disposição com os melhores sabores da região.
                    </p>
                    <p>
                        Esperamos sua visita em breve!
                    </p>
                </div>
            </div>
            <div class="image-section2-index">
                <img src="public/assets/images/section2-index2.jpg" alt="Massa de salgado" width="100%">
            </div>
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
                <div id="footer_social_media">
                    <a href="https://instagram.com/mdossalgados?utm_source=qr&igshid=MThlNWY1MzQwNA==" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="mailto:mestredossalgados.vilario@gmail.com" class="footer-link" id="mail">
                        <i class="fa fa-envelope"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=551123044699&text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20fazer%20meu%20pedido!" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
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
    </script>
    
    <script>
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



