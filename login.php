<?php
if(isset($_POST['txt_login'],$_POST['txt_senha'])){

include_once "conexao.php";

$login=$_POST['txt_login'];
$senha=$_POST['txt_senha'];
$dados=$conn->query("select * from usuario where login_user='".$login."' && senha_user='".$senha."'") or die("Deu tudo errado mermão".$mysql->error);
$linhas=$dados->rowCount();
if($linhas==1){
session_start();
$row=$dados->fetch(PDO::FETCH_OBJ);
$_SESSION['id']=$row->id_user;
$_SESSION['nome']=$row->id_nome;
$_SESSION['login']=$login;
$_SESSION['cpf']=$row->cpf_user;
$_SESSION['data']=$row->data_nasc_user;
header("Location:painel.php");
die();

}else{
    header("Location:index.php?texto=false");
    die();
}
}

?>