<?php 
    if (!isset($_SESSION)) {
        session_start();
    }
    include '01_Conexao.php';
?>
    <center><font size="2">Menu de Usuário Root</font></center>
    <div align ="right">
        <form action=01_Logout.php method=get >
            <input type="submit" value="Logout" name="logout" /></FORM>
    </div>
  <html>
    <center>

<?php

if(!isset($_SESSION['OK'])) { 
   echo "<br>Sessão Expirada!<br>";
   unset($_SESSION['login']);
   unset($_SESSION['senha']);
   session_destroy();
   echo "<br><br><a href=02_Formulario.php?> Retornar ao Formulário </a>";
    

   exit;
} 

?>
