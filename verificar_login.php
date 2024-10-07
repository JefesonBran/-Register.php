<?php
session_start();
if(!isset($_SESSION['cpf'])){
    header("Location:index.php?texto=false");
    die();
}
?>