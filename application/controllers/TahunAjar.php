<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TahunAjar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tahun_ajaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tahunajar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tahunajar/index/';
            $config['first_url'] = base_url() . 'index.php/tahunajar/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tahun_ajaran_model->total_rows($q);
        $tahunajar = $this->Tahun_ajaran_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tahunajar_data' => $tahunajar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->ion_auth->user()->row(),
            
        );
        $this->template->load('tema','tahunajar/tahun_ajaran_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tahun_ajaran_model->get_by_id($id);
        if ($row) {
            $data = array('user' => $this->ion_auth->user()->row(),
		'id' => $row->id,
		'tahun_ajar' => $row->tahun_ajar,
		'thajar_mulai' => $row->thajar_mulai,
		'thajar_selesai' => $row->thajar_selesai,
		'pts' => $row->pts,
		'pas' => $row->pas,
	    );
            $this->template->load('tema','tahunajar/tahun_ajaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('TahunAjar'));
        }
    }

    public function create() 
    {
        $data = array(
        'user' => $this->ion_auth->user()->row(),
            'button' => 'Create',
            'action' => site_url('TahunAjar/create_action'),
	    'id' => set_value('id'),
	    'tahun_ajar' => set_value('tahun_ajar'),
	    'thajar_mulai' => set_value('thajar_mulai'),
	    'thajar_selesai' => set_value('thajar_selesai'),
	    'pts' => set_value('pts'),
	    'pas' => set_value('pas'),
	);
        $this->template->load('tema','tahunajar/tahun_ajaran_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tahun_ajar' => $this->input->post('tahun_ajar',TRUE),
		'thajar_mulai' => $this->input->post('thajar_mulai',TRUE),
		'thajar_selesai' => $this->input->post('thajar_selesai',TRUE),
		'pts' => $this->input->post('pts',TRUE),
		'pas' => $this->input->post('pas',TRUE),
	    );

            $this->Tahun_ajaran_model->insert($data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect(site_url('TahunAjar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tahun_ajaran_model->get_by_id($id);

        if ($row) {
            $data = array(
            'user' => $this->ion_auth->user()->row(),
                'button' => 'Update',
                'action' => site_url('TahunAjar/update_action'),
		'id' => set_value('id', $row->id),
		'tahun_ajar' => set_value('tahun_ajar', $row->tahun_ajar),
		'thajar_mulai' => set_value('thajar_mulai', $row->thajar_mulai),
		'thajar_selesai' => set_value('thajar_selesai', $row->thajar_selesai),
		'pts' => set_value('pts', $row->pts),
		'pas' => set_value('pas', $row->pas),
	    );
            $this->template->load('tema','tahunajar/tahun_ajaran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('TahunAjar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tahun_ajar' => $this->input->post('tahun_ajar',TRUE),
		'thajar_mulai' => $this->input->post('thajar_mulai',TRUE),
		'thajar_selesai' => $this->input->post('thajar_selesai',TRUE),
		'pts' => $this->input->post('pts',TRUE),
		'pas' => $this->input->post('pas',TRUE),
	    );

            $this->Tahun_ajaran_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect(site_url('TahunAjar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tahun_ajaran_model->get_by_id($id);

        if ($row) {
            $this->Tahun_ajaran_model->delete($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect(site_url('TahunAjar'));
        } else {
            $this->session->set_flashdata('flash', '- Record Not Found');
            redirect(site_url('TahunAjar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tahun_ajar', 'tahun ajar', 'trim|required');
	$this->form_validation->set_rules('thajar_mulai', 'thajar mulai', 'trim|required');
	$this->form_validation->set_rules('thajar_selesai', 'thajar selesai', 'trim|required');
	$this->form_validation->set_rules('pts', 'pts', 'trim|required');
	$this->form_validation->set_rules('pas', 'pas', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file TahunAjar.php */
/* Location: ./application/controllers/TahunAjar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-12 18:47:11 */
/* http://harviacode.com */