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
<link href="<?php echo base_url();?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
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
							<li><a href="<?php echo base_url().'index.php/Home/visitdol'?>">Visit Dolly</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/aboutuslog'?>">About Us</a></li>
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
		</div>
	</div>
<!-- //banner -->
	
<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Sign In</h3>		
		<div class="agileits_modal_body">
			<form action="#" method="post">
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="Name" placeholder="User Name" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="Password" placeholder="Password" required="">
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
			<form action="#" method="post">
				<h4>Profile information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="Name" placeholder="First Name" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="Name" placeholder="Last Name" required="">
				</div>
				<div class="agileinfo_subscribe">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>subscribe to newsletter</label>
					</div>
				</div>
				<h4>Login information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="Email" placeholder="Email" required="">
				</div>
				<div class="agileits_w3layouts_user agileits_w3layouts_user_agileits">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="Password" placeholder="Password" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="Password" placeholder="Confirm Password" required="">
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