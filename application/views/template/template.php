<?php $this->load->view("template/include/header"); ?>


<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home active"></i> Home</a></li>
</ol>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/About'?>"> <img src="<?=base_url().'icon/About.png'?>" class="img-responsive img-rounded">
                    <div class="panel-heading">
                        <center>Tentang Kami</center>
                    </div></a>
            </div>
        </div>
        <div class="col-md-3 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Produk'?>">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?=base_url().'icon/Product.png'?>" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="<?=base_url().'icon/Csr.png'?>" alt="Second slide">
                                </div>
                            </div>    
                    </div>
                    <div class="panel-heading">
                        <center>Product</center>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Info'?>">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?=base_url().'icon/News.png'?>" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="<?=base_url().'icon/Csr.png'?>" alt="Second slide">
                                </div>
                            </div>    
                    </div>
                    <div class="panel-heading">
                        <center>Informasi</center>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Tim'?>"> <img src="<?=base_url().'Icon/Team.png'?>" class="img-responsive img-rounded">
                    <div class="panel-heading">
                        <center>Tim</center>
                    </div></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><a href="">Layanan</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <?php $no=1; $produk=$this->MModel->getData("select * from slider where tampilkan='Y'");
                if($produk){
                foreach($produk as $s) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?=$no++?>" class=""></li>
                            <?php } } ?>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?=base_url().'icon/Slider.png'?>" alt="First slide">
                                <div class="carousel-caption">
                                    Pelayanan Kami
                                </div>
                            </div>
                            <?php foreach($produk as $s) { ?>
                            <div class="item">
                                <img src="<?=base_url().'img/slider/'.$s['image']?>" alt="Second slide">
                                <div class="carousel-caption">

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>



    <div class="row">
    <div class="col-md-4 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Csr'?>">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?=base_url().'icon/Csr.png'?>" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="<?=base_url().'icon/Team.png'?>" alt="Second slide">
                                </div>
                            </div>    
                    </div>
                    <div class="panel-heading">
                        <center>CSR</center>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Portopolio'?>">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?=base_url().'icon/Portfolio.png'?>" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="<?=base_url().'icon/Csr.png'?>" alt="Second slide">
                                </div>
                            </div>    
                    </div>
                    <div class="panel-heading">
                        <center>Portfolio</center>
                    </div>
                </a>
            </div>
        </div>  

        <div class="col-md-4 col-xs-6">
            <div class="panel panel-default">
                <a href="<?=base_url().'Template/Kontak'?>"><img src="<?=base_url().'icon/Contact.png'?>" class="img-responsive img-rounded">
                    <div class="panel-heading">
                        <center>Kontak</center>
                    </div> </a>
            </div>
        </div>

    </div>
</div>

</div>
<?php $this->load->view("template/include/footer"); ?>