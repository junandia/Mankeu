<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <?php echo anchor(site_url('tahun_ajaran/create'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm" style="margin-bottom: 10px"'); ?><div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">KELOLA DATA TAHUN_AJARAN</h6>
                        </div>
                        <div class="card-body">
 <div class="table w-100 p-3">
    <table class="table table-bordered fs-2" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
		<th>Tahun Ajar</th>
		<th>Thajar Mulai</th>
		<th>Thajar Selesai</th>
		<th>Pts</th>
		<th>Pas</th>
		<th>Semester</th>
		<th>Action</th>
            </tr>
            
</thead><tbody>

            <?php
            foreach ($tahun_ajaran_data as $tahun_ajaran)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $tahun_ajaran->tahun_ajar ?></td>
			<td><?php echo $tahun_ajaran->thajar_mulai ?></td>
			<td><?php echo $tahun_ajaran->thajar_selesai ?></td>
			<td><?php echo $tahun_ajaran->pts ?></td>
			<td><?php echo $tahun_ajaran->pas ?></td>
			<td><?php echo $tahun_ajaran->semester ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tahun_ajaran/read/'.$tahun_ajaran->id),'<i class="far fa-eye"></i>','class="btn btn-info btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('tahun_ajaran/update/'.$tahun_ajaran->id),'<i class="fas fa-pen"></i>','class="btn btn-warning btn-sm"'); 
				echo '  '; 
				echo anchor(site_url('tahun_ajaran/delete/'.$tahun_ajaran->id),'<i class="fas fa-trash"></i>','class="btn btn-danger btn-sm tombol-hapus"'); 
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