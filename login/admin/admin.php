<?php
session_start();
include_once("../../cadastrar/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href="../css/perfil_estilo.css">
		
		<title>Listar</title>		
	</head>
	<body>
	 
    <div id="god">
	  <div class="container">
		<h1>Listar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	
		$result_usuarios = "SELECT * FROM Usuário";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ ?>

		  <div id="campos"> <?php
		  
       echo "ID: " .
       $row_usuario['id_usuario'] . "<br><br>";
       echo "Usuário: " .
			 $row_usuario['usuario'] . "<br><br>";
			echo "E-mail: " . $row_usuario['email'] . "<br><br>";
      echo "Senha: " . $row_usuario['senha'] . "<br><br>";
      echo "Telefone: " . $row_usuario['telefone'] . "<br>";
       ?> <div id="botoes"><?php
      
			echo "<a href='form_editar_admin.php?id_usuario=" . $row_usuario['id_usuario'] . "'>Editar</a><br>";
			
      echo "<a href='excluir_usuario.php?id_usuario=" . $row_usuario['id_usuario'] . "'confirmar_ad=''>Apagar</a><br><hr>";
		}
		?>
		
   <h2> <a href="../sair.php">Sair</a></h2>
   
  	</div>
  	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="../js/confirmar_ex.js"></script>
		
	</body>
  </html>