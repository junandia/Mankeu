<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SUB_KATEGORI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Id Kategori <?php echo form_error('id_kategori') ?></td><td><input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" /></td></tr>
	    <tr><td width='200'>Nama Sub Kategori <?php echo form_error('nama_sub_kategori') ?></td><td><input type="text" class="form-control" name="nama_sub_kategori" id="nama_sub_kategori" placeholder="Nama Sub Kategori" value="<?php echo $nama_sub_kategori; ?>" /></td></tr>
	    <tr><td width='200'>Nilai Bayar <?php echo form_error('nilai_bayar') ?></td><td><input type="text" class="form-control" name="nilai_bayar" id="nilai_bayar" placeholder="Nilai Bayar" value="<?php echo $nilai_bayar; ?>" /></td></tr>
	    <tr><td width='200'>Id Unit <?php echo form_error('id_unit') ?></td><td><input type="text" class="form-control" name="id_unit" id="id_unit" placeholder="Id Unit" value="<?php echo $id_unit; ?>" /></td></tr>
	    <tr><td width='200'>Id Tahun Angkatan <?php echo form_error('id_tahun_angkatan') ?></td><td><input type="text" class="form-control" name="id_tahun_angkatan" id="id_tahun_angkatan" placeholder="Id Tahun Angkatan" value="<?php echo $id_tahun_angkatan; ?>" /></td></tr>
	    <tr><td width='200'>Id Tahun Ajaran <?php echo form_error('id_tahun_ajaran') ?></td><td><input type="text" class="form-control" name="id_tahun_ajaran" id="id_tahun_ajaran" placeholder="Id Tahun Ajaran" value="<?php echo $id_tahun_ajaran; ?>" /></td></tr>
	    <tr><td width='200'>Pembayaran <?php echo form_error('pembayaran') ?></td><td><input type="text" class="form-control" name="pembayaran" id="pembayaran" placeholder="Pembayaran" value="<?php echo $pembayaran; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('subkategori') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>