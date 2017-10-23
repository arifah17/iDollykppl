<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	if(!$this->session->has_userdata('username')){
		redirect('MyController/home');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>iDolly</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Monetary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="<?php echo base_url();?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h2><a class="navbar-brand" href="<?php echo base_url().'index.php/Home/home'?>">iDolly</a></h2>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url().'index.php/Home/home'?>">Home</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/menulog'?>">Menu</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/aboutuslog'?>">About Us</a></li>
						</ul>
						</ul>
						<div class="w3_agile_login" >
							<li class="dropdown">
			                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i style="color: blue"class="fa fa-user"></i>
			                    </a>
			                    <ul class="dropdown-menu dropdown-user">
			                        <li><a href="#"><i style="color: blue" class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('username')?></a>
			                        </li>
			                        <li><a href="#"><i style="color: blue" class="fa fa-gear fa-fw"></i> Settings</a>
			                        </li>
			                        <li><a href="<?php echo base_url().'index.php/MyController/logout'?>"><i style="color: blue" class="fa fa-sign-out fa-fw"></i> Logout</a>
			                        </li>
			                    </ul>
                			</li>
						</div>
					</nav>
				</div>
			</nav>
			<div class="agileits_w3layouts_banner_info">
				<h2>iDolly</h2>
				<p>Lebih baik menyalakan lilin daripada mengutuk kegelapan</p>
				<div class="agileits_w3layouts_banner_info_pos1">
					<h4>(+62) 85  123 456 789 </h4>
				</div>
			</div>
			<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
<!-- //banner -->	

<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Sign In</h3>		
		<div class="agileits_modal_body">
			<form method="post" action="<?php echo base_url().'index.php/MyController/login'?>">
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="User Name" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="pass" placeholder="Password" required="">
				</div>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="Sign In">
			</form>
			<h5>Don't have an account? <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></h5>
		</div>
	</div>
	<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Sign Up</h3>		
		<div class="agileits_modal_body">
			<form method="post" action="<?php echo base_url().'index.php/MyController/createakun'?>">
				<h4>Profile information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="name" placeholder="Name" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" name="phone" placeholder="Phone" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="address" placeholder="Address" required="">
				</div>
				<div class="agileinfo_subscribe">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>subscribe to newsletter</label>
					</div>
				</div>
				<h4>Login information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="agileits_w3layouts_user agileits_w3layouts_user_agileits">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="Username" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="password" placeholder="Password" required="">
				</div>
				<div class="agileinfo_subscribe">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>i accept the terms and conditions</label>
					</div>
				</div>
				<input type="submit" value="Register">
			</form>
			<h5>Already a member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></h5>
		</div>
	</div>
<!-- //pop-up-box -->
<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agileits_banner_bottom_grids">
				<div class="col-md-6 w3_agileits_banner_bottom_grid">
					<h3>What We Do in <span>iDolly</span></h3>
					<div class="wthree_banner_btm_grid">
						<div class="wthree_banner_btm_grid1">
							<h4>Beli Produk</h4>
							<p> Membeli produk - produk rumahan asli buatan masyarakat Dolly.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-phone"  aria-hidden="true"></i>
							</div>
						</div>
						<div class="wthree_banner_btm_grid1">
							<h4>Daftar Reseller</h4>
							<p>Menjadi reseller untuk membantu memasarkan produk - produk yang dibuat oleh masyarakat Dolly.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-key"  aria-hidden="true"></i>
							</div>
						</div>
						<div class="wthree_banner_btm_grid1">
							<h4>Visit Dolly</h4>
							<p>Melakukan wisata edukasi di Kampung Dolly.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.glide.min.js"></script>
				<script type="text/javascript">
					$(function(){
					  $('.slider').glide({
						autoplay: 3500,
						hoverpause: true, // set to false for nonstop rotate
						arrowRightText: '&rarr;',
						arrowLeftText: '&larr;'
					  });
					});
				</script>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- about -->
	<div class="about" id="about">
		<div class="col-md-6 agileinfo_about_left">	
			<img src="<?php echo base_url();?>assets/images/10.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileinfo_about_right">
			<h3>Who we are</h3>
			<p>Ingin mengenalkan Kampung Dolly yang dulunya di cap negatif.
			Ingin mengenalkan Kampung Dolly yang sekarang.
			Yang sekarang sudah menjadi sebuah tempat yang indah dan mempunyai banyak potensi untuk dikembangkan.
			Ingin mengenalkan produk-produk lokal Dolly yang tak kalah dengan produk-produk lainnya.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //about -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="w3_agile_head">Testimonials</h3>
			<p class="augue_agile">Lebih baik menyalakan lilin daripada mengutuk kegelapan</p>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>
										"Sepatunya bagus dan berkualitas serta harganya sangatlah terjangkau!"</p>
									<img src="<?php echo base_url();?>assets/images/2.png" alt=" " class="img-responsive" />
									<h4>Allen parker <span> Guru </span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>
										"Makanannya lezat dan sangat sehat"</p>
									<img src="<?php echo base_url();?>assets/images/6.png" alt=" " class="img-responsive" />
									<h4>Rosy James <span> Guru </span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>
										"Orumynya segar dan terasa beda apabila dibandingkan dengan produk-produk lainnya."</p>
									<img src="<?php echo base_url();?>assets/images/5.png" alt=" " class="img-responsive" />
									<h4>Crisp Ally <span> Dokter </span></h4>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="<?php echo base_url().'index.php'?>">iDolly</a></h2>
			<h3>(+62) 85 123 456 789</h3>
			<div class="agileits_w3layouts_nav">
				<div class="agileits_w3layouts_nav_left">
					<ul>
						<li><a href="<?php echo base_url().'index.php/Home/home'?>">Home</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/menulog'?>">Menu</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/visitdol'?>">Visit Dolly</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/aboutuslog'?>">About Us</a></li>
						</ul>
					</ul>
				</div>
				<div class="agileits_w3layouts_nav_right">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>© 2017 iDolly | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>