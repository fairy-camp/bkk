<?php

class Loker_model extends CI_Model{

public function getLoker(){
    return $this->db->get('loker')->result_array();
}

}

?>