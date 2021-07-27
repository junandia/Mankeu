<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TAHUN_ANGKATAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Tahun Angkatan <?php echo form_error('tahun_angkatan') ?></td><td><input type="text" class="form-control" name="tahun_angkatan" id="tahun_angkatan" placeholder="Tahun Angkatan" value="<?php echo $tahun_angkatan; ?>" /></td></tr>
	    <tr><td width='200'>Grup <?php echo form_error('id_grup') ?></td><td><?php echo cmb_dinamis('id_grup', 'groups','description','id',$id_grup) ?></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('angkatan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>