<?php
include_once "header.php";
?>
<header>
    

<form action="login.php" method="post">
    <input type="text" name="txt_login" placeholder="login" required> 
    <input type="password" name="txt_senha" placeholder="senha" required>
    <input type="submit" value="login">
</form>
<a href="form_user.php">Cadastrar</a>
<?php
  if(isset($_GET['texto'])){
    if($_GET['texto']=="false"){
        echo "login ou senha errada, muito burro kKkkk";
    }
}
?>
</header>
<?php
include_once "footer.php";
?>