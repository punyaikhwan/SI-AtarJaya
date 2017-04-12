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
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
<script>
	$(function() {

	  // We can attach the `fileselect` event to all file inputs on the page
	  $(document).on('change', ':file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	    input.trigger('fileselect', [numFiles, label]);
	  });

	  // We can watch for our custom `fileselect` event like this
	  $(document).ready( function() {
	      $(':file').on('fileselect', function(event, numFiles, label) {

	          var input = $(this).parents('.input-group').find(':text'),
	              log = numFiles > 1 ? numFiles + ' files selected' : label;

	          if( input.length ) {
	              input.val(log);
	          } else {
	              if( log ) alert(log);
	          }

	      });
	  });
	  
	});
</script>
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
				<a href="index.html"><img src="images/logo.png" alt=""></a>	
			</div>

			<div class="col-sm-3 header-left">		
					<!--<p class="log"><a href="account.html"  >Login</a>
						<span>or</span><a  href="account.html"  >Signup</a></p>-->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
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
<!--content-->
<div class="container">
	<div class = "col-md-9">
		<div class="check-out">
			<form method="get">
			  <div class="form-group">
			    <label for="jasapengiriman">Pilih Jenis Service</label>
			    <select class="form-control" id="jasapengiriman">
			    	<option>Print</option>
			    	<option>Fotokopi</option>
			    </select>
			  </div>  
			   <div class="form-group">
			    <label for="jasapengiriman">Pilih Tipe Kertas</label>
			    <select class="form-control" id="jasapengiriman">
			    	<option>A4</option>
			    	<option>A3</option>
			    	<option>Letter</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="upload">Upload File:</label>
			     <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
			     
			  </div> 
			  <div class="form-group">
			  <label for="jumlah">Quantity : </label>
			   <input type="number" name="quantity" min="1" step="1" value="1">
			  </div>
			  <a type="submit" href="javascript:;" onclick = "order()" class="to-buy simpleCart_empty">ORDER SEKARANG</a>
			</form>
			
			<SCRIPT>
				function order() {
					window.alert("Pesanan Anda telah diterima. Silakan hubungi 0857xxxxxx untuk melakukan pembayaran.");

				}
			</SCRIPT>
		 </div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--footer-->
<div class="footer">
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