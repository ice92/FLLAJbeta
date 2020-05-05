<section id="gallery" class="container-fluid">

                <!-- Heading -->
                <br><br>
<!--                <h2 class="mb-5 font-weight-bold text-center">Berita FLLAJ</h2>-->
               <?php echo $halaman; ?>
                <div class="row">
                <div class="col-md-9">
    <?php foreach ($news as $news_item): ?>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 overflow-auto" style="height: 250px;">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                            <!--Indicators-->
<!--                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>-->
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url();?>foto_aduan/thumb/<?php echo $news_item['gambar']; ?>"
                                        alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
<!--                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                        alt="Second slide">
                                </div>
                                /Second slide
                                Third slide
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                        alt="Third slide">
                                </div>-->
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        <a href="" class="teal-text">
                            <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
                        </a>
                        <h4 class="mb-3"><strong><?php echo $news_item['judul']; ?></strong></h4>
                        
                        <?php $isi=$news_item['isi_berita']; $isi=character_limiter($isi,200); echo $isi?>
<!--                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                            quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                            officiis
                            debitis aut rerum.</p>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                            quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                            officiis
                            debitis aut rerum.</p>-->
                        <p>by <a><strong><?php echo $news_item['username']; ?></strong></a>, <?php echo $news_item['tanggal']; ?></p>
                        <a class="btn btn-primary btn-md" target='_blank' href='<?php echo base_url();?>complain/view/<?php echo $news_item['id_berita']; ?>'>Read more</a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
<!--Grid row--><hr class="my-5">
<?php endforeach; ?>
                <!--Grid row-->
                
                </div>
                    <div class="col-md-3">
                        <h2>Navigasi</h2>
                        

                    </div>
            </div>


            
            </section>
            <!--Section: Gallery-->
            