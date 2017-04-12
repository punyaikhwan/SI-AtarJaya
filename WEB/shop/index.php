<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	session_start();
	include 'connect.php';
	$username = $_SESSION["username"];
	$_SESSION["username"]=$username;
?>
<!DOCTYPE html>
<html>
<head>
<title>Atar Jaya | Menjual Alat-Alat Tulis Kantor</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/script.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="col-sm-3 world">
						<ul >
							Back to <a href="../home/index.html">ATAR JAYA homepage</a>
						</ul>
			</div>
			<div class="col-sm-4 logo">
				<a href="../shop"><img src="images/logo.png" alt=""></a>	
			</div>

			<div class="col-sm-3 header-left">		
					<!--<p class="log"><a href="account.html"  >Login</a>
						<span>or</span><a  href="account.html"  >Signup</a></p>-->
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
								<?php
								//Hitung total cart
								$sql = "SELECT Kuantitas, Harga from cart NATURAL JOIN barang WHERE UsernamePelanggan = '$username' AND cart.IdBarang = barang.IdBarang";
								$result = mysqli_query($conn, $sql);
								$total_cart = 0;
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										$total_cart += $row["Kuantitas"]*$row["Harga"];
									}
								}
								?>

								Rp<span id="total_cart"><?php echo $total_cart;?></span>
							</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" onclick="emptyCart()" class="simpleCart_empty">Empty Cart</a></p>
					</div>
					
					<div class="clearfix"> </div>
			</div>

			<div class="col-sm-2">
				<ul class="memenu skyblue">
				  <li class=" grid"><a href="#"><span style="font-color:black">My Account<i class="icon-angle-down"></i></span></a>
					  	<div class="mepanel">
							<div class="h_nav">
								<ul>
									<li><a href="account-setting.html">Pengaturan Akun</a></li>
									<li><a href="../home/index.html">Logout</a></li>										
								</ul>	
							</div>		
						</div>
				  	</li>
				  </ul>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
				</div>
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="index.html">Home</a></li>	
				      <li><a  href="#">Daftar Barang</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>Alat Tulis</h4>
									<ul>
										<li><a href="products.html">Pulpen</a></li>
										<li><a href="products.html">Penggaris</a></li>
										<li><a href="products.html">Buku tulis</a></li>
										<li><a href="products.html">Spidol</a></li>
										<li><a href="products.html">Tipe-X</a></li>
										<li><a href="products.html">Pensil</a></li>
										<li><a href="products.html">Penghapus</a></li>
										<li><a href="products.html">Serutan</a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Elektronik</h4>
									<ul>
										<li><a href="products.html">Mouse</a></li>
										<li><a href="products.html">Modem</a></li>
										<li><a href="products.html">Flashdisk</a></li>
										<li><a href="products.html">VCD/DVD</a></li>
										<li><a href="products.html">Lainnya</a></li>									
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Lain-lain</h4>
									<ul>
										<li><a href="products.html">Hacter</a></li>
										<li><a href="products.html">Pembatas buku</a></li>
										<li><a href="products.html">Sticky notes</a></li>
										<li><a href="products.html">Sampul</a></li>
										<li><a href="products.html">Penyangga Buku</a></li>
										<li><a href="products.html">Tempat pulpen/pensil</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
			  </ul> 
			</div>
				<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--banner-->
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="images/ba1.jpg" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/1.gif" alt="">
	       			 </li>
			 		 <li>
	          			<img src="images/2.jpg" alt="">   
	       			 </li>
					 <li>
	          			<img src="images/3.jpg" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="images/ba.jpg" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<!--GET PRODUCTS-->
<?php
	$sql = "SELECT * FROM barang";
	//Mekanisme include dari database ke php
	$result = mysqli_query($conn, $sql); //menyimpan daftar produk
?>
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Recent Products</h1>
			<div class="content-top1">
			<?php
			//Tampilkan di layar
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			    	$idBarang = $row['IdBarang'];
			    	$namaBarang = $row['NamaBarang'];
			    	$deskripsi = $row['Deskripsi'];
			    	$foto = $row['Foto'];
			    	$stok = $row['Stok'];
			    	$harga = $row['Harga'];

			    	if ($stok > 0) {
				    ?>
						<div class="col-md-3 col-md2">
							<div class="col-md1 simpleCart_shelfItem">
								<?php echo '<img class="img-responsive" src="'.$foto.'" alt="" />';?>
								<h3><?php echo $namaBarang;?></h3>
								<div class="price">
										<h5 class="item_price">Rp<?php echo $harga;?></h5>
										<?php echo '<a href="#" class="item-add" onclick="addToCart(\''.$idBarang.'\')">Add To Cart</a>';?>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<?php
						}
					}
				}
				?>	
			<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
</div>
<!--//content-->
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-8 top-footer">
				<iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.996183502019!2d107.61514651413303!3d-6.891058669346602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6546c4e5851%3A0x850c852d1c1149fb!2sAtar+Jaya!5e0!3m2!1sid!2sid!4v1491178122231" allowfullscreen=""></iframe>
			</div>
			<div class="col-md-4 top-footer1">
				<h2>Newsletter</h2>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-sm-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Pulpen</a></li>
						<li><a href="#">Spidol</a></li>
						<li><a href="#">Buku dan Kertas</a></li>
						<li><a href="#">Mouse dan flashdisk</a></li>
						<li><a href="#">Lain-lain</a></li>
						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li>Jalan Dipatiukur Bandung </li>
						<li>Jalan Kebun Binatang Bandung</li>
						<li>Indonesia</li>
						<li>email : atarjaya@ymail.com</li>
						<li class="phone">PH : 6985792466</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2017 Atar Jaya</p>
			</div>
	</div>
</div>
<!--//footer-->
</body>
</html>