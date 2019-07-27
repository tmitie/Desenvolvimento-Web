<?php
    require '04_Verifica_Root.php';
    include '01_Conexao.php';

    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
?>