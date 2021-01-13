<?php

include("../../mysql.php"); // chamando o arquivo mysql.php para fazer chamada do banco de dados
mysqli_set_charset($db, "utf8");

if (isset($_GET['codigo'])) {
	$sql = "delete from events  where id = ".$_GET['codigo']; // vai deletar da tabela eventos o item selecionado
	
	$resultado = mysqli_query($db, $sql); // oq é "mysqli_query"? ele executa uma consulta no banco de dados, procurando tais tabelas chamadas
	
	if ($resultado == false) { // o que é resultado?
		echo "Erro ao excluir funcionário.";
		exit;
	}
	
	echo "<script>window.location='dashboard.php'</script>";
}

?>