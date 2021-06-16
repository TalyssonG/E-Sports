<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" href="../css/Cadastrar.css">
  
     	<title>Cadastrar</title>
     	
	</head>
	<body>
	  
   <h2>
		 <a href="../index.html">Página principal</a>
		</h2>
	  <div id="corpo-form">
	    
		<h1>Cadastrar Usuário</h1>
		<?php
	
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
	   unset($_SESSION['msg']);
		  }
		  
		?>
	
		<form method="POST" action="processa.php">

			<input type="text" name="usuario" minlength="4" maxlength="12" placeholder="Digite seu nome de usuário">
			
			<input type="email" name="email" placeholder="Digite um e-mail">
			
			<input type="password" name="senha" minlength="4" maxlength="12" placeholder="Digite uma senha">
			
			<input type="tel" name="telefone" minlength="11" maxlength="11" placeholder="Digite um número de telefone">
			
			<input id="botao" type="submit" value="CADASTRAR">
			
        <a id="redirec" href="../login/index.php">DESEJA FAZER LOGIN?</a>
			
		</form>
		</div>
		
	</body>
</html>