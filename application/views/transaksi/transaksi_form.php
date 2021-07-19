<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TRANSAKSI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Jenis Trx <?php echo form_error('jenis_trx') ?></td><td><input type="text" class="form-control" name="jenis_trx" id="jenis_trx" placeholder="Jenis Trx" value="<?php echo $jenis_trx; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal Trx <?php echo form_error('tanggal_trx') ?></td><td><input type="date" class="form-control" name="tanggal_trx" id="tanggal_trx" placeholder="Tanggal Trx" value="<?php echo $tanggal_trx; ?>" /></td></tr>
	    <tr><td width='200'>Kode Invoice <?php echo form_error('kode_invoice') ?></td><td><input type="text" class="form-control" name="kode_invoice" id="kode_invoice" placeholder="Kode Invoice" value="<?php echo $kode_invoice; ?>" /></td></tr>
	    <tr><td width='200'>Status Trx <?php echo form_error('status_trx') ?></td><td><input type="text" class="form-control" name="status_trx" id="status_trx" placeholder="Status Trx" value="<?php echo $status_trx; ?>" /></td></tr>
	    <tr><td width='200'>Id Santri <?php echo form_error('id_santri') ?></td><td><input type="text" class="form-control" name="id_santri" id="id_santri" placeholder="Id Santri" value="<?php echo $id_santri; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('transaksi') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>