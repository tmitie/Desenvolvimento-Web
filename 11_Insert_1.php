<?php  
    require '04_Verifica_Root.php';

?>

<center>
<html>
<center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center> 
    <body>
        <font size="5"><b><center>Novo:</center></b></font><br><br><br>
        <form method = "post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <center> <LABEL for="InputLogin">Login: </LABEL>
        <INPUT type="text" name="InputLogin" id="InputLogin">
        <LABEL for="InputPassword">Password: </LABEL>
        <INPUT type="password" name="InputPassword" id="InputPassword">
        <input type="submit" value="Salvar" name="new_user" /></center>

    </body>
</html>

</center>
<?php

 if($_SESSION['flag'] == 0)
 { 
     $_SESSION['id_cur'] =  $_GET['idp']; 
     $_SESSION['flag']=1;
 }

$mytable = "users";
//idp é o id_profiles vindo da tabela profile
$idp = $_SESSION['id_cur'];

$query = "SELECT id, id_profiles, login, password FROM $mytable WHERE id_profiles=$idp";
$result = mysqli_query($conn, $query);
mysqli_data_seek($result, 0);
$linha = mysqli_fetch_array($result);
$id_prof = $linha['id_profiles'];
echo "<br>id Prof: $id_prof<br>";

$nameErr = $name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["InputLogin"]) or empty($_POST["InputPassword"])) {
      $nameErr = "<br> É Necessário Entrar com o Login e/ou Senha!<br>";
      echo $nameErr;
    } 
    else {
      $name = ($_POST["InputLogin"]);
    
    if (!preg_match("/^[a-zA-Z0-9_.]*$/",$name)) {
      echo '<br>Username tem caracteres inválidos...<br>';
      echo "<br> Para username só podem conter letras[a-z][A-Z], números[0-9], underline[ _ ] e ponto [.]<br>";
      echo"<br><br> TENTE NOVAMENTE! <br><br>";
    }
    else{
        if(isset($_POST["InputLogin"]) AND isset($_POST["InputPassword"])){
         $mytable = "users";
         $login = ($_POST["InputLogin"]);
         $password = md5($_POST["InputPassword"]);
         $idp = $_SESSION['id_cur'];
         
         if($id_prof = $idp){
         $query = "INSERT INTO $mytable (login, password, id_profiles) VALUES('$login','$password',$idp)";
         }

         echo $query."<br>";
         $result = mysqli_query($conn, $query);
         echo "<br>".$result."<br>";
         
         if(mysqli_affected_rows($conn) > 0){
            echo "Inserido com Sucesso!";
         }else{
            echo "Não foi Possível Inserir, tente novamente mais tarde!";
        }       
    }
  }
}
}
 ?>
