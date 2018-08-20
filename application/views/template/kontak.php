<?php $this->load->view("template/include/header"); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home active"></i> Tentang Kami</a></li>
      </ol>
 
   
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default">
                <div id="map" style="auto; height:250px;"></div>
                    <div class="panel-heading">
                   
                    </div>
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kontak Person
                        </div>
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                <!-- timeline icon -->
                                <i class="fa fa-phone bg-blue"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header">08988600980</h3>
                                </div>
                            </li>
                            <li>
                                <!-- timeline icon -->
                                <i class="fa fa-fax bg-blue"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header">09898770090</h3>
                                </div>
                            </li>
                            <li>
                                <!-- timeline icon -->
                                <i class="fa fa-building bg-blue"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header">09.00 Am - 17.00 Pm</h3>

                                </div>
                            </li>
                                <!-- END timeline item -->
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kirim kami pesan cepat
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea type="text" class="form-control" rows="7"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  class="btn btn-primary btn-sm">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("template/include/footer"); ?>

    <script>
      function initMap() {
        var lab = {lat: -6.934040, lng: 107.619645};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: lab
        });
        var marker = new google.maps.Marker({
          position: lab,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnAL7xSSUJA0nu1Bi-4NiLFDvJ9xVQsRs&callback=initMap">
    </script>







