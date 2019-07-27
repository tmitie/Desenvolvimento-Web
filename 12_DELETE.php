<?php  
    require '04_Verifica_Root.php';

?>

<center><body> 
        <br><font size="12">Exclusão de Usuários</font><br>
        <br><font size="6">Selecione a entrada que deseja excluir:</font><br>
</font></body></center>

<?php

echo "<center>";
$mytable = "users";
$query = "SELECT id, id_profiles, login, password FROM $mytable";

$result = mysqli_query($conn, $query);

mysqli_data_seek($result, 1);
      echo "<center>";
      echo "<table border = 1>";
      echo "<tr>";
      echo "<th> id </th>";
      echo "<th> Login </th>";
      echo "<th> Password </th>";
      
 while($linha = mysqli_fetch_array($result)){
          echo "<tr>";
          $idu = $linha['id'];
          $login = $linha['login'];
          $password = $linha['password'];
          echo "<td><a href=12_DELETE_1.php?idu=$idu> $idu </a></td>";
          echo "<td><a href=12_DELETE_1.php?idu=$idu> $login </a></td>";
          echo "<td><a href=12_DELETE_1.php?idu=$idu> $password </a></td>";

          echo "</tr>";
          echo "</tr>";
      }
      echo "</table>";
      echo "<br><br>";
?>
