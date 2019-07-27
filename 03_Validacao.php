<?php
session_start();
include '01_Conexao.php';
?>
<center>
    <br><br><br><form action=02_Formulario.php method=get ><input type="submit" value="Voltar Formulario" name="formulario" /></FORM><br><br><br>
</center> 
<?php
$mytable = "users";

if(isset($_POST["log"]) AND isset($_POST["senha"]))
{ 
    echo"Executando por ".$_SERVER["PHP_SELF"];
    echo "<p> Login: ".$_POST["log"]." <br><br></p>";
}  

if(!$_POST["log"] || !$_POST["senha"]){ 
    echo "Login e/ou Senha Vazios são inválidos!"; 
    exit; 
} 

$log = $_POST["log"];
$senha = md5($_POST["senha"]);

echo "<br> Login: ".$log."  Senha: ".$senha;
 
$query= "SELECT login, password FROM $mytable WHERE id_profiles=1";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows ($result) > 0 )
{
    mysqli_data_seek($result, 0);
  
  while ($linha = mysqli_fetch_array($result)){
  
    if(!strcmp($senha,$linha['password']) AND !strcmp($log,$linha['login'])) { 
        
        $_SESSION['login'] = $log;
        $_SESSION['senha'] = $senha;
        $_SESSION['OK'] = 1;
        echo "Acesso Permitido ";        
        echo"<br><center><br>";
        if($_SESSION['OK'] == 1){
            header("Location: 05_Home.php");
        }

        //header("Location: 05_Home.php");
    }else{
        echo "<br>Senha inválida!"; 
        echo "<br> Acesso Negado a usuários que não sejam root!<br>";
  }  
  }  
}
else{
         echo "<br> O login fornecido é inexistente!<br>"; 
         echo"<br> Tente novamente!<br>";
}
   
?>