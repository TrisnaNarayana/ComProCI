<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Tentang Kami</a></li>
      </ol>
 
   
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default">
                <img src="<?=base_url().'icon/Banner.png'?>" class="img-responsive img-rounded">
                    <div class="panel-heading">
                    Tentang Kami
                    </div>
                    <div class="panel-body">
                    <ul class="timeline">
                        <li>
                        <!-- timeline icon -->
                        <i class="fa fa-info bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Tentang Kami</a> ...</h3>

                            <div class="timeline-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!-- timeline icon -->
                        <i class="fa fa-users bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>

                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">LEARN MORE</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!-- timeline icon -->
                        <i class="fa fa-user-secret bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Mitra Kerja</a> ...</h3>

                            <div class="timeline-body">
                            <?php $produk=$this->MModel->getData("select * from mitra");
                            if($produk){
                            foreach($produk as $s) { ?>
                                <img src="<?=base_url().'img/mitra/'.$s['foto_mitra']?>" alt="..." class="margin">
                            <?php } } ?>
                            </div>

                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">LEARN MORE</a>
                            </div>
                        </div>
                    </li>
                        <!-- END timeline item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("template/include/footer"); ?>







