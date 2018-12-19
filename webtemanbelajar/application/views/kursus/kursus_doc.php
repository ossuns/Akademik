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
        <h2>Kursus List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Murid</th>
		<th>Id Mengajar</th>
		<th>Harga Total</th>
		<th>Status Bayar</th>
		<th>Status Les</th>
		<th>Jumlah Pertemuan</th>
		
            </tr><?php
            foreach ($kursus_data as $kursus)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kursus->Id_murid ?></td>
		      <td><?php echo $kursus->id_mengajar ?></td>
		      <td><?php echo $kursus->harga_total ?></td>
		      <td><?php echo $kursus->status_bayar ?></td>
		      <td><?php echo $kursus->status_les ?></td>
		      <td><?php echo $kursus->jumlah_pertemuan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>