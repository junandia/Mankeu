<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Santri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Santri_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/santri/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/santri/index/';
            $config['first_url'] = base_url() . 'index.php/santri/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Santri_model->total_rows($q);
        $santri = $this->Santri_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'santri_data' => $santri,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','santri/santri_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Santri_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'nama_santri' => $row->nama_santri,
		'id_unit' => $row->id_unit,
		'id_angkatan' => $row->id_angkatan,
	    );
            $this->template->load('tema','santri/santri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('santri'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('santri/create_action'),
	    'id' => set_value('id'),
	    'nama_santri' => set_value('nama_santri'),
	    'id_unit' => set_value('id_unit'),
	    'id_angkatan' => set_value('id_angkatan'),
	);
        $this->template->load('tema','santri/santri_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_santri' => $this->input->post('nama_santri',TRUE),
		'id_unit' => $this->input->post('id_unit',TRUE),
		'id_angkatan' => $this->input->post('id_angkatan',TRUE),
	    );

            $this->Santri_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('santri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Santri_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('santri/update_action'),
		'id' => set_value('id', $row->id),
		'nama_santri' => set_value('nama_santri', $row->nama_santri),
		'id_unit' => set_value('id_unit', $row->id_unit),
		'id_angkatan' => set_value('id_angkatan', $row->id_angkatan),
	    );
            $this->template->load('tema','santri/santri_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('santri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_santri' => $this->input->post('nama_santri',TRUE),
		'id_unit' => $this->input->post('id_unit',TRUE),
		'id_angkatan' => $this->input->post('id_angkatan',TRUE),
	    );

            $this->Santri_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('santri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Santri_model->get_by_id($id);

        if ($row) {
            $this->Santri_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('santri'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('santri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_santri', 'nama santri', 'trim|required');
	$this->form_validation->set_rules('id_unit', 'id unit', 'trim|required');
	$this->form_validation->set_rules('id_angkatan', 'id angkatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Santri.php */
/* Location: ./application/controllers/Santri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-12 10:31:52 */
/* http://harviacode.com */