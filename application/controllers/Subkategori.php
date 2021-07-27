<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subkategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Sub_kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/subkategori/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/subkategori/index/';
            $config['first_url'] = base_url() . 'index.php/subkategori/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Sub_kategori_model->total_rows($q);
        $subkategori = $this->Sub_kategori_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'subkategori_data' => $subkategori,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','subkategori/sub_kategori_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Sub_kategori_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'id_kategori' => $row->id_kategori,
		'nama_sub_kategori' => $row->nama_sub_kategori,
		'nilai_bayar' => $row->nilai_bayar,
		'id_tahun_angkatan' => $row->id_tahun_angkatan,
		'pembayaran' => $row->pembayaran,
	    );
            $this->template->load('tema','subkategori/sub_kategori_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subkategori'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('subkategori/create_action'),
	    'id' => set_value('id'),
	    'id_kategori' => set_value('id_kategori'),
	    'nama_sub_kategori' => set_value('nama_sub_kategori'),
	    'nilai_bayar' => set_value('nilai_bayar'),
	    'id_tahun_angkatan' => set_value('id_tahun_angkatan'),
	    'pembayaran' => set_value('pembayaran'),
	);
        $this->template->load('tema','subkategori/sub_kategori_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'nama_sub_kategori' => $this->input->post('nama_sub_kategori',TRUE),
		'nilai_bayar' => $this->input->post('nilai_bayar',TRUE),
		'id_tahun_angkatan' => $this->input->post('id_tahun_angkatan',TRUE),
		'pembayaran' => $this->input->post('pembayaran',TRUE),
	    );

            $this->Sub_kategori_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('subkategori'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sub_kategori_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('subkategori/update_action'),
		'id' => set_value('id', $row->id),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'nama_sub_kategori' => set_value('nama_sub_kategori', $row->nama_sub_kategori),
		'nilai_bayar' => set_value('nilai_bayar', $row->nilai_bayar),
		'id_tahun_angkatan' => set_value('id_tahun_angkatan', $row->id_tahun_angkatan),
		'pembayaran' => set_value('pembayaran', $row->pembayaran),
	    );
            $this->template->load('tema','subkategori/sub_kategori_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subkategori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'nama_sub_kategori' => $this->input->post('nama_sub_kategori',TRUE),
		'nilai_bayar' => $this->input->post('nilai_bayar',TRUE),
		'id_tahun_angkatan' => $this->input->post('id_tahun_angkatan',TRUE),
		'pembayaran' => $this->input->post('pembayaran',TRUE),
	    );

            $this->Sub_kategori_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('subkategori'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sub_kategori_model->get_by_id($id);

        if ($row) {
            $this->Sub_kategori_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('subkategori'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('subkategori'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('nama_sub_kategori', 'nama sub kategori', 'trim|required');
	$this->form_validation->set_rules('nilai_bayar', 'nilai bayar', 'trim|required');
	$this->form_validation->set_rules('id_tahun_angkatan', 'id tahun angkatan', 'trim|required');
	$this->form_validation->set_rules('pembayaran', 'pembayaran', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Subkategori.php */
/* Location: ./application/controllers/Subkategori.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-27 00:17:59 */
/* http://harviacode.com */