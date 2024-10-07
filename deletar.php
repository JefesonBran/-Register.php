<?php
include_once "verificar_login.php";
include_once "conexao.php";
$stmt=$conn->prepare("delete from usuario where id_user=?");
$stmt->bindParam(1,$_SESSION['id']);
$stmt->execute(); //executa os dados da sessão
session_destroy(); //destroi todos os dados da sessão
header("Location:index.php");

?>