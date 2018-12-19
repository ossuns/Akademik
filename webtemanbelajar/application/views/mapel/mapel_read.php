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
        <h2 style="margin-top:0px">Mapel Read</h2>
        <table class="table">
	    <tr><td>Nama Mapel</td><td><?php echo $nama_mapel; ?></td></tr>
	    <tr><td>Tarif 1</td><td><?php echo $tarif_1; ?></td></tr>
	    <tr><td>Tarif 2</td><td><?php echo $tarif_2; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('mapel') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>