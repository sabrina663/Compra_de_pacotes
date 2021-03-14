<!doctype html>
<html>
<head lang='pt-br'>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel='stylesheet' href='_css/style.css'>
</head>
<body> 
    <?
        require_once('cabecalho.php');
    ?>
    <div class="container">    
        <div class='info'>
            <h1>Lorem ipsum dolor</h1>
            <section class='sec-p'>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt maxime at odit ad repudiandae similique, suscipit earum deserunt molestias ea nisi architecto corporis, molestiae nemo facilis, harum doloribus. Eaque, magni.</p>
            <section>
            <form method='post' action='analise.php'>
                <input type='text' name='nome' placeholder='Seu Nome'>
                <section class='sec-btn'>
                    <button>Vamos lá</button>
                </section>
            </form>
        </div><!-- info -->
    </div><!-- container -->
    <?
        require_once("footer.php");
    ?>
</body>
</html>