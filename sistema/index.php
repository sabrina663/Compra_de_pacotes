<?
    session_start();
    if(!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'sim'){
        header("location:../index.php");
        exit();
    }
?>
<!doctype html>
<html>
<head lang='pt-br'>
    <meta charset='UTF-8'>
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
    <div class='div-text'>
        <h2>Seja Bem-Vindo(a) <?echo $_SESSION['client'];?>.</h2>
    </div>
    <div class="container-pacotes">
        <div class='parent'>
            <section class='sec-pack'>
                <h2>Basico</h2>
                <section class='sec-ul'>
                    <ul>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                    </ul>
                </section>
                <section class='sec-valor'>
                    <p>R$ 15,90</p>
                </section>
                <section class='sec-btn'>
                    <a href='form.php?pacote=Básico'>
                        <button>Comprar</button>
                    </a>
                </section>
            </section><!-- sec-pack -->
            <section class='sec-pack'>
                <h2>Padrão</h2>
                <section class='sec-ul'>
                    <ul>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                        <li class='li-times'>Lorem ipsum.<i class="fas fa-times"></i></li>
                    </ul>
                </section>
                <section class='sec-valor'>
                    <p>R$ 20,90</p>
                </section>
                <section class='sec-btn'>
                    <a href='form.php?pacote=Padrão'>
                        <button>Comprar</button>
                    </a>
                </section>
            </section><!-- sec-pack -->
            <section class='sec-pack'>
                <h2>Premium</h2>
                <section class='sec-ul'>
                    <ul>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                        <li class='li-check'>Lorem ipsum.<i class="fas fa-check"></i></li>
                    </ul>
                </section>
                <section class='sec-valor'>
                    <p>R$ 30,90</p>
                </section>
                <section class='sec-btn'>
                    <a href='form.php?pacote=Premium'>
                        <button>Comprar</button>
                    </a>
                </section>
            </section><!-- sec-pack -->
        </div><!-- parent -->
        <section class='sec-btn-back'>
            <a href='sair.php'>
                <button>Voltar</button>
            </a>
        </section><!-- sec-btn -->
    </div><!-- container-pacotes -->
    <?
        require_once("../page/footer.php");
    ?>
</body>
</html>