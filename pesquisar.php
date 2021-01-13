<?php
    include("mysql.php");

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Página Inicial</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- <link rel="manifest" href="site.webmanifest"> -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		
		<!-- CSS here -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/gijgo.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/slicknav.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="css/responsive.css"> -->
	</head>
	<body class="jumbotron">
	
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>				
							<div class="live_chat_btn">
								<a class="boxed_btn_orange login" href="index.php">
									<i class="flaticon-user"></i>
									<span>Página Principal</span>
								</a>
							</div>
								
        <br>
        <form method="POST" action="">
        <h4 class="mb-30">Pesquisar:</h4>
			<input type="text" name="nome" placeholder="Digite o nome do evento"><br><br>
			
            
			<input name="SendPesqUser" class="genric-btn success btn-block" type="submit" style="width: 258px;" value="Pesquisar">  

		</form>  <bR>

		<div class="row">
            <div class="col-3">
                <h3 class="mb-30">Tabela de Eventos</h3>
                
            </div>
			<div class="col-1">
                <a href="" onclick="<?php
				mysqli_set_charset($db, "utf8");
				$sql = "select * from events";		
				?>"><i class="ti-reload" style="font-size: 20px;display: block;text-align: center;"></i></a>
            </div>

            
        </div>
        
            <br>
           

        <div class="progress-table-wrap">
            <div class="progress-table">
                <div class="table-head">
                    <div class="serial">#</div>
                    <div class="visit">Nome</div>
                    <div class="visit">Data do Evento</div>
                    <div class="visit">Email</div>    
                    <div class="visit">Local</div>     
 
                </div>
				

                 
<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM events WHERE name LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($db, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                echo "<div class=\"table-row\">";
                echo "<div class=\"serial\">".$row_usuario['id']."</div>";
                echo "<div class=\"visit\">".$row_usuario['name']."</div>";
                echo "<div class=\"visit\">".$row_usuario['data_evento']."</div>"; 
                
                echo "<div class=\"visit\">".$row_usuario['email']."</div>";
                echo "<div class=\"visit\">".$row_usuario['local']."</div>";

						echo "</div>";
				echo "<hr>";
			}
		}
		?>


            </div>
        </div>
	</body>
</html>