<?php
session_start();
include_once ("conexao.php");


$nome = filter_input(INPUT_POST, 'nomeadm', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpfadm', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'emailadm', FILTER_SANITIZE_EMAIL);



$result_administrador = "INSERT INTO administrador (nomeadm , cpfadm, emailadm) VALUES('$nome','$cpf','$email')";
$resultado_administrador = mysqli_query($conn, $result_administrador);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:blue';'font-size:6';>Cadastrado com sussesso</p>";
    header("Location: cadastra_adm.php");
}else{
    header("Location: cadastra_adm.php");
     $_SESSION['msg'] = "<p style='color:red'>Administrador não cadastrado com sussesso</p>";
}