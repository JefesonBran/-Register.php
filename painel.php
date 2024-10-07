<?php
include_once "verificar_login.php";
include_once "header.php";
?>
<header>
    <?php echo $_SESSION['nome']?>
    <?php echo $_SESSION['data']?>
</header>
<h2>Deu certo, tamo junto!</h2>
<a href="deletar.php">Deletar</a><br>
<a href="update.form.php">Atualizar os Dados</a>