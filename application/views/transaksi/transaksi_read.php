<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Transaksi Read</h2>
        <table class="table">
	    <tr><td>Jenis Trx</td><td><?php echo $jenis_trx; ?></td></tr>
	    <tr><td>Tanggal Trx</td><td><?php echo $tanggal_trx; ?></td></tr>
	    <tr><td>Id Santri</td><td><?php echo $id_santri; ?></td></tr>
	    <tr><td>Id Sub Kategori</td><td><?php echo $id_sub_kategori; ?></td></tr>
	    <tr><td>Nilai Bayar</td><td><?php echo $nilai_bayar; ?></td></tr>
	    <tr><td>Kode Invoice</td><td><?php echo $kode_invoice; ?></td></tr>
	    <tr><td>Status Trx</td><td><?php echo $status_trx; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>