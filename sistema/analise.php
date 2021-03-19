<?php
session_start();
$cont_string = strlen($_POST['nome']);
if(empty($_POST['nome'])  || $cont_string <= 2){
    header("location:../index.php?campo=false");
    die();
}
$_SESSION['acesso'] = 'sim';
$_SESSION['client'] = $_POST['nome'];
header('location:index.php');

?>