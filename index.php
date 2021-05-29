<?
    session_start();
    if(isset($_SESSION['acesso'])){
        header('location:sistema/index.php');
        
        die();
    }
?>
<!doctype html>
<html>
<head lang='pt-br'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel='stylesheet' href='_css/style.css'>
    <title>Landing page</title>
</head>
<body> 
    <?
        require_once('page/cabecalho.php');
    ?>
    <div class="container">    
        <div class='info'>
            <h1>Lorem ipsum dolor</h1>
            <section class='sec-p'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <section>
            <form method='post' action='sistema/analise.php'>
                <input type='text' name='nome' placeholder='Seu Nome'>
                <section class='sec-btn'>
                    <button>Vamos lá</button>
                </section>
            </form>
        <?
            if(isset($_GET['campo']) && $_GET['campo'] == 'false'){?>
                <section>
                    <p>Por favor preencher o campo acima.</p>
                </section>

        <?}?>
        </div><!-- info -->
    </div><!-- container -->
    <?
        require_once('page/footer.php');
    ?>
</body>
</html>