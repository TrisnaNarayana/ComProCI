<?php $setting=$this->MModel->get("select * from profile where id_profile='1'");?>
<div class="footer-nav w3ls-section text-center">
		
		<div class="container">
				<div class="logo-footer text-center">
						<h2><img src="<?=base_url().'img/profile/'.$setting->foto_profile?>" class="img-responsive"></h2>
				</div>
		<ul class="footer-top">
			
			<li>
				<a href="<?=base_url().'Welcome/about'?>">what we do</a>
			</li>
			<li>
				<a href="<?=base_url().'Welcome/portofolio'?>">our work</a>
			</li>
			<li>
				<a href="<?=base_url().'Welcome'?>">company</a>
			</li>
			<li>
				<a href="<?=base_url().'Welcome/contact'?>">contact</a>
			</li>
		</ul>
		<div class="social-icons agileits">
				<ul class="social-icons">
						<li>
							<a href="#" class="team-icon icon-border facebook"></a>
						</li>
						<li>
							<a href="#" class="team-icon icon-border twitter"></a>
						</li>
						<li>
							<a href="#" class="team-icon icon-border instagram"></a>
						</li>
					</ul>
		</div>
		<div class="address">
			<p><?=$setting->alamat?></p>
			<a href="mailto:<?=$setting->email?>"><?=$setting->email?></a>
		</div>

	</div>
	</div>
	<div class="w3_agile-copyright text-center">
		<p>© 2018 PT Tali Cahaya Buana. All rights reserved</a>
		</p>
	</div>
	<!-- //footer -->
	<!-- Tooltip -->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Visi dan Misi</h4>
					</div>
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-heading bg-red">Visi</div>
							<div class="panel-body">
								<?=$setting->visi?>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading">Misi</div>
							<div class="panel-body">
								<?=$setting->misi?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Tooltip -->
	<!-- start-smooth-scrolling -->
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
	<script src="<?=base_url().'assets/dropify/dropify.min.js'?>"></script>
	<script src="<?=base_url().'assets/swt/sweetalert.min.js'?>"></script>

	<script src="<?=base_url().'assets/cms/js/SmoothScroll.min.js'?>"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?=base_url().'assets/cms/js/bootstrap.js'?>"></script>
	
</body>

</html>