<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Unit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Unit_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/unit/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/unit/index/';
            $config['first_url'] = base_url() . 'index.php/unit/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Unit_model->total_rows($q);
        $unit = $this->Unit_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'unit_data' => $unit,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','unit/groups_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Unit_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'name' => $row->name,
		'description' => $row->description,
	    );
            $this->template->load('tema','unit/groups_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('unit'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('unit/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'description' => set_value('description'),
	);
        $this->template->load('tema','unit/groups_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Unit_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('unit'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Unit_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('unit/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'description' => set_value('description', $row->description),
	    );
            $this->template->load('tema','unit/groups_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('unit'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'description' => $this->input->post('description',TRUE),
	    );

            $this->Unit_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('unit'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Unit_model->get_by_id($id);

        if ($row) {
            $this->Unit_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('unit'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('unit'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Unit.php */
/* Location: ./application/controllers/Unit.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-26 14:56:11 */
/* http://harviacode.com */