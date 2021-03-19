<?
    session_start();
    if(!isset($_SESSION['validacao']) && $_SESSION['validacao'] != 'sim'){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel='stylesheet' href='../_css/style.css'>
    <title>Landing page</title>
</head>
<body>
    <?
        require_once('../page/cabecalho.php');
    ?>
    <div class='container-page'>
        <?
        if(isset($_GET['valor']) && $_GET['valor'] == 'true'){?>
            <section class='sec-process'>
                <h2 class='true'>Enviado com sucesso</h2>
            </section>    
        <?}?>
        <?
        if(isset($_GET['valor']) && $_GET['valor'] == 'false'){?>
            <section class='sec-process'>
                <h2 class='false'>Não foi possivel realizar o envio</h2>
            </section>
        <?}?>
        <section class='sec-btn-back'>
            <a href='sair.php'>
                <button>Sair</button>
            </a>
        </section><!-- sec-btn -->
    </div><!-- cont-process -->
    <?
        require_once('../page/footer.php');
    ?>
</body>
</html>