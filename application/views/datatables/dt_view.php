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
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="assets/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="assets/css/flexslider.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Modernizr JS -->
  <script src="assets/js/modernizr-2.6.2.min.js"></script>
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
          <div id="gtco-logo"><a href="index.html">Framework <em></em></a></div>
        </div>
        <div class="col-xs-10 text-right menu-1 main-nav">
          <ul>
            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
            <li><a href="#" data-nav-section="blog">Blog</a></li>
            <li><a href="#" data-nav-section="about">About</a></li>

          </ul>
        </div>
      </div>
      
    </div>
  </nav> 
    <br><br><br><br>


<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>



<main role="main">



  <section class="jumbotron text-center">

    <div class="container">

      <h1 class="jumbotron-heading">Basic DataTables</h1>

      

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

                                <a href="<?php echo base_url('view_blog/edit') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 

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

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">

<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>

<script>

    jQuery(document).ready(function(){



        // Contoh inisialisasi Datatable tanpa konfigurasi apapun

        // #dt-basic adalah id html dari tabel yang diinisialisasi

        $('#dt-basic').DataTable();



        $('#dt-blog-ajax').DataTable({

            "processing": true,

            "serverSide": true,

            "ajax": "<?php echo base_url() ?>datatables/get_json",

            "columns": [

                { "data": "post_id" },

                { "data": "post_judul" },

                { "data": "post_tgl" },

                { "data": "post_content" },

                { "data": "post_gambar" },

                { "data": "date_jenis" },

                { "data": "post_idcat" },

            ],

        });

    });



</script>
<br><br>
<h1>Form membuat blog</h1>
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
  <nav aria-label="Page navigation example">
 <ul class="pagination justify-content-center">
   <li class="page-item disabled">
     <a class="page-link" href="#" tabindex="-1">Previous</a>
   </li>
   <li class="page-item"><a class="page-link" href="#">1</a></li>
   <li class="page-item"><a class="page-link" href="#">2</a></li>
   <li class="page-item"><a class="page-link" href="#">3</a></li>
   <li class="page-item">
     <a class="page-link" href="#">Next</a>
   </li>
 </ul>
</nav>


<br><br><br>


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