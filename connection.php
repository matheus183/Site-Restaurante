<?php
//Database configuration
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rating";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Connect with the database
$db = new mysqli($servidor, $usuario, $senha, $dbname);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
endif;
?>
