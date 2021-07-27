<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <?php echo anchor(site_url('Transaksi/outdex'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Transaksi Masuk', 'class="btn btn-primary btn-sm" style="margin-bottom: 10px"'); ?>
                    <?php echo anchor(site_url('Transaksi/outdexreal'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Transaksi Keluar', 'class="btn btn-danger btn-sm" style="margin-bottom: 10px"'); ?>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">KELOLA DATA TRANSAKSI</h6>
                        </div>
                        <div class="card-body">
 <div class="table w-100 p-3">
    <table class="table table-bordered fs-2" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
		<th>Jenis Trx</th>
		<th>Tanggal Trx</th>
		<th>Kode Invoice</th>
		<th>Status Trx</th>
		<th>Action</th>
            </tr>
            
</thead><tbody>

            <?php
            foreach ($transaksi_data as $transaksi)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $transaksi->jenis_trx ?></td>
			<td><?php echo $transaksi->tanggal_trx ?></td>
			<td><?php echo $transaksi->kode_invoice ?></td>
			<td><?php echo $transaksi->status_trx ?></td>
			<td style="text-align:center" width="200px">
				<?php
                if ($transaksi->jenis_trx == 'IN' && $transaksi->status_trx == 'PROSES') {
                $inv = explode('/', $transaksi->kode_invoice);

                echo anchor(site_url('Transaksi/step2/'.$transaksi->id.'/'.$inv[1]),'<i class="fas fa-check"></i> Lanjutkan','class="btn btn-success btn-sm"');
                 } 
                echo '  ';
				echo ($transaksi->status_trx == 'SELESAI') ? anchor(site_url('transaksi/read/'.$transaksi->id),'<i class="fas fa-print"></i> Cetak','class="btn btn-info btn-sm"') : ''; 
				echo '  '; 
				echo ($transaksi->status_trx != 'BATAL') ? anchor(site_url('transaksi/delete/'.$transaksi->id),'<i class="fas fa-user-times"></i> Batal','class="btn btn-danger btn-sm tombol-konfirmasi"') : ''; 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>