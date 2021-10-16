<?php
session_start();
//Incluindo a conexão com banco de dados
require("conecta.php");

$emaillogin = $_POST['email'];
$senhalogin = $_POST['senha'];
//$pegacod = $_POST['codconfirmacaoemail'];

//O campo usuário e senha preenchido entra no if para validar
if ((isset($emaillogin)) && (isset($senhalogin))) {
	$usuario = mysqli_real_escape_string($conn, $emaillogin); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
	$senha = mysqli_real_escape_string($conn, $senhalogin);
	$senha = md5($senha);
	//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
	$result_usuario = "SELECT * FROM `usuario` WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);

	
	//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário	}
	if (isset($resultado)) {
		$status =  $resultado['status'];
	
		if ($status == 1) {
			if ($pegacod == $reservacodconfirme) {
				$_SESSION['id'] =$resultado['id'];
				$_SESSION['plano'] = $resultado['plano'];
				$_SESSION['pizzaria'] = $resultado['pizzaria'];
				$_SESSION['nome'] = $resultado['nome'];
				$_SESSION['email'] = $resultado['email'];
				$_SESSION['autorizacao'] = $resultado['nivel_acesso'];
  				$_SESSION['longitude'] = $resultado['longitude'];
                $_SESSION['latitude'] = $resultado['latitude'];
				$alterarstatus = "UPDATE login SET status_verificacao=2 WHERE id=$id ";
				$salvounobanco = mysqli_query($conn, $alterarstatus);
				if ($_SESSION['autorizacao'] == "1") {
					//header("Location: https://localhost/projetos/pizzaria/admin/");
					header("Location: https://blackfoodspizza.com.br/admin/listarpizzas.php");
				} elseif ($_SESSION['autorizacao'] == "2") {
					//header("Location: https://localhost/projetos/pizzaria/admin/");
					header("Location: https://blackfoodspizza.com.br/admin/listarpizzas.php");
				} elseif ($_SESSION['status'] == "3") {
					//header("Location: https://localhost/projetos/pizzaria/admin/");
					header("Location: https://blackfoodspizza.com.br/admin/listarpizzas.php");
				}
			} else {
				//Váriavel global recebendo a mensagem de erro
				$_SESSION['loginErro'] = "Confirme seu email";

				header("Location: https://blackfoodspizza.com.br/admin/login.php");
			}
		}
		if ($status == 2) {
				$_SESSION['id'] = $resultado['id'];
				$_SESSION['posto'] = $resultado['posto'];
				$_SESSION['transportadora'] = $resultado['transportadora'];
				$_SESSION['nome'] = $resultado['nome'];
				$_SESSION['email'] = $resultado['email'];
				$_SESSION['autorizacao'] = $resultado['nivel_acesso'];
  				$_SESSION['longitude'] = $resultado['longitude'];
                $_SESSION['latitude'] = $resultado['latitude'];
	
			if ($_SESSION['autorizacao'] == "transportadora") {

				header("Location: index.php");
			} elseif ($_SESSION['autorizacao'] == "gerencia") {
				//header("Location: https://localhost/projetos/pizzaria/admin/");
				header("Location: https://blackfoodspizza.com.br/admin/listarpizzas.php");
			} elseif ($_SESSION['autorizacao'] == "admin") {
				//header("Location: https://localhost/projetos/pizzaria/admin/");
				header("Location: https://blackfoodspizza.com.br/admin/listarpizzas.php");
			}
		}
	} else {
		$_SESSION['loginErro'] = "Email nao cadastrado.<br>Solicite um login no whatsapp <br> (11) 93300-8587.";

		header("Location: https://blackfoodspizza.com.br/admin/login.php");
	}
} else {
	$_SESSION['loginErro'] = "Sistema em manutenção, tente mais tarde!";

	header("Location: https://blackfoodspizza.com.br/admin/login.php");
}
