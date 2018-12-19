<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V15</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/datalogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(datalogin/images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>

        <form class="login100-form validate-form" method="POST" action="<?php site_url('login/regis_tentor');?>">

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Enter email">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">No KTP</span>
            <input class="input100" type="text" name="ktp" placeholder="Enter KTP">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">No Telpon</span>
            <input class="input100" type="text" name="telpon" placeholder="Enter telpon">
            <span class="focus-input100"></span>
          </div>



          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn" >
            <button class="login100-form-btn" style="margin-right: 72px;">
              Login
            </button>
            <?php echo anchor(base_url(),'Cancel', 'class="login100-form-btn"'); ?>
          </div> 
          <br>

          
        </form>
          
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url();?>/datalogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>/datalogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>/datalogin/js/main.js"></script>

</body>
</html>