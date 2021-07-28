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

		function get_pengeluaran($awal,$akhir){
			$this->db->join('pengeluaran_detail_v2', 'pengeluaran_detail_v2.id_transaksi = transaksi.id');
			$this->db->join('kategori_pembayaran', 'kategori_pembayaran.id = pengeluaran_detail_v2.id_kategori');
			$this->db->join('users', 'users.id = transaksi.id_user');
			$this->db->where(['transaksi.tanggal_trx >='=>$awal, 'transaksi.tanggal_trx <=' => $akhir]);
			$this->db->order_by('tanggal_trx', 'DESC');
			return $this->db->get('transaksi')->result();
		}

		function get_pemasukan($awal,$akhir){
			$this->db->join('transaksi_detail_v2', 'transaksi_detail_v2.id_transaksi = transaksi.id');
			$this->db->join('sub_kategori', 'sub_kategori.id = transaksi_detail_v2.id_sub_kategori');
			$this->db->join('kategori_pembayaran', 'kategori_pembayaran.id = sub_kategori.id_kategori');
			$this->db->join('users', 'users.id = transaksi.id_user');
			$this->db->join('santri', 'transaksi_detail_v2.id_santri = santri.id');
			$this->db->join('tahun_angkatan', 'santri.id_angkatan = tahun_angkatan.id');
			$this->db->join('groups', 'groups.id = tahun_angkatan.id_grup');
			$this->db->where(['transaksi.tanggal_trx >='=>$awal, 'transaksi.tanggal_trx <=' => $akhir]);
			$this->db->order_by('tanggal_trx', 'DESC');
			return $this->db->get('transaksi')->result();
		}
	}
 ?>