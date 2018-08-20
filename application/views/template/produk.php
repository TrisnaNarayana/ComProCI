<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Data Produk</a></li>
      </ol>
 
    <div class="container">
        <div class="row" >
        <?php $produk=$this->MModel->getData("select * from product");
        if($produk){
        foreach($produk as $s) { ?>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <img src="<?=base_url().'img/product/'.$s['foto_product']?>" class="img-responsive">
                    <div class="panel-heading">
                        <center><?=$s['nama_product']?></center>
                    </div>
                </div>
            </div>
        <?php } } ?>
        </div>
    </div>
    <?php $this->load->view("template/include/footer"); ?>






