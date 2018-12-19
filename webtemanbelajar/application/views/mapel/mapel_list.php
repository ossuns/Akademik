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
        <h2 style="margin-top:0px">Mapel List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">

                <?php 
                if ($this->session->userdata('akses')=='1') {
                         echo anchor(site_url('mapel/create'),'Create', 'class="btn btn-primary"');     # code...
                }
                ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('mapel/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('mapel'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama Mapel</th>
		<th>Tarif</th>
		
		<th>Action</th>
            </tr><?php
            foreach ($mapel_data as $mapel)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $mapel->nama_mapel ?></td>
			<td><?php echo $mapel->tarif_1 ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('mapel/read/'.$mapel->id_mapel),' ', 'class="glyphicon glyphicon-eye-open"'); 
				echo ' | '; 
				echo anchor(site_url('mapel/update/'.$mapel->id_mapel),' ','class="glyphicon glyphicon-wrench"'); 
                
				echo ' | '; 
                $atts = array(
        'class'       => 'glyphicon glyphicon-trash',
        'onclick'  => 'javasciprt: return confirm(\'Are You Sure ?\')"',
        
);
				echo anchor(site_url('mapel/delete/'.$mapel->id_mapel),' ',$atts); 
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
		<?php echo anchor(site_url('mapel/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('mapel/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>