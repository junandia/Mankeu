<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TRANSAKSI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Jenis Trx <?php echo form_error('jenis_trx') ?></td><td>
	    	<select class="form-control" name="jenis_trx">
	    		<option value="in">Pemasukan</option>
	    		<option value="out">Pengeluaran</option>
	    	</select>
	    </td></tr>
	    <tr><td width='200'>Tanggal Trx <?php echo form_error('tanggal_trx') ?></td><td><input type="date" class="form-control" name="tanggal_trx" id="tanggal_trx" placeholder="Tanggal Trx" value="<?php echo $tanggal_trx; ?>" /></td></tr>
	    <tr><td width='200'>Santri <?php echo form_error('id_santri') ?></td><td><?php echo select2_santri('id','id_santri','santri','nama_santri','Masukan Nama Santri') ?></td></tr>
	    <tr><td width='200'>Sub Kategori <?php echo form_error('id_sub_kategori') ?></td><td><?php echo select2_dinamis('id','id_sub_kategori','sub_kategori','nama_sub_kategori','Pilih Sub Kategori') ?></tr>
	    <tr><td width='200'>Nilai Bayar <?php echo form_error('nilai_bayar') ?></td><td><input type="text" class="form-control" name="nilai_bayar" id="nilai_bayar" placeholder="Nilai Bayar" value="<?php echo $nilai_bayar; ?>" />*Ubah jika nilai yang muncul tidak sesuai</td></tr>
	    <tr><td width='200'>Kode Invoice <?php echo form_error('kode_invoice') ?></td><td><input type="text" class="form-control" name="kode_invoice" id="kode_invoice" placeholder="Kode Invoice" value="<?php echo $kode_invoice; ?>" /></td></tr>
	    <tr><td width='200'>Status Trx <?php echo form_error('status_trx') ?></td><td><input type="text" class="form-control" name="status_trx" id="status_trx" placeholder="Status Trx" value="<?php echo $status_trx; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('transaksi') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>