<?php if (!$this->session->userdata('logged_in')) {
  redirect('User/login');
} ?>
<!DOCTYPE HTML>
<!--
  Asymmetry by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Framework &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="gettemplates.co" />

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

  <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/jquery.dataTables.min.css'?>">

  <!-- Modernizr JS -->
  <script src="<?php echo base_url() ?>assets/js/modernizr-2.6.2.min.js"></script>
  
  <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="gtco-loader"></div>
  <div id="page">
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div id="gtco-logo"><a href="<?php echo base_url()?>home">Framework <em></em></a></div>
                </div>
                    <ul>
                       <!--  <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
                        <li><a href="<?php echo base_url()?>view_blog" >Blog</a></li>
                        <li><a href="<?php echo base_url()?>view_category" >Category</a></li> -->
                        <li><a href="<?php echo base_url()?>User/logout" >LOGOUT</a></li>
                    </ul>
            </div>
            
        </div>
    </nav>
	<br><br><br><br>

<div class="content-wrapper">
    <div class="container-fluid">
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Category</div>

          <?php
        echo form_open('view_category/tambah', array('enctype'=>'multipart/form-data')); 
       ?>

      <table>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>        
    </div>
        <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td> Id Category </td>
                  <td> Name Category</td>
                  <td> Description Category</td>
                  <td> Tanggal Cartegory</td>
                  <td> Aksi</td>
                </tr>
              </thead>

                <tbody>
                  <?php foreach($topik as $key) : ?>
                  <tr>
                  <td><?php echo $key->id_cat; ?></td>
                    <td><?php echo $key->name_cat; ?></td>
                    <td><?php echo $key->description_cat; ?></td>
                    <td><?php echo $key->tgl_cat; ?></td>
                    <td><a href='view_pengiriman/edit/<?php echo $key->id_pengiriman?>' class='btn btn-sm btn-info'>Edit</a>
                      <a href='view_pengiriman/delete/<?php echo $key->id_pengiriman?>' class='btn btn-sm btn-danger'>HAPUS</a></td>
                  </tr>
                 <?php endforeach; ?>
              </tbody>

            </table>
          </div>
      </div>
    </div>
<br><br><br><br><br>

  




	<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="assets/js/jquery.countTo.js"></script>
  <!-- Flexslider -->
  <script src="assets/js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="assets/js/main.js"></script>

  </body>
</html>