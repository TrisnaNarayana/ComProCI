<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Informasi</a></li>
      </ol>
 
   
    <div class="container">
        <div class="row" >
        <?php $produk=$this->MModel->getData("select * from info");
        if($produk){
        foreach($produk as $s) { ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <img src="<?=base_url().'img/info/'.$s['img']?>" class="img-responsive">
                    <div class="panel-heading">
                        <?=$s['tgl_input']?>
                    </div>
                    <div class="panel-body">
                        <h3><?=$s['judul_info']?></h3>
                        <p><?=substr($s['deskripsi'],100,250)?></p>
                    </div>
                    <div class="panel-footer">
                        <a href="<?=base_url().'Template/detInfo/'.$s['id_info']?>">Baca lebih lanjut</a>
                    </div>
                </div>
            </div>
        <?php } } ?>
        </div>
    </div>

<?php $this->load->view("template/include/footer"); ?>





