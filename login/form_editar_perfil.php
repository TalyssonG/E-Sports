<?php
session_start();
include_once("../cadastrar/conexao.php");

$id_usuario  = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM Usuário WHERE id_usuario = '$id_usuario'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
   <link rel="stylesheet" href="css/form_editar.css">
   
		<title>Editar</title>		
	</head>
	<body>

    <h2><a href="painel.php?usuário=''">Voltar</a></h2>
  
    <div id="corpo-form">
		<h1>Modificar dados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		};
		?>
		<form method="POST" action="acao_edition_perfil.php">
			<input type="hidden" name="id_usuario" value="<?php echo $row_usuario['id_usuario']; ?>">
			
			<label>Usuário:</label>
			<input type="text" name="usuario" minlength="4" maxlength="12" placeholder="Digite um nome de usuário:" value="<?php echo $row_usuario['usuario']; ?>">
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite um email:" value="<?php echo $row_usuario['email']; ?>">
			
			<label>Senha:</label>
			<input type="text" name="senha" minlength="4" maxlength="12" placeholder="Digite uma senha:" value="<?php echo $row_usuario['senha']; ?>">
			
			<label>Telefone:</label>
			<input type="tel" name="telefone" minlength="11" maxlength="11" placeholder="Digite um número de telefone:" value="<?php echo $row_usuario['telefone']; ?>">
			
			<input id="botao" type="submit" value="EDITAR">
		</form>
		</div>
	</body>
</html>