<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

/**
* Description of home
* Pages beranda
* @author ice
*/
-->
<!-- Full Page Intro -->

<!-- Make sure you put this AFTER Leaflet's CSS -->



  <div class="view" style="background-image: url('<?php echo base_url();?>img/back.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container-fluid">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left ">
            
            <img src="<?php echo base_url();?>/img/logo.png" class="img-fluid display-4" alt="Responsive image">
            <hr class="hr-light">
            <h6 class="mb-3">Layanan pelaporan online permasalahan lalu lintas dan jalan raya, portal informasi masalah lalu lintas dan jalan raya serta data pekerjaan jalan di Kabupaten Lombok Barat.</h6>
            <a class="btn btn-outline-white">Lihat data pekerjaan jalan (CoST)</a> 
            <div class="col-md-12 text-center">
                <hr>
	        <h5>BERITA TERBARU</h5>                            
	    </div>
            		<div class="MultiCarousel" data-items="1,1,2,2" data-slide="1" id="MultiCarousel"  data-interval="1000">            
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Tiang RPPJ Roboh di jembatan kembar</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Pohon berbahaya di Desa Jemba...</p>
                        
                    </div>
                </div>
                <a href="tes3">
                <div class="item">
                     
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Pohon berbahaya di Labuapi</p>  
                    </div>                         
                </div>
                    </a>
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Multi Item Carousel</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Multi Item Carousel</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <p class="lead">Multi Item Carousel</p>
                        
                    </div>
                </div>                
            </div>
            <button style="padding: 6px 12px 6px 12px;" class="btn btn-primary leftLst"><</button>
            <button style="padding: 6px 12px 6px 12px;" class="btn btn-primary rightLst">></button>
        </div>
<!--            <div class="col-md-12 text-right">
                <a>Lihat Semua Pengaduan >></a>
	    </div>-->
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card" >
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Laporkan Aduan:</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" id="form3" class="form-control">
                  <label for="form3">Nama</label>
                </div>
                
                <div class="md-form">
                  <i class="fa fa-envelope prefix grey-text"></i>
                  <input type="text" id="form2" class="form-control">
                  <label for="form2">Email</label>
                </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fa fa-pencil-alt prefix grey-text"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form8">Laporan anda</label>
                </div>
                
                <div class="clearfix ">
                <!-- Default inline 1-->
                    <div class="custom-control custom-radio custom-control-inline float-left ml-4">
                      <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                      <label class="custom-control-label" for="defaultInline2">Perempuan</label>
                    </div> 
                    <div class="custom-control custom-radio custom-control-inline float-left">
                      <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                      <label class="custom-control-label" for="defaultInline1">Laki-laki</label>
                    </div>
                    <!-- Default inline 2-->
                                      
                </div>
               
                <div class="md-form">
                    <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegular">Regular map modal</button>-->
                    <a data-toggle="modal" data-target="#modalRegular"><i class="fas fa-map-marker-alt indigo-text ml-4" ></i> Lokasi   </a>
                    <a data-toggle="modal" data-target="#modalFile"><i class="fas fa-camera-retro red-text ml-2" ></i> Lampiran   </a>
                </div>
                    <!--Modal: Name-->
                    <div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content--> 
                        <div class="modal-content">
                                
                          <!--Body-->
                          <div class="modal-body">
                            <div id="map" style="width:100%;height:480px;"></div>

                            
                          </div>
                        
                          <!--Footer-->
                          <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-info btn-md">Simpan Lokasi <i class="fas fa-map-marker-alt ml-1"></i></button>
                            <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

                          </div>

                        </div>
                        <!--/.Content-->

                     
                    </div>
                    <!--Modal: Name-->
                </div>
                     <!--Modal: Name-->
                    <div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content--> 
                        <div class="modal-content">
                                
                          <!--Body-->
                          <div class="modal-body mt-3 p-0">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Pilih Berkas</label>
                             
                            </div>
                          </div>
                            <!--Google map-->
                           
                            
                          </div>
                        
                          <!--Footer-->
                          <div class="modal-footer justify-content-center">
 <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>
<!--                            <button type="button" class="btn btn-info btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
                            <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>-->

                          </div>

                        </div>
                        <!--/.Content-->

                     
                    </div>
                    <!--Modal: Name-->
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-indigo">LAPOR!</button>
                  <hr>
                  <fieldset class="form-check">
                    
                      <label class="form-check-label" class="dark-grey-text"><a href="#">Daftar</a> untuk laporan lebih cepat dan mudah!</label>
                  </fieldset>
                </div>
              </div>
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
  <!--Main layout-->
  <main class="mt-5">

    <!--Main container-->
    <div class="container-fluid">
        <section id="informasi">
        <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Pengaduan Terbaru</h2>
      <!--Grid row-->
      <div class="row">
        
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/18WhatsApp%20Image%202019-10-21%20at%205.35.44%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Penebangan Pohon di Lembar</h4>
              <!--Text-->
              <p class="card-text">Pemotongan pohon .</p>
              <a href="#!" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/81rapat%20bulan%20september.jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Rapat Bulan September FLLAJ Kabupaten Lombok Barat 2019</h4>
              <!--Text-->
              <p class="card-text">Forum Lalu </p>
              <a href="#!" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/24WhatsApp%20Image%202019-09-09%20at%209.14.04%20AM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <br>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Sosialisasi Pengelolaan Sampah di Desa Golong</h4>
              <!--Text-->
              <p class="card-text">Forum Lalu </p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/30WhatsApp%20Image%202019-09-09%20at%2012.44.03%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Ekspose Hasil KRMS Rencana Penanganan Jalan Kabupaten Lombok Barat Tahun 2020</h4>
              <!--Text-->
              <p class="card-text">Sesuai dengan</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
        </div>
        <!--Grid column-->
<!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/30WhatsApp%20Image%202019-09-09%20at%2012.44.03%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Ekspose Hasil KRMS Rencana Penanganan Jalan Kabupaten Lombok Barat Tahun 2020</h4>
              <!--Text-->
              <p class="card-text">Sesuai dengan</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/30WhatsApp%20Image%202019-09-09%20at%2012.44.03%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Ekspose Hasil KRMS Rencana Penanganan Jalan Kabupaten Lombok Barat Tahun 2020</h4>
              <!--Text-->
              <p class="card-text">Sesuai dengan</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/30WhatsApp%20Image%202019-09-09%20at%2012.44.03%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Ekspose Hasil KRMS Rencana Penanganan Jalan Kabupaten Lombok Barat Tahun 2020</h4>
              <!--Text-->
              <p class="card-text">Sesuai dengan</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card" style="height: 500px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden" style="height: 200px;">
              <img src="https://fllajlombokbaratkab.or.id/foto_berita/30WhatsApp%20Image%202019-09-09%20at%2012.44.03%20PM.jpeg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body d-flex flex-column">
              <!--Title-->
              <h4 class="card-title">Ekspose Hasil KRMS Rencana Penanganan Jalan Kabupaten Lombok Barat Tahun 2020</h4>
              <!--Text-->
              <p class="card-text">Sesuai dengan</p>
              <a href="#" class="btn btn-indigo align-self-end ">Baca Selengkapnya</a>
            </div>

          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
      </div>
        </section>
      <!--Grid row-->
      <hr class="my-5">
      <section id="Aduan">
        <!-- Heading -->
      </section>
    </div>
    <!--Main container-->
<div class="container">
	<div class="row">
	</div>
	<div class="row">	    
	</div>
</div>
  </main>
  <!--Main layout-->

<script>
// variabel global marker

	var map = L.map('map').setView([37.75, -122.23], 10);
        L.esri.basemapLayer('Topographic').addTo(map);
        map.whenReady(() => {
            console.log('Map ready');
            setTimeout(() => {
            map.invalidateSize();
            }, 0);
        });
</script>