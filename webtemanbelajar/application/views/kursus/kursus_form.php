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
        <h2 style="margin-top:0px">Kursus <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Murid <?php echo form_error('Id_murid') ?></label>
            <input type="text" class="form-control" name="Id_murid" id="Id_murid" placeholder="Id Murid" value="<?php echo $Id_murid; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Mengajar <?php echo form_error('id_mengajar') ?></label>
            <input type="text" class="form-control" name="id_mengajar" id="id_mengajar" placeholder="Id Mengajar" value="<?php echo $id_mengajar; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Harga Total <?php echo form_error('harga_total') ?></label>
            <input type="text" class="form-control" name="harga_total" id="harga_total" placeholder="Harga Total" value="<?php echo $harga_total; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Bayar <?php echo form_error('status_bayar') ?></label>
            <input type="text" class="form-control" name="status_bayar" id="status_bayar" placeholder="Status Bayar" value="<?php echo $status_bayar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Les <?php echo form_error('status_les') ?></label>
            <input type="text" class="form-control" name="status_les" id="status_les" placeholder="Status Les" value="<?php echo $status_les; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah Pertemuan <?php echo form_error('jumlah_pertemuan') ?></label>
            <input type="text" class="form-control" name="jumlah_pertemuan" id="jumlah_pertemuan" placeholder="Jumlah Pertemuan" value="<?php echo $jumlah_pertemuan; ?>" />
        </div>
	    <input type="hidden" name="id_kursus" value="<?php echo $id_kursus; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kursus') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>