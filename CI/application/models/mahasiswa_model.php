<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa(){
        $query=$this->db->get('mahasiswa');
        return $query->result_array();
    }

}

/* End of file mahasiswa_model.php */


?>