<?php
	/**
	 * Class Laporan
	 */
	class Laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Laporan_model');
		}

		function keuangan(){
			if ($this->input->post()) {
				$awal  = $this->input->post('tanggal_awal');
				$akhir = $this->input->post('tanggal_akhir');
			}else{
				$awal  = date('Y-m-01');
				$akhir = date('Y-m-d');
			}
			$data = [
				'data_keuangan' => $this->Laporan_model->laporan_keuangan($awal,$akhir),
				'rekap_pengeluaran' => $this->Laporan_model->get_pengeluaran($awal,$akhir),
				'rekap_pemasukan' => $this->Laporan_model->get_pemasukan($awal,$akhir),
				'awal' => $awal,
				'akhir' => $akhir
			];
			$this->template->load('tema','laporan/keuangan',$data);
		}


		function santri(){
			show_undevelop();
			//$this->template->load('tema','laporan/santri');
		}
	}
?>