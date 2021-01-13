<?php
    include("../../mysql.php");

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Você precisa logar primeiro";
        header('location: ../login/login_view.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../login/login_view.php");
    }

    
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Página Inicial</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- <link rel="manifest" href="site.webmanifest"> -->
		<link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		
		<!-- CSS here -->
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../../css/magnific-popup.css">
		<link rel="stylesheet" href="../../css/font-awesome.min.css">
		<link rel="stylesheet" href="../../css/themify-icons.css">
		<link rel="stylesheet" href="../../css/nice-select.css">
		<link rel="stylesheet" href="../../css/flaticon.css">
		<link rel="stylesheet" href="../../css/gijgo.css">
		<link rel="stylesheet" href="../../css/animate.css">
		<link rel="stylesheet" href="../../css/slicknav.css">
		<link rel="stylesheet" href="../../css/style.css">
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
    
        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) :
            include('dashboard_header.php');
        endif ?>
        
        <form method="POST" action="">
        <h4 class="mb-30">Pesquisar algum evento:</h4>
			            
			<!--<input name="SendPesqUser" class="genric-btn success btn-block" type="submit" style="width: 258px;" value="Pesquisar" href="../../pesquisar.php">-->
            <a type="submit" style="width: 233px;" class="genric-btn success btn-block" href="../../pesquisar.php">Pesquisar</a>
            
		</form><bR>


        <div class="row">
            <div class="col-3">
                <h3 class="mb-30">Tabela de Eventos</h3>
                
            </div>
<br>
           

           
            

       

        <div class="col-4">
                <a type="submit" class="genric-btn success btn-block" href="event_cad.php">Cadastrar Evento</a>
            </div>

            <div class="col-1" style="position: relative;margin-top: 12px;">
                <a href="" onclick="<?php

				
				mysqli_set_charset($db, "utf8");


				$sql = "select * from events";

				$resultado = mysqli_query($db, $sql);
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
                    
                    <div class="serial">Ação</div>
                    <div class="serial"></div>
                </div>
				<?php

                mysqli_set_charset($db, "utf8"); // vai retornar todos os itens da tabela em UTF-8, colocando acentuamento em caracteres especiais
                // á = á (&aacute)
                
                // ã = ã (&atilde)

                //e assim por diante
    

	
				$sql = "select * from events"; // selecionando tudo da tabela eventos
	
				$resultado = mysqli_query($db, $sql);
	
				$total_registros = mysqli_num_rows($resultado); // está pegando todas as coisas já cadastradas na tabela eventos(events)
    

                
				if ($total_registros > 0) {
					while ($linha = mysqli_fetch_assoc($resultado)) {
					 
						$data = new DateTime($linha['data_evento']);  // fazendo a coluna data_evento em DATE, já que o SQL nao retorna no php/html em DATA
					    $data_evento = date_format($data, "d/m/Y"); // formatando a coluna data_evento em dia / mes / ano
                        
                       


						echo "<div class=\"table-row\">";
                        echo "<div class=\"serial\">".$linha['id']."</div>";
                        echo "<div class=\"visit\">".$linha['name']."</div>";
                        echo "<div class=\"visit\">".$data_evento."</div>"; // não se coloca ['data_evento' ] nessa linha,  pois na linha 113 já foi especificado, então só foi adicionado a variável
                        echo "<div class=\"visit\">".$linha['email']."</div>";
                        echo "<div class=\"visit\">".$linha['local']."</div>";

                        echo "<a href='event_cad.php?codigo=".$linha['id']."' class=\"serial\">EDITAR</a>";
                        echo "<a href='event_delete.php?codigo=".$linha['id']."' class=\"serial\">EXCLUIR</a>";
						echo "</div>";
					}
				}
				?>

                 

            </div>
        </div>
	</body>
</html>