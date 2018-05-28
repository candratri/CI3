<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
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
  <link rel="stylesheet" href="../../assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../../assets/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="../../assets/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="../../assets/css/flexslider.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Modernizr JS -->
  <script src="../../assets/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    <br><br><br><br>
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
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<table>
        <tr>
          <td><font color="black">Nama Category</font></td>
          <td>:</td>
          <td><input type="text"  name="name_atk" class="form-control" value="<?=isset($default['name_cat'])? $default['name_cat'] : ""?>"</td>
        </tr>
        <tr>
          <td><font color="black">Description Category</font></td>
          <td>:</td>
          <td><textarea name="description_atk" class="form-control" required><?=isset($default['description_cat'])? $default['description_cat'] : ""?></textarea></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
      </form>
      <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="../../assets/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../../assets/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../../assets/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="../../assets/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="../../assets/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="../../assets/js/jquery.countTo.js"></script>
  <!-- Flexslider -->
  <script src="../../assets/js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../../assets/js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="../../assets/js/main.js"></script>

  </body>
</html>