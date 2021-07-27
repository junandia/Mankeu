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
			
			//$this->template->load('tema','laporan/keuangan');
		}


		function santri(){
			$this->template->load('tema','laporan/santri');
		}
	}
?>