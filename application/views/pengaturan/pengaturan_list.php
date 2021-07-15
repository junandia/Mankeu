<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">KELOLA DATA PENGATURAN</h6>
                        </div>
                        <div class="card-body">
 <div class="table w-100 p-3">
    <table class="table table-bordered fs-2" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
		<th>Tahun Ajaran</th>
		<th>Action</th>
            </tr>
            
</thead><tbody>

            <?php
            foreach ($pengaturan_data as $pengaturan)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $pengaturan->tahun_ajaran ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pengaturan/update/'.$pengaturan->id),'<i class="fas fa-pen"></i>','class="btn btn-warning btn-sm"'); 
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