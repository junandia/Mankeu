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
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

function select2_santri($pk,$name,$table,$field,$placeholder,$unit=null){
    $ci = get_instance();
    $select2 = '<select class="js-example-basic-single w-100 p-3" name="'.$name.'" '.$disabled.'>';
    $ci->db->select('santri.*, master_unit.nama_unit, tahun_angkatan.tahun_angkatan');
    $ci->db->join('master_unit', 'master_unit.id = santri.id_unit');
    $ci->db->join('tahun_angkatan', 'tahun_angkatan.id = santri.id_angkatan');
    if ($unit != null) {
        $ci->db->where('id_unit', $unit);
    }

    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $select2.= ' <option value='.$row->$pk.'>'.$row->$field.' - '.$row->tahun_angkatan.'</option>';
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

function get_nilai($id_siswa, $id_mapel, $type){
    $nilai = 0;
    $ci = get_instance();

    //$data = $ci->db->where('nilai', array('id_siswa' => $id_siswa, 'id_mapel' => $id_mapel), 1)->result();
    $ci->db->where('id_siswa', $id_siswa);
    $ci->db->where('id_mapel', $id_mapel);
    $data = $ci->db->get('nilai')->result();

    foreach ($data as $data) {
        if ($type == 'nut') {
            $nilai = $data->nut;
        }elseif ($type == 'npu') {
            $nilai = $data->npu;
        }elseif ($type == 'nka') {
            $nilai = $data->nka;
        }else{
            $nilai = 0;
        }
    }

    return $nilai;
}

function ThAjar(){
    $ci = get_instance();
    $ci->load->model('Tahun_ajaran_model');
    $thajar = $ci->Tahun_ajaran_model->getActiveThAjar();
    return $thajar;
}