<?php
// Define as credenciais dos usuários
$users = array(
	"Gabriel" => "124531",
	"wesleyboss" => "chapadoaos20",
	"johnnyoliverr" => "skala",
	"teste" => "teste",
);

// Obtém o nome de usuário e senha enviados pelo formulário
$username = $_POST["username"];
$password = $_POST["password"];

// Verifica se o usuário e senha são válidos
if (array_key_exists($username, $users) && $users[$username] == $password) {
	// Inicia a sessão e salva o nome de usuário na sessão
	session_start();
	$_SESSION["username"] = $username;

	// Se as credenciais estiverem corretas, redireciona o usuário para a página home.php
	header("Location: vendas.php");
	exit();
} else {
	// Se as credenciais estiverem incorretas, redireciona o usuário para a página index.php com um parâmetro de erro
	$error = "Usuário ou senha inválidos";
	header("Location: tela_login.php?error=" . urlencode($error));
	exit();
}
?>
