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
        <h2 style="margin-top:0px">Murid <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Murid <?php echo form_error('nama_murid') ?></label>
            <input type="text" class="form-control" name="nama_murid" id="nama_murid" placeholder="Nama Murid" value="<?php echo $nama_murid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenjang <?php echo form_error('jenjang') ?></label>
            <input type="text" class="form-control" name="jenjang" id="jenjang" placeholder="Jenjang" value="<?php echo $jenjang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sekolah <?php echo form_error('sekolah') ?></label>
            <input type="text" class="form-control" name="sekolah" id="sekolah" placeholder="Sekolah" value="<?php echo $sekolah; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Status Bayar <?php echo form_error('status_bayar') ?></label>
            <input type="text" class="form-control" name="status_bayar" id="status_bayar" placeholder="Status Bayar" value="<?php echo $status_bayar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <input type="hidden" name="id_murid" value="<?php echo $id_murid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('murid') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>