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
                        <!-- <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
                        <li><a href="<?php echo base_url()?>view_blog" >Blog</a></li>
                        <li><a href="<?php echo base_url()?>view_category" >Category</a></li> -->
                        <li><a href="<?php echo base_url()?>user/logout" >LOGOUT</a></li>
                    </ul>
            </div>
            
        </div>
    </nav>
	<br><br><br><br>


<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>



<main role="main">



  <section class="jumbotron text-center">

    <div class="container">

      <h1 class="jumbotron-heading">Blog DataTables(dt_view)</h1>

      

    </div>

    </section>

    

    <section class="py-5 bg-light">

        <div class="container">

            <div class="row">

                <table id="dt-basic" class="table table-striped table-bordered">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>JUDUL</th>

                            <th>Tanggal</th>

                            <th>content</th>

                            <th>Gambar</th>

                            <th>Jenis</th>

                            <th>Pengarang</th>

                            <th>Id Category</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($artikel as $d) : ?>

                        <tr>

                            <td><?php echo $d->id_blog ?></td>

                            <td><?php echo $d->judul_blog ?></td>

                            <td><?php echo $d->tgl_blog ?></td>

                            <td><?php echo $d->content ?></td>

                            <td><?php echo $d->gambar_blog ?></td>

                            <td><?php echo $d->jenis_blog ?></td>

                            <td><?php echo $d->pengarang_blog ?></td>

                            <td><?php echo $d->id_cat ?></td>

                            <td>

                                <a href="<?php echo base_url('view_blog/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 

                                <a href="<?php echo base_url('view_blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a> 

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

  

</main>

<div class="container">

      <?php foreach ($artikel as $key): ?>

      <div class="col-xs-12 col-sm-9 col-md-9">
          <div class="row">
            <div class="col-md-4">
              <h3><?php echo $key->judul_blog ?></h3>
              <br>
              <img src="gambar/<?php echo $key->gambar_blog;?>" alt="Image" width="500">
              <p>
                diupload tanggal : <?php echo $key->tgl_blog ?><br>
                <a href="<?php echo site_url()?>view_blog/detail/<?php echo $key->id_blog ?>">Read More ...</a>
              </p>
              <br></br>
              <!-- button delete -->
              <a href='view_blog/edit/<?php echo $key->id_blog?>' class='btn btn-sm btn-info'>Edit</a>
              <a href='view_blog/delete/<?php echo $key->id_blog?>' class='btn btn-sm btn-danger'>HAPUS</a><br><br>
            </div>
          </div>
        </div>
<?php endforeach ?>

<div class="container">
      <?php
        echo form_open('view_blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>

      <table>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>
<?php 


   if (isset($links)) {

     echo $links;

   } 

   ?>
<br><br>


<br><br><br>


	<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
  <script>
      jQuery(document).ready(function(){

          // Contoh inisialisasi Datatable tanpa konfigurasi apapun
          // #dt-basic adalah id html dari tabel yang diinisialisasi
          $('#dt-basic').DataTable();
      });

  </script>

  <script src="assets/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Main -->
  <script src="assets/js/main.js"></script>

  </body>
</html>