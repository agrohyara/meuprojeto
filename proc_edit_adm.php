<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'idadm', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nomeadm', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpfadm', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'emailadm', FILTER_SANITIZE_EMAIL);


$result_administrador = "UPDATE administrador SET nomeadm='$nome', cpfadm='$cpf', emailadm='$email' WHERE idadm='$id'";
$resultado_administrador= mysqli_query($conn, $result_administrador);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuario editado com sucesso</p>";
	header("Location: edit_adm.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuario nÃ£o foi editado com sucesso</p>";
	header("Location: edit_adm.php?idadm=$id");
}
