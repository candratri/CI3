
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
    
  <div id="page">
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div id="gtco-logo"><a href="<?php echo base_url()?>home">Framework <em></em></a></div>
                <!-- </div>
                    <ul>
                        <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
                        <li><a href="<?php echo base_url()?>view_blog" >Blog</a></li>
                        <li><a href="<?php echo base_url()?>view_category" >Category</a></li>
                        <li><a href="<?php echo base_url()?>user/register" >Register</a></li>
                        <li><a href="<?php echo base_url()?>user/login" >LOGIN</a></li>
                    </ul>
            </div> -->
             <div class="btn-group" role="group" aria-label="Data baru">
          <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
        </div>
     
            
        </div>
    </nav>
<br><br><br><br>
<!-- Begin page content -->

<main role="main" class="container">

  <section class="jumbotron text-center">

    <div class="container">

     <!--  <h1 class="jumbotron-heading"><?php echo $page_title ?></h1> -->

    </div>

  </section>

  <section>

    <div class="container">

      <div class="row">

        <div class="col-lg-8 offset-lg-2">

          <?php

            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');

          ?>

          <?php echo validation_errors(); ?>

          <?php echo form_open('User/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>

          <div class="form-group">

            <label>Nama Lengkap</label>

            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">

          </div>

          <div class="form-group">

            <label>Kodepos</label>

            <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">

          </div>

          <div class="form-group">

            <label>Email</label>

            <input type="email" class="form-control" name="email" placeholder="Email">

          </div>

          <div class="form-group">

            <label>Username</label>

            <input type="text" class="form-control" name="username" placeholder="Username">

          </div>

          <div class="form-group">

            <label>Password</label>

            <input type="password" class="form-control" name="password" placeholder="Password">

          </div>

          <div class="form-group">

            <label>Konfirmasi Password</label>

            <input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
          </div>

          <div class="form-group">
              <label for="">Pilih Paket Membership</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="membership" id="MemberPro" value="1" checked>
                  <label class="form-check-label" for="Member Pro">Member Pofesional</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="membership" id="MemberPersonal" value="2">
                  <label class="form-check-label" for="Member Personal">Member Personal</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="membership" id="Admin" value="3">
                  <label class="form-check-label" for="Admin">Admin</label>
              </div>

          </div>

          <button type="submit" class="btn btn-primary btn-block">Daftar</button>

        <?php echo form_close(); ?>

      </div>

    </div>

  </div>

</section>

</main>