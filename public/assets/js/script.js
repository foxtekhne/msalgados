let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};

function enviarWhatsApp() {
    
   var numeroTelefone = '1123044699';
   
   // Crie o link do WhatsApp
   var linkWhatsApp = 'https://api.whatsapp.com/send?phone=' + numeroTelefone;
   
   // Redirecione para o link do WhatsApp
   window.location.href = linkWhatsApp;
}