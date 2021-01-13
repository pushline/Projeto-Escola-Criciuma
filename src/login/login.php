<?php

include("../../mysql.php");

if (isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Você já esta logado";
	header('location: ../views/dashboard.php');
}



$db = mysqli_connect('localhost', 'root', '', 'projeto');

	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($username)) {
			array_push($errors, "Nome de Usuário precisa ser preenchido");
		}
		if (empty($password)) {
			array_push($errors, "Senha precisa ser preenchida");
		}
		
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Você agora está logado no sistema";
				header('location: ../views/dashboard.php');
			}else {
				array_push($errors, "Usuário ou Senha incorreto!");
			}
		}
	}

?>
