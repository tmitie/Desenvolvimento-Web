<?php
    include '01_Conexao.php';
?>
<html>
    <head>
        <title>Formulário</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size="5"><b><center>Autenticação de Usuário</center></b></font>
        <br><br>
    <center>
    <form method = 'post' action = "03_Validacao.php">
    
        <LABEL for="InputLogin">Usuário: </LABEL>
        <INPUT type="text" name="log" id="InputLogin">
        <LABEL for="InputSenha">Senha: </LABEL>
        <INPUT type="password" name="senha" id="InputLogin">
        
        <input type="submit" value="Entrar" name="entrar" />
    </center>
    </form>
</body>
</htm>
