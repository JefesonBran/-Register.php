<?php
$user="root";
$host="localhost";
$port="3306";
$banco="aula";
$senha="";
try{
    $conn=new PDO('mysql:host='.$host.';port='.$port.';dbname='.$banco,$user,$senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR:".$e->getMessage();
}
?>