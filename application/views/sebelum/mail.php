
<!-- mail -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3957.666541533211!2d112.716264314331!3d-7.2787306735496236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1506859216058" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head">Mail Us</h3>
			<p class="augue_agile">Lebih baik menyalakan lilin daripada mengutuk kegelapan</p>

			<div class="w3_agile_mail_grids_agile">
				<div class="col-md-8 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="<?php echo base_url().'index.php/Home/sendMail'?>" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="Name" placeholder=" " required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="Email" placeholder=" " required="">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="Subject" placeholder=" " required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="Message" placeholder=" " required=""></textarea>
							</span>
							<input type="submit" value="Submit Now">
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4 w3_agile_mail_right">
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="mailto:info@example.com">idollysurabaya@gmail.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Address</h3>
						<p>Jarak, Pasar Kembang, Kota Surabaya, Jawa Timur, Indonesia</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Phone</h3>
						<p>(+62) 85 123 456 789 </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //mail -->