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

			& + .col-md-border {
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
					start: function (slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- //FlexSlider -->
		<!-- banner-info -->
		<div class="banner-agileinfo">
			<div class="container">
				<div class="w3header">
					<!--header-->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1>


							</h1>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="<?=base_url().'Welcome'?>">Home</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/about'?>" >About</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/team'?>" >Team</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/portofolio'?>">Product</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/info'?>" >Information</a>
								</li>
								<li>
									<a href="<?=base_url().'Welcome/contact'?>">Reach US</a>
								</li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class=" w3ls-section w3-about" id="about" style="background:url('<?=base_url().'img/profile/B.png'?>')" >
		<div class="container" >

			<div class="about-main" >
				<div class="col-md-12">
					<h3 class="pull-left">Why are we here</h3>
					<h3 class="pull-right"><a class="btn btn-danger btn-sm" href="<?=base_url().'Welcome/about'?>">LEARN MORE</a></h3>
				</div>
			</br>
			</br>
				<div class="col-md-12 w3_agileits-ab-main">
					<div class="panel panel-default">
					 <div class="panel-body">
						 <p><?=$setting->deskripsi?></p>
					 </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class=" w3ls-section w3-about" id="about" style="background:url('<?=base_url().'img/profile/B.png'?>')" >
		<div class="container" >
			<div class="row">
			<?php $info=$this->MModel->getData("select * from info order by id_info DESC limit 3");
			if($info){ 
			foreach($info as $i) {?>
				<div class="col-md-4">
					<div class="panel panel-default">
						<img src="<?=base_url().'img/info/'.$i['img']?>" class="img-rounded img-responsive">
						<div class="panel-heading">
							<?=$i['tgl_input']?>
						</div>
						<div class="panel-body">
							<h4><?=$i['judul_info']?></h4>
							<p><?=substr($i['deskripsi'],0,200)?>...</p>
						</div>
						<div class="panel-footer">
							<a href="<?=base_url().'Welcome/detInfo/'.$i['id_info']?>">baca lebih lanjut...</a>
						</div>
					</div>
				</div>
			<?php } } ?>
			<div class="col-md-12">
				<center><a href="<?=base_url().'Welcome/info'?>" class="btn btn-danger btn sm">LEARN MORE</a></center>
			</div>
			</div>

			
			
		</div>
	</div>
	<!-- about-slid -->
	<div class="about-w3slid">
			<div class="container">
				<h4>Vision & Mision</h4>
				<p><?=$setting->visi?></p>
				<a href="#" data-toggle="modal" data-target="#myModal" class="agile-more">Read More</a>
			</div>
		</div>
		<!-- //about-slid -->
	<!--services section starts here-->
	<section class="service-section  w3ls-section" id="services">
			<div class="container">


				<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12 col-md-border">
				<div class="center-block">
					<center><img src="<?=base_url().'img/profile/Harness.png'?>" class="img-responsive"></center>
				</div>
			</div>

			<div class="col-md-6 col-lg-6 col-xs-12 col-md-border">
						<small><p><?=$dsc->desc_product?></p></small>
			</div>
		</div>
		<hr>

		<div class="container">

			<div class="service-grids agile">
				<div class="service-grid agileits_w3layouts ">
				<?php $product=$this->MModel->getData("select * from product  order by id_product DESC limit 6");
			 $no=1; ;if($product){
			foreach ($product as $p) { ?>
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
					<a href="<?=base_url().'Welcome/portofolio'?>" class="btn btn-danger pull-right btn-md"  class="agile-more"> LEARN MORE</a>
				</div>
			</div>
		</div>
	</section>

	<section class="service-section  w3ls-section" id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>SOLUTION</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 col-xs-12 col-md-border">
								<small><p><?=$dsc->desc_solution?></p></small>
					</div>

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

	<section class="service-section  w3ls-section" id="services">
			<div class="container">


				<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12 col-md-border">
				<div class="center-block">
					<center><img src="<?=base_url().'img/profile/Harness.png'?>" class="img-responsive"></center>
				</div>
			</div>

			<div class="col-md-6 col-lg-6 col-xs-12 col-md-border">
						<small><p><?=$dsc->desc_product?></p></small>
			</div>
		</div>
		<hr>

		<div class="container">

			<div class="service-grids agile">
				<div class="service-grid agileits_w3layouts ">
					<div class="col-md-4">
						<div class="panel-default">
							<center><img class="img-responsive" src="<?=base_url().'img/profile/slide.png'?>"></center>
						<div class="panel-heading bg-default">
							<center><button href="" class="btn btn-primary btn-block" ><h4>Partner</h4></button></center>
						</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel-default">
							<center><img class="img-responsive" src="<?=base_url().'img/profile/slide.png'?>"></center>
						<div class="panel-heading bg-default">
							<center><button onClick="addClient()" class="btn btn-primary btn-block" ><h4>Client</h4></button></center>
						</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel-default">
							<center><img class="img-responsive" src="<?=base_url().'img/profile/slide.png'?>"></center>
						<div class="panel-heading bg-default">
							<center><button  onClick="addKarir()" class="btn btn-primary btn-block" ><h4>Carrer</h4></button></center>
						</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	
	<?php $this->load->view("cms/include/footer"); ?>

	<script type="text/javascript">
        var save_method;

        $(document).ready(function(){

            $('input').change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });
            $('select').change(function(){
                $(this).parent().parent().removeClass('has-error');
                $(this).next().empty();
            });





      	$('#dropify').dropify({
                messages: {
                      default: 'Choose file CV (PDF/DOC/DOCX max(2 MB))',
                      replace: 'Update',
                      remove:  'Remove',
                      error:   'error'
                  }
        });

		$('#formC').on('submit', function(e){
                $('#btnSave1').text('Menyimpan...');
                $('#btnSave1').attr('disabled', true);
                var url;
                if(save_method == 'add'){
                    url = "<?=base_url().'Client/add';?>";
                } else {
                    url = "<?=base_url().'Client/update';?>";
                }
           e.preventDefault();
                $.ajax({
                     url:url,
                     method:"POST",
                     data:new FormData(this),
                     contentType: false,
                     cache: false,
                     processData:false,
                     success:function(data)
                     {
                       if(save_method == 'add')
                     {
                         $('#addClient').modal('hide');
                         swal({
                             title: 'Sukses!',
                             text: 'Data berhasil di simpan',
                             type: 'success'
                         },
                         function(){
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
                        function(){
                            location.reload();
                        });
                     }
                     }
                });
      });


      $('#formJ').on('submit', function(e){
                $('#btnSave').text('Menyimpan...');
                $('#btnSave').attr('disabled', true);
                var url;
                if(save_method == 'add'){
                    url = "<?=base_url().'Karir/add';?>";
                } else {
                    url = "<?=base_url().'Karir/update';?>";
                }
           e.preventDefault();
                $.ajax({
                     url:url,
                     method:"POST",
                     data:new FormData(this),
                     contentType: false,
                     cache: false,
                     processData:false,
                     success:function(data)
                     {
                       if(save_method == 'add')
                     {
                         $('#addLomba').modal('hide');
                         swal({
                             title: 'Sukses!',
                             text: 'Data berhasil di simpan',
                             type: 'success'
                         },
                         function(){
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
                        function(){
                            location.reload();
                        });
                     }
                     }
                });
      });

        });

        function addKarir()
        {
            save_method = 'add';
            $('#formJ')[0].reset();
            $('.form-group').removeClass('has-error');
            $('.help-block').empty();
            $('label').hide();
            $('#addLomba').modal('show');
            $('.modal-title').text('Add carrer...');
        }

		function addClient()
        {
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
                        <input type="email" name="email" id="" placeholder="Email" class="form-control" >
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
                            <input type="text" name="nama_client" id="" placeholder="Nama Client" class="form-control" >
                            <p class="help-block mb-0"></p>
                         </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" placeholder="Email" class="form-control" >
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

