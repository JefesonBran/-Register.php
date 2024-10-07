<?php
include_once "conexao.php";
include_once "verificar_login.php";
$login=$_POST['txt_login'];
$data=$_POST['txt_data'];
$nome=$_POST['txt_nome'];
$stmt=$conn->prepare("update usuario set nome_user=?, login_user=?, data_nasc_user=? where id_user=?");
$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$login);
$stmt->bindParam(3,$data);
$stmt->bindParam(4,$_SESSION['id']);
$stmt->execute();
$_SESSION['nome']=$nome;
$_SESSION['login']=$login;
$_SESSION['data']=$data;
header("Location:painel.php");
die();

?>