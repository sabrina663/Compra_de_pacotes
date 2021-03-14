<?php
session_start();
if(empty($_POST['nome'])){
    header("location: index.php");
    die();
}
$_SESSION['acesso'] = 'sim';
$_SESSION['client'] = $_POST['nome'];
header('location: pacotes.php')
?>