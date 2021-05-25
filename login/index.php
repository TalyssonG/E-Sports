<?php
session_start(); ?>

<!DOCTYPE html>
<html lang ="pt-br">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel = "stylesheet" href="CSS/login_estilo.css">

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
      
        <input name="usuario" type="text" placeholder="Seu usuário">
                  
         <input name="senha" type="password" placeholder="Sua senha">

         
         <input id="botao" type="submit" value="ENTRAR">
         
              
        <a href="../cadastrar/index.php"> DESEJA SE CADRASTRAR? </a>
          
            </form>
            </div>
            
</body>
</html>