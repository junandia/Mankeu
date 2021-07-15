<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA SUB_KATEGORI</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Kategori <?php echo form_error('id_kategori') ?></td><td><?php echo cmb_dinamis('id_kategori','kategori_pembayaran','nama_kategori','id',$id_kategori, 'ASC') ?></td></tr>
	    <tr><td width='200'>Nama Sub Kategori <?php echo form_error('nama_sub_kategori') ?></td><td><input type="text" class="form-control" name="nama_sub_kategori" id="nama_sub_kategori" placeholder="Nama Sub Kategori" value="<?php echo $nama_sub_kategori; ?>" /></td></tr>
	    <tr><td width='200'>Nilai Bayar <?php echo form_error('nilai_bayar') ?></td><td><input type="text" class="form-control" name="nilai_bayar" id="nilai_bayar" placeholder="Nilai Bayar" value="<?php echo $nilai_bayar; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('SubKategori') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>