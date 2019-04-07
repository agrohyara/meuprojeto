
<?php
session_start();
?>


<html>
    
                

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
 
      
                 
            <?php
             if(isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset ($_SESSION['msg']);
             }
            ?>
          
        
        <div class="div2">greengarden</div>
        <div class="div3">
            <h1>GreenGarden</h1><br>
                <form method="post" action="proc_cad_adm.php">
                      <input type="text" name="nomeadm" placeholder="Administrador"><br><br>
                <input type="number" name="cpfadm" placeholder="Cpf"><br><br>
                <input type="text" name="emailadm" placeholder="meuemail@gmail.com"><br><br>
                <div class="div4"> <input type="submit" value="Cadastrar"></div>
            </form>
                </div>
               
                     
       
        <?php
        // put your code here
        ?>
                
                <div class="div1">@2019 projetando</div>
    </body>
</html>
