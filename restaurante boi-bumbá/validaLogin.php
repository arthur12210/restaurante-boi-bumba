<?php require "conecta.php" ?>
<?php require_once "bancoReserva.php" ?> 

<?php 
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  
$loginUsuario = buscaUsuario($conexao, $login, $senha); 

if ($loginUsuario == 0) //Em caso de não encontrar nenhum dado solicitado
	{
		header("Location:login.php?login=0"); //Volta para a tela de login
	}
	else 
	{
		header("Location:index.php?user=$login");
	}
	
?>