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
        <?php
          // print_r($query);
           //die();
            foreach($query->result_array() as $row){
        $options[$row['id_mapel']]=$row['nama_mapel'];
    }
            ?>
        <h2 style="margin-top:0px">Mengajar <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <!-- <label for="int">Id Tentor <?php echo form_error('id_tentor') ?></label> -->
            <input type="hidden" class="form-control" name="id_tentor" id="id_tentor" placeholder="Id Tentor" value="<?php echo $id_tentor; ?>" />

            
        </div>
	    <div class="form-group">
            <label for="int">Nama Mapel <?php echo form_error('id_mapel') ?></label>
            <!-- <input type="text" class="form-control" name="id_mapel" id="id_mapel" placeholder="Id Mapel" value="<?php echo $id_mapel; ?>" /> -->
            <?php echo form_error('id_mapel');
            echo form_dropdown('id_mapel',$options,'1', array('class' => 'selectpicker show-tick', 'id' => 'id_mapel', 'data-live-search' => 'true', 'multiple', 'data-style' => 'btn-primary', 'data-width' => 'auto'));
            ?>
        </div>
	    <input type="hidden" name="id_mengajar" value="<?php echo $id_mengajar; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('mengajar') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>