<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar</title>	
    <link rel = "stylesheet" href="CSS/cadastrar.css">
	</head>
	<body>
	  
	  <div id="corpo-form">
	    
		<h1>Cadastrar Usuário</h1>
		<?php
	
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
	   unset($_SESSION['msg']);
		  }
		?>
	
		<form method="POST" action="processa.php">

			<input type="text" name="usuario" placeholder="Digite seu nome de usuário:">
			<input type="email" name="email" placeholder="Digite um e-mail:">
			<input type="password" name="senha" placeholder="Digite uma senha:">
			<input type="text" name="telefone" placeholder="Digite um número de telefone:">
			
			<input id="botao" type="submit" value="Cadastrar">
			
        <a href="../login/index.php">DESEJA FAZER LOGIN?</a>
			
		</form>
		</div>
		
	</body>
</html>