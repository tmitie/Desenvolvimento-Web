<?php  
  require '04_Verifica_Root.php';

?>

<center><body> 
        <br><font size="12">Cadastro de Usuários</font><br>
        <br><font size="6">Selecione o tipo de Profile que deseja cadastrar:</font><br>
</font></body></center>

<?php
    echo "<center>";
    $mytable = "profiles";
    $query = "SELECT id_profiles, name FROM $mytable";
    $result = mysqli_query($conn, $query);

      mysqli_data_seek($result, 0);
      echo "<table border = 1>";
      echo "<tr>";
      echo "<th> id </th>";
      echo "<th> Profiles </th>";
      echo"</tr>";
      
      while($linha = mysqli_fetch_array($result)){
          echo "<tr>";
          $_SESSION['flag'] = 0;
          $nome = $linha['name'];
          $idp = $linha['id_profiles'];
          echo "<td> $idp </td>";
          echo "<td><a href=11_Insert_1.php?idp=$idp> $nome </a></td>";
        
          echo "</tr>";
      }
      echo "</table>";
      echo "</center>";
?>
