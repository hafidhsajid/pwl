<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
        // $query = $this -> db -> get('mahasiswa');

        // return $query -> result_array();

        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahdatamhs() {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nim" => $this->input->post('nim',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true),
        ];
        $this->db->insert('matkul', $data);
        
    }
    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
        
    }

}


/* End of file Controllername.php */
?>