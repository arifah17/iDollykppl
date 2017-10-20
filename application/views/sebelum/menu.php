
<!-- services -->

	<div class="services">
		<div class="container">
			<h3 class="w3_agile_head">Our Product</h3>
			<p class="augue_agile">Lebih baik menyalakan lilin daripada mengutuk kegelapan</p>

			<?php foreach ($data as $b){ ?>
			<div class="w3layouts_services_grids">
			
				<div class="col-md-4 w3layouts_services_grid">
					<div class="w3layouts_services_grid_main">
						<div class="w3layouts_services_grid1">
							<img src="<?php echo base_url('assets/images/') . $b['gambar'];?>" alt=" " class="img-responsive" />
							<div class="w3layouts_services_grid1_pos">
								<h4><?php echo $b['nama_cat']; ?></h4>
							</div>
						</div>
						<h5><?php echo $b['nama_product']; ?></h5>
						<p><?php echo $b['deskripsi']; ?></p>
					</div>
				</div>
			
			</div>
			<?php } ?>
		</div>
	</div>

<!-- //services -->

