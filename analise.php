<?php
session_start();
if(empty($_POST['nome'])){
    header("location: index.php");
    die();
}
$_SESSION['acesso'] = 'sim';
header('location: pacotes.php')
?>