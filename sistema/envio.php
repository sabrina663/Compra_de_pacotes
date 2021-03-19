<?php
session_start();
$one_caracter = "@";
$two_caracter = '.com';
if(strripos($_POST['mail'],$one_caracter) === false || strripos($_POST['mail'],$two_caracter) === false || empty($_POST['mail'])){
    header('location:form.php?pacote='.$_SESSION['pacote'].'&valor=false');
    exit();
}
require_once("../src/PHPMailer.php");
require_once("../src/SMTP.php");
require_once("../src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'testweb6663@gmail.com';
    $mail->Password  = 'Lennon1940';
    $mail->Port = 587;

    $mail->setFrom('testweb6663@gmail.com',"Landing Page");
    $mail->addAddress($_POST['mail']);
    $mail->isHTML(true);
    $mail->Subject = "Pacote do Landing Page";
    $mail->Body = 'Pacote de desejo <strong>'.$_SESSION['pacote'].'</strong>';
    $mail->AltBody = 'Pacote de desejo '.$_SESSION['pacote'] ;
    if($mail->send()){
        header('location:processo.php?valor=true');
        $_SESSION['validacao'] = 'sim';
    }else{
        header('location:processo.php?valor=false');
    }
}catch(Exception $e){
    echo 'Erro ao Enviar o E-mail <br>';
    echo '{$mail->$ErrorInfo}';
}
?>