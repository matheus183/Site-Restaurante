<!DOCTYPE html>
<html lang ="pt-br">
<head>
<meta charset ="uft-8">
    <title> Food Pics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="center.css">
    
    



</head>

 
<div id="largura-pagina">
        <section id="conteudo1">
                <a href="index.php"><img src="logo.png"width="170" height="100" ></a>
        
                <input class="input" type="text" placeholder="Text input" class="input">

        </section>

    <section id="conteudo2">

        <div>
            <a href="celke/entrar.php">Entrar</a>&nbsp; &nbsp;
            <a href="celke/cadastrar.php">Cadastrar</a>&nbsp; &nbsp;
            <a href="quem_somos.php">Contato</a>&nbsp; &nbsp;
            <a href="quem_somos.php">Quem somos</a>


        </div>
    </section>
</div>

<br><br>

<div id='cssmenu'>
<ul>
<li><a href='index.php'><span>Home</span></a></li>
<li><a href='restaurante.php'><span>Restaurantes</span></a></li>
   <li><a href='pastelarias.php'><span>Pastelarias</span></a></li>
   <li><a href='bares.php'><span>Bares</span></a></li>
   <li class='last'><a href='soverteira.php'><span>Soverteria</span></a></li>
</ul>
</div>
<br><br>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1><b>RESTAURANTE MARTIN BERASATEGUI</b></h1>
<table border=0>

    <tr>
        <td rowspan="2" width="498px" height="100"><img src="img/restaurante1.jpg" width="500px" heigth="100"></td>
        <td width="300px" heigth="80px"><img src="img/restaurante11.jpg" width="300px" height="334px"></td>
        <td><img src="img/restaurante1.2.jpg" height="334px"></td>
        <td width="300px" heigth="80px"><img src="img/restaurante1.3.jpg" width="300px" height="334px"></td>
    </tr>


</table>

<br><br>

<div class="holder">

  <div class="imagem" data-title="">
    <H3>LOCALIZAÇÃO</H3><p>
    <font family="arial"><b>Rua Josephina Mandotti 96, Guarulhos, Estado de São Paulo 07115-080 Brasil</b></font>
  </div>

  <div class="imagem" data-title="">
  <H3>MAIS DETALHES</H3><p>
  <font family="arial"><b>FAIXA DE PREÇO:
    R$ 3 - R$ 30 <P>
    TIPO:
    Restaurante<p>
    
    REFEIÇÕES<p>
     Almoço, Jantar</b></font>
    
  </div>

  <div class="imagem" data-title="">
  <H3>CONTATO</H3><p>
  <B>(55)11-24413752</B><P>
    <b>E-mail: MARTIN_BERASATEGUI@gmail.com</b>
    
  </div>
  

</div>

<hr>
<center><img src="img/estrelas.jpg" width="50%" heigth="50%"></center>
<br>

<?php
$link=mysqli_connect("localhost","root","");
$banco=mysqli_select_db($link,"bdcomentarios");
?>
<section>
<form name="form" method="post" action="#">
<div class="input-container">
   <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOME</h3>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=nome class="input" pattern=".+" required>
    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL</h3>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=email class="input" pattern=".+" required>
    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMENTARIO</h3>
    <textarea name=comentario></textarea>
    <br><br>
    <input type=submit value=Enviar><br><br><br>
    
</div>

</form>
</section>


<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$data = date("Y/m/d");           
$comentario=$_POST['comentario']; 
if(strlen($_POST['nome'])) #insere somente se no form foi escrito o nome
{
    $insert = mysqli_query($link, "INSERT INTO tbcomentario(nome,email,data,comentario) 
    values('$nome','$email','$data','$comentario')");
}
$sql = "SELECT * FROM tbcomentario ORDER BY id desc";
$executar=mysqli_query($link, $sql);
while( $exibir = mysqli_fetch_array($executar)){
    echo "<br>";
    echo $exibir['data'];
    echo "<br>";
    echo $exibir['nome'];
    echo "<br>";
    echo $exibir['email'];
    echo "<br>";
    echo $exibir['comentario'];
    echo "<br><br>";
}
?>



<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><img src="logo.png" width="300px"></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="restaurante.php">Restaurantes</a></li>
                        <li><a href="pastelarias.php">Pastelarias</a></li>
                        <li><a href="bares.php">Bares</a></li>
                        <li><a href="soverteira.php">Soverteria</a></li>
                       
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="quem_somos.php">Quem Somos</a></li>
                        <li><a href="quem_somos.php">Contato</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="quem_somos.php">Telefones</a></li>
                        
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
            <p>© 2019 Copyright - Programador Viking</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






</body>

</html>