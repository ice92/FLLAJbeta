<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
 * Description of viewphp
 * 
 * @author ice
-->
<section class='container-fluid'>
<?php
echo '<h2>'.$news_item['judul'].'</h2>';?>
<p>by <a><strong><?php echo $news_item['username']; ?></strong></a>, <?php echo $news_item['tanggal']; ?></p>
<div class="row">
    <div class="col-md-6 mb-6 overflow-auto" style="height: 550px;">
        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
            <div class="carousel-inner z-depth-1-half" role="listbox">
                <div class="carousel-item active">
                 <img class="d-block w-100" src="<?php echo base_url();?>foto_aduan/<?php echo $news_item['gambar']; ?>">
                </div>
            </div>
        </div>
        
    </div> 
    <div class="col-md-6 mb-6 overflow-auto" style="height: 550px;">
        
        <?php echo $news_item['isi_berita'];?>        
    </div>
</div>
</section>