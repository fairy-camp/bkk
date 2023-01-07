<?php

class Alumni_model extends CI_Model{

public function getAllAlumni(){
    $this->db->order_by('tanggal_daftar', 'DESC');
    return $this->db->get('alumni')->result_array();
}

public function cariAlumni(){
    $jurusan = $this->input->post('jurusan');
    $thn_lulus = $this->input->post('tahun_lulus');

    if (!$thn_lulus) {
        $this->db->where('jurusan', $jurusan);
        return $this->db->get('alumni')->result_array();
    }elseif (!$jurusan){
        $this->db->where('tahun_lulus', $thn_lulus);
        return $this->db->get('alumni')->result_array();
    }else {
        $this->db->where('jurusan', $jurusan);
        $this->db->where('tahun_lulus', $thn_lulus);
        return $this->db->get('alumni')->result_array();
    }
}

}

?>