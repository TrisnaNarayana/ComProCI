<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Tim</a></li>
      </ol>
    <div class="container">
        <div class="row" >
        <?php $produk=$this->MModel->getData("select * from anggota");
        if($produk){
        foreach($produk as $s) { ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <center><img src="<?=base_url().'img/anggota/'.$s['foto']?>" class="img-responsive"></center>
                    <div class="panel-heading">
                        <a href=""> <?=$s['nama_lengkap']?> </a>
                    </div>
                    <div class="panel-footer">
                        <?=$s['jabatan']?>
                    </div>
                </div>
            </div>
        <?php } } ?>
        </div>
    </div>
    <?php $this->load->view("template/include/footer"); ?>






