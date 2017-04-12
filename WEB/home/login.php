<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atar Jaya | Toko dan Order Print Termurah!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
    <?php
       ob_start();
       session_start();
    ?>

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span style="font-size:40px; color:white;">ATAR JAYA</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="../shop/index.html">Shop</a></li>
                    <li><a href="services.html">Services</a></li>
                    
                     <?php
                        $psw = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          $psw = test_input($_POST["psw"]);
                        }

                        function test_input($data) {
                          $data = trim($data);
                          $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                          return $data;
                        }
                                        
                        if (strcmp($psw,"admin") == 0) {
                                $_SESSION['valid'] = true;
                                $_SESSION['username'] = 'admin';
                                echo 'admin';
                                header("Location: ../shop/order.html");
                                die();

                        } 
                        else if (strcmp($psw,"user") == 0) {
                                $_SESSION['valid'] = true;
                                $_SESSION['username'] = 'user';
                                echo 'user';
                                header("Location: ../shop/products.html");
                                die();

                        } 
                     ?>
                     <!-- LOGIN FORM -->
                                    <div class="form-login pull-left">
                                        <form action="#" method="post" class="">
                                            <div class="form-group col-md-4">
                                                <input type="email" required class="form-control bebas-input" placeholder="email or username" name = "uname" required>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <input type="password" required class="form-control bebas-input" placeholder="Password" name = "psw" required>
                                                <a>Forgotten your password?</a>
                                            </div>
                                            
                                            <button type="submit" class="pull-left send-button button"><a id="dont" href="pages/profile.html">Login</a></button>
                                        </form>
                                    </div>
                                    <!-- END LOGIN FORM -->
                </ul>
            </div>
        </div>
    </header><!--/header-->


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to ATAR JAYA! A Copy Center</h2>
                                    <br>
                                     <a class="btn btn-md animation animated-item-3" href="register.html">Register Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                                    <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                    <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>OUR  PRODUCT </h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-home"></i>
		        			<h3>Toko</h3>
		        			<p>Lihat daftar barang yang kami tawarkan dan pesanlah! Kami akan mengirimkannya untuk Anda.</p>
		        			<a href="../shop/index.html" class="btn">Pergi ke toko</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-briefcase"></i>
		        			<h3>Order Printing</h3>
		        			<p>Mencetak file Anda dari jarak jauh.</p>
		        			<a href="#" class="btn">Pesan print sekarang</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-calendar"></i>
		        			<h3>Order Fotocopy</h3>
		        			<p>Anda juga dapat melakukan pesanana fotokopi di sini.</p>
		        			<a href="#" class="btn">Pesan fotokopi sekarang</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Alamat:</b> Jalan Dipatiukur Bandung<br/>
	        				<b>Telepon:</b> (022) 87689987<br/>
	        				<b>Email:</b> <a href="mailto:atarjaya@ymail.com">atarjaya@ymail.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Networks</h3>
						<p>Hubungi kami via Media Sosial!</p>
		    			<div>
		    				<img src="img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>About Our Company</h3>
		    				<p>Atar Jaya adalah perusahaan yang bergerak di penjualan alat-akat tulis kantor dan print/fotokopi. Kami buka 24 jam 7 hari.</p>
                            <p> Term of Condition | Help | (c) Atar Jaya 2017</p>
		    		</div>

		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>