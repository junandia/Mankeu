<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SANTRI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Santri <?php echo form_error('nama_santri') ?></td><td><input type="text" class="form-control" name="nama_santri" id="nama_santri" placeholder="Nama Santri" value="<?php echo $nama_santri; ?>" /></td></tr>
	    <tr><td width='200'>Id Angkatan <?php echo form_error('id_angkatan') ?></td><td><?php echo cmb_dinamis('id_angkatan', 'tahun_angkatan', 'tahun_angkatan', 'id', $id_angkatan) ?></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('santri') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>