<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

/**
* Description of header
* Header template untuk website
* @author ice
*/
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FLLAJ Lombok Barat</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url();?>/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
                <!-- carousel -->
        <link href="<?php echo base_url();?>/css/carousel.css" rel="stylesheet">
    </head>
    <body>
       
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">
        <strong>FLLAJ</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if($title=='Home') echo 'active';?> ">
            <a class="nav-link" href="home">Beranda
              <?php if($title=='Home')
                  echo '<span class="sr-only">(current)</span>';
              ?>
            </a>
          </li>
          <li class="nav-item <?php if($title=='Pengaduan') echo 'active';?> ">
            <a class="nav-link" href="complain">Pengaduan</a>
            <?php if($title=='Pengaduan')
                  echo '<span class="sr-only">(current)</span>';
              ?>
          </li>
          <li class="nav-item <?php if($title=='Informasi') echo 'active';?> ">
            <a class="nav-link" href="news">Informasi</a>
            <?php if($title=='Informasi')
                  echo '<span class="sr-only">(current)</span>';
              ?>
          </li>
          <li class="nav-item <?php if($title=='PRIM') echo 'active';?> ">
            <a class="nav-link" href="PRIM">PRIM</a>
            <?php if($title=='PRIM')
                  echo '<span class="sr-only">(current)</span>';
              ?>
          </li>
          <li class="nav-item <?php if($title=='CoST') echo 'active';?> ">
            <a class="nav-link" href="cost">CoST</a>
            <?php if($title=='CoST')
                  echo '<span class="sr-only">(current)</span>';
              ?>
          </li>
          <li class="nav-item <?php if($title=='Download') echo 'active';?> ">
            <a class="nav-link" href="download">Download</a>
            <?php if($title=='Download')
                  echo '<span class="sr-only">(current)</span>';
              ?>
          </li>
        </ul>
        <form class="form-inline">
          <div class="md-form my-0">
            <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
            <button class="btn purple-gradient">Daftar</button>
            <button class="btn aqua-gradient">Masuk </button>
          </div>
        </form>
      </div>
    </div>
  </nav>
 <header>
  <!-- Navbar -->
  
   