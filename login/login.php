<?php
session_start();
include("../cadastrar/conexao.php");
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

 
$query = "select id_usuario from Usuário where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($usuario == 'admin' and $senha == 'admin'){
  header('Location: admin/admin.php');
  exit();
}

if($row == 1) {
  $_SESSION['usuario'] = $usuario;
  $_SESSION['senha'] = $senha;
  header('Location: painel.php');
  exit();
  
}else{
  $_SESSION['nao_autorizado'] = true;
  header('Location: index.php');
  exit();
  
}
?>