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
        <h2 style="margin-top:0px">Kursus Read</h2>
        <table class="table">
	    <tr><td>Id Murid</td><td><?php echo $Id_murid; ?></td></tr>
	    <tr><td>Id Mengajar</td><td><?php echo $id_mengajar; ?></td></tr>
	    <tr><td>Harga Total</td><td><?php echo $harga_total; ?></td></tr>
	    <tr><td>Status Bayar</td><td><?php echo $status_bayar; ?></td></tr>
	    <tr><td>Status Les</td><td><?php echo $status_les; ?></td></tr>
	    <tr><td>Jumlah Pertemuan</td><td><?php echo $jumlah_pertemuan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kursus') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>