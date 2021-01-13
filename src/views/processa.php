<?php
session_start();
include_once("../../mysql.php");



if(!empty($_POST['estrela']) && ($_POST['lugar'])){
	$estrela = $_POST['estrela'];
	$username = $_SESSION['username'];
	$lugar = $_POST['lugar'];
	
	//Salvar no banco de dados
	$result_avaliacos = "INSERT INTO avaliacoes (qnt_estrela, created, username, lugar) VALUES ('$estrela', NOW(), '$username', '$lugar')";
	$resultado_avaliacos = mysqli_query($db, $result_avaliacos);
	
    
	if(mysqli_insert_id($db)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: ../../index.php");

		
	}else{
		echo "Não funcionou, reporte aos admins na aba contato.";
	}
		

}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";

}