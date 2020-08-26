<?php
session_start();
include('conexao.php');

if(empty(S_POST['usuario']) || empty($_POST['senha']){
	header('Location: index.php');
	exit();
}
$usuario= mysql_real_escape_string($conexao, $_POST['usuario']);
$senha= mysql_real_escape_string($conexao, $_POST['senha']);

$query="select usuario_id, login from usuario where usuario ='usuario' and senha ='senha'"; 

$result = mysqli_query($conexao, $query);

$row=mysqli_num_rows($result);

if($row == 1){
	$_SESSION['usuario'] = $usuario;
	header('Location:painel.php')
}else{
	header('Location.index.php')
}