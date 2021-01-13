<?php include('../../mysql.php') ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrar-se</title>
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
<body style="background-image: linear-gradient(0deg, #ed4c92, #6e1cb3);">
    <form id="test-form" class="white-popup-block" method="post" action="register_view.php">
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
                <h3>Fazer registro</h3>
                <form method="post" action="register.php">
					<?php include('../scripts/errors.php'); ?>
                    <div class="input-group">
                        <label>Nome de Usuário</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-group">
                        <label>Senha</label>
                        <input type="password" name="password_1">
                    </div>
                    <div class="input-group">
                        <label>Confirme sua Senha</label>
                        <input type="password" name="password_2">
                    </div>
                    <div class="input-group">
                        <button type="submit"  class="boxed_btn_orange" name="reg_user">Registrar-se</button>
                    </div>
                    <p class="doen_have_acc">Já possui uma conta? <a class="dont-hav-acc" href="../login/login_view.php">Fazer login</a>
                </form>
            </div>
        </div>
    </form>




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