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
                echo  anchor(site_url('kursus/aktifasi_bayar_les/'.$kursus->id_kursus),' Aktifkan', 'class="btn btn-success btn-xs"');
            }else{
                 echo '<button type="button" class="btn btn-primary btn-xss">Sudah Lunas</button>';
            }
              
            ?></td>
			<td><?php echo $kursus->status_les ?></td>
            <td><?php echo $kursus->status_booking ?></td>
			<td><?php echo $kursus->jumlah_pertemuan ?></td>
			<td style="text-align:center" width="200px">
                <ul class="icons-list" style="float: left;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-left">
                          <li><?php echo anchor(site_url('order_detail.html?id='.$kursus->id_kursus),'<i class="icon-inbox-alt"></i>Detail'); ?></li>
                          <li><?php echo anchor(site_url('#.html?id='.$kursus->id_kursus),'<i class="icon-cancel-square"></i>Hapus'); ?></li>
                          <li><?php echo anchor(site_url('cetak_purchase_order.html?id='.$kursus->id_kursus),'<i class="icon-printer2"></i>Print','target="_blank"'); ?></li>
                        </ul>
                      </li>
                    </ul>
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