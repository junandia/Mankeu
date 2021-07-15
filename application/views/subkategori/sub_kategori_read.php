<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Sub_kategori Read</h2>
        <table class="table">
	    <tr><td>Id Kategori</td><td><?php echo $id_kategori; ?></td></tr>
	    <tr><td>Nama Sub Kategori</td><td><?php echo $nama_sub_kategori; ?></td></tr>
	    <tr><td>Nilai Bayar</td><td><?php echo $nilai_bayar; ?></td></tr>
	    <tr><td>Id Unit</td><td><?php echo $id_unit; ?></td></tr>
	    <tr><td>Id Tahun Angkatan</td><td><?php echo $id_tahun_angkatan; ?></td></tr>
	    <tr><td>Id Tahun Ajaran</td><td><?php echo $id_tahun_ajaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('subkategori') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>