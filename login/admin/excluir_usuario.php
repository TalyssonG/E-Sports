<?php
session_start();
include_once("../../cadastrar/conexao.php");

$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id_usuario)){
	$result_usuario = "DELETE FROM Usuário WHERE id_usuario='$id_usuario'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário excluído com sucesso</p>";
		header("Location: admin.php");
		
	}else{
		$_SESSION['msg'] = "<p style='color:red;'> O usuário não foi excluído com sucesso</p>";
		header("Location: admin.php");
	}
	
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: admin.php");
}

?>