<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12 w-100 p-3">
                <div class="box box-warning box-solid">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <div class="table w-100 p-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Buat Transaksi</h6>
                            </div>
                            <div class="card-body">
                             <div class="w-100 p-3">
                                <?php echo form_open('Transaksi/outdexreal', ['method' => 'POST']); ?>
                                <table class="table">
                                    <tr>
                                        <td>Jenis Transaksi</td>
                                        <td>:</td>
                                        <td>
                                            <select name="jenis_trx" class="form-control" required="">
                                                <option value="OUT">Pengeluaran</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200">Kategori</td>
                                        <td>:</td>
                                        <td><?php echo cmb_dinamis('id_kategori', 'kategori_pembayaran', 'nama_kategori', 'id') ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Tahun Ajaran</td>
                                        <td>:</td>
                                        <td><?php echo cmb_dinamis('tahun_ajaran', 'tahun_ajaran', 'tahun_ajar', 'id', $tahun_ajaran, 'DESC', $disabled) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nominal Bayar</td>
                                        <td>:</td>
                                        <td><input type="number" name="nominal_bayar" min="1" class="form-control" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><textarea class="form-control" name="keterangan"></textarea></td>
                                    </tr>
                                    <tr align="right">
                                        <td colspan="3"><input type="submit" name="submit" class="btn btn-primary" value="Buat Transaksi" ></td>
                                    </tr>
                                </table>
                                <?php echo form_close(); ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
