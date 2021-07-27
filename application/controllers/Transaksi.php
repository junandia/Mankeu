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
        $this->load->model('Santri_model');
        $this->load->model('Tahun_ajaran_model');
        $this->load->model('Kategori_pembayaran_model');
        $this->load->model('Sub_kategori_model');
        $this->load->library('form_validation');
    }

    public function outdexreal()
    {
        if($this->input->post()){
            $invoice = kode_invoice($this->input->post('id_kategori'), $this->input->post('jenis_trx'));
            $data = [
                'jenis_trx' => $this->input->post('jenis_trx'),
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'status_trx' => 'SELESAI',
                'kode_invoice' => $invoice,
                'id_user' => $this->ion_auth->user()->row()->id
            ];
            $insert_data = $this->Transaksi_model->insert($data);

            $detail = [
                'id_transaksi' => $insert_data,
                'id_kategori'  => $this->input->post('id_kategori'), 
                'nominal_bayar'=> $this->input->post('nominal_bayar'),
                'catatan'   => $this->input->post('keterangan')
            ];

            $insert = $this->Transaksi_model->insert_detail('pengeluaran_detail_v2',$detail);            
            redirect(site_url('Transaksi/read/'.$insert_data));
        }else{
            $data = [
                'tahun_ajaran' => $this->Tahun_ajaran_model->getActiveThAjar(),
                'disabled' => ''
            ];
            $return = $this->template->load('tema','transaksi/outdex', $data);
        } 

        return $return;
    }

    public function outdex()
    {
        if($this->input->post()){
            $invoice = kode_invoice($this->input->post('id_santri'), $this->input->post('jenis_trx'));
            $data = [
                'jenis_trx' => $this->input->post('jenis_trx'),
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'status_trx' => 'PROSES',
                'kode_invoice' => $invoice,
                'id_user' => $this->ion_auth->user()->row()->id
            ];

            $insert_data = $this->Transaksi_model->insert($data);
            redirect(site_url('Transaksi/step2/'.$insert_data.'/'.$this->input->post('id_santri')));
        }else{
            

            //if(!$this->ion_auth->is_admin()){
                
            //}else{
            //    $unit = null;
            //}
            $data = [
                'tahun_ajaran' => $this->Tahun_ajaran_model->getActiveThAjar(),
                'disabled' => ''            ];
            $return = $this->template->load('tema','transaksi/index', $data);
        } 

        return $return;
    }

    public function step2($id,$id_santri)
    {
        $row = $this->Transaksi_model->get_by_id($id);
        if ($row->status_trx == 'SELESAI' || $row->status_trx == 'BATAL') {
            //$this->session->set_flashdata('message', 'Transaksi Sudah Selesai / Batal');
            redirect(site_url('Transaksi'));
        }
        
        if ($this->input->post()) {
            $insert_detail = [
                'id_sub_kategori'   => $this->input->post('id_sub_kategori'),
                'id_bulan'          => $this->input->post('id_bulan'),
                'nominal_bayar'     => $this->input->post('nominal_bayar'),
                'catatan'           => $this->input->post('catatan'),
                'id_santri'         => $id_santri,
                'id_transaksi'      => $id
            ];

            $this->Transaksi_model->insert_detail('transaksi_detail_v2',$insert_detail);
            header("Refresh:0");

        }

        $data = [
            'id_santri' => $id_santri,
            'data_santri' => $this->Santri_model->get_by_id($id_santri),
            'transaksi' => $this->Transaksi_model->get_by_id($id),
            'get_data' => $this->Transaksi_model->get_detail_v2($id)
        ];
        $this->template->load('tema', 'transaksi/step2', $data);
        
    }

    public function bulan($id_trx,$id_santri,$id_sub){
        
        if ($id_sub != null) {
            $cek_metode = $this->Sub_kategori_model->get_by_id($id_sub);
            if ($cek_metode->pembayaran == 'BULANAN') {
                $this->db->select('semester');
                $this->db->join('tahun_ajaran', 'tahun_ajaran.id = transaksi.tahun_ajaran');
                $this->db->where('transaksi.id',$id_trx);
                $transaksi = $this->db->get('transaksi')->row();

                if($transaksi->semester == 'ganjil'){
                    $this->db->where('id <', '7');
                }else{
                    $this->db->where('id >=', '7');
                }
                $this->db->where('`id` NOT IN (select
                    transaksi_detail_v2.id_bulan
                    from
                    transaksi_detail_v2
                    where
                    id_santri = '.$id_santri.'
                    and id_sub_kategori = '.$id_sub.')', NULL, FALSE);
                $data = [
                    'result' => $this->db->get('master_bulan')->result()
                ];
                $this->load->view('transaksi/bulan', $data);
            }else{
                echo '<option value="0">=== Wajib Jika Sub Kategori bulanan ===</option>';                
            }
        } 
    }


    public function proses()
    {
        $insert = $this->Transaksi_model->detail_insert();
        if ($insert == 'sukses') {
            echo "<script>alert('Berhasil')</script>";
            redirect(site_url('transaksi'));
        }else{
            header("location:javascript://history.go(-1)");
        }
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
        if ($row->jenis_trx == 'IN') {
            $data = array('user' => $this->ion_auth->user()->row(),
    		'id' => $row->id,
    		'jenis_trx' => $row->jenis_trx,
    		'tanggal_trx' => $row->tanggal_trx,
    		'kode_invoice' => $row->kode_invoice,
    		'status_trx' => $row->status_trx,
    		'id_santri' => $row->nama_santri,
            'tahun_angkatan' => $row->tahun_angkatan,
            'detail_transaksi' => $this->Transaksi_model->getDetail($id, 'IN')
	    );
            $this->load->view('transaksi/invoice', $data);
        } elseif ($row->jenis_trx == 'OUT'){
            $data = array('user' => $this->ion_auth->user()->row(),
                'id' => $row->id,
                'jenis_trx' => $row->jenis_trx,
                'tanggal_trx' => $row->tanggal_trx,
                'kode_invoice' => $row->kode_invoice,
                'status_trx' => $row->status_trx,
                'detail_transaksi' => $this->Transaksi_model->getDetail($id, 'OUT')
            );
            $this->load->view('transaksi/outvoice', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
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
	$this->form_validation->set_rules('kode_invoice', 'kode invoice', 'trim|required');
	$this->form_validation->set_rules('status_trx', 'status trx', 'trim|required');
	$this->form_validation->set_rules('id_santri', 'id santri', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function done($id){
        $this->Transaksi_model->done($id);
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect(site_url('Transaksi'));
    }

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-16 11:03:07 */
/* http://harviacode.com */