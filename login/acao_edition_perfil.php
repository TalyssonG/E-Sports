<?php
session_start();
include_once("../cadastrar/conexao.php");

$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE Usuário SET usuario='$usuario', email='$email', senha='$senha', telefone='$telefone', time_edition=NOW() WHERE id_usuario='$id_usuario'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green ;'>Usuário editado com sucesso!</p>";
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
	  header("Location: painel.php");
	
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso!</p>";
	header("Location: ?id_usuario =$id_usuario");
}
