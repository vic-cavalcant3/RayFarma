<?php 

// //Inicia uma nova sessão ou retoma uma sessão existente.
@session_start();

// //Inclusão do Arquivo de Conexão.
require_once('conecta.php');

//Obtenção dos Dados do Formulário.
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$emailCorreto = "victorrocha0223@gmail.com";
$senhaCorreta = "12345";

//Verificação das Credenciais.
if ($email == $emailCorreto && $senha == $senhaCorreta ){
	echo '<script>window.location="../inicial/index.php";</script>';
}else{
	echo '<script>alert("Dados Incorretos");</script>';
	echo '<script>window.location="index.php";</script>';
}
 ?>