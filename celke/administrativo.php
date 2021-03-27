<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='entrar.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: index.php");	
}
