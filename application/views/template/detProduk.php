<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Detail Produk</a></li>
      </ol>
 
   
    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-xs-8">
                <div class="panel panel-default">
                <img src="<?=base_url().'icon/About.png'?>" class="img-responsive img-rounded">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                    <ul class="timeline">
                        <li>
                        <!-- timeline icon -->
                        <i class="fa fa-info bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Harness</a></h3>

                            <div class="timeline-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

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
                        List Produk
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-primary">
                                <div class="panel-body">
                                    <a href=""><p class="bg-info">Connector</p></a>
                                    <a href=""><p class="bg-success">Connector RJ45</p></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("template/include/footer"); ?>







