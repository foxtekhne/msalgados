
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
    <link href=“https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css” rel=“stylesheet”>
    <link href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css” rel=“stylesheet”>

    <script src="public/assets/js/script-darkmode.js" defer></script>
</head>
<body class="page">

    <section class="container-body1">

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

            <div class="image-section2-">

            </div>
        </div>

        <div class="section3-sobrenos">
            <div class="content-section3-index">
                <p class="title-section3-index">
                    Meios de Contato
                </p>

                <button class="accordion-section3-index">
                    Localização
                </button>
                <div class="panel-section3-index">
                    <p> Estamos localizados na <b>Avenida Salgado Filho, 3309</b> na cidade de Guarulhos - SP</p>
                </div>

                <button class="accordion-section3-index">
                    Contato
                </button>
                <div class="panel-section3-index">
                    <p>Além dos pedidos por meio do nosso site, disponibilizamos aos nossos clientes um número exclusivo para pedidos e encomendas via Whatsapp. Anota aí!</p>
                    <p> <b>(11) 2304-4699</b></p>
                </div>
                    

                <button class="accordion-section3-index">
                    E-Mail
                </button>
                <div class="panel-section3-index">
                    <p>Tem alguma dúvida? Entre em contato através do seguinte E-Mail:</p>
                    <p><b>mestredossalgados.vilario@gmail.com</b></p>
                </div>

                <button class="accordion-section3-index">
                    Instagram
                </button>
                <div class="panel-section3-index">
                    <p class="legenda-insta"> Quer saber algo sobre os produtos ou funcionamente do Mestre dos Salgados? Manda uma DM, responderemos o mais rápido possível. Já segue o @: <b><a href="https://www.instagram.com/mdossalgados/" style="text-decoration: none; color:black;">mdossalgados</a></b></p>
                </div>
            </div>
            
        
<div class="instagram">
            <iframe src='https://www.juicer.io/api/feeds/mdossalgados/iframe' frameborder='0' width='90%' height='90%' style='display:block;margin:0 auto;'></iframe>
                            
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
                    <h2>Endereço</h2>
                </li>
                <li>
                    <a href="https://maps.app.goo.gl/xzCu7BZrwQD9iDrDA#" class="footer-link"> Avenida Salgado Filho, 3309 <br> Jardim Iporanga, Guarulhos - SP    </a>
                </li>
                <li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.540951509781!2d-46.5362064!3d-23.440944100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51f701954eb%3A0x11e33a46ff712e62!2sAv.%20Salgado%20Filho%2C%203309%20-%20Jardim%20Iporanga%2C%20Guarulhos%20-%20SP%2C%2007115-000!5e0!3m2!1spt-BR!2sbr!4v1700185329424!5m2!1spt-BR!2sbr" width="70%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h2>Desenvolvido por Fox Tekhne</h2>

                <p>
                    &#169 Todos os direitos reservados
                </p>

                <a href="https://foxtekhne.talentosdoifsp.gru.br" style="text-decoration:none;">
                    <img src="public/assets/images/logofox.png" alt="" width="50%">
                </a>


            </div>
        </div>
    </footer>
</body>
</html>
    


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
