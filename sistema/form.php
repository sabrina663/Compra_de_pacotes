<?
    session_start();
    if(!isset($_GET['pacote'])){
        header("location:index.php");
    }
    $_SESSION['pacote'] = $_GET['pacote'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel='stylesheet' href='../_css/style.css'>
    <title>Landing Page</title>
</head>
<body>
    <?
        require_once("../page/cabecalho.php");
    ?>
    <div class='container-page'>    
        <div class='div-text'>
            <h2>Pacote Desejado 
            <?if(isset($_GET['pacote']) && $_GET['pacote'] == 'Básico'){?>
            Básico por R$15,90<?}
            else if(isset($_GET['pacote']) && $_GET['pacote'] == 'Padrão'){?>
            Padrão por R$20,90<?}
            else if(isset($_GET['pacote']) && $_GET['pacote'] == 'Premium'){?>
            Premium por R$30,90<?}?>
            </h2>
        </div>
        <form method='post' action='envio.php'>
            <input type='text' name='mail' placeholder='example@gmail.com'>    
            <?
                if(isset($_GET['valor']) && $_GET['valor'] == 'false'){?>
                    <section class='valor_false'>
                        <p>Por favor digite um E-mail válido.</p>
                    </section>
            <?}?>
            <button>Realizar pedido</button>
        </form>
    </div>
    <?
        require_once("../page/footer.php");
    ?>
</body>
</html>