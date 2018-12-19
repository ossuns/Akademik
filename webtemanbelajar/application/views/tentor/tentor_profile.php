<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<head>
 <!--  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $this->session->userdata('username'); ?></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src=<?php echo base_url('dokumen/profil/'.$foto_profil) ?>></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <!-- <img src=<?php echo base_url('dokumen/ijazah/'.$foto_ijazah) ?> />
       <label for="varchar">Foto Profil <?php echo form_error('foto_profil') ?></label>
        <input type="file" class="form-control" name="foto_profil" id="foto_profil" placeholder="Foto Profil" value="<?php echo $foto_profil; ?>" /> -->
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="#">teman-belajar.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Jumlah Mapel</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Daftar Transaksi</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <!-- <li class="active"><a data-toggle="tab" href="#home">Home</a></li> -->
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Nama Tentor</h4></label>
                              <input type="text" class="form-control" name="nama_tentor" id="nama_tentor" placeholder="Nama Tentor" value="<?php echo $nama_tentor; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>No KTP</h4></label>
                              <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No KTP" value="<?php echo $no_ktp; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="enter phone" value="<?php echo $no_telp; ?>">
                          </div>
                      </div>
          
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="<?php echo $email; ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Pendidikan</h4></label>
                              <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Pengalaman</h4></label>
                              <input type="text" class="form-control" name="pengalaman" id="pengalaman" placeholder="Pengalaman" value="<?php echo $pengalaman; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="alamat_tentor" id="alamat_tentor" placeholder="alamat tentor" value="<?php echo $alamat_tentor; ?>" />
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>prestasi</h4></label>
                              <input type="text" class="form-control" name="prestasi" id="prestasi" placeholder="prestasi" value="<?php echo $prestasi; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>pekerjaan</h4></label>
                              <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="password2" value="<?php echo $pekerjaan; ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Deskripsi</h4></label>
                             <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Foto KTP</h4></label>
                             <input type="file" class="form-control" name="foto_ktp" id="foto_ktp" placeholder="Foto Ktp" value="<?php echo $foto_ktp; ?>" />
            <img src="<?php echo base_url('dokumen/ktp/'.$foto_ktp) ?>" style="width: 100%;" />

                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Foto Ijazah</h4></label>
                             <input type="file" class="form-control" name="foto_ijazah" id="foto_ijazah" placeholder="Foto Ijazah" value="<?php echo $foto_ijazah; ?>" />
            <img src="<?php echo base_url('dokumen/ijazah/'.$foto_ijazah) ?>" style="width: 100%;" />
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Foto Profil</h4></label>
                             <input type="file" class="form-control" name="foto_profil" id="foto_profil" placeholder="Foto Profil" value="<?php echo $foto_profil; ?>" />
            <img src="<?php echo base_url('dokumen/profil/'.$foto_profil) ?>" style="width: 100%;"/>
                          </div>
                      </div>

                      <input type="hidden" name="id_tentor" value="<?php echo $id_tentor; ?>">
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i><?php echo $button ?></button>
                               	 <a href="<?php echo site_url('tentor') ?>" class="btn btn-default">Cancel</a>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <!--/tab-pane-->
             
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      