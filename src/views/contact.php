<?php include('../../mysql.php') ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contato</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
    

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
<header>
	<div class="header-area ">
		<div id="sticky-header" class="main-header-area">
			<div class="container-fluid p-0">
				<div class="row align-items-center no-gutters">
					<div class="col-xl-2 col-lg-2">
						<div class="logo-img">
							<a href="../../index.php">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7">
						<div class="main-menu  d-none d-lg-block">
							<nav>
                            <ul id="navigation">
									<li><a href="../../index.php">Início</a></li>
									<li><a class="active" href="contact.php">Contato</a></li>
                                    <li><a href="about.php">Sobre Nós</a></li>
                                    <li><a href="events.php">Eventos</a></li>
                                    <li><a href="history.php">História</a></li>
                                    <li><a href="tourism.php">Turismo</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 d-none d-lg-block">
						<div class="log_chat_area d-flex align-items-center">
							<div class="live_chat_btn">
                            <a class="boxed_btn_orange login" href="../login/login_view.php">
									<i class="flaticon-user"></i>
									<span>Entrar</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="mobile_menu d-block d-lg-none"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<body style="background-image: linear-gradient(0deg, #1f1300, #ffcb63);">
    <form id="test-form" class="white-popup-block" method="post" action="contact.php">
        <div class="popup_box ">
            <div>
                <a href="../../index.php">
                    <i class="ti-control-backward" style="display: block;margin: auto;margin-left: auto;margin-left: 0;position: absolute;color:#FFF;font-size: 30px;"></i>
                </a>
            </div>
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="../../index.php">
                        <img src="../../img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Contato</h3>
                <form>
				
                    <div class="input-group">
                        <label>Para fazer o contato via whatsapp, clique no botão abaixo, mande sua mensagem e espere.</label>
                        
                        
                    </div>
                        <br>
                        <div class="input-group">
                        <button type="submit"  class="boxed_btn_orange" name="contact">Mandar Mensagem</button>
            </div>
                    <p class="doen_have_acc">Nossa empresa agradece.</a>
                </form>
            </div>
        </div>
    </form>

    <?php


if (isset($_POST['contact'])) {

        // api do whatsapp, te redireciona pra o contato do whatsapp + mensagem já pré escrita
		header('location: https://api.whatsapp.com/send?phone=554896417710&text=Ol%C3%A1!%20Quero%20me%20registrar%20como%20um%20organizador%20de%20evento%20no%20seu%20site.');
	}

?>


    <!-- JS here -->
    <script src="../../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/isotope.pkgd.min.js"></script>
    <script src="../../js/ajax-form.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/imagesloaded.pkgd.min.js"></script>
    <script src="../../js/scrollIt.js"></script>
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/nice-select.min.js"></script>
    <script src="../../js/jquery.slicknav.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/gijgo.min.js"></script>
</body>
</html>


