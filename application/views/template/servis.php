<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Servis</a></li>
      </ol>
    <div class="container">
        <div class="row" >
    <?php $servis=$this->MModel->getData("select * from servis");
    if($servis){
    foreach($servis as $s) { ?>
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-wrench"></i>

              <h3 class="box-title"><small><?=$s['nama_servis']?></small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <img src="<?=base_url().'img/servis/'.$s['img_servis']?>" class="img-responsive">
              </blockquote>
            </div>
            <div class="box-footer">
                <a href="">Read More...</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    <?php } } ?>
        </div>
    </div>

<?php $this->load->view("template/include/footer"); ?>





