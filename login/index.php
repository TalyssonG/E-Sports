<?php
session_start(); ?>

<!DOCTYPE html>
<html lang ="pt-br">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login_estilo.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100&display=swap"
  class="description" class="expense" rel="stylesheet">
</head>
<body>
  

         <div id="corpo-form">
         <h1>Fazer login</h1>
         
          <?php
          if (isset($_SESSION['nao_autorizado'])):
          ?>
          <div id="aviso" class="notification is-danger">
           <p>
              Usuário ou senha inválidos.
            </p>
          </div>
          <?php
          endif;
          unset($_SESSION['nao_autorizado']);
          ?>
        
      
            <form action="login.php" method="POST">
      
        <input  name="usuario" type="text" placeholder="Seu usuário">
                  
         <input name="senha" type="password" placeholder="Sua senha">

         
         <input id="botao" type="submit" value="ENTRAR">
         
              
        <a href="../cadastrar/index.php"> DESEJA SE CADASTRAR? </a>
          
            </form>
            </div>
        
</body>
</html>