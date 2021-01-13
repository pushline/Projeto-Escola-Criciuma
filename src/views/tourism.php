<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projeto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="shortcut icon" type="image/x-icon" href="img/form-logo.png">
    

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

<body>
    <!-- header-start -->
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
									                  <li><a href="contact.php">Contato</a></li>
                                    <li><a href="about.php">Sobre Nós</a></li>
                                    <li><a href="events.php">Eventos</a></li>
                                    <li><a href="history.php">História</a></li>
                                    <li><a class="active" href="tourism.php">Turismo</a></li>
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





    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="../../img/turismo.svg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>Turismo!                                
                                </h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- our_courses_start -->
    <div class="our_courses"> <!-- divs implantados do bootstrap, site de ajuda e idealizacao front-end e estilização de páginas -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Saiba mais</h3>
                        <p>Saiba mais sobre o turismo da cidade de Criciúma.
                        </p><br>
                        <a href="../../emergency.php" class="boxed_btn_orange login">Botão de Emergência</a>
                    </div>
                </div>
            </div>
 
            
            
            
            <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>

<div class="card-deck">
    
  <div class="card">
    <img class="card-img-top" src="../../img/prefeitura.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Prefeitura</h5>
      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur animi porro molestias odit eum ad reprehenderit totam consequuntur distinctio aut dolores quibusdam, architecto optio nemo blanditiis! Voluptatem magnam numquam quaerat.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="../../img/nacoes.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nações Shopping</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nam eius! Numquam sint sit possimus reprehenderit fuga officiis, cumque mollitia rem enim consequuntur totam nemo provident quae illum, porro est.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>


  </div>
  <div class="card">
    <img class="card-img-top" src="../../img/mina.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mina de Visitação Octávio Fontana</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam nisi magnam velit culpa illo ratione aspernatur dignissimos accusantium, expedita animi adipisci quasi rem! Est doloribus qui eos beatae. Provident, veniam.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>
</div>
    
<br> 


<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="../../img/criciumashopping.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Criciúma Shopping</h5>
      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur animi porro molestias odit eum ad reprehenderit totam consequuntur distinctio aut dolores quibusdam, architecto optio nemo blanditiis! Voluptatem magnam numquam quaerat.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="../../img/nacoes.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Nações Shopping</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nam eius! Numquam sint sit possimus reprehenderit fuga officiis, cumque mollitia rem enim consequuntur totam nemo provident quae illum, porro est.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="../../img/mina.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mina de Visitação Octávio Fontana</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam nisi magnam velit culpa illo ratione aspernatur dignissimos accusantium, expedita animi adipisci quasi rem! Est doloribus qui eos beatae. Provident, veniam.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">

      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>
</div>

<br>

<div class="card-deck">
    
  <div class="card">
    <img class="card-img-top" src="../../img/prefeitura.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Prefeitura</h5>
      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur animi porro molestias odit eum ad reprehenderit totam consequuntur distinctio aut dolores quibusdam, architecto optio nemo blanditiis! Voluptatem magnam numquam quaerat.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="../../img/nacoes.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nações Shopping</h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nam eius! Numquam sint sit possimus reprehenderit fuga officiis, cumque mollitia rem enim consequuntur totam nemo provident quae illum, porro est.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>


  </div>
  <div class="card">
    <img class="card-img-top" src="../../img/mina.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mina de Visitação Octávio Fontana</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam nisi magnam velit culpa illo ratione aspernatur dignissimos accusantium, expedita animi adipisci quasi rem! Est doloribus qui eos beatae. Provident, veniam.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
      
      <form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
      <input type="text" name="lugar" placeholder="Nome do lugar (Necessário)" style="width: 300px; height: 35px;"><br><br>
     Nota do lugar: &nbsp;   

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"> &nbsp; &nbsp;<br>
				
				<input type="submit"  value="Cadastrar">
				
			</div>
		  </form>
    
    
      </small>
    
      <small class="text-muted">CEDUP-SC</small>
    </div>
  </div>
</div>

<br>



            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            
                            <p>
                                Sistema desenvolvido por Sabrina B. Heleodoro e Lythieiny Antunes para a facilitação de cadastramento e descobrimento de novos eventos em Criciúma.
                            </p>
                        </div>
                    </div>

                </div> 
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            
                            <!-- modo de copyright simples, com javascript implantado no html -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por alunos do CEDUP-SC 

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- chamando arquivos js para a página ficar mais livre e facil de usar -->

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>


    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>