<?php
require '04_Verifica_Root.php';

?>
<center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center>
<center><body> <font size="12">
    Lista de Users
</font></body></center>

<?php

$ids = $_GET['ids'];
echo "id Profile: $ids";
echo "<br><br>";

$mytable = "users";
$query = "SELECT id, id_profiles, login, password FROM $mytable WHERE id_profiles=$ids";

$result = mysqli_query($conn, $query);

mysqli_data_seek($result, 0);
      echo "<center>";
      echo "<table border = 1>";
      echo "<tr>";
      echo "<th> id </th>";
      echo "<th> Login </th>";
      echo "<th> Password </th>";
      
 while($linha = mysqli_fetch_array($result)){
          echo "<tr>";
          $id = $linha['id'];
          $login = $linha['login'];
          $password = $linha['password'];
          echo "<td> $id </td>";
          echo "<td> $login </td>";
          echo "<td> $password </td>";
          echo "</tr>";
          echo "</tr>";
      }
      echo "</table>";
      echo "<br><br>";

?>
