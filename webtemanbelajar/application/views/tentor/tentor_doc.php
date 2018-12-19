<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tentor List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Tentor</th>
		<th>Status</th>
		<th>No Ktp</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>Password</th>
		<th>Pendidikan</th>
		<th>Pengalaman</th>
		<th>Prestasi</th>
		<th>Pekerjaan</th>
		<th>Status Terima Bayar</th>
		<th>Deskripsi</th>
		<th>Foto Ktp</th>
		<th>Foto Ijazah</th>
		<th>Foto Profil</th>
		<th>Id Provinsi</th>
		
            </tr><?php
            foreach ($tentor_data as $tentor)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tentor->nama_tentor ?></td>
		      <td><?php echo $tentor->status ?></td>
		      <td><?php echo $tentor->no_ktp ?></td>
		      <td><?php echo $tentor->no_telp ?></td>
		      <td><?php echo $tentor->email ?></td>
		      <td><?php echo $tentor->password ?></td>
		      <td><?php echo $tentor->pendidikan ?></td>
		      <td><?php echo $tentor->pengalaman ?></td>
		      <td><?php echo $tentor->prestasi ?></td>
		      <td><?php echo $tentor->pekerjaan ?></td>
		      <td><?php echo $tentor->alamat_tentor ?></td>
		      <td><?php echo $tentor->deskripsi ?></td>
		      <td><?php echo $tentor->foto_ktp ?></td>
		      <td><?php echo $tentor->foto_ijazah ?></td>
		      <td><?php echo $tentor->foto_profil ?></td>
		      <td><?php echo $tentor->id_provinsi ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>