<!DOCTYPE html>
<html lang ="pt-br">
<head>
    <title> Food Pics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Footer-with-button-logo.css?<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="cabecalho.css?<?php echo time();?>">
    <!-- aqui vai o css da pagina atual -->
</head>
<body>
<!-- comeco do cabecalho -->
        <section>
                    <div id="logocontainer">

                    <div class="logotopo">
                        <img src="food-pics.png" class="logo">
                    </div>

                    <input type="text" placeholder="pesquisar" id="inputbox">

                    </div>
                </section>

                <section>
                    <ul class="listamenu">
                    <li><a class="botao_menu" href="celke/entrar.php">Entrar</a></li>
                    <li><a class="botao_menu" href="celke/cadastrar.php">Cadastrar</a></li>
                    <li><a class="botao_menu" href="">Contato</a></li>
                    <li><a class="botao_menu" href="">Quem somos</a></li>
                    </ul>
        </section>
<!-- fim do cabecalho -->


<!-- conteudo principal da pagina e isso inclui phps que geram echos vai aqui-->

<!-- tenta usar mais classes e ids no css principal pra não ter conflito com os os elementos de css diferentes -->



<!-- comeco do rodape -->
    <div class="content">
        </div>
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="logo"><a href="https://programadorviking.com.br/"><img src="food-pics.png" class="logo"></a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h5>Inicio</h5>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="">Restaurantes</a></li>
                            <li><a href="">Pastelarias</a></li>
                            <li><a href="">Bares</a></li>
                            <li><a href="">Lanchonetes</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Sobre-nós</h5>
                        <ul>
                            <li><a href="">Quem Somos</a></li>
                            <li><a href="">Contato</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Suporte</h5>
                        <ul>
                            <li><a href="">Telefones</a></li>
                            <li><a href="">Chat</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="">
                            <button type="button" class="btn btn-default">Contato</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2019 Copyright - Food Pics</p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- fim do rodape -->


</body>
</html>