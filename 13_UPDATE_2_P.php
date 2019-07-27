<?php  
   require '04_Verifica_Root.php';

?>
<html>
    <center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center> 
    <body>
        <font size="5"><b><center>Informe o novo Password: </center></b></font><br><br><br>
        <form method = "post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <center> <LABEL for="InputAtualizacao"> </LABEL>
            <INPUT type="password" name="InputAtualizacao" id="InputAtualizacao">
   
        <input type="submit" value="Salvar" name="new_atualization" /></center>

    </body>
</html>

<?php
 if($_SESSION['flag'] == 0)
 { 
      $_SESSION['flag'] = 1;
      $_SESSION['id_atualiz'] =  $_GET['idu']; 
 }
 
if (empty($_POST["InputAtualizacao"])) {
      $nameErr = "<br> Entre com a Senha!<br>";
      echo $nameErr;
    } 
else {
    if(isset($_POST["InputAtualizacao"]))
         $mytable = "users";
         $password = md5($_POST["InputAtualizacao"]);
         $id_password = $_SESSION['id_atualiz'];
         echo "<br><br>";
        

         $upp = "UPDATE $mytable SET `password` = '$password' WHERE `id` = $id_password";
         echo $upp."<br>";
         $result = mysqli_query($conn, $upp);
         echo $result."<br>";
 
                              
         if(mysqli_affected_rows($conn) > 0){
            echo "Atualizado com Sucesso!";
         }
         else{
            echo "Não foi Possível atualizar, tente novamente mais tarde!";
        }
 }
 
 
 ?>