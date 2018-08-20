<?php $this->load->view("cms/include/header"); ?>
<?php $setting=$this->MModel->get("select * from profile where id_profile='1'");?>

	<!-- about -->
	<div class=" w3ls-section w3-about" id="about">
		<div class="container">
			<div class="about-main">

				<div class="col-md-12 w3_agileits-ab-main">
					<div class="about-inner">
						<h3 class="agileits-title">
							<span>Tentang Kami</span>
						</h3>
						<p class="about-text-w3l"><?=$setting->deskripsi?></p>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- about-slid -->
	<div class="about-w3slid">
			<div class="container">
				<h4>Visi dan Misi</h4>
				<p><?=$setting->visi?></p>
				<a href="#" data-toggle="modal" data-target="#myModal" class="agile-more">Read More</a>
			</div>
		</div>
		<!-- //about-slid -->
		<!--services section starts here-->
		<section class="service-section  w3ls-section" id="services">
			<div class="container">

			<h3 class="agileits-title">
					<span>Product</span>
					<hr>
			</h3>

		<div class="container">

			<div class="service-grids agile">
				<div class="service-grid agileits_w3layouts ">
				<?php $product=$this->MModel->getData("select * from product  order by id_product DESC limit 6");
			 $no=1; ;if($product){
			foreach ($product as $p) { ?>
					<div class="col-md-4 contact-right-grid">
						<div class="panel-default">
							<center><img src="<?=base_url().'img/product/'.$p['foto_product']?>"></center>

						<div class="panel-heading bg-default">
							<center><a href="<?=base_url().'Welcome/detProduk/'.$p['id_product']?>"><h4><?=$p['nama_product']?></h4></a></center>
						</div>
						</div>
					</div>
			<?php } }?>

					<div class="clearfix"></div>
					<hr>
					<a href="<?=base_url().'Welcome/portofolio'?>" class="btn btn-danger pull-right btn-lg"  class="agile-more"> Read More</a>

				</div>
			</div>
		</div>

	</section>
	<!--//services section ends here-->
	<!-- //about -->
	<!-- about-slid -->
	<div class="about-w3slid slide2">
			<div class="container">
				<h4>Future Investment Initiative</h4>
				<p>Pellentesque accumsan cursus dui, sodales blandit urna sodal vitaepel entesque accumsan cursus dui,sod les</p>
				<a href="#" data-toggle="modal" data-target="#myModal" class="agile-more">Read More</a>
			</div>
		</div>
		<!-- //about-slid -->
		<!-- models section -->
		<section class="service-section  w3ls-section" id="services">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>SOLUTION</h1>
							<hr>
						</div>
					</div>
					<div class="row">
						<?php $slider=$this->MModel->getData("SELECT @row := @row + 1 as row, t.* FROM servis t, (SELECT @row := 0) r");
						if($slider) {
						foreach ($slider as $s) {
						if($s['row'] % 2 != 0) {?>
						<div class="col-md-4 col-lg-4 col-xs-12 col-md-border">
								<li class="list-group-item list-group-item-success"><a href="<?=base_url().'Welcome/detServis/'.$s['id_servis']?>"><?=$s['nama_servis']?></a></li>
							</br>
						</div>
					<?php } if($s['row'] %2 == 0) { ?>
						<div class="col-md-4 col-lg-4 col-xs-12 col-md-border">
							<li class="list-group-item list-group-item-info"><a href="<?=base_url().'Welcome/detServis/'.$s['id_servis']?>"><?=$s['nama_servis']?></a></li>
						 </br>
						</div>
						<?php } } } ?>
					</div>
				</div>

		</section>
		<!--//End models-->

	<!-- team -->
	<div class="team  w3ls-section">
		<div class="container">
			<h3 class="agileits-title">
				<span>Team</span>
			</h3>
			<div class="w3_services_grids">
			<?php $team=$this->MModel->getData("select * from anggota");
			 $no=1; ;if($team){
			foreach ($team as $t) { ?>
				<div class="col-md-3 col-sm-3 col-xs-6 w3ls_team_grid">
					<div class="w3ls_team_grid1 hover15">
						<figure>
							<img src="<?=base_url().'img/anggota/'.$t['foto']?>" alt=" " class="img-responsive" />
						</figure>
						<div class="w3ls_team_grid1_pos">
							<ul class="social-icons">
								<li>
									<a href="<?=base_url().'Welcome/detTeam/'.$t['id_anggota']?>" class="team-icon icon-border share"><img src="<?=base_url().'img/read.png'?>" class="img-responsive"></a>
								</li>
								<li>
									<a href="#" class="team-icon icon-border facebook"></a>
								</li>
								<li>
									<a href="#" class="team-icon icon-border instagram"></a>
								</li>
							</ul>
						</div>
					</div>
					<h4><?=$t['nama_lengkap']?></h4>
				</div>
			<?php } } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->


		<!-- testimonials -->
		<div class="testimonials w3ls-section">
				<div class="container">
						<h3 class="agileits-title">
								<span>Mitra Kerja Kami</span>
							</h3>
					<div class="w3_testimonials_grids" style="background:black">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
                                <?php $mitra=$this->MModel->getData("select * from mitra");
                                if($mitra) {
                                foreach ($mitra as $m) { ?>
									<li>
										<div class="w3_testimonials_grid">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <img src="<?=base_url().'img/mitra/'.$m['foto_mitra']?>" class="img-responsive">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5><?=$m['nama_mitra']?></h5>
                                                    <p><?=$m['alamat_mitra']?></p>
                                                    <p><?=$m['deskripsi']?></p>
                                                </div>
                                        </div>



										</div>
                                    </li>
                                 <?php } } ?>
								</ul>
							</div>
						</section>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
			<!-- //Testimonials -->
<!-- footer -->
<?php $this->load->view("cms/include/footer"); ?>

	<!-- //Tooltip -->
	<script src="<?=base_url().'assets/cms/js/SmoothScroll.min.js'?>"></script>
	<!-- flexSlider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
		<script defer src="<?=base_url().'assets/cms/js/jquery.flexslider.js'?>"></script>
		<script>
			$(window).load(function () {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function (slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- //flexSlider -->
		<!-- model responsive slider -->
		<script src="<?=base_url().'assets/cms/js/responsiveslides.min.js'?>"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$(".slider3").responsiveSlides({
					auto: false,
					pager: true,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});

			});
		</script><!-- start-smooth-scrolling -->
	<script src="<?=base_url().'assets/cms/js/move-top.js'?>"></script>
	<script src="<?=base_url().'assets/cms/js/easing.js'?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			   var defaults = {
				   containerID: 'toTop', // fading element id
				   containerHoverID: 'toTopHover', // fading element hover id
				   scrollSpeed: 1200,
				   easingType: 'linear'
			   };
			   */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<script src="<?=base_url().'assets/cms/js/SmoothScroll.min.js'?>"></script>
