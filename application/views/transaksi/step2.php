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
                                        <td><?php echo $transaksi->nama_santri ?></td>
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
                            <?php echo form_open('Transaksi/proses') ?>
                            <table class="table">
                                <thead>
                                    <th>Nama Unit</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Tagihan</th>
                                    <th>Jenis Tagihan</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(is_array($tunggakan_bulanan) || is_object($tunggakan_bulanan)){
                                        foreach ($tunggakan_bulanan as $data_tunggakan_bulanan) {
                                            //if ($data_tunggakan_bulanan->bulan_bayar == null) {
                                            if (terakhir_bayar($id_santri,$data_tunggakan_bulanan->id) == null) {
                                             $awal = date('Ym', strtotime($data_tunggakan_bulanan->thajar_mulai));
                                             $o = 0;
                                         }else{
                                            if (terakhir_bayar($id_santri,$data_tunggakan_bulanan->id) < $data_tunggakan_bulanan->thajar_mulai) {
                                             $awal = date('Ym', strtotime($data_tunggakan_bulanan->thajar_mulai));
                                             $o = 0;
                                         }else{
                                            $awal = date('Ym', strtotime(terakhir_bayar($id_santri,$data_tunggakan_bulanan->id)));
                                            $o = 1;
                                        }
                                    }
                                            //var_dump($awal);

                                    $sekarang = date('Ym', strtotime($data_tunggakan_bulanan->thajar_selesai));
                                    $jumlah_tunggakan = $sekarang-$awal;
                                    for ($i=$o; $i <= $jumlah_tunggakan; $i++) { 
                                        $a = $awal+$i;
                                                            //echo bulan($a);
                                        ?>
                                        <tr>
                                            <td colspan="2"><?php echo $data_tunggakan_bulanan->sub_kategori.' - '.bulan($a) ?></td>
                                            <td>
                                                <input type="number" min="0" name="nominal_bayar[]" value="<?php echo $data_tunggakan_bulanan->nilai_bayar ?>" class="form-control">
                                                <input type="hidden" name="id_sub_kategori[]" value="<?php echo $data_tunggakan_bulanan->id ?>">
                                                <input type="hidden" name="bulan_bayar[]" value="<?php echo date('Y-m-01', strtotime($a.'01')) ?>">
                                                <input type="hidden" name="id_transaksi[]" value="<?php echo $transaksi->id ?>">
                                                <input type="hidden" name="id_santri[]" value="<?php echo $id_santri ?>">
                                            </td>
                                            <td><?php echo $data_tunggakan_bulanan->pembayaran ?></td>
                                            <td>
                                                <select name="bayar[]" class="form-control">
                                                    <option value="BELUM_BYR">Belum Bayar</option>
                                                    <option value="BAYAR">Bayar</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                            //}
                                }
                            }
                            ?> 
                            <?php 
                            if(count($tunggakan_cicil) > 0 &&is_array($tunggakan_cicil) || is_object($tunggakan_cicil)){
                                foreach ($tunggakan_cicil as $data_tunggakan_cicil) {
                                    if ((int)$data_tunggakan_cicil->sudah_bayar <= (int)$data_tunggakan_cicil->nilai_bayar) {
                                                // code...
                                        $max = $data_tunggakan_cicil->nilai_bayar-$data_tunggakan_cicil->sudah_bayar;
                                        ?>
                                        <tr>
                                            <td colspan="2"><?php echo $data_tunggakan_cicil->sub_kategori ?></td>
                                            <td><input type="number" name="nominal_bayar[]" min="0" max="<?php echo $max; ?>" value="<?php echo $max ?>" class="form-control"> / <?php echo $data_tunggakan_cicil->nilai_bayar ?>
                                            <input type="hidden" name="id_sub_kategori[]" value="<?php echo $data_tunggakan_cicil->id ?>">
                                            <input type="hidden" name="id_transaksi[]" value="<?php echo $transaksi->id ?>">
                                            <input type="hidden" name="bulan_bayar[]" value="<?php echo date('Y-m-01') ?>">
                                            <input type="hidden" name="id_santri[]" value="<?php echo $id_santri ?>">
                                        </td>
                                        <td>BISA <?php echo $data_tunggakan_cicil->pembayaran ?></td>
                                        <td>
                                            <select name="bayar[]" class="form-control">
                                                <option value="BELUM_BYR">Belum Bayar</option>
                                                <option value="BAYAR">Bayar</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <?php 
                        if(count($tunggakan_sekali) > 0 &&is_array($tunggakan_sekali) || is_object($tunggakan_sekali)){
                            foreach($tunggakan_sekali as $data_tunggakan_sekali){ ?>
                                <tr>
                                    <td><?php echo $data_tunggakan_sekali->nama_unit ?></td>
                                    <td><?php echo $data_tunggakan_sekali->nama_sub_kategori.' - '.$data_tunggakan_sekali->tahun_angkatan ?></td>
                                    <td>
                                        <input type="number" min="0" name="nominal_bayar[]" value="<?php echo $data_tunggakan_sekali->nilai_bayar ?>" class="form-control">
                                        <input type="hidden" name="id_sub_kategori[]" value="<?php echo $data_tunggakan_sekali->id ?>">
                                        <input type="hidden" name="id_transaksi[]" value="<?php echo $transaksi->id ?>">
                                        <input type="hidden" name="bulan_bayar[]" value="<?php echo date('Y-m-01') ?>">
                                        <input type="hidden" name="id_santri[]" value="<?php echo $id_santri ?>">
                                    </td>
                                    <td><?php echo $data_tunggakan_sekali->pembayaran ?></td>
                                    <td>
                                        <select name="bayar[]" class="form-control">
                                            <option value="BELUM_BYR">Belum Bayar</option>
                                            <option value="BAYAR">Bayar</option>
                                        </select>
                                    </td>
                                </tr>
                                <?php 
                            }
                        }
                        ?>
                        <?php 
                        if(count($tunggakan_tahunan) > 0 &&is_array($tunggakan_tahunan) || is_object($tunggakan_tahunan)){
                            foreach($tunggakan_tahunan as $data_transaksi_tahunan){ ?>
                                <tr>
                                    <td><?php echo $data_transaksi_tahunan->nama_unit ?></td>
                                    <td><?php echo $data_transaksi_tahunan->nama_sub_kategori.' - '.$data_transaksi_tahunan->tahun_angkatan ?></td>
                                    <td>
                                        <input type="number" min="0" name="nominal_bayar[]" value="<?php echo $data_transaksi_tahunan->nilai_bayar ?>" class="form-control">
                                        <input type="hidden" name="id_sub_kategori[]" value="<?php echo $data_transaksi_tahunan->id ?>">
                                        <input type="hidden" name="id_transaksi[]" value="<?php echo $transaksi->id ?>">
                                        <input type="hidden" name="bulan_bayar[]" value="<?php echo date('Y-m-01') ?>">
                                        <input type="hidden" name="id_santri[]" value="<?php echo $id_santri ?>">
                                    </td>
                                    <td><?php echo $data_transaksi_tahunan->pembayaran ?></td>
                                    <td>
                                        <select name="bayar[]" class="form-control">
                                            <option value="BELUM_BYR">Belum Bayar</option>
                                            <option value="BAYAR">Bayar</option>
                                        </select>
                                    </td>
                                </tr>
                                <?php 
                            }
                        } 
                        ?>
                    </tbody>
                    <footer>
                        <tr align="right">
                            <th colspan="5"><input type="submit" name="simpan" value="Proses Transaksi" class="btn btn-primary"></th>
                        </tr>
                    </footer>
                </table>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>
