<?php

class Tablemodel extends CI_model
{
    public function getTable()
    {
        return $this->db->order_by('id', 'DESC')->get('alumni')->result_array();
    }
    
    public function getAllAlumni()
    {
        // $this->db->where('status_registrasi', 'Sudah Registrasi');
        $this->db->order_by('id', 'DESC');
        return $this->db->get('alumni')->result_array();
    }
}
