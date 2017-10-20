<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="<?php echo base_url().'index.php/Home/home'?>">iDolly</a></h2>
			<h3>(+62) 85 123 456 789 </h3>
			<div class="agileits_w3layouts_nav">
				<div class="agileits_w3layouts_nav_left">
					<ul>
						<li><a href="<?php echo base_url().'index.php/Home/home'?>">Home</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/menulog'?>">Menu</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/visitdol'?>">Visit Dolly</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/aboutuslog'?>">About Us</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/mailuslog'?>">Mail Us</a></li>
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