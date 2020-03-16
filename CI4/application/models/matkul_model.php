<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class matkul_model extends CI_Model {

    public function getAllmahasiswa()
    {
        // $query = $this -> db -> get('mahasiswa');

        // return $query -> result_array();

        return $this->db->get('matakuliah')->result_array();
    }

    public function tambahdatamhs() {
        $data = [
            "kode" => $this->input->post('kode',true),
            "matkul" => $this->input->post('matakuliah',true),
            "jam" => $this->input->post('jam',true),
            "semester" => $this->input->post('semester',true),
        ];
        $this->db->insert('matakuliah', $data);
        
    }
    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('matakuliah');
        
    }

}


/* End of file Controllername.php */
?>