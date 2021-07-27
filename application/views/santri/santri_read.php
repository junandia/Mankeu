<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Santri Read</h2>
        <table class="table">
	    <tr><td>Nama Santri</td><td><?php echo $nama_santri; ?></td></tr>
	    <tr><td>Id Angkatan</td><td><?php echo $id_angkatan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('santri') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>