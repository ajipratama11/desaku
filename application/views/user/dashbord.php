<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="vendor2/img/png" href="vendor2/img/bwi1.png">
  <meta charset="utf-8">
  <title>SI - DESAKU</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(''); ?>/vendor2/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(''); ?>/vendor2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(''); ?>/vendor2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(''); ?>/vendor2/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        top:  10px;

        height: 330px;
        width: 690px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #ffff;
        padding: 5px;
        border: 1px solid #9999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        
      }
    </style>
  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(''); ?>/vendor2/css/style.css" rel="stylesheet">
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>
        
    var marker;
      function initialize() {
          
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query['data'] = $this->db->get('tb_tempat')->row_array();
            
            {
                $nama_tempat = $data['id_tempat'];
                $lat = $data['lat'];
                $lng = $data['lng'];
                
                echo ("addMarker($lat, $lng, '<b>$nama_tempat</b>');\n");                        
            }
          ?>
      
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">SI-DESAKU</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>
      <nav id="nav-menu-container">

        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#features">Info APBD</a></li>
          <li><a href="#pricing">Inovasi Desa</a></li>
          <li class="menu-has-children"><a href="">Layanan</a>
            <ul>
              <li class="menu-has-children"><a href="">Surat Rekom</a>
                <ul>
                  <li><a href="<?= base_url('dashbord/inputdomisili'); ?>">Surat Domisili</a></li>
                  <li><a href="<?= base_url('dashbord/inputpengantarpindah'); ?>">Surat Pengantar Pindah</a></li>
                  <li><a href="<?= base_url('dashbord/inputpengantarnikah'); ?>">Surat Pengantar Nikah</a></li>
                  <li><a href="<?= base_url('dashbord/inputpengantarcerai'); ?>">Surat Pengantar Cerai</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('dashbord/inputsktm'); ?>">Pembuatan SKTM</a></li>
              <li><a href="<?= base_url('dashbord/inputktp'); ?>">Pembuatan KTP</a></li>
              <li><a href="<?= base_url('dashbord/inputkk'); ?>">Pembuatan KK</a></li>
              <li><a href="<?= base_url('dashbord/inputakta'); ?>">Pembuatan AKTA LAHIR</a></li>
              <li><a href="<?= base_url('dashbord/inputsurattanah'); ?>">Pembuatan Surat Tanah</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a href="#team">Perangkat Desa</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="<?= base_url('Auth') ?>" class="btn btn-default btn-rounded mb-4">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 

  <div class="modal fade" id="modalsktmForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Surat Keterangan Tidak Mampu</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_sktm'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-1">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-nik">NIK</label>
            <input type="number" name="nik" id="defaultForm-email" class="form-control validate">
          </div>
          <div class="md-form mb-2">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-nama">Nama Lengkap</label>
            <input type="text" name="nama" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-3">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-tanggal">Tempat Tanggal & Lahir</label>
            <input type="text" name="ttl" id="defaultForm-email" class="form-control validate">
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-jk">Jenis Kelamin</label>
            <input type="text" name="jenis_kel" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-agama">Agama</label>
            <input type="text" name="agama" id="defaultForm-email" class="form-control validate">
          </div>
          <div class="md-form mb-6">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-alamat">Alamat</label>
            <input type="text" name="alamat" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-7">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pk">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-8">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pr">Keperluan</label>
            <input type="text" name="keperluan" id="defaultForm-pass" class="form-control validate">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalktpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Data Pribadi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_ktp'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-1">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-nama">Nama Lengkap</label>
            <input type="email" id="defaultForm-email" class="form-control validate">
          </div>

          <div class="md-form mb-42">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-kk">No. Kartu Keluarga</label>
            <input type="password" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-3">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-tgl">TTL</label>
            <input type="text" name="ttl" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-jk">Jenis Kelamin</label>
            <input type="password" id="defaultForm-pass" class="form-control validate">
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-alm">Alamat</label>
            <input type="password" id="defaultForm-pass" class="form-control validate">
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Create</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalkkForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">KK</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_kk'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalaktaForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Pembuatan Akta Lahir</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_akta'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-1">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-email">NIK</label>
            <input type="number" id="nik" name="nik" class="form-control validate">
          </div>
          <div class="md-form mb-2">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control validate">
          </div>

          <div class="md-form mb-3">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control validate">
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tempat Lahir</label>
            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control validate">
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tanggal Lahir</label>
            <input type="date" id="tgllahir" name="tgllahir" class="form-control validate">
          </div>

          <div class="md-form mb-6">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Agama</label>
            <input type="text" id="agama" name="agama" class="form-control validate">
          </div>

          <div class="md-form mb-7">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Keperluan</label>
            <input type="text" id="keperluan" name="keperluan" class="form-control validate">

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">submit</button>
        </div>
        <?php form_close(); ?>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalsurattanahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Surat Tanah</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_surattanah'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-1">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-email">NIK</label>
            <input type="number" id="nik" name="nik" class="form-control validate">
          </div>
          <div class="md-form mb-2">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control validate">
          </div>

          <div class="md-form mb-3">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control validate">
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tempat Lahir</label>
            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control validate">
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tanggal Lahir</label>
            <input type="date" id="tgllahir" name="tgllahir" class="form-control validate">
          </div>

          <div class="md-form mb-6">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Luas Tanah</label>
            <input type="text" id="agama" name="luas_tanah" class="form-control validate">
          </div>

          <div class="md-form mb-7">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Harga Petak</label>
            <input type="text" id="keperluan" name="harga_petak" class="form-control validate">

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalpengantarpindahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Pengantar Pindah</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_pengantarpindah'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalpengantarnikahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Pengantar Nikah</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_pengantarnikah'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
        <? form_close(); ?>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalpengantarceraiForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Pengantar cerai</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('dashbord/add_pengantarcerai'); ?>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
      </div>
      <? form_close(); ?>
    </div>
  </div>











  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>SELAMAT DATANG DI SI-DESAKU</h2>
      <p>Melayani Sepenuh Hati Untuk Kepentingan Bersama</p>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>

    <div class="product-screens">

      <div class="product-screen-1.5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="<?php echo base_url(''); ?>/vendor2/img/kayu.png" width="1350px" alt="">
      </div>
      <p></p>
      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="<?php echo base_url(''); ?>/vendor2/img/jatim.png" width="195px" alt="">
      </div>
      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="<?php echo base_url(''); ?>/vendor2/img/bwi1.png" width="140px" alt="">
      </div>

    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--========================== About Us Section ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Tentang Kami</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Sistem Informasi Layanan Desa<br>
            Memberikan Pelayanan Yang Responsif, Tepat, dan Transparan untuk Kepentingan Mayarakat
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="<?php echo base_url(''); ?>/vendor2/img/pemdes.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Desa Yosomulyo, Kecamatan Gambiran, Banyuwangi</h2>
            <h3>Yosomulyo adalah sebuah nama desa di wilayah Gambiran, Kabupaten Banyuwangi, Provinsi Jawa Timur, Indonesia..</h3>
            <p>
              Dulu desa ini bernama Karangasem. Nama itu diberikan karena dulu banyak sekali pohon asam di sana. Desa ini pada zaman PKI Di anggap tempat basis PKI di Banyuwangi sehingga sangat ditakuti di seluruh Banyuwangi. Orang-orang Yosomulyo terkenal kesaktiannya. Hal itu terbukti saat orang Yosomulyo bentrok dengan orang ANSOR Muncar. Bentrokan ini bermula dari orang-orang NU dari Muncar yang merencanakan penyerangan di Yosomulyo untuk menumpas PKI.
            </p>
            <h5>Pembagian Wilayah</h5>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Krajan</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidomukti</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidorejo Kulon.</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidorejo Wetan.</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidotentrem.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Alokasi APBD Desa</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="<?php echo base_url(''); ?>/vendor2/img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Rencana Strategis</a></h4>
                <p class="description">Rencana strategis dilakukan untuk pengalokasian dana desa dan alokasi dana desa baik berdasarkan APBN dan APBD Daerah.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Dasar (AD)</a></h4>
                <p class="description">Sebesar 77% dari pagu atau sebesar Rp46.200,00 miliar, dibagi secara merata kepada setiap desa.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Afirmasi (AA)</a></h4>
                <p class="description">Sebesar 3% dari pagu atau Rp1.800,00 miliar, dibagi secara proporsional kepada desa tertinggal dan desa sangat tertinggal yang mempunyai jumlah penduduk miskin (JPM) tinggi.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Formula (AF)</a></h4>
                <p class="description"> Sebesar 20% dari pagu atau Rp12.000,00 miliar, dibagi berdasarkan: jumlah penduduk desa bobot 10%, jumlah penduduk miskin bobot 50%, luas wilayah desa bobot 15%, dan Indeks Kemahalan Konstruksi atau Indeks Kesulitan Geografis .</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">
      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>Kebijakan Dana Desa dilakukan dengan menyempurnakan formula pengalokasian Dana Desa:</h2>
                <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-dlay="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.5s"> penyesuaian proporsi dana yang dibagi rata (Alokasi Dasar) dan dana yang dibagi berdasarkan formula (Alokasi Formula).</p>
                <i class="ion-ios-color-filter-outline" wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"> memberikan afirmasi pada desa tertinggal dan sangat tertinggal yang mempunyai jumlah penduduk miskin tinggi; dan.</p>
                <i class="ion-ios-barcode-outline" class="wow fadeInRight" data-wow-delay="0.4""0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Memberikan fokus yang lebih besar pada pengentasan kemiskinan dan ketimpangan, yaitu dengan melakukan penyesuaian bobot variabel jumlah penduduk miskin dan luas wilayah.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Informasi Update</h3>
            <p class="cta-text"> Segala informasi terbaru terkait kepentingan dan berhubungan dengan kebutuhan masyarakat Desa Yosomulyo, Gambiran, Banyuwangi.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?= base_url('dashbord/informasiupdate'); ?>">Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Agenda</h3>
          <span class="section-divider"></span>
          <p class="section-description">Agenda kegiatan desa untuk menunjang dan mengambangkan minat bakat masyarakat</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="<?= base_url('dashbord/kerjabakti'); ?>">Kerja Bakti</a></h4>
              <p class="description">Kerja bakti desa mewajibkan warganya setiap RT untuk membersihkan lingkugan sekitar dan umum.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="<?= base_url('dashbord/kegiatanbulanan'); ?>">Kegiatan Bulanan</a></h4>
              <p class="description">Agenda dan evaluasi pelaksanaan program desa serta situasi dan kondisi desa.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="<?= base_url('dashbord/musyawarah'); ?>">Musyawarah</a></h4>
              <p class="description">Dilakukan setiap pengadaan agenda acara atau even yang berhubungan dengan waktu dan tempat desa.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="<?= base_url('dashbord/karangtaruna'); ?>">Karang Taruna</a></h4>
              <p class="description">Kegiatan mingguan untuk meningkatkan kemampuan minat bakat dan membangun inovasi desa</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Clients
    ============================-->
    <section id="clients">
      <div class="container">

        <div class="row wow fadeInUp">

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-1.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-2.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-3.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-4.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-5.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-6.png" alt="">
          </div>

        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Inovasi Desa</h3>
          <span class="section-divider"></span>
          <p class="section-description">Komunitas pengembang dan inovasi</p>
        </div>

        <div class="row">

          <div class="col-lg-12 col-md-6">
            <div class="box wow fadeInLeft">
              <h3>Inovasi PLTMH</h3>
              <h4><i><span>Pembangkit Listrik Tenaga Mikro Hidro</span></i></h4>
              <!-- <input type="text" id="pac-input" name="address" class="form-control"
																		placeholder="masukkan lokasi">
																		<input type="text" name="longlat" id="latlong" hidden="" > -->
                                    <div id="map-canvas" style="width: 700px; height: 600px;"></div>
              </ul>
              <!-- <a href="#" class="get-started-btn">Get Started</a> -->
            </div>
          </div>

         

        

        </div>
      </div>
    </section><!-- #pricing -->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->


    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Perangkat Desa</h3>
          <span class="section-divider"></span>
          <p class="section-description">Struktur Pemerintahan Desa Yosomulyo</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kades.jpg" alt=""></div>
              <h4>Abdul Gafur Mas'ud</h4>
              <span>Kepala Desa</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/sekretaris.jpg" alt=""></div>
              <h4>Sarah Meryanda</h4>
              <span>Sekretaris Desa</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur5.png" alt=""></div>
              <h4>Irwan Bahtiar</h4>
              <span>KASI PEMERINTAHAN</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur4.jpeg" alt=""></div>
              <h4>Indah Mulyani</h4>
              <span>KAUR KEUANGAN</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur3.jpg" alt=""></div>
            <h4>Dwining Andani</h4>
            <span>KAUR PEMBANGUNAN</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Galeri</h3>
          <span class="section-divider"></span>
          <p class="section-description">Dokumentasi Kegiatan</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam7.jpeg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam7.jpeg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam2.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam2.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam3.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam3.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam4.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam4.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam5.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam5.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam6.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam6.jpg" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Yosomulyo, Gambiran Banyuwangi</h3>
              <p>Informasi dan Kontak.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Yosomulyo, Kec. Gambiran, Kabupaten Banyuwangi<br>Jawa Timur, 68486</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>Si_Desagambiran@bwikab.go.id</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>Kantor: +0331 55 55488 86</p>
              </div>
              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>HP: +62 813 3322 277 </p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            Copyright &copy; 2019<strong>WebDesa</strong>. Kabupaten Banyuwangi
          </div </div> </div> <div class="col-lg-6">
          <div class="single-image text-right">
            <img alt="Logo Polije" title="Logo Polije" width="50" height="50" data-src="https://id.wikipedia.org/wiki/Berkas:Lambang_propinsi_jatim.png" data-sizes="auto" class="lazyautosizes lazyloaded" src="https://upload.wikimedia.org/wikipedia/id/d/d7/Lambang_propinsi_jatim.png" sizes="50px">

            <img alt="Logo Polije" title="Logo Polije" width="50" height="50" data-src="https://upload.wikimedia.org/wikipedia/id/6/62/Logo_kab_Banyuwangi.png" data-sizes="auto" class="lazyautosizes lazyloaded" src="https://upload.wikimedia.org/wikipedia/id/6/62/Logo_kab_Banyuwangi.png" sizes="50px">
          </div>

        </div>
      </div>
    </div>
  </footer><!-- #footer -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(''); ?>/vendor2/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(''); ?>/vendor2/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(''); ?>/vendor2/js/main.js"></script>
  <!-- <script>
	function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -8.2230043, lng: 114.3653102},
      zoom: 13,
      mapTypeId: 'roadmap'
    });

    // Membuat Kotak pencarian terhubung dengan tampilan map
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    

    var markers = [];
    // Mengaktifkan detail pada suatu tempat ketika pengguna
    // memilih salah satu dari daftar prediksi tempat 
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
      return;
      }

      // menghilangkan marker tempat sebelumnya
      markers.forEach(function(marker) {
      marker.setMap(null);
      });
      markers = [];

      // Untuk setiap tempat, dapatkan icon, nama dan tempat.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      

      // Membuat Marker untuk setiap tempat
      markers.push(new google.maps.Marker({

        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location,
        drag:true

      }));
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();

      if (place.geometry.viewport) {
        bounds.union(place.geometry.viewport);
        document.getElementById("latlong").value = lat+','+lng;      
        //document.getElementById('lng').value=lng; 
      } else {
        bounds.extend(place.geometry.location);
        
      }
      });
      map.fitBounds(bounds);
    });
    google.maps.event.addListener(marker, 'drag', function() {
  // ketika marker di drag, otomatis nilai latitude dan longitude
  //menyesuaikan dengan posisi marker 
    updateMarkerPosition(marker.getPosition());
    });
	}

  </script>
  <script>
function tampilDekat(){
    getCurLocation();
    
    map_dekat = new google.maps.Map(document.getElementById('map'), {
        zoom: <?=get_option('default_zoom')?>,
        center: {
            lat : default_lat, 
            lng : default_lng
        }
    });
       
    var data =  <?=json_encode($db->get_results("SELECT * FROM tb_tempat"))?>;
    $.each(data, function(k, v){
        var pos = {
            lat : parseFloat(v.lat),
            lng : parseFloat(v.lng)
        };
        // var contentString = '<h3>'  + v.nama_tempat + '</h3>' + 
        //     '<p align="center"><a href="?m=tempat_detail&ID=' + v.id_tempat + '" class="link_detail btn btn-primary">Lihat Detail</a>';
        // var infowindow = new google.maps.InfoWindow({
        //     content: contentString
        // });
        var marker = new google.maps.Marker({
            position: pos,
            map: map_dekat,
            animation: google.maps.Animation.DROP
        });         
        marker.addListener('click', function() {
            infowindow.open(map_dekat, marker);
        });
    });    
}  

$(function(){
    tampilDekat();
})
</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDdGyp6n2hKHPECuB6JZIT-8dVHCpwI0&libraries=places&callback=initAutocomplete"
    async defer></script> -->
    
    

</body>

</html>