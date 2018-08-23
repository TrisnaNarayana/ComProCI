<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>PT Tali Cahaya Buana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Invest Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="<?=base_url().'assets/cms/css/bootstrap.css'?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?=base_url().'assets/cms/css/style.css'?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?=base_url().'assets/cms/css/font-awesome.css'?>" rel="stylesheet">
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="<?=base_url().'assets/cms/css/flexslider.css'?>" type="text/css" media="screen" />
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="<?=base_url().'assets/cms/js/jquery-2.2.3.min.js'?>"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Jacques+Francois+Shadow" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url().'assets/dropify/dropify.min.css'?>">
	<link rel="stylesheet" href="<?=base_url().'assets/swt/sweetalert.css'?>">
	<!-- //web-fonts -->

</head>
<?php $setting=$this->MModel->get("select * from profile where id_profile='1'");?>
<?php $dsc=$this->MModel->get("select * from deskripsi where id_deskripsi='1'");?>

<body>

	<style media="screen">
		@media(min-width: $screen-md-min) {
			.col-md-border {
				&:not(:last-child) {
					border-right: 1px solid #d7d7d7;
				}

				&+.col-md-border {
					border-left: 1px solid #d7d7d7;
					margin-left: -1px;
				}
			}
		}
	</style>
	<!-- banner -->
	<div class="banner-w3layouts">
		<div class="flexslider">
			<ul class="slides">
				<?php $slider=$this->MModel->getData("select * from slider where tampilkan='Y'");
			if($slider) {
			foreach ($slider as $s) { ?>
				<li>
					<div class="banner-w3text banner-img4" style="background: url(<?=base_url().'img/slider/'.$s['image']?>)no-repeat center 0px;">
					</div>
				</li>
				<?php } } ?>

			</ul>
		</div>
		<!-- FlexSlider -->
		<script defer src="<?=base_url().'assets/cms/js/jquery.flexslider.js'?>"></script>
		<script>
			$(window).load(function () {
				$('.flexslider').flexslider({
					animation: "slide",
					animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
					smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
					startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
					slideshow: true,
					slideshowSpeed: 5000,
					start: function (slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>

		<!-- //FlexSlider -->
		<!-- banner-info -->
		<div class="banner-agileinfo">
			<div class="nav-info">
				<div class="container-fluid">
					<div class="nav-contact">
						<ul>
							<li>
								<a href="">
									<i class="fa fa-phone"></i> +62 22 6145 6762</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-envelope"></i> office@tcb.co.id</a>
							</li>
							<!-- <li style="float:right;">
								<a href="">Register&nbsp;&nbsp;
									<i class="fa fa-key"></i>
								</a>
							</li>
							<li style="float:right; padding-right:0px;">
								<a href="">Sign In |</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="w3header">
					<!--header-->
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="<?=base_url().'assets/cms/images/tcb.png'?>" width="60px" alt=""></a>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="<?=base_url().'Welcome'?>">Home</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/about'?>">About</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/team'?>">Team</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/portofolio'?>">Product</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/info'?>">Information</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/contact'?>">Reach US</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="w3ls-section w3-about" id="about" style="background:url('<?=base_url().'img/profile/B.png'?>')">
		<div class="container">
			<div class="about-main">
				<div class="col-md-12">
					<div class="tittle">
						<span>Why are we here</span>
						<a class="btn btn-danger btn-md pull-right" href="<?=base_url().'Welcome/about'?>">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-12 w3_agileits-ab-main">
					<div class="panel panel-default">
						<div class="panel-body deskripsi">
							<p>
								<?=$setting->deskripsi?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="w3ls-section w3-data-center" id="data-center" style="background:url('<?=base_url().'assets/cms/images/bg2.png'?>') no-repeat;background-size: cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="tittle">
						<span>Solutions</span>
					</div>
					<div class="description-data-center">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quos voluptatem, laborum asperiores incidunt laudantium
						sequi vitae cupiditate ipsam. Dolore.
					</div>
					<br>
					<hr>
					<br>
					<div class="row">
						<div class="col-md-6">

							<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center & Network Infrastructure <i class="fa fa-angle-down pull-right"></i></a>
									</li>
									<li class="item">
										<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Server</a>
									</li>
									<li class="item">
										<a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Racking System</a>
									</li>
									<li class="item">
										<a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Wireless Technology</a>
									</li>
								</ul>

							</div>
							<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center Building  <i class="fa fa-angle-down pull-right"></i> </a>
									</li>
									<li class="item">
									<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
								</ul>

							</div>
							<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center Building  <i class="fa fa-angle-down pull-right"></i></a>
									</li>
									<li class="item">
									<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
								</ul>

							</div>
							

							<!-- <a class="btn btn-data-center form-control btn-md" data-toggle="modal" data-target="#modalku">Data Center Building</a>
							<a class="btn btn-data-center form-control btn-md">Racking System</a>
							<a class="btn btn-data-center form-control btn-md">Cabling</a>
							<a class="btn btn-data-center form-control btn-md">Cable Management</a>
							<a class="btn btn-data-center form-control btn-md">Wireless Technology</a>
							<a class="btn btn-data-center form-control btn-md">KVM Over IP</a> -->
						</div>
						<div class="col-md-6">
						<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center Building <i class="fa fa-angle-down pull-right"></i></a>
									</li>
									<li class="item">
										<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
									<li class="item">
										<a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
								</ul>

							</div>
							<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center Building  <i class="fa fa-angle-down pull-right"></i> </a>
									</li>
									<li class="item">
									<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
								</ul>

							</div>
							<div id="button" >
								<ul>
									<li class="top">
										<a class="btn btn-data-center form-control btn-md">Data Center Building  <i class="fa fa-angle-down pull-right"></i></a>
									</li>
									<li class="item">
									<div class="triangle"></div><a class="btn btn-data-center-sub form-control btn-md"  data-toggle="modal" data-target="#modalku">Router & Switching</a>
									</li>
								</ul>

							</div>
							<!-- <a class="btn btn-data-center form-control btn-md">Raise Flooring System</a>
							<a class="btn btn-data-center form-control btn-md">Fire Suppression System</a>
							<a class="btn btn-data-center form-control btn-md">Air Conditioning and Ventilation</a>
							<a class="btn btn-data-center form-control btn-md">Electrical Services</a>
							<a class="btn btn-data-center form-control btn-md">Uninterrupt Power Supply</a>
							<a class="btn btn-data-center form-control btn-md">Environmental Over IP</a>
							<a class="btn btn-data-center form-control btn-md">Lighting Protector System</a> -->
						</div>
					</div>
					<!-- data modal -->
					<div id="modalku" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Data Center Building</h4>
								</div>
								<div class="modal-body">
									<video width="100%" controls>
										<source src="mov_bbb.mp4" type="video/mp4">
										<source src="mov_bbb.ogg" type="video/ogg">
									</video>
									<p>Some text in the modal.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="<?=base_url();?>assets/cms/images/pict1.png" width="100%" style="box-shadow: 14.5px 14.5px 24px -2px rgb(181, 176, 211);" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="w3ls-section w3-harness" id="harness" style="background:url('<?=base_url().'assets/cms/images/bg2.png'?>') no-repeat;background-size: cover;background-position:center;">
		<div class="container">
			<div class="row box">
				<div class="col-md-2 col-sm-12 col-xs-12">
					<div class="tittle">
						<span>HARNESS</span>
					</div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit obcaecati asperiores, incidunt accusamus itaque, fugiat voluptates est ad ipsa rerum illum omnis enim, sapiente distinctio unde tempore quaerat odio explicabo officia corporis. Fuga consectetur reprehenderit laboriosam maiores sed vel eos modi beatae? Aliquid minima laborum fugiat eveniet quia incidunt accusamus recusandae, eligendi illo modi quos neque, alias facilis debitis dolore praesentium voluptatibus beatae odio cupiditate laudantium? Deleniti neque nihil inventore dolores eligendi molestias eius ut laudantium numquam! Quasi eligendi ipsam corrupti quisquam, dignissimos nostrum ab quae veniam nemo et, consequatur culpa nam suscipit maiores porro aliquid praesentium exercitationem iusto tenetur.
				</div>
			</div>
			<div class="row">
				<?php $product=$this->MModel->getData("select * from product  order by id_product DESC limit 6");
					$no=1; ;if($product){
				   foreach ($product as $p) { ?>
				<div class="col-md-4">
					<center>
					<img class="img-responsive image-harness" src="<?=base_url().'img/product/'.$p['foto_product']?>">
						<div class="middle-image">
							<div class="text-image"><?=$p['nama_product']?></div>
						</div>
				</center>
				</div>
				<?php } } ?>

			</div>
		</div>
	</div>
	<div class="w3ls-section w3-stayuptodate" id="stayuptodate" style="background:url('<?=base_url().'assets/cms/images/bg2.png'?>') no-repeat;background-size: cover;background-position:center;">
			<div class="row">
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<img src="<?=base_url().'assets/cms/images/building2.png'?>" width="100%" alt="">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					
				<form action="" method="POST" role="form" class="form-stayuptodate">
						<div class="form-group">
							<label for="">label</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
	</div>
	<!-- //about-slid -->
	<!--services section starts here-->
	<?php $this->load->view("cms/include/footer"); ?>

	<script type="text/javascript">
		var save_method;

		$(document).ready(function () {

			$('input').change(function () {
				$(this).parent().parent().removeClass('has-error');
				$(this).next().empty();
			});
			$('select').change(function () {
				$(this).parent().parent().removeClass('has-error');
				$(this).next().empty();
			});





			$('#dropify').dropify({
				messages: {
					default: 'Choose file CV (PDF/DOC/DOCX max(2 MB))',
					replace: 'Update',
					remove: 'Remove',
					error: 'error'
				}
			});

			$('#formC').on('submit', function (e) {
				$('#btnSave1').text('Menyimpan...');
				$('#btnSave1').attr('disabled', true);
				var url;
				if (save_method == 'add') {
					url = "<?=base_url().'Client/add';?>";
				} else {
					url = "<?=base_url().'Client/update';?>";
				}
				e.preventDefault();
				$.ajax({
					url: url,
					method: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function (data) {
						if (save_method == 'add') {
							$('#addClient').modal('hide');
							swal({
								title: 'Sukses!',
								text: 'Data berhasil di simpan',
								type: 'success'
							},
								function () {
									location.reload();
								});
						}
						else {
							$('#addClient').modal('hide');
							swal({
								title: 'Sukses!',
								text: 'Data berhasil di ubah',
								type: 'success'
							},
								function () {
									location.reload();
								});
						}
					}
				});
			});


			$('#formJ').on('submit', function (e) {
				$('#btnSave').text('Menyimpan...');
				$('#btnSave').attr('disabled', true);
				var url;
				if (save_method == 'add') {
					url = "<?=base_url().'Karir/add';?>";
				} else {
					url = "<?=base_url().'Karir/update';?>";
				}
				e.preventDefault();
				$.ajax({
					url: url,
					method: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function (data) {
						if (save_method == 'add') {
							$('#addLomba').modal('hide');
							swal({
								title: 'Sukses!',
								text: 'Data berhasil di simpan',
								type: 'success'
							},
								function () {
									location.reload();
								});
						}
						else {
							$('#addLomba').modal('hide');
							swal({
								title: 'Sukses!',
								text: 'Data berhasil di ubah',
								type: 'success'
							},
								function () {
									location.reload();
								});
						}
					}
				});
			});

		});

		function addKarir() {
			save_method = 'add';
			$('#formJ')[0].reset();
			$('.form-group').removeClass('has-error');
			$('.help-block').empty();
			$('label').hide();
			$('#addLomba').modal('show');
			$('.modal-title').text('Add carrer...');
		}

		function addClient() {
			save_method = 'add';
			$('#formJ')[0].reset();
			$('.form-group').removeClass('has-error');
			$('.help-block').empty();
			$('label').hide();
			$('#addClient').modal('show');
			$('.modal-title').text('Add Client...');
		}
	</script>

	<div class="modal fade" id="addLomba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<form class="form" id="formJ" action="#" method="post">
						<input type="hidden" name="id" value="">
						<div class="form-group">
							<label class="ace-file-input ace-file-multiple">Image</label>
							<input multiple="" id="dropify" type="file" name="image">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" id="" placeholder="Email" class="form-control">
							<p class="help-block mb-0"></p>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-raised btn-primary" id="btnSave" onclick="">Save</button>
					<button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Cancel</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<form class="form" id="formC" action="#" method="post">
						<input type="hidden" name="id" value="">
						<div class="form-group">
							<label for="">Nama Client</label>
							<input type="text" name="nama_client" id="" placeholder="Nama Client" class="form-control">
							<p class="help-block mb-0"></p>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" id="" placeholder="Email" class="form-control">
							<p class="help-block mb-0"></p>
						</div>
						<div class="form-group">
							<label for="">Tanggapan</label>
							<textarea type="text" name="say" id="" placeholder="Tanggapan " class="form-control" rows="3" required></textarea>
							<p class="help-block mb-0"></p>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-raised btn-primary" id="btnSave1" onclick="">Save</button>
					<button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Cancel</button>
				</div>
				</form>
			</div>
		</div>
	</div>