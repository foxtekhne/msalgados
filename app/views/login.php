<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Inclua a biblioteca jQuery -->
     <link rel="stylesheet" type="text/css" href="public/assets/css/style2.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="formulario-login">

   

    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();

                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    type: 'POST',
                    url: 'users', // Substitua pelo caminho correto
                    data: { username: username, password: password },
                    dataType: 'json',
                    success: function(response) {
                        if (response.login === 'true') {
                            alert('Login bem-sucedido!'); // Substitua por redirecionamento ou ação desejada
                        } else {
                            $('#error-message').text('Login falhou. Verifique suas credenciais.');
                        }
                    },
                    error: function() {
                        $('#error-message').text('Erro na requisição AJAX.');
                    }
                });
            });
        });
    </script>

</body>
</html>





    <div id="error-message" style="color: red;"></div>

    <form id="login-form"  class="wrapper">
    <h2 >Login</h2>
                 <p>Por favor, preencha os campos para fazer o login.</p>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required class="form-control">

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required class="form-control">
	<br>
        <input style="background-color:#A63C06; border-color:#A63C06; "type="submit" name="login" class="btn btn-info" value="Login"/> 
         
    </form>



    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();

                // Obtenha os valores do formulário
                var username = $('#username').val();
                var password = $('#password').val();

                // Faça a chamada AJAX
                $.ajax({
                    type: 'POST',
                    url: 'users', 
                    data: { username: username, password: password },
                    dataType: 'json',
                    success: function(response) {
                        if (response.login === 'true') {
                            // Login bem-sucedido, redireciona para a página home
                            window.location.href = 'admin'; 
                        } else {
                            // Login falhou, exibe mensagem de erro
                            $('#error-message').text('Login falhou. Verifique suas credenciais.');
                        }
                    },
                    error: function() {
                        // Tratar erro na chamada AJAX
                        $('#error-message').text('Erro na requisição AJAX.');
                    }
                });
            });
        });
    </script>

             
                  
</body>
</html>


