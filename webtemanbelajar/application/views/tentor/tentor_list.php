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
        <h2 style="margin-top:0px">Tentor List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tentor/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tentor/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tentor'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Tentor</th>
		<th>Status</th>
		<th>No Ktp</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>Pendidikan</th>
		<th>Pekerjaan</th>
		<th>Action</th>
            </tr><?php
            foreach ($tentor_data as $tentor)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tentor->nama_tentor ?></td>
			<td><?php 
                if ($tentor->status=='Aktif') {
                    echo anchor('tentor',$tentor->status, 'class="btn btn-primary"');
                }else{
                    echo anchor('tentor',$tentor->status, 'class="btn btn-danger"');
                }
               ?></td>
			<td><?php echo $tentor->no_ktp ?></td>
			<td><?php echo $tentor->no_telp ?></td>
			<td><?php echo $tentor->email ?></td>
			<td><?php echo $tentor->pendidikan ?></td>
			<td><?php echo $tentor->pekerjaan ?></td>
			<td style="text-align:center" width="200px">
				<?php 
                
            if ($tentor->status=='Belum Aktif') {
                echo  anchor(site_url('tentor/aktifasi_tentor/'.$tentor->id_tentor),' ', 'class="glyphicon glyphicon-ok"');
            }else{
                echo  anchor(site_url('tentor/nonaktifasi_tentor/'.$tentor->id_tentor),' ', 'class="glyphicon glyphicon-remove"');
            }
              echo ' | '; 
            
				echo anchor(site_url('tentor/read/'.$tentor->id_tentor),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tentor/update/'.$tentor->id_tentor),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tentor/delete/'.$tentor->id_tentor),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('tentor/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('tentor/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>