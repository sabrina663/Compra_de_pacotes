<?
    session_start();
    if(!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 'sim'){
        header("location:index.php");
        exit();
    }
?>
<!doctype html>
<html>
<head lang='pt-br'>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel='stylesheet' href='_css/style.css'>
    <title>Landing Page</title>
</head>
<body>
    <?
        require_once('cabecalho.php');
    ?>
    <div class='div-welcome'>
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
                    <button>Comprar</button>
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
                    <button>Comprar</button>
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
                    <button>Comprar</button>
                </section>
            </section><!-- sec-pack -->
        </div>
    </div><!-- container-pacotes -->
</body>
</html>