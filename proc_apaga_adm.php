<?php
session_start();
include_once ("conexao.php");

$idadm = filter_input(INPUT_GET, 'idadm', FILTER_SANITIZE_NUMBER_INT);
if(empty($id)){
$result_administrador = "DELETE FROM administrador WHERE idadm='$idadm'";
mysqli_query($conn, $result_administrador);

if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuario apagado com sucesso</p>";
		header("Location: Listar_adm.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuario não foi apagado com sucesso</p>";
		header("Location: Listar_adm.php");
                
		$_SESSION['msg'] = "<p style='color:blue;'>Erro necessario selecionar um administrador</p>";
		header("Location: Listar_adm.php");
	
}}