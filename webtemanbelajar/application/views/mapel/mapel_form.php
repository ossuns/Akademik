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
        <h2 style="margin-top:0px">Mapel <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Mapel <?php echo form_error('nama_mapel') ?></label>
            <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="Nama Mapel" value="<?php echo $nama_mapel; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tarif 1 <?php echo form_error('tarif_1') ?></label>
            <input type="text" class="form-control" name="tarif_1" id="tarif_1" placeholder="Tarif 1" value="<?php echo $tarif_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tarif 2 <?php echo form_error('tarif_2') ?></label>
            <input type="text" class="form-control" name="tarif_2" id="tarif_2" placeholder="Tarif 2" value="<?php echo $tarif_2; ?>" />
        </div>
	    <input type="hidden" name="id_mapel" value="<?php echo $id_mapel; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mapel') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>