<?php
session_start();
include('verificar_login.php');
include_once("../cadastrar/conexao.php");
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$usuario_lo = $_SESSION['usuario'];
$senha_lo = $_SESSION['senha']; ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
   <link rel = "stylesheet" href="css/perfil_estilo.css">
		
		<title>Listar</title>		
	</head>
	<body>
	  
	  <div id="god">
    <div class="container">
		<h1>Perfil</h1>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		$result_usuarios = "SELECT * FROM Usuário WHERE usuario = '$usuario' and senha = '$senha' || usuario = '$usuario_lo' and senha = '$senha_lo'";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ ?>

		  <div id="campos"> <?php
		  
			echo "Usuário: " . $row_usuario['usuario'] . "<br><br>";
			echo "E-mail: " . $row_usuario['email'] . "<br><br>";
      echo "Senha: " . $row_usuario['senha'] . "<br><br>";
      echo "Telefone: " . $row_usuario['telefone'] . "<br>";
      ?> <div id="botoes"><?php
			echo "<a href='form_editar_perfil.php?id_usuario=" . $row_usuario['id_usuario'] . "'>Editar</a><br>";
      echo "<a href='excluir_usuario_pl.php?id_usuario=" . 
      $row_usuario['id_usuario'] . "'confirmar_pl=''>Apagar</a><br><hr>"; 
      
		}	
		?>

   <h2> <a href="sair.php">Sair</a></h2>
  	</div>
  	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="js/confirmar_ex.js"></script>
		
	</body>
</html>