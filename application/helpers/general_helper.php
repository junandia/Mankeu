<?php
function is_login(){
	$ci = get_instance();
	if (!$ci->ion_auth->logged_in()) {
		redirect('Auth/login', 'refresh');
	}
}

function cmb_dinamis($name,$table,$field,$pk,$selected=null,$order=null, $disabled=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control' ".$disabled.">";
    if($order){
        $ci->db->order_by($field,$order);
    }
    if ($table == 'groups') {
        $ci->db->where_not_in('groups.id', '1');
    }
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        if($name == 'tahun_ajaran'){
            $dfield = $d->$field.' - '.strtoupper($d->semester);
        }else{
            $dfield = $d->$field;
        }
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($dfield)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

function select2_santri($pk,$name,$table,$field,$placeholder,$disabled,$unit=null){
    $ci = get_instance();
    
    $group = $ci->ion_auth->get_users_groups($ci->ion_auth->user()->row()->id)->result();
    $groups = array();
    foreach ($group as $value) {
        $groups[] = (int)$value->id;
    }
    //var_dump($groups);
    $select2 = '<select class="js-santri w-100 p-3" name="'.$name.'" '.$disabled.'>';
    $ci->db->select('santri.*, tahun_angkatan.tahun_angkatan');
    $ci->db->join('tahun_angkatan', 'tahun_angkatan.id = santri.id_angkatan');
    $ci->db->join('groups', 'groups.id = tahun_angkatan.id_grup');
    $ci->db->where_in('groups.id', $groups);

    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $select2.= ' <option value='.$row->$pk.'>'.$row->$field.'</option>';
    }
    $select2 .='</select>';
    return $select2;

}

function select2_dinamis($pk,$name,$table,$field,$placeholder){
    $ci = get_instance();
    $select2 = '<select class="js-example-basic-single w-100 p-3" name="'.$name.'">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $select2.= ' <option value='.$row->$pk.'>'.$row->$field.'</option>';
    }
    $select2 .='</select>';
    return $select2;
}

function select2_transaksi($pk,$name,$table,$field,$placeholder){
    $ci = get_instance();
    $group = $ci->ion_auth->get_users_groups($ci->ion_auth->user()->row()->id)->result();
    $groups = array();
    foreach ($group as $value) {
        $groups[] = (int)$value->id;
    }
    $select2 = '<select class="js-example-basic-single w-100 p-3" id="'.$name.'" name="'.$name.'" required>';
    $ci->db->select('sub_kategori.*');
    $ci->db->join('groups', 'groups.id = sub_kategori.id_tahun_angkatan');
    $ci->db->where_in('groups.id', $groups);
    $data = $ci->db->get($table)->result();
    $select2 .= '<option></option>';
    foreach ($data as $row){
        $select2.= ' <option value='.$row->$pk.'>'.$row->$field.' - Rp.'.number_format($row->nilai_bayar).'</option>';
    }
    $select2 .='</select>';
    return $select2;
}

function kode_invoice($id_santri, $jenis_trx){
    $tanggal = date('Ymdhis');

    $kode = 'INV/'.$id_santri.'/'.$jenis_trx.'/'.$tanggal;

    return $kode;
}

function ThAjar($id=null){
    $ci = get_instance();
    $ci->load->model('Tahun_ajaran_model');
    $thajar = $ci->Tahun_ajaran_model->getActiveThAjar($id);
    return $thajar;
}

function bulan($bulan_real){
    $bulan = substr($bulan_real, 4);
    $tahun = substr($bulan_real, 0, 4);
    switch ($bulan) {
        case '01':
            $bulan = 'Januari '.$tahun;
            break;
        case '02':
            $bulan = 'Februari '.$tahun;
            break;
        case '03':
            $bulan = 'Maret '.$tahun;
            break;
        case '04':
            $bulan = 'April '.$tahun;
            break;
        case '05':
            $bulan = 'Mei '.$tahun;
            break;
        case '06':
            $bulan = 'Juni '.$tahun;
            break;
        case '07':
            $bulan = 'Juli '.$tahun;
            break;
        case '08':
            $bulan = 'Agustus '.$tahun;
            break;
        case '09':
            $bulan = 'September '.$tahun;
            break;
        case '10':
            $bulan = 'Oktober '.$tahun;
            break;
        case '11':
            $bulan = 'November '.$tahun;
            break;
        case '12':
            $bulan = 'Desember '.$tahun;
            break;
        default:
            $bulan = 'Tidak Ditemukan';
            break;
    }
    return $bulan;
}

function terakhir_bayar($id_santri, $id_sk){
    $ci = get_instance();
    $ci->db->where('id_santri', $id_santri);
    $ci->db->where('id_sub_kategori', $id_sk);
    $ci->db->order_by('bulan_bayar', 'DESC');
    $ci->db->limit(1);
    $db = $ci->db->get('transaksi_detail')->row();
    if ($db) {
        $return = $db->bulan_bayar;
    }else{
        $return = null;
    }
    return $return;
}