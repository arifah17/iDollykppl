<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tutik's Catering and Traditional Cake</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Monetary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
					<h1><a class="navbar-brand" href="index.html">Monetary</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/service'?>">Services</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li>
							<li><a href="mail.html">Mail Us</a></li>
						</ul>
						<div class="w3_agile_login">
							<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><i class="fa fa-user" aria-hidden="true"></i></a>
						</div>
					</nav>
				</div>
			</nav>
			<div class="agileits_w3layouts_banner_info">
				<h2>Creative Design</h2>
				<p>welcome to monetary</p>
				<div class="agileits_w3layouts_banner_info_pos">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">VK</a></li>
					</ul>
				</div>
				<div class="agileits_w3layouts_banner_info_pos1">
					<h4>(+62) 85  336  730  025</h4>
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
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="phone" placeholder="Phone" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
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
					<h3>Important Points about <span>Tutik's Catering</span></h3>
					<div class="wthree_banner_btm_grid">
						<div class="wthree_banner_btm_grid1">
							<h4>Easy to order</h4>
							<p> Every customer who wants to order just need to contact us, and we'll serve it. We have special prize for customer who order oftenly.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
						</div>
						<div class="wthree_banner_btm_grid1">
							<h4>full of responsibility</h4>
							<p>If the things you order was not good, we will change it with the new one or pay it back.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-desktop" aria-hidden="true"></i>
							</div>
						</div>
						<div class="wthree_banner_btm_grid1">
							<h4>fully responsive</h4>
							<p>We are respect for every advice that customer give to us.</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-video-camera" aria-hidden="true"></i>
							</div>
						</div>
						<div class="wthree_banner_btm_grid1">
							<h4>home made</h4>
							<p>All of products we made are home made. But don't be worries, because quality is number one</p>
							<div class="wthree_banner_btm_grid1_pos">
								<i class="fa fa-file" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3_agileits_banner_bottom_grid_right">
					<div class="slider">
						<ul class="slides">
							<li class="slide">
								<figure>
									<img src="<?php echo base_url();?>assets/images/02.jpg" alt=" " class="img-responsive" />
								</figure>
							</li>
							<li class="slide">
								<figure>
									<img src="<?php echo base_url();?>assets/images/07.jpg" alt=" " class="img-responsive" />
								</figure>
							</li>
							<li class="slide">
								<figure>
									<img src="<?php echo base_url();?>assets/images/03.jpg" alt=" " class="img-responsive" />
								</figure>
							</li>
							<li class="slide">
								<figure>
									<img src="<?php echo base_url();?>assets/images/04.jpg" alt=" " class="img-responsive" />
								</figure>
							</li>						
							<li class="slide">
								<figure>
									<img src="<?php echo base_url();?>assets/images/08.jpg" alt=" " class="img-responsive" />
								</figure>
							</li>
						</ul>
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
			<img src="<?php echo base_url();?>assets/images/6.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileinfo_about_right">
			<h4>story of our business</h4>
			<h3>Who we are</h3>
			<p>Tutik's Catering is found by Tutik Ernawati. This catering is family business. Since 2001, this catering has opened orders for the neighbors. Although it was just a home business that was not well known and has no name, yet many orders were obtained. Such as birthday cake orders, wedding cakes, and more. In 2011, the business grew and was named Tutik's Catering. Mrs. Tutik has attended the training held by Waung village.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //about -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="w3_agile_head">Testimonials</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="assets/images/2.png" alt=" " class="img-responsive" />
									<h4>Allen parker <span>Senior Designer</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="assets/images/6.png" alt=" " class="img-responsive" />
									<h4>Rosy James <span>Senior Designer</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="assets/images/5.png" alt=" " class="img-responsive" />
									<h4>Crisp Ally <span>Senior Designer</span></h4>
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
			<h2><a href="index.php">Monetary</a></h2>
			<h3>(+000) 123 456 789</h3>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value="Subscribe">
			</form>
			<div class="agileits_w3layouts_nav">
				<div class="agileits_w3layouts_nav_left">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="mail.php">Mail Us</a></li>
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
			<p>© 2017 Monetary. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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