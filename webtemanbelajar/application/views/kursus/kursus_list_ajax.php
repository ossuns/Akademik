<?php
            foreach ($kursus_data as $kursus)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $kursus->nama_tentor ?></td>
            <td><?php echo $kursus->nama_murid ?></td>
			<td><?php echo $kursus->harga_total ?></td>
			<td><?php 
            if ($kursus->status_bayar=='belum bayar') {
                echo '<button type="button" class="btn btn-success btn-xs">Aktifkan</button>';

            }else{
                 echo '<button type="button" class="btn btn-primary btn-xs">Sudah Lunas</button>';
            }
              
            ?></td>
            

            <td><?php 
            if ($kursus->status_les =='belum selesai') {
                echo '<button type="button" class="btn btn-success btn-xs">sudah selesai</button>';
                
            }else{
                 echo '<button type="button" class="btn btn-primary btn-xs">Sudah Selesai</button>';
            }
              
            ?></td>

            <td><?php 
            if ($kursus->status_booking=='Di Tolak') {
                echo '<button type="button" class="btn btn-success btn-xs">Approve</button>';
            }else{
                 echo '<button type="button" class="btn btn-primary btn-xs">Approved</button>';
            }
              
            ?></td>
			<td><?php echo $kursus->jumlah_pertemuan ?></td>
			<?php 
        $api = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=.$kursus->alamat_tentor.&destination=.$kursus->alamat.&key=AIzaSyBEnokw3oPkD2yeLCAfvdNdvKCSryEv864");
            $data = json_decode($api);
            $distance = $data->routes[0]->legs[0]->distance->text;
            $duration = $data->routes[0]->legs[0]->duration->text;

      ?>
       <td><?php echo $distance ?></td>
            <td><?php echo $duration ?></td>
            <td><?php echo $kursus->tanggal ?></td>
            <td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('kursus/read/'.$kursus->id_kursus),' ', 'class="glyphicon glyphicon-eye-open"'); 
				echo ' | '; 
				echo anchor(site_url('kursus/update/'.$kursus->id_kursus),' ','class="glyphicon glyphicon-wrench"'); 
				echo ' | ';
                $atts = array(
        'class'       => 'glyphicon glyphicon-trash',
        'onclick'  => 'javasciprt: return confirm(\'Are You Sure ?\')"',
        
); 
				echo anchor(site_url('kursus/delete/'.$kursus->id_kursus),' ',$atts); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>