
    <center><font size="2">Menu de Usuário Root</font></center>
    <div align ="right">
        <form action=01_Logout.php method=get >
            <input type="submit" value="Logout" name="logout" /></FORM>
    </div>

    
    
    <?php
    
    require '04_Verifica_Root.php';
 ?>

<HTML> 
    <HEAD> 
<TITLE>Avaliação 2</TITLE>
<META name="Tópicos Especiais III" content="Desenvolvimento Web  ">
<META name="Thaynara Mitie" content="Engenharia de Computação">
</HEAD> 
<BODY>

    
    <font size="12"><b><center>Avaliação 2</center></font></b>

<center><br><font size="5">Selecione sua Opção:</font><br>
        
    <br><form action=06_Lista_de_Profiles.php method=get ><input type="submit" value="Listar Profiles" name="listar_profiles" /></FORM>
    <br><form action=11_Insert.php method=get ><input type="submit" value="Cadastrar Usuários" name="cadastrar_usuarios" /></FORM>
    <br><form action=12_DELETE.php method=get ><input type="submit" value="Excluir Usuários" name="excluir_usuarios" /></FORM>
    <br><form action=13_UPDATE.php method=get ><input type="submit" value="Atualizar Usuários" name="atualizar_usuarios" /></FORM>
     
        <br><br>
        </p></CENTER>
</BODY> 
</HTML>

