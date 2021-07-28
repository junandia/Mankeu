<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Laporan Keuangan</h6>
                            </div>
                            <div class="card-body">
                                 <div class="w-100 p-3">
                                    <?php
                                        echo form_open('Laporan/keuangan');
                                    ?>
                                    <table align="center">
                                        <tr>
                                            <td>Tanggal Awal</td>
                                            <td width="300"><input type="date" name="tanggal_awal" value="<?php echo $awal ?>" class="form-control"></td>
                                            <td>S/d</td>
                                            <td>Tanggal Akhir</td>
                                            <td width="300"><input type="date" name="tanggal_akhir" value="<?php echo $akhir ?>" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><input type="submit" class="btn btn-primary btn-lg btn-block" name="show" value="Tampilkan Data"></td>
                                        </tr>
                                    </table>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <table>
                                <thead>
                                    <th>Kategori</th>
                                    <th>Pemasukan</th>
                                    <th>Pengeluaran</th>
                                    <th>Sisa Saldo</th>
                                </thead>
                                <tbody>
                                    <?php 
                                    $tpemasukan = 0;
                                    $tpengeluaran = 0;
                                    $subtotal = 0;
                                        foreach ($data_keuangan as $row_keuangan) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row_keuangan->nama_kategori ?></td>
                                        <td>Rp.<?php echo number_format($pemasukan = $row_keuangan->pemasukan) ?></td>
                                        <td>Rp.<?php echo number_format($pengeluaran = $row_keuangan->pengeluaran) ?></td>
                                        <td>Rp.<?php echo number_format($saldo = $pemasukan-$pengeluaran) ?></td>
                                    </tr>
                                    <?php
                                    $tpemasukan = $tpemasukan+$pemasukan;
                                    $tpengeluaran = $tpengeluaran+$pengeluaran;
                                    $subtotal = $subtotal+$saldo;
                                        }
                                     ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Rp.<?php echo number_format($tpemasukan) ?></th>
                                        <th>Rp.<?php echo number_format($tpengeluaran) ?></th>
                                        <th>Rp.<?php echo number_format($subtotal) ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengeluaran</h6>
                            </div>
                            <div class="card-body">
                                <div class="w-100 p-3">
                                    <table class="table" id="dataTable_laporan">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Transaksi</th>
                                                <th>Kategori</th>
                                                <th>Nominal Pengeluaran</th>
                                                <th>Catatan</th>
                                                <th>User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($rekap_pengeluaran as $data_rekap_pengeluaran) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data_rekap_pengeluaran->tanggal_trx ?></td>
                                                <td><?php echo $data_rekap_pengeluaran->nama_kategori ?></td>
                                                <td><?php echo $data_rekap_pengeluaran->nominal_bayar ?></td>
                                                <td><?php echo $data_rekap_pengeluaran->catatan ?></td>
                                                <td><?php echo $data_rekap_pengeluaran->first_name.' '.$data_rekap_pengeluaran->last_name ?></td>
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
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pemasukan</h6>
                            </div>
                            <div class="card-body">
                                <div class="w-100 p-3">
                                    <table class="table" id="dataTable_laporan2">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Santri</th>
                                                <th>Angkatan / Unit</th>
                                                <th>Sub Kategori</th>
                                                <th>Kategori</th>
                                                <th>Nominal Pemasukan</th>
                                                <th>Catatan</th>
                                                <th>User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($rekap_pemasukan as $data_rekap_pemasukan) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data_rekap_pemasukan->tanggal_trx ?></td>
                                                <td><?php echo $data_rekap_pemasukan->nama_santri ?></td>
                                                <td><?php echo $data_rekap_pemasukan->tahun_angkatan.' / '.$data_rekap_pemasukan->name ?></td>
                                                <td><?php echo $data_rekap_pemasukan->nama_sub_kategori ?></td>
                                                <td><?php echo $data_rekap_pemasukan->nama_kategori ?></td>
                                                <td><?php echo $data_rekap_pemasukan->nominal_bayar ?></td>
                                                <td><?php echo $data_rekap_pemasukan->catatan ?></td>
                                                <td><?php echo $data_rekap_pemasukan->first_name.' '.$data_rekap_pemasukan->last_name ?></td>
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
        </div>
    </section>
</div>
