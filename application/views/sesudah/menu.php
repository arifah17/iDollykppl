
<!-- services -->
<?php
	if(!$this->session->has_userdata('username')){
		redirect('MyController/home');
	}
?>
	<div class="services">
		<div class="container">
			<h3 class="w3_agile_head">Our Product</h3>
			<p class="augue_agile">Lebih baik menyalakan lilin daripada mengutuk kegelapan</p>
			<nav>
			<ul class="nav navbar-nav">

							<li ><a  href="<?php echo base_url().'index.php/Home/makanan'?>">Makanan</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/kain'?>">Kain</a></li>
							<li><a href="<?php echo base_url().'index.php/Home/sepatu'?>">Sepatu</a></li>
							<li>
								<?php
									$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
									$text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
								?>
								<?=anchor('Home/pesan', $text_cart_url)?>
							</li>
			</ul>
				<!-- Tab panes, ini content dari tab di atas -->
			</nav>
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
						<a href="<?php echo base_url()."index.php/ShoppingCart/beli/".$b['id']; ?>"><img style="width: 30px;" src="<?php echo base_url();?>assets/images/add.png"></a>
					</div>
				</div>
			
			</div>
			<?php } ?>
		</div>
	</div>

<!-- //services -->

