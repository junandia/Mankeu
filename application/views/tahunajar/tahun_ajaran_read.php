<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Tahun_ajaran Read</h2>
        <table class="table">
	    <tr><td>Tahun Ajar</td><td><?php echo $tahun_ajar; ?></td></tr>
	    <tr><td>Thajar Mulai</td><td><?php echo $thajar_mulai; ?></td></tr>
	    <tr><td>Thajar Selesai</td><td><?php echo $thajar_selesai; ?></td></tr>
	    <tr><td>Pts</td><td><?php echo $pts; ?></td></tr>
	    <tr><td>Pas</td><td><?php echo $pas; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tahunajar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>