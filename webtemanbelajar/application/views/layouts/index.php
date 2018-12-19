<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie ie-lt9 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9 | !IE]><!-->
<html class="no-js fixed" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title>Teman Belajar</title>
<link rel='stylesheet' href='<?php echo base_url();?>/asset/assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='<?php echo base_url();?>/asset/assets/css/style.css'>
<link rel='stylesheet' href='<?php echo base_url();?>/asset/assets/css/color.css'>
<link rel='stylesheet' href='<?php echo base_url();?>/asset/assets/css/title-size.css'>
<link rel='stylesheet' href='<?php echo base_url();?>/asset/assets/css/custom.css'>
<!-- <link rel="icon" href="assets/img/favicon.ico"> -->
</head>
<body>

  <!-- loader -->
  <div id="site-loader">
    <div class="loader"></div>
  </div>
  <!-- loader -->

  <!-- site wrap -->
  <div id="site-wrap">

    <!-- backgeound -->
    <div id="bg">
      <div id="img"></div>
      <div id="overlay"></div>
      <div id="effect"></div>
      <canvas id="js-canvas"></canvas>
    </div>
    <!-- /background -->

    <!-- site header -->
    <header id="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <!-- header brand -->
            <div class="header-brand">
              <img class="header-logo logo-light" src="<?php echo base_url();?>/asset/assets/img/logo_temanbelajar.png" alt="">
              <img class="header-logo logo-dark" src="<?php echo base_url();?>/asset/assets/img/logo_temanbelajar.png" alt="">
            </div>
            <!-- header brand -->

            <!-- header toggle-->
            <div class="header-toggle">
              <div id="menu-toggle" class="toggle">
                <i class="ion-document-text"></i>
              </div>
            </div>
            <!-- /header toggle -->
          </div>
        </div>
      </div>
    </header>
    <!-- /site header -->

    <!-- subscribe -->
    <div id="form">
      <div id="subscribe">
        <div class="tb-cell">
          <p class="animation section-subtitle">Register.</p>
          <h2 class="section-title">Register NOW</h2>
          <!-- subscribe form -->
            <a href="<?php echo base_url();?>/tentor/register" target="_blank"><button class="btn btn-primary">
              <i class="ion-document-text"></i> Register Here
            </button></a>
          <!-- /subscribe form -->
        </div>
      </div>
    </div>
    <!-- /subscribe -->

    <!-- site main -->
    <main id="site-main">
      <!-- home -->
      <section id="home">
        <div class="section-wrap">
          <div class="section-cell">
            <div class="container">
              <!-- section header -->
              <div class="section-header row text-center">
                <div class="col-xs-12">
                  <p class="animation section-subtitle">TEMAN BELAJAR</p>
                  <h1 class="section-title">
                    <span class="section-title-span">Teman Belajar</span>
                    <!-- <span class="section-title-span">New Line Title</span> -->
                    <a href="<?php echo base_url();?>/tentor/login" target="_blank"><button class="btn btn-lg btn-primary"><i class="ion-document-text"></i> Login Tentor</button></a>
                  </h1>
                  <div class="animation section-divider"></div>
                </div>
              </div>
              <!-- /setion header -->

              <!-- section main -->
              <div class="section-main row">
                <div class="col-xs-12">
                  <!-- countdown -->
                  <div id="countdown" class="animation-04">
                    <div class="row">
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount days"></div>
                          <div class="countdown-period days_ref">Days</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount hours"></div>
                          <div class="countdown-period hours_ref">Hours</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount minutes"></div>
                          <div class="countdown-period minutes_ref">Minutes</div>
                        </div>
                      </div>
                      <div class="col-xs-3 col-countdown">
                        <div class="countdown-section">
                          <div class="countdown-amount seconds"></div>
                          <div class="countdown-period seconds_ref">Seconds</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /countdown -->
                </div>
              </div>
              <!-- /setion main -->
            </div>
          </div>
        </div>
      </section>
      <!-- /home -->

    </main>
    <!-- /site main -->

    <!-- site footer -->
    <footer id="site-footer">
      <!-- footer social -->
      <a href="#" id="volume">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
      <div id="footer-social">
        <a href="#" title="" target="_blank"><i class="ion-social-twitter"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-googleplus"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-instagram-outline"></i></a>
        <a href="#" title="" target="_blank"><i class="ion-social-facebook"></i></a>
      </div>
      <!-- /footer social -->
    </footer>
    <!-- /site footer -->

    <!-- audio -->
    <audio id="audio-player" loop>
      <source src="<?php echo base_url();?>/asset/assets/audio/audio.mp3" type="audio/mpeg">
    </audio>
    <!-- audio -->
  </div>
  <!-- /site wrap -->

  <!-- script -->
  <script src='<?php echo base_url();?>/asset/assets/js/vendor/jquery-2.1.4.min.js'></script>
  <!--[if lte IE 9]><!-->
  <script src='<?php echo base_url();?>/asset/assets/js/vendor/html5shiv.min.js'></script>
  <!--<![endif]-->
  <script src='<?php echo base_url();?>/asset/assets/js/vendor/bootstrap.min.js'></script>
  <script src='<?php echo base_url();?>/asset/assets/js/vendor/vendor.js'></script>
  <script src='<?php echo base_url();?>/asset/assets/js/variable3.js'></script>
  <script src='<?php echo base_url();?>/asset/assets/js/main2.js'></script>
  <!-- /script -->

</body>
</html>