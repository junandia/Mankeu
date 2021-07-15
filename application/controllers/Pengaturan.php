<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Pengaturan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pengaturan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pengaturan/index/';
            $config['first_url'] = base_url() . 'index.php/pengaturan/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pengaturan_model->total_rows($q);
        $pengaturan = $this->Pengaturan_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengaturan_data' => $pengaturan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','pengaturan/pengaturan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengaturan_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'tahun_ajaran' => $row->tahun_ajaran,
		'id' => $row->id,
	    );
            $this->template->load('tema','pengaturan/pengaturan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('pengaturan/create_action'),
	    'tahun_ajaran' => set_value('tahun_ajaran'),
	    'id' => set_value('id'),
	);
        $this->template->load('tema','pengaturan/pengaturan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
	    );

           // $this->Pengaturan_model->insert($data);
           // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('pengaturan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengaturan_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('pengaturan/update_action'),
		'tahun_ajaran' => set_value('tahun_ajaran', $row->tahun_ajaran),
		'id' => set_value('id', $row->id),
	    );
            $this->template->load('tema','pengaturan/pengaturan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
	    );

            $this->Pengaturan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('pengaturan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengaturan_model->get_by_id($id);

        if ($row) {
            $this->Pengaturan_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('pengaturan'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/Pengaturan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-13 09:15:25 */
/* http://harviacode.com */