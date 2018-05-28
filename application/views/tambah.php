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
                </div>
                    <ul>
                        <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
                        <li><a href="<?php echo base_url()?>view_blog" >Blog</a></li>
                        <li><a href="<?php echo base_url()?>view_category" >Category</a></li>
                        <li><a href="<?php echo base_url()?>user/register" >Register</a></li>
                        <li><a href="<?php echo base_url()?>user/login" >LOGIN</a></li>
                    </ul>
            </div>
            
        </div>
    </nav>

<div class="container">
      <?php echo validation_errors(); ?>
      <?php echo form_open('view_blog/tambah', array('enctype'=>'multipart/form-data'));?>

      <table>
        <tr>
          <td><font color="black">Judul</font></td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Content</font></td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Tanggal</font> </td>
          <td>:</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Gambar</font></td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
          <td><font color="black">Jenis</font></td>
          <td>:</td>
          <td><input type="text" name="input_jenis" value="<?php echo set_value('input_jenis'); ?>" ></td>
        </tr>
        <tr>
          <td><font color="black">Pengarang</font></td>
          <td>:</td>
          <td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang'); ?>" ></td>
        </tr>
        <tr>
          <label>Kategory</label>
          <select name="id_cat" class="form-control" required>
            <option value="">Pilih kategori</option>
            <?php foreach($topik as $topik): ?>
              <option value="<?php echo $topik->id_cat; ?>"><?php echo $topik->name_cat; ?></option>
            <?php endforeach; ?>
          </select>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="Tambah"></td>
        </tr>
      </table>
    </div>