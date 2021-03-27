<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Sistema de Comentario </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cadastrar.css">
</head>
<body>
<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
    

 <form method="POST">

        <h1> Cadastre-se </h1>

        <label for="nome"> Nome</label>
        <input type="text" name="nome"  maxlength="40">
     
        <label for="email"> Email</label>
        <input type="email" name="email" autocomplete="off" maxlength="40">

        <label for="email"> Usuário</label>
        <input type="text" name="usuario" autocomplete="off" maxlength="40">

        <label for="senha"> Senha</label>
        <input type="password" name="senha">

        <label for="confsenha"> Confirmar a senha</label>
        <input type="password" name="confsenha">
        <input type="submit" value="cadastrar">
        
</form>

</body>
</html>


<?php

// verificar se a pessoa clicou no botão cadastar 
// guardar os dados dentro da variaveis 
// envoar dados colhidos para a classe, funcção cadastrar 
// verificar se retorno e falo ou verdadeiro 

if(isset($_POST['nome']))
{
    $nome = htmlentities(addslashes($_POST['nome']));
    $email = htmlentities(addslashes($_POST['email']));
    $senha = htmlentities(addslashes($_POST['senha']));
    $confsenha = htmlentities(addslashes($_POST['confsenha']));

    if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha))

    {
            if($senha == $confsenha)
            {
                require_once 'classes/usuarios.php';
                $us = new Usuario("projeto_comentarios","localhost","root","");
               if($us->cadastrar($nome, $email, $senha))
               {
                    echo "Cadastrado com sucesso!";
               }else
               {
                    echo "Email ja estar Cadastrado!";
               }
            }else
            {
                echo "Senhas não corrrespondem!";
            }       
    }else
    {
        echo "Preencha todos os campos";
    }

}
?>