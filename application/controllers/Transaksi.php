<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Transaksi_model');
        $this->load->model('Tahun_ajaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/transaksi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/transaksi/index/';
            $config['first_url'] = base_url() . 'index.php/transaksi/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Transaksi_model->total_rows($q);
        $transaksi = $this->Transaksi_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'transaksi_data' => $transaksi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','transaksi/transaksi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Transaksi_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'jenis_trx' => $row->jenis_trx,
		'tanggal_trx' => $row->tanggal_trx,
		'id_santri' => $row->id_santri,
		'id_sub_kategori' => $row->id_sub_kategori,
		'nilai_bayar' => $row->nilai_bayar,
		'kode_invoice' => $row->kode_invoice,
		'status_trx' => $row->status_trx,
	    );
            $this->template->load('tema','transaksi/transaksi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('transaksi/create_action'),
	    'id' => set_value('id'),
	    'jenis_trx' => set_value('jenis_trx'),
	    'tanggal_trx' => set_value('tanggal_trx', date('Y-m-d')),
	    'id_santri' => set_value('id_santri'),
	    'id_sub_kategori' => set_value('id_sub_kategori'),
	    'nilai_bayar' => set_value('nilai_bayar'),
	    'kode_invoice' => set_value('kode_invoice'),
	    'status_trx' => set_value('status_trx'),
	);
        $this->template->load('tema','transaksi/transaksi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jenis_trx' => $this->input->post('jenis_trx',TRUE),
		'tanggal_trx' => $this->input->post('tanggal_trx',TRUE),
		'id_santri' => $this->input->post('id_santri',TRUE),
		'id_sub_kategori' => $this->input->post('id_sub_kategori',TRUE),
		'nilai_bayar' => $this->input->post('nilai_bayar',TRUE),
		'kode_invoice' => $this->input->post('kode_invoice',TRUE),
		'status_trx' => $this->input->post('status_trx',TRUE),
	    );

            $this->Transaksi_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('transaksi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Transaksi_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('transaksi/update_action'),
		'id' => set_value('id', $row->id),
		'jenis_trx' => set_value('jenis_trx', $row->jenis_trx),
		'tanggal_trx' => set_value('tanggal_trx', $row->tanggal_trx),
		'id_santri' => set_value('id_santri', $row->id_santri),
		'id_sub_kategori' => set_value('id_sub_kategori', $row->id_sub_kategori),
		'nilai_bayar' => set_value('nilai_bayar', $row->nilai_bayar),
		'kode_invoice' => set_value('kode_invoice', $row->kode_invoice),
		'status_trx' => set_value('status_trx', $row->status_trx),
	    );
            $this->template->load('tema','transaksi/transaksi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transaksi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jenis_trx' => $this->input->post('jenis_trx',TRUE),
		'tanggal_trx' => $this->input->post('tanggal_trx',TRUE),
		'id_santri' => $this->input->post('id_santri',TRUE),
		'id_sub_kategori' => $this->input->post('id_sub_kategori',TRUE),
		'nilai_bayar' => $this->input->post('nilai_bayar',TRUE),
		'kode_invoice' => $this->input->post('kode_invoice',TRUE),
		'status_trx' => $this->input->post('status_trx',TRUE),
	    );

            $this->Transaksi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('transaksi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Transaksi_model->get_by_id($id);

        if ($row) {
            $this->Transaksi_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('transaksi'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('transaksi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis_trx', 'jenis trx', 'trim|required');
	$this->form_validation->set_rules('tanggal_trx', 'tanggal trx', 'trim|required');
	$this->form_validation->set_rules('id_santri', 'id santri', 'trim|required');
	$this->form_validation->set_rules('id_sub_kategori', 'id sub kategori', 'trim|required');
	$this->form_validation->set_rules('nilai_bayar', 'nilai bayar', 'trim|required');
	$this->form_validation->set_rules('kode_invoice', 'kode invoice', 'trim|required');
	$this->form_validation->set_rules('status_trx', 'status trx', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function outdex()
    {
        if($this->input->post()){
            $data = [
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'id_santri'    => $this->input->post('id_santri')
            ];

            $this->Transaksi_model->save($data)
            //$return = $this->template->load('tema','transaksi/index', $data);
        }else{
            $data = [
                'tahun_ajaran' => $this->Tahun_ajaran_model->getActiveThAjar(),
                'disabled' => ''
            ];
            $return = $this->template->load('tema','transaksi/index', $data);
        } 

        return $return;
    }

    public function step2($id)
    {
        return $id;
    }

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-13 11:09:08 */
/* http://harviacode.com */