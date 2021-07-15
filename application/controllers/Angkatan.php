<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Angkatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tahun_angkatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/angkatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/angkatan/index/';
            $config['first_url'] = base_url() . 'index.php/angkatan/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tahun_angkatan_model->total_rows($q);
        $angkatan = $this->Tahun_angkatan_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'angkatan_data' => $angkatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','angkatan/tahun_angkatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tahun_angkatan_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'tahun_angkatan' => $row->tahun_angkatan,
	    );
            $this->template->load('tema','angkatan/tahun_angkatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('angkatan'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('angkatan/create_action'),
	    'id' => set_value('id'),
	    'tahun_angkatan' => set_value('tahun_angkatan'),
	);
        $this->template->load('tema','angkatan/tahun_angkatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tahun_angkatan' => $this->input->post('tahun_angkatan',TRUE),
	    );

            $this->Tahun_angkatan_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('angkatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tahun_angkatan_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('angkatan/update_action'),
		'id' => set_value('id', $row->id),
		'tahun_angkatan' => set_value('tahun_angkatan', $row->tahun_angkatan),
	    );
            $this->template->load('tema','angkatan/tahun_angkatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('angkatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tahun_angkatan' => $this->input->post('tahun_angkatan',TRUE),
	    );

            $this->Tahun_angkatan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('angkatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tahun_angkatan_model->get_by_id($id);

        if ($row) {
            $this->Tahun_angkatan_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('angkatan'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('angkatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tahun_angkatan', 'tahun angkatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Angkatan.php */
/* Location: ./application/controllers/Angkatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-12 10:22:34 */
/* http://harviacode.com */