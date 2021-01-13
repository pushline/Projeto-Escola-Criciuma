<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if (isset($_GET['codigo'])) {echo 'Editar Evento';} else {echo 'Cadastrar Evento';}?></title>
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
    <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
</head>

<style>
    .botao{
        cursor: pointer;
    }
    </style>

<body style="background-image: linear-gradient(0deg, #1f1300, #ffcb63);">
<form name="form_cadastro" id="test-form" method="post" action="event_cad.php" enctype="multipart/form-data">
	
	<?php
	include("../../mysql.php");
	mysqli_set_charset($db, "utf8");
	
	if (isset($_GET['codigo'])) {
		$sql = "select * from events where id =".$_GET['codigo']; // selecionar as colunas da tabela events do MySQL
		$resultado = mysqli_query($db, $sql); // ele vai ver se está puxando os dados do SQL certinho, e se não, retorna um erro, sql linha e cima, db está puxando o banco e dados (linha 31)
		$linha = mysqli_fetch_assoc($resultado); // dados do sql // obtem uma linha do conjunto de resultados como uma matriz associativa
		
		$codigo = $linha['id']; // trazer as variaveis do sql
		$nome = $linha['name'];
        $data_evento = $linha['data_evento'];
        $local = $linha['local'];
        $email = $linha['email'];
        $imagem = $linha['imagem'];
		
	}
	else{
		$codigo = 0; // editar <-
        $nome = "";
        $local = "";
		$data_evento = "";
        $email = "";
        $imagem = "";
		
	}
	?>
    <br><br><br>

    <div>
        <a href="dashboard.php">
            <i class="ti-arrow-left" style="display: block;margin: 10px;position: absolute;color:#FFF;font-size: 30px;"></i>
        </a>
    </div>

    <div class="popup_box ">
        <div class="popup_inner">
        
        <h3><?php if (isset($_GET['codigo'])) {echo 'Editar Evento';} else {echo 'Cadastrar Evento';}?></h3> 
        <!-- o php dentro do h3 é pra caso seja para editar ou cadastrar algum evento. -->
        <?php include('../scripts/errors.php'); ?>
    
        <div class="input-group">
            <label>Código do Evento</label>
            <input type="text" name="codigo" readonly="true" class="genric-btn disable" value="<?php echo $codigo;?>">
        </div>
    
        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome do evento" value="<?php echo $nome;?>" class="single-input">
        </div>

        <div class="input-group">
            <label>E-mail</label>
            <input type="text" name="email" placeholder="E-mail do organizador do evento"value="<?php echo $email;?>" class="single-input">
        </div>

        <div class="input-group">
            <label>Local do evento </label>
            <input type="text" name="local" placeholder="Máximo 45 caracteres." value="<?php echo $local;?>" maxlength="45" min="1" max="45"> 
        </div>
        <div class="input-group">
            <label>Data do Evento</label>
            <input type="date" name="data_evento" value="<?php echo $data_evento;?>" class="single-input">
        </div>

        <div class="input-group">
            <label>Selecione o arquivo: </label>
            <input type="file" name="arquivo"/>
                    </div>

   
        <input type="submit" name="gravar" class="botao" value="<?php if (isset($_GET['codigo'])) {echo 'Editar Evento';} else {echo 'Cadastrar Evento';}?>"> 
        <!-- mesma coisa do h3 -->
        

        
        
        
        <?php




        if (isset($_POST["gravar"]) && isset($_FILES['arquivo'])) { // quando o botão gravar é clicado
            
            $codigo = $_POST["codigo"]; // variaveis
            $nome = $_POST["nome"];
            $data_evento = $_POST["data_evento"];
            $email = $_POST["email"];
            $local = $_POST['local'];
            $arquivo = $_FILES['arquivo']['name'];
           

            $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    
            $novo_nome = md5(time()).".".$extensao;
    
            $diretorio = "upload/";
    
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
           
            
        
$result = mysqli_query($db, "SELECT * FROM events");


            if ($_POST['codigo'] == "0"){ // se o codigo for 0, é cadastramento
                $sql = "insert into events values (0, '$nome', '$email', '$local', '$data_evento', '$imagem')"; // adicionar no sql
            }
            else{ // se não for 0, está editando algo já cadastrado
                $sql = "update events 
                                set name = '$nome',
                                    email = '$email',
                                    local = '$local',
                                    data_evento = '$data_evento',
                                    imagem = '$imagem'
                                    
                                   
                                where id =".$_POST['codigo']; // editar/atualizar dados ja cadastrados
            }
            
            $resultado = mysqli_query($db, $sql);
            
            header('Location: dashboard.php'); // volta pra dashboard (página com os eventos)
            
            if ($resultado == false) {
                echo ("Erro ao gravar"); 
                exit;
            }
            
            
        }
        ?>
        </div>
    </div>
</form>
</body>
</html>

