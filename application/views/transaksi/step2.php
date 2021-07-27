<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                            </div>
                            <div class="card-body">
                               <div class="w-100 p-3">
                                <table class="table">
                                    <tr>
                                        <td width="200">Tahun Ajaran</td>
                                        <td>:</td>
                                        <td><?php echo $transaksi->tahun_ajar ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Santri</td>
                                        <td>:</td>
                                        <td><?php echo $data_santri->nama_santri ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Tanggal</td>
                                        <td>:</td>
                                        <td><?php echo $transaksi->tanggal_trx ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Tagihan</h6>
                            </div>
                            <div class="card-body">
                               <div class="w-100 p-3">
                                <table class="table" id="dataTable">
                                    <thead>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Jumlah Tagihan</th>
                                        <th>Santri Bayar</th>
                                    </thead>
                                    <tbody>
                                     <?php 
                                        foreach($get_data as $detail_transaksi_v2){
                                    ?>
                                    <tr>
                                        <td><?php echo $detail_transaksi_v2->nama_kategori ?></td>
                                        <td><?php echo $detail_transaksi_v2->nama_sub_kategori ?></td>
                                        <td><?php echo $detail_transaksi_v2->nilai_bayar ?></td>
                                        <td><?php echo $detail_transaksi_v2->nominal_bayar ?></td>
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
                    <?php echo form_open() ?>
                    <table class="table">
                        <tr>
                            <td>
                                <?php 
                                    echo select2_transaksi('id','id_sub_kategori','sub_kategori','nama_sub_kategori','Pilih Sub Kategori') 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <select class="form-control" name="id_bulan" id="bulan" required>
                                    <option>Pilih</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="number" name="nominal_bayar" class="form-control" placeholder="Nominal Bayar" required></td>
                        </tr>
                        <tr>
                            <td><textarea name="catatan" class="form-control" required placeholder="Masukan Catatan"></textarea></td>
                        </tr>
                        <tr align="right">
                            <th colspan="5"><input type="submit" name="simpan" value="Tambah" class="btn btn-primary"> <a href="<?php echo base_url('Transaksi/done/'.$transaksi->id) ?>" class="btn btn-warning" onclick="return confirm('Anda Yakin?');">Selesaikan Transaksi</a></th>
                        </tr>
                    </table>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
