<?php  
require '04_Verifica_Root.php';

?>
<html>
    <center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center> 
    <body>
        <font size="5"><b><center>Informe o novo Login: </center></b></font><br><br><br>
        <form method = "post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <center> <LABEL for="InputAtualizacao"> </LABEL>
        <INPUT type="text" name="InputAtualizacao" id="InputAtualizacao">
   
        <input type="submit" value="Salvar" name="new_atualization" /></center>

    </body>
</html>

<?php
 if($_SESSION['flag'] == 0)
 { 
      $_SESSION['flag'] = 1;
      $_SESSION['id_atualiz'] =  $_GET['idu']; 
 }
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["InputAtualizacao"])) {
      $nameErr = "<br> É Necessário Entrar com o Login!<br>";
      echo $nameErr;
    } 
    else {
      $name = ($_POST["InputAtualizacao"]);
    
    if (!preg_match("/^[a-zA-Z0-9_.]*$/",$name)) {
      echo '<br>Username tem caracteres inválidos...<br>';
      echo "<br> Para username só podem conter letras[a-z][A-Z], números[0-9], underline[ _ ] e ponto [.]<br>";
      echo"<br><br> TENTE NOVAMENTE! <br><br>";
    }
    else{
		
         $mytable = "users";
         $login = $_POST["InputAtualizacao"];
         $id_login = $_SESSION['id_atualiz'];
         echo "<br><br>";
        

         $upl = "UPDATE $mytable SET `login` = '$login' WHERE `id` = $id_login";
         echo $upl."<br>";
         $result = mysqli_query($conn, $upl);
         echo $result."<br>";
 
                              
         if(mysqli_affected_rows($conn) > 0){
            echo "Atualizado com Sucesso!";
         }else{
            echo "Não foi Possível atualizar, tente novamente mais tarde!";
        }
 }
	} 
 }
 
 
 ?>