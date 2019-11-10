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
            <a class="btn btn-outline-white">Lihat data pekerjaan jalan (CoST)</a> <a href="#informasi" class="btn btn-outline-white">Baca Berita Terbaru</a>
            <div class="col-md-12 text-center">
                <hr>
	        <h5>PENGADUAN TERBARU</h5>                            
	    </div>
            		<div class="MultiCarousel" data-items="1,1,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">            
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Tiang RPPJ Roboh di jebatan kembar</p>
                        <p>DanieSalasa</p>
                        <p>2019-10-22</p>
                        <a>Detail</a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Pohon berbahaya di Desa Jembatan kembar</p>
                        <p>DeniYan</p>  
                        <p>2019-10-22</p>
                        <a>Detail</a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Pohon berbahaya di Labuapi</p>
                        <p>Bananha</p>
                        <p>2019-10-22</p>
                        <a>Detail</a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <a>Detail</a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <a>Detail</a>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <a>Detail</a>
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
                          <div class="modal-body mb-0 p-0">
                            
                            <!--Google map-->
                            <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
                              <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" style="border:0 ; width: 100%; height: 450px" allowfullscreen></iframe>
                            </div>
                            
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
                <h2 class="mb-5 font-weight-bold text-center">Informasi Terbaru</h2>
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="card-img-top" alt="">
            <div class="mask rgba-white-light"></div>
          </div>

        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col-md-5 mb-4">

          <h2>Rapat Bulan Oktober 2019</h2>
          <hr>
          <p>Forum Lalu Lintas dan Angkutan Jalan Kabupaten Lombok Barat kembali menyelenggarakan rapat bulan Oktober 2019. Kegiatan rutin tersebut dilaksanakan pada hari Rabu, 30 Oktober 2019 bertempat di Ruang Sekretariat FLLAJ Kabupaten Lombok Barat ini dihadiri oleh anggota FLLAJ Kabupaten Lombok Barat. Dalam bulan ini terdapat dua agenda utama yaitu...</p>
          <a href="https://mdbootstrap.com/" class="btn btn-indigo">Baca Selengkapnya</a>
           
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
      <!--Grid row-->
      <div class="row">
        
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="#!" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="#!" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(74).jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(75).jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Card title</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="#" class="btn btn-indigo">Baca Selengkapnya</a>
            </div>

          </div>
          <!--/.Card-->

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



