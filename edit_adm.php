
<?php
session_start();
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'idadm', FILTER_SANITIZE_NUMBER_INT);
$result_administrador = "SELECT * FROM administrador WHERE idadm = '$id'";
$resultado_administrador= mysqli_query($conn, $result_administrador);
$row_administrador = mysqli_fetch_assoc($resultado_administrador);
?>
<html>
    <head>
        <title>editar administrador</title>
        <meta charset="utf-8">
    </head>
    <body>
            <a href="cadastra_adm.php">Cadastrar</a><br>
                <a href=Listar_adm.php">Listar</a><br>
		<h1>Editar ADM</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_adm.php">
			<input type="hidden" name="idadm" value="<?php echo $row_administrador['idadm']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nomeadm" placeholder="Digite seu nome" value="<?php echo $row_administrador['nomeadm']; ?>"><br><br>
			
			<label>Cpf: </label>
                        <input type="number" name="cpfadm" placeholder="Digite seu cpf" value="<?php echo $row_administrador['cpfadm']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="emailadm" placeholder="Digite o seu e-mail" value="<?php echo $row_administrador['emailadm']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>

</html>
