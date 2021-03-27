<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Sistema de Comentario </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="entrar.css">
</head>
<body>
<h2>Área restrita</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>

 <form method="POST" action="valida.php">

        <h1> Acesse a sua conta </h1>

        <img src="img/envelope.png">
        <input type="text" name="usuario" autocomplete="off" maxlength="40">

        <img src="img/cadeado.png">
        <input type="password" name="senha">

        <input type="submit" name="btnLogin" value="Acessar">

        <a href="cadastrar.php">Cadastra-se Agora!</a>
</form>

</body>
</html>


<?php

if(isset($_POST['email']))
{
    $email = htmlentities(addslashes($_POST['email']));
    $senha = htmlentities(addslashes($_POST['senha']));
    if(!empty($email) && !empty($senha))
    {
        require_once 'classes/usuarios.php';
        $us = new Usuario("projeto_comentarios","localhost","root","");
        if($us->entrar($email, $senha))
        {
            header("location: index.php");
        }else
        {
            echo "Email e/ou senha estão incorretos";
        }
    }else
    {
        echo "Preencha todos os campos!";
    }
}


?>