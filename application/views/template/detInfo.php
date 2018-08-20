<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Detail Informasi</a></li>
      </ol>
 
   
    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-xs-8">
                <div class="panel panel-default">
                <center><img src="<?=base_url().'img/info/'.$detail->img?>" class="img-responsive img-rounded"></center>
                    <div class="panel-heading">
                    <?=$detail->tgl_input?>
                    </div>
                    <div class="panel-body">
                    <ul class="timeline">
                        <li>
                        <!-- timeline icon -->
                        <i class="fa fa-info bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#"><?=$detail->judul_info?></a></h3>

                            <div class="timeline-body">
                                <p>
                                <?=$detail->deskripsi?>
                                </p>
                            </div>
                        </div>
                    </li>
                        <!-- END timeline item -->
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informasi terdahulu
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-primary">
                                <img src="<?=base_url().'icon/About.png'?>" class="img-responsive">
                                <div class="panel-heading">
                                    <small>Lorem Ipsum</small>
                                </div>
                                <div class="panel-footer">
                                    <a href="">Baca Lebih Lanjut...</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("template/include/footer"); ?>







