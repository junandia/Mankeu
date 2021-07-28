<?php 
	/**
	 * Laporan Model
	 */
	class Laporan_model extends CI_Model
	{
		function laporan_keuangan($awal,$akhir){
			return $this->db->query('select
	kp.nama_kategori,
	IFNULL((
	select
		SUM(nominal_bayar)
	from
		transaksi_detail_v2 tdv
		join transaksi t on t.id = tdv.id_transaksi 
		where tdv .id_sub_kategori = sk2.id and t.tanggal_trx between "'.$awal.'" and "'.$akhir.'"),0) as pemasukan,
		IFNULL((
	select
		SUM(nominal_bayar)
	from
		pengeluaran_detail_v2 tdv
		join transaksi t on t.id = tdv.id_transaksi 
		where tdv.id_kategori = kp.id and t.tanggal_trx between "'.$awal.'" and "'.$akhir.'"
	),0) as pengeluaran
from
	kategori_pembayaran kp
left join sub_kategori sk2 on sk2.id_kategori = kp.id 
group by kp.id ')->result();
		}
	}
 ?>