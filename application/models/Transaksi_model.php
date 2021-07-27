<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    public $table = 'transaksi';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('transaksi.*, santri.nama_santri, tahun_ajaran.tahun_ajar, tahun_angkatan.tahun_angkatan');
        $this->db->join('transaksi_detail_v2', 'transaksi_detail_v2.id_transaksi = transaksi.id', 'left');
        $this->db->join('santri', 'santri.id = transaksi_detail_v2.id_santri', 'left');
        $this->db->join('tahun_angkatan', 'santri.id_angkatan = tahun_angkatan.id', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id = transaksi.tahun_ajaran', 'left');
        $this->db->where('transaksi.'.$this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('jenis_trx', $q);
	$this->db->or_like('tanggal_trx', $q);
	$this->db->or_like('kode_invoice', $q);
	$this->db->or_like('status_trx', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        //    $this->db->like('id', $q);
    	//$this->db->or_like('jenis_trx', $q);
    	//$this->db->or_like('tanggal_trx', $q);
    	//$this->db->or_like('kode_invoice', $q);
    	//$this->db->or_like('status_trx', $q);
    	//$this->db->or_like('id_santri', $q);
        //$this->db->where_in('status_trx', ['SELESAI', 'BATAL','PENDING']);
        if (!$this->ion_auth->is_admin()) {
            $this->db->where('id_user', $this->ion_auth->user()->row()->id);
        }
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function done($id){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, ['status_trx' => 'SELESAI']);
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        //$this->db->delete($this->table);
        $this->db->update($this->table, ['status_trx' => 'BATAL']);
    }

    function cek_tunggakan($id, $pembayaran, $id_santri=null){
        if ($pembayaran == 'BULANAN') {
            //$query = $this->db->query('CALL TAGIHAN_BULANAN('.$id.',"'.$id_santri.'")');
        }elseif($pembayaran == 'CICIL') {
            //$query = $this->db->query('CALL TAGIHAN_CICILAN('.$id_santri.')');
        }else{
            //$query = $this->db->query('CALL TAGIHAN('.$id.',"'.$pembayaran.'")');
        }
        //$query->next_result(); 
        //return $query->result();

    }

    function id_santri($id){
        $this->db->where('transaksi.'.$this->id, $id);
        $data = $this->db->get($this->table)->row();
        return $data->id_santri;
    }

    function detail_insert()
    {
        $this->db->trans_start();
        $insert_data = array();
        $field_data = $this->input->post('bayar');

        for($i = 0; $i < count($field_data); $i++)
        {
            if ($field_data[$i] == 'BAYAR') {
                $insert_data[] = array(
                    'id_transaksi' => $_POST['id_transaksi'][$i],
                    'id_sub_kategori' => $_POST['id_sub_kategori'][$i],
                    'nominal_bayar' => $_POST['nominal_bayar'][$i],
                    'bulan_bayar' => $_POST['bulan_bayar'][$i],
                    'id_santri' => $_POST['id_santri'][$i]
                );
            }
        }
        if(count($insert_data) > 0){
            $query = $this->db->insert_batch('transaksi_detail', $insert_data);
        }else{
            header("location:javascript://history.go(-1)");
        } 
        $this->db->trans_complete();

        if ($query) {
            $this->db->where($this->id, $_POST['id_transaksi'][0]);
            $this->db->update($this->table, ['status_trx' => 'SELESAI']);
            return 'sukses';
        }else{
            return 'gagal';
            header("location:javascript://history.go(-1)");
        }
    }

    function insert_detail($tabel,$data){
        $this->db->insert($tabel, $data);
    }

    function getDetail($id,$jenis_trx){
            $this->db->where('id_transaksi', $id);
        if ($jenis_trx == 'IN') {
            $this->db->join('sub_kategori', 'sub_kategori.id = transaksi_detail_v2.id_sub_kategori');
            $this->db->join('master_bulan', 'master_bulan.id = transaksi_detail_v2.id_bulan');
            return $this->db->get('transaksi_detail_v2')->result();
        }elseif ($jenis_trx == 'OUT') {
            $this->db->join('kategori_pembayaran', 'kategori_pembayaran.id = transaksi_detail.id_kategori');
            return $this->db->get('pengeluaran_detail_v2')->result();
        }
        
    }

    function get_detail_v2($id){
        $this->db->where('id_transaksi', $id);
        $this->db->select('nama_kategori,nama_sub_kategori,nilai_bayar,nominal_bayar');
        $this->db->join('sub_kategori', 'sub_kategori.id = transaksi_detail_v2.id_sub_kategori');
        $this->db->join('kategori_pembayaran', 'kategori_pembayaran.id = sub_kategori.id_kategori');
        return $this->db->get('transaksi_detail_v2')->result();
    }

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-16 11:03:07 */
/* http://harviacode.com */