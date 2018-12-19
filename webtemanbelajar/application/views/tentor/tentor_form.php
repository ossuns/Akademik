<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tentor <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Tentor <?php echo form_error('nama_tentor') ?></label>
            <input type="text" class="form-control" name="nama_tentor" id="nama_tentor" placeholder="Nama Tentor" value="<?php echo $nama_tentor; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">No Ktp <?php echo form_error('no_ktp') ?></label>
            <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No Ktp" value="<?php echo $no_ktp; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pendidikan <?php echo form_error('pendidikan') ?></label>
            <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pengalaman <?php echo form_error('pengalaman') ?></label>
            <input type="text" class="form-control" name="pengalaman" id="pengalaman" placeholder="Pengalaman" value="<?php echo $pengalaman; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Prestasi <?php echo form_error('prestasi') ?></label>
            <input type="text" class="form-control" name="prestasi" id="prestasi" placeholder="Prestasi" value="<?php echo $prestasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Status Terima Bayar <?php echo form_error('status_terima_bayar') ?></label>
            <input type="text" class="form-control" name="status_terima_bayar" id="status_terima_bayar" placeholder="Status Terima Bayar" value="<?php echo $status_terima_bayar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Ktp <?php echo form_error('foto_ktp') ?></label>
            <input type="text" class="form-control" name="foto_ktp" id="foto_ktp" placeholder="Foto Ktp" value="<?php echo $foto_ktp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Ijazah <?php echo form_error('foto_ijazah') ?></label>
            <input type="text" class="form-control" name="foto_ijazah" id="foto_ijazah" placeholder="Foto Ijazah" value="<?php echo $foto_ijazah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Profil <?php echo form_error('foto_profil') ?></label>
            <input type="text" class="form-control" name="foto_profil" id="foto_profil" placeholder="Foto Profil" value="<?php echo $foto_profil; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Provinsi <?php echo form_error('id_provinsi') ?></label>
            <input type="text" class="form-control" name="id_provinsi" id="id_provinsi" placeholder="Id Provinsi" value="<?php echo $id_provinsi; ?>" />
        </div>
	    <input type="hidden" name="id_tentor" value="<?php echo $id_tentor; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tentor') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>