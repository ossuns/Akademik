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
        <h2 style="margin-top:0px">Tentor Read</h2>
        <table class="table">
	    <tr><td>Nama Tentor</td><td><?php echo $nama_tentor; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>No Ktp</td><td><?php echo $no_ktp; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $pendidikan; ?></td></tr>
	    <tr><td>Pengalaman</td><td><?php echo $pengalaman; ?></td></tr>
	    <tr><td>Prestasi</td><td><?php echo $prestasi; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaan; ?></td></tr>
	    <tr><td>Status Terima Bayar</td><td><?php echo $alamat_tentor; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Foto Ktp</td><td><?php echo $foto_ktp; ?></td></tr>
	    <tr><td>Foto Ijazah</td><td><?php echo $foto_ijazah; ?></td></tr>
	    <tr><td>Foto Profil</td><td><?php echo $foto_profil; ?></td></tr>
	    <tr><td>Id Provinsi</td><td><?php echo $id_provinsi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tentor') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>