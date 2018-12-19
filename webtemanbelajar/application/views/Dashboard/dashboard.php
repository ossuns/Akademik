<div class="row top_tiles">
  <?php //print_r($jumlah_pendapatan);
  $i = 0;
  foreach ($jumlah_pendapatan as $result) {
    # code...
    $hasil= $result['harga_total'];
 // $c=array($d);
  //print_r($d);
  
  }
  //echo $g=array_sum($c);
  
  //echo $g;
  ?>
  
      <td><?php //echo ++$i; ?></td>
    <td><?php //$jumlahh=array_sum($d);?></td>
    
    <?php
    //echo $hasil=$result['harga_total']+$result['harga_total'];
  ?>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $jumlah_tentor?></div>
                  <h3>Jumlah Tentor</h3>
                 
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count"><?php echo $jumlah_murid?></div>
                  <h3>Jumlah Murid</h3>
                                  </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count"><?php echo $jumlah_transaksi?></div>
                  <h3>Jumlah transaksi</h3>
                 
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="count"><?php echo "Rp. ".$hasil;?></div>
                  <h3>Total Pendapatan</h3>
                 
                </div>
              </div>
            </div>

            <?php
            /*echo $this->session->userdata('username');*/
            echo $this->session->userdata('ses_nama');
                  foreach ($data_tentor as $result) {
                  $label_condition = ($result['status'] === 'Belum Aktif') ? "danger" : "success";
                                ?>
             <td>
               <div class="label <?php echo "label-" . $label_condition; ?>">
                  <?php echo $result['status']; }?>
               </div>
            </td>                   