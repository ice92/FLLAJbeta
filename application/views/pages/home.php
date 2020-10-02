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

<!--style="background-image: url('<?php echo base_url();?>img/back.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;"-->

  <div class="view" >
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container-fluid">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left ">
            
            <img src="<?php echo base_url();?>/img/logo.png" class="img-fluid display-4" alt="Responsive image">
            <hr class="hr-light">
            <h6 class="mb-3">Layanan pelaporan online permasalahan lalu lintas dan jalan raya, portal informasi masalah lalu lintas dan jalan raya serta data pekerjaan jalan di Kabupaten Lombok Barat.</h6>
            <a class="btn btn-outline-white" href="<?php echo base_url()?>cost">Lihat data pekerjaan jalan (CoST)</a> 
            <div class="col-md-12 text-center">
                <hr>
	        <h5>BERITA TERBARU</h5>                            
	    </div>
            		<div class="MultiCarousel" data-items="1,1,2,2" data-slide="1" id="MultiCarousel"  data-interval="1000">            
            <div class="MultiCarousel-inner">
                <?php foreach ($news as $news_item): ?>
                <a href="<?php echo base_url();?>news/view/<?php echo $news_item['id_berita']; ?>" target='_blank'>
                <div class="item">
                    <div class="pad15 overflow-hidden" style="height: 200px;">
                        <div class="view overlay ">
                            <img src="<?php echo base_url();?>foto_berita/medium_<?php echo $news_item['gambar']; ?>" class="img-fluid " alt="zoom">
                            <div class="mask flex-center waves-effect waves-light rgba-teal-strong">
                              <p class="white-text"><?php echo $news_item['judul']; ?></p>
                            </div>
                          </div>
                    </div>
                </div>
                </a>
            <?php endforeach; ?>                        
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
                    <strong>ADA MASALAH LALU LINTAS DAN JALAN RAYA ?</strong>
                    <strong>Laporkan Aduan:</strong>
                  </h3>
                  <hr>
                </div>
                <form action="<?php echo base_url(). 'complain/add'; ?>" method="post" enctype="multipart/form-data">
                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  <input type="text" id="form3" name="nama" class="form-control">
                  <label for="form3">Nama</label>
                </div>
                
                <div class="md-form">
                  <i class="fas fa-address-card prefix grey-text"></i>
                  <input type="text" id="form2" name="kontak" class="form-control">
                  <label for="form2">Email/No.Hp</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-bullhorn prefix grey-text"></i>
                  <input type="text" id="form4" name="judul" class="form-control">
                  <label for="form2">Judul Pengaduan</label>
                </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fa fa-pencil-alt prefix grey-text"></i>
                  <textarea type="text" id="form8" name="aduan" class="md-textarea form-control" rows="2"></textarea>
                  <label for="form8">Laporan anda</label>
                </div>
                
                <div class="clearfix ">
                <!-- Default inline 1-->
                    <div class="custom-control custom-radio custom-control-inline float-left ml-4">
                      <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" value="P" checked>
                      <label class="custom-control-label" for="defaultInline2">Perempuan</label>
                    </div> 
                    <div class="custom-control custom-radio custom-control-inline float-left">
                      <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" value="L">
                      <label class="custom-control-label" for="defaultInline1">Laki-laki</label>
                    </div>
                    <!-- Default inline 2-->
                                      
                </div>
               
                <div class="md-form">
                    <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegular">Regular map modal</button>-->
                    <!--<a data-toggle="modal" data-target="#modalRegular"><i class="fas fa-map-marker-alt indigo-text ml-4" ></i> Lokasi   </a>-->
                    <div class="text-center mt-3">
                        <!--data-toggle="modal" data-target="#modalFile"-->
                    <a><i class="fas fa-camera-retro red-text ml-2" ></i> Masukkan Foto : </a> 
                    <input type="file" name="foto" id="foto" size:="33">
                    </div>
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
                
                <div class="text-center mt-3">
                  <button class="btn btn-indigo" type="submit" value="tambah">LAPOR!</button>
                </form>
<!--                  <hr>
                  <fieldset class="form-check">
                    
                      <label class="form-check-label" class="dark-grey-text"><a href="#">Daftar</a> untuk laporan lebih cepat dan mudah!</label>
                  </fieldset>-->
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
    <div class="container">
        <section id="informasi">
        <!-- Heading -->
                
      <!--Grid row-->
      <div class="row">
      <div class="col-lg-9">
          <h2 class="mb-5 font-weight-bold text-center">Pengaduan Terbaru</h2>
      <div class="row">
        
        <!--Grid column-->
        <?php foreach ($aduan as $news_item): ?>
        <div class="col-lg-4 col-md-6 mb-6">

          <!--Card-->
          <div class="card" style="max-height: 500px; min-height: 300px;">

            <!--Card image-->
            <div class="view overlay overflow-hidden  <?php if($news_item['gambar']=='NO IMAGE'){echo "d-none";} ?>" style="height: 200px;">
                
              <img src="<?php echo base_url();?>foto_aduan/thumb/<?php echo $news_item['gambar']; ?>" class="card-img-top"
                alt="">
              
              <a href="<?php echo base_url();?>complain/view/<?php echo $news_item['id_berita']; ?>">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h5 class="card-title"><?php echo $news_item['judul']; ?></h5>
              <!--Text-->
              <p class="card-text small"> <?php $isi=$news_item['isi_berita']; $isi=character_limiter($isi,100); echo $isi?>
              <a href="<?php echo base_url();?>complain/view/<?php echo $news_item['id_berita']; ?>">Baca Selengkapnya</a> </p>
              <p><a><strong><?php echo $news_item['username']; echo '/'.$news_item['gender'];?></strong></a></br> <?php echo $news_item['tanggal']; ?></p>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <?php endforeach; ?> 
        <!--Grid column-->

      </div>
    </div>
          
          <div class="col-lg-3">
              <h2 class="mb-5 font-weight-bold text-center">Berita Eksternal</h2>
              <?php foreach ($eks as $news_item): ?>
                <a href="<?php echo $news_item['link']; ?>" target='_blank'>
                <div class="item">                                                                          
                            <h5><?php echo $news_item['judul']; ?></h5>
                            <p>Sumber : <?php echo $news_item['media']; ?></p>  
                </div>
                </a>
              <?php endforeach; ?>
          </div>
              
  </div> 
      
<!--      <hr>
      <div class="container-fluid">
      <div class="row">
      <div class="col-lg-12">
          <h2 class="mb-5 font-weight-bold text-center">Visi dan Misi FLLAJ</h2>
      <div class="row">
                <p style="text-align:justify">Jalan sebagai penghubung antar lokasi sentra-sentra ekonomi, pariwisata, industri dan sebagainya merupakan salah satu bagian terpenting dari prasarana yang harus diperhatikan, oleh karena itu perlu dilakukan percepatan pembangunan untuk mendorong pertumbuhan ekonomi secara signifikan. Akan tetapi banyak permasalahan yang dihadapi pemerintah pusat maupun daerah dalam melakukan percepatan pembangunan tersebut.</p>

      <p style="text-align:justify">Permasalahan tersebut tidak hanya menyangkut fisik dari jalan itu saja. Masalah lalu lintas dan angkutan jalan merupakan masalah lain yang perlu penanganan tersendiri dan harus segera dilakukan. Mengingat permasalahan yang sedemikian kompleks dan penanganannya melibatkan beberapa instansi maka harus ada upaya yang signifikan untuk mengatasi hal tersebut. Salah satu upaya yang dilakukan pemerintah adalah dengan membentuk Forum Lalu Lintas dan Angkutan Jalan di setiap provinsi dan kabupaten/kota.</p>

      <p style="text-align:justify">Forum Lalu Lintas dan Angkutan Jalan sebagaimana disebutkan pada Peraturan Pemerintah Republik Indonesia Nomor 37 Tahun 2011 Tentang Forum Lalu Lintas Dan Angkutan Jalan adalah wahana koordinasi antar instansi penyelenggara lalu lintas dan angkutan jalan.</p>

      <p style="text-align:justify">Forum Lalu Lintas dan Angkutan Jalan&nbsp; berfungsi sebagai wahana untuk menyinergikan tugas pokok dan fungsi setiap penyelenggara lalu lintas dan angkutan jalan dalam penyelenggaraan lalu lintas dan angkutan jalan.</p>

      <p style="text-align:justify">Fungsi menyinergikan dimaksudkan untuk:</p>

      <ol>
              <li style="text-align:justify">Menganalisis permasalahan;</li>
              <li style="text-align:justify">Menjembatani, menemukan solusi, dan meningkatkan kualitas pelayanan.<br />
              Salah satu upaya Pemerintah untuk mengatasi masalah tersebut adalah dengan mendorong Pemerintah Daerah untuk meningkatkan peran dalam pembangunan insfrastruktur jalan melalui Program Hibah Peningkatan Kinerja dan Pemeliharaan Jalan Provinsi (PRIM).</li>
      </ol>

      <p style="text-align:justify">PRIM merupakan kerjasama antara Pemerintah Australia dan Pemerintah Indonesia melalui program Indonesia Infrastructure Initiative &ndash; IndII yang bertujuan untuk meningkatkan kapabilitas Pemerintah Provinsi Nusa Tenggara Barat dalam pengelolaan dan pemeliharaan jalan; termasuk dorongan kepada pemerintah provinsi untuk meningkatkan alokasi dana pemeliharan jalan.</p>

      <p style="text-align:justify">Salah satu program dari PRIM adalah melakukan pemberdayaan terhadap Forum Lalu Lintas dan Angkutan Jalan Kabupaten Lombok Barat yang dibentuk berdasarkan SK BupatiLombok Barat Nomor 58A/126/DISHUB/2017 tentang Pembentukan Forum Lalu Lintas Dan Angkutan Jalan, Kelompok Kerja dan Sekretariat Forum Lalu Lintas dan Angkutan Jalan Kabupaten Lombok Barat Tahun 2017-2022. Jumlah anggota FLLAJ yang terdapat pada surat keputusan tersebut adalah sebanyak 31 anggota yang terdiri dari beberapa pejabat eselon II, III dan IV Pemerintah Kabupaten Lombo Barat, Polres Lombok Barat, unsur masyarakat (LSM), akademisi, Jasa Raharja, Organda dan sebagainya.</p>

      </div>
      </div>
      </div>
          </div>-->
      
      
  </main>
  <!--Main layout-->
<div class="mt-5">
  
  <section class="grey lighten-2 pt-5">
      <div class="flex-center">
          <h3>Supported By</h3>
      </div>    
    <div class="container pt-3">       
      <!--First row-->
      <div class="row">

        <!--First column-->
        <div class="col-md-4 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/1.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".2s">
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/2.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".4s">
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-4 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/4.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".4s">
        </div>
        <!--/Third column-->
     </div>     
    </div>    
  </section>
    
<section class="grey lighten-2 py-5">
    <div class="container">       
      <!--First row-->
      <div class="row">
        <div class="col-md-3 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/5.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".2s">
        </div>
        <!--/Fourth column-->
        <!--Fourth column-->
        <div class="col-md-3 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/6.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".2s">
        </div>
        <!--/Fourth column-->
        <!--Fourth column-->
        <div class="col-md-3 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/7.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".2s">
        </div>
        <!--/Fourth column-->
        <!--Fourth column-->
        <div class="col-md-3 flex-center">
          <img src="<?php echo base_url();?>/img/stakeholder/8.png" style="height:80px;" class="img-fluid wow fadeIn" data-wow-delay=".2s">
        </div>
        <!--/Fourth column-->
      </div>
      <!--/First row-->
      
    </div>    
  </section>
</div>
