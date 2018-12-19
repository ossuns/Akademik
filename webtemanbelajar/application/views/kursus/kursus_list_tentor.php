
    <body>
        <h2 style="margin-top:0px">Kursus List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('kursus/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('kursus'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table id="data-lists2" class="table table-bordered" style="margin-bottom: 10px">
            <?php 
                /*echo "<pre>";
                echo print_r($kursus_data);
                echo "</pre>";
                die();*/
            ?>
            <thead>
                <tr>
                <th>No</th>
        <th>Nama Tentor</th>
        <th>Nama Murid</th>
        <th>Nama Mapel</th>
        <th>Harga Total</th>
        <th>Status Bayar</th>
        <th>Status Les</th>
        <th>Status Booking</th>
        <th>Jumlah Pertemuan</th>
        <th>Jarak</th>
        <th>Waktu tempuh</th>
        <th>Tanggal Pemesanan</th>
        <th>Action</th>
            </tr>
            </thead>

            <tbody>
                
            </tbody>
          </table>  
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('kursus/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('kursus/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
   