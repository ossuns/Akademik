<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teman Belajar! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/vendors/bootstrap/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/asset/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Teman Belajar!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <?php if($this->session->userdata('foto_profil')==null){ ?>
              <div class="profile_pic">
                <img src="<?php echo base_url()?>asset/images/img.jpg" alt="..." class="img-circle profile_img">
              </div><?php }else{ ?>

              <div class="profile_pic">
                <img src="<?php echo base_url()?>dokumen/profil/<?php  echo $this->session->userdata('foto_profil'); ?>" alt="..." class="img-circle profile_img">
              </div>
            <?php } ?>

              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <?php if($this->session->userdata('akses')=='1'){ ?>
                  <li><a href="<?php echo base_url();?>/dashboard"><i class="fa fa-home"></i> Home </a></li>
                <?php } else{ ?>
                  <li><a href="<?php echo base_url();?>/dashboardpeserta"><i class="fa fa-home"></i> Home </a></li>
                <?php }?>

                  
                  <li><a><i class="fa fa-edit"></i> Tentor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <?php if($this->session->userdata('akses')=='1'){ ?>
                      <li><?php echo anchor('tentor', 'List Tentor', array('class' => 'nav-link'));?></li>
                      <li><?php echo anchor('tentor/create', 'Buat Tentor', array('class' => 'nav-link'));?></li> 
                      <?php } ?>
                      
                      <li><?php echo anchor('tentor/update/'.$this->session->userdata('ses_id'), 'update Tentor', array('class' => 'nav-link'));?></li>
                      
                      <li><?php echo anchor('tentor/read/'.$this->session->userdata('ses_id'), 'Profile Tentor', array('class' => 'nav-link'));?></li>
                      
                    </ul>
                  </li>
                   <?php if($this->session->userdata('akses')=='1'){ ?>
                  <li><a><i class="fa fa-desktop"></i> Murid <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor('murid', 'List Murid', array('class' => 'nav-link'));?></li>
                      <li><?php echo anchor('murid/create', 'Create Murid', array('class' => 'nav-link'));?></li>
                    
                    </ul>
                  </li>
                  <?php } ?>
                  <li><a><i class="fa fa-table"></i> Mapel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor('mapel', 'List Mapel', array('class' => 'nav-link'));?></li>
                      <?php if($this->session->userdata('belum_lengkapi_data')!==null && $this->session->userdata('akses')!='1'){ ?>
                      <li><?php echo anchor('mengajar/create', 'Memilih Mapel', array('class' => 'nav-link'));?></li>
                      <li><?php echo anchor('mengajar/index2', 'List data mengajar tentor', array('class' => 'nav-link'));?></li>
                      <?php } ?>
                      <?php if($this->session->userdata('akses')=='1'){ ?>
                      <li><?php echo anchor('mapel/create', 'Create Mapel', array('class' => 'nav-link'));?></li>
                      <li><?php echo anchor('mengajar', 'List Data Mengajar', array('class' => 'nav-link'));?></li>
                      
                      <?php } ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Daftar Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($this->session->userdata('akses')=='1'){ ?>
                      <li><?php echo anchor('kursus', 'List Transaksi', array('class' => 'nav-link'));?></li>
                      <li><?php echo anchor('kursus/chart', 'Chart', array('class' => 'nav-link'));?></li>
                    <?php } ?>
                      <?php if($this->session->userdata('akses')=='2'){ ?>
                       <li><?php echo anchor('kursus/data_tentor', 'List Transaksi Tentor', array('class' => 'nav-link'));?></li>
                     <?php } ?>
                      
                      <!-- <li><?php //echo $this->session->userdata('username'); ?></li> -->  
                    </ul>
                  </li>
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>asset/images/img.jpg" alt=""><?php echo $this->session->userdata('username'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>

                    <li><?php echo anchor('login/logout', 'Log Out', array('class' => 'fa fa-sign-out pull-right'));?></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php echo $contents; ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Teman Belajar - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript">
      var base_url= '<?php echo base_url(); ?>';
      function reloadedTable(url, el) {
        (function update(){
          $.ajax({
            url : base_url + url,
            type: 'POST',
            success: function(data){
              $(el).html(data);
              console.log('hehehe')
            }
          }).then(function(){
            setTimeout(update, 3000)
          })
        })()
      }
      $(document).ready(function(){
        reloadedTable('kursus/list_ajax', '#data-lists tbody')
        reloadedTable('kursus/list_ajax_tentor', '#data-lists2 tbody')
        // (function update(){
        //   $.ajax({
        //     url : base_url + 'kursus/list_ajax',
        //     type: 'POST',
        //     success: function(data){
        //       $('#data-lists tbody').html(data);
        //       console.log('hehehe')
        //     }
        //   }).then(function(){
        //     setTimeout(update, 3000)
        //   })
        // })()
      })
    </script>
    <script src="<?php echo base_url();?>/asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/bootstrap/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/asset/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <!-- <script src="<?php //echo base_url();?>/asset/vendors/Chart.js/dist/Chart.min.js"></script> -->
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>/asset/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>/asset/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>/asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>/asset/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/asset/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/asset/build/js/custom.min.js"></script>
    
  </body>
</html>