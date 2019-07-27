<?php  
    require '04_Verifica_Root.php';

?>
<center>
<br><br><br><form action=05_Home.php method=get ><input type="submit" value="Voltar Home" name="home" /></FORM><br><br><br>
</center>

<?php
    $idu = $_GET['idu'];
    echo "<br>id Profile: ".$idu."<br>";
    
    $mytable = "users";
    if($idu !=1){
    $delete = "DELETE FROM $mytable  WHERE `id` = $idu";
    $result = mysqli_query($conn, $delete) or die('<br>Erro ao deletar!<br>');
    
    echo "<br>".$delete."<br>";
    echo "<br>Removido com Sucesso<br>";
    }
    else
            echo "<br>Não pode ser removido<br>";

    

?>