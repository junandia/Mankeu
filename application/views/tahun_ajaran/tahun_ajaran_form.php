<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TAHUN_AJARAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Tahun Ajar <?php echo form_error('tahun_ajar') ?></td><td><input type="text" class="form-control" name="tahun_ajar" id="tahun_ajar" placeholder="Tahun Ajar" value="<?php echo $tahun_ajar; ?>" /></td></tr>
	    <tr><td width='200'>Thajar Mulai <?php echo form_error('thajar_mulai') ?></td><td><input type="date" class="form-control" name="thajar_mulai" id="thajar_mulai" placeholder="Thajar Mulai" value="<?php echo $thajar_mulai; ?>" /></td></tr>
	    <tr><td width='200'>Thajar Selesai <?php echo form_error('thajar_selesai') ?></td><td><input type="date" class="form-control" name="thajar_selesai" id="thajar_selesai" placeholder="Thajar Selesai" value="<?php echo $thajar_selesai; ?>" /></td></tr>
	    <tr><td width='200'>Pts <?php echo form_error('pts') ?></td><td><input type="date" class="form-control" name="pts" id="pts" placeholder="Pts" value="<?php echo $pts; ?>" /></td></tr>
	    <tr><td width='200'>Pas <?php echo form_error('pas') ?></td><td><input type="date" class="form-control" name="pas" id="pas" placeholder="Pas" value="<?php echo $pas; ?>" /></td></tr>
	    <tr><td width='200'>Semester <?php echo form_error('semester') ?></td><td><input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('tahun_ajaran') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>