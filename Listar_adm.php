<?php
session_start();
include_once ("conexao.php");
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            body{
                background-color: #cccccc;
            }
            
        </style>
           
    </head>
<body>
    <h1><center>Listar Administrador</center></h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>CPF</td>
            <td>EMAIL</td>
            <td>EDITAR</td>
            <td>DELETAR</td>
        </tr>
    <?php
            
             if(isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset ($_SESSION['msg']);
             }
             
           $result_administrador = "SELECT * FROM administrador";
           $resultado_administrador = mysqli_query($conn, $result_administrador);
           while ($row_administrador = mysqli_fetch_assoc($resultado_administrador)) {
               ?>
              <tr>
                  <td> <?php echo $row_administrador['idadm'];?> </td>
                  <td> <?php echo $row_administrador['nomeadm'];?></td>
                  <td> <?php echo $row_administrador['cpfadm'];?></td>
                  <td> <?php echo $row_administrador['emailadm'];?></td>
                  <td> <?php echo "<a href='edit_adm.php?idadm=" . $row_administrador['idadm'] ."'>Editar</a>";?></td>
                  <td> <?php echo "<a href='proc_apaga_adm.php?idadm=" . $row_administrador['idadm'] ."'>Deletar</a>";?></td>
                  </tr>
		<?php
           }
                ?>

           
           <?php
           //soma quantidade de adms
          $result_pg = "SELECT COUNT(idadm) AS num_result FROM administrador";
           $resultado_pg = mysqli_query($conn, $result_pg);
           while ($row_pg = mysqli_fetch_assoc($resultado_pg)) {
              
		echo $row_pg['num_result'];}
      ?>
           
   </table>
</body>
</html>