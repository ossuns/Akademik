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
        <h2>Murid List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Murid</th>
		<th>Password</th>
		<th>Email</th>
		<th>No Telp</th>
		<th>Jk</th>
		<th>Jenjang</th>
		<th>Alamat</th>
		<th>Sekolah</th>
		<th>Status Bayar</th>
		<th>Foto</th>
		
            </tr><?php
            foreach ($murid_data as $murid)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $murid->nama_murid ?></td>
		      <td><?php echo $murid->password ?></td>
		      <td><?php echo $murid->email ?></td>
		      <td><?php echo $murid->no_telp ?></td>
		      <td><?php echo $murid->jk ?></td>
		      <td><?php echo $murid->jenjang ?></td>
		      <td><?php echo $murid->alamat ?></td>
		      <td><?php echo $murid->sekolah ?></td>
		      <td><?php echo $murid->status_bayar ?></td>
		      <td><?php echo $murid->foto ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>