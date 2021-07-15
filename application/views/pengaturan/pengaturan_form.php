<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">PENGATURAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Tahun Ajaran <?php echo form_error('tahun_ajaran') ?></td><td><?php echo cmb_dinamis('tahun_ajaran', 'tahun_ajaran', 'tahun_ajar', 'id', $tahun_ajaran, 'DESC') ?></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	</table></form>        </div>
</div>