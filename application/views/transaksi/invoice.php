<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kwitansi</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<style type="text/css">
	#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
    @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

}
</style>

</head>
<body>
    <div class="toolbar no-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        </div>
        <hr>
    </div>

   <div id="invoice">

    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://azzainiyyah.sch.id">
                            <img src="https://s.sim.siap-online.com//upload/sekolah/20258059.150209195757.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://azzainiyyah.sch.id">
                            Azzainiyyah
                            </a>
                        </h2>
                        <div>NPSN : 0258059</div>
                        <div>Jln.Pondok Halimun Nagrog Sinar Barokah</div>
                        <div>Perbawati Kec.Sukabumi Kab.Sukabumi</div>
                        <div>info@azzainiyyah.sch.id</div>
						<div>TLP : (0266) 232955</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?php echo $id_santri ?></h2>
                        <div class="address"><?php echo $tahun_angkatan ?></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id"><?php echo $kode_invoice ?></h1>
                        <div class="date">Date of Invoice: <?php echo $tanggal_trx ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">Deskripsi</th>
                            <th class="text-right">Nilai Bayar</th>
                            <th class="text-right">Cara Pembayaran</th>
                            <th class="text-right">Nominal Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $gtotal = 0;
                        	foreach($detail_transaksi as $data_transaksi){
                        ?>
                        <tr>
                            <td class="no"><?php echo $data_transaksi->id_sub_kategori ?></td>
                            <td class="text-left"><h3><?php echo $data_transaksi->nama_sub_kategori ?></h3><?php echo ($data_transaksi->pembayaran == 'BULANAN') ? $data_transaksi->nama_bulan : '' ?></td>
                            <td class="unit">Rp. <?php echo number_format($data_transaksi->nilai_bayar) ?></td>
                            <td class="qty"><?php echo ($data_transaksi->pembayaran == 'CICIL') ? 'Bisa Dicicil' : $data_transaksi->pembayaran; ?></td>
                            <td class="total">Rp. <?php echo number_format($data_transaksi->nominal_bayar) ?> </td>
                        </tr>
                        <?php
                        	$gtotal = $data_transaksi->nominal_bayar+$gtotal;
                        	}
                         ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>Rp.<?php echo number_format($gtotal)?></td>
                        </tr>
                    </tfoot>
                </table>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
<script type="text/javascript">
	 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
</body>
</html>