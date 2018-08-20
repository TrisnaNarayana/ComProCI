<?php $this->load->view("cms/include/header"); ?>
<?php $setting=$this->MModel->get("select * from profile where id_profile='1'");?>

<section class="service-section  w3ls-section" id="services">
			<div class="container">

			<h3 class="agileits-title">
					<span>Product</span>
				</h3>

		<div class="container">

			<div class="service-grids agile">
				<div class="service-grid agileits_w3layouts ">
				<?php if($data){
			foreach ($data as $p) { ?>
					<div class="col-md-4 contact-right-grid">
						<div class="panel-default">
							<center><img class="img-responsive" src="<?=base_url().'img/product/'.$p['foto_product']?>"></center>

						<div class="panel-heading bg-default">
							<center><a href="<?=base_url().'Welcome/detProduk/'.$p['id_product']?>"><h4><?=$p['nama_product']?></h4></a></center>
						</div>
						</div>
					</div>
			<?php } }?>

					<div class="clearfix"></div>
					<hr>
					<?=$page?>

				</div>
			</div>
		</div>

	</section>

<?php $this->load->view("cms/include/footer"); ?>
