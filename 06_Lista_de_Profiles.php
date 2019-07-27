<?php
    
require '04_Verifica_Root.php';

?>
<center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center>
<html>
    <head>
        <title>Lista de Profiles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size="5"><b><center>Profiles</center></b></font>
        <br><br>    
    </body>
</html>

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
        $id = $linha['id_profiles'];
        $nome = $linha['name'];
        echo "<td> $id </td>";
          
        if($id == 1){
            echo "<td><a href=10_Lista_de_Roots.php?ids=$id>$nome</td></a>";
	}
	if($id == 2){
            echo "<td><a href=07_Lista_de_Managers.php?ids=$id>$nome</td></a>";
	}	 
	if($id == 3){
            echo "<td><a href=08_Lista_de_Users.php?ids=$id>$nome</td></a>";
	} 
   }
      echo "</table>";
      echo "</center>";
?>

