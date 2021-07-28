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
				'awal' => $awal,
				'akhir' => $akhir
			];
			$this->template->load('tema','laporan/keuangan',$data);
		}


		function santri(){
			$this->template->load('tema','laporan/santri');
		}
	}
?>