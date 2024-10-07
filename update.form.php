<?php
include_once "header.php";
?>

<form action="atualizar.php" method="post">
   <label>nome:</label>
   <input type="text" name="txt_nome" value=<?php echo $_SESSION['nome']?>><br>
   <label>senha:</label>
   <input type="password" name="txt_senha" value=<?php echo $_SESSION['senha']?>><br>
   <label>Login:</label>
   <input type="text" name="txt_login" value=<?php echo $_SESSION['login']?>><br>
   <label>Data de Nascimento:</label>
   <input type="date" name="txt_data" value=<?php echo $_SESSION['data']?>><br>
   <input type="submit" value="Atualizar">
</form>

<?php
include_once "footer.php";
?>