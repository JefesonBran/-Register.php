<?php
if(isset($_POST['txt_nome'],$_POST['txt_login'],$_POST['txt_senha'],$_POST['txt_cpf'],$_POST['dt_data'],$_POST['txt_end'],$_POST['txt_bairro'],$_POST['txt_cidade']) && is_numeric($_POST['txt_cpf'])){
    $name=$_POST['txt_nome'];
    $login=$_POST['txt_login'];
    $pass=$_POST['txt_senha'];
    $cpf=$_POST['txt_cpf'];
    $date=$_POST['dt_data'];
    $end=$_POST['txt_end'];
    $bairro=$_POST['txt_bairro'];
    $cidade=$_POST['txt_cidade'];
    include_once "conexao.php";
    $stmt=$conn->prepare("insert into usuario(nome_user, login_user, senha_user, cpf_user, data_nasc_user, end_user, bairro_user, cidade_user)values(?,?,?,?,?,?,?,?)");
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$login);
    $stmt->bindParam(3,$pass);
    $stmt->bindParam(4,$cpf);
    $stmt->bindParam(5,$date);
    $stmt->bindParam(6,$end);
    $stmt->bindParam(7,$bairro);
    $stmt->bindParam(8,$cidade);
    $stmt->execute();
    header("Location:index.php");
    die();

}else{
    echo "DEU ERRO MANO, TEM COMO RESOLVER ESSE B.O AI CUZAO?";
}
?>