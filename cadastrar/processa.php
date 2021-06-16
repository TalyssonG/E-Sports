<?php
session_start();
include_once("conexao.php");

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
  
if($usuario == "" or $senha == "" or $email == "" or $telefone == ""){
  
	$_SESSION['msg'] = " <h3><p style='color:red;'>Preencha todos os campos!</p></h3>";
   header("Location: index.php");
    
}else{ 
    
$result_usuario = "INSERT INTO Usuário (usuario, email, senha, telefone, time) VALUES ('$usuario', '$email', '$senha', '$telefone', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<h3><p style='color:green;'>Usuário cadastrado com sucesso</p></h3>";
	header("Location: index.php");
	
}else{
	$_SESSION['msg'] = "<h3><p style='color:red;'>Usuário não foi cadastrado com sucesso</p></h3>";
	header("Location: index.php");
}
}

?>