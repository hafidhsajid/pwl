<?php

defined('BASEPATH') or exit('No direct script access allowed');

class matkul_model extends CI_Model
{

    public function getAllmatkul()
    {
        // $query = $this->db->get('mata_kuliah');

        // return $query->result_array();

        return $this->db->get('mata_kuliah')->result_array();
    }

    public function tambahdatamk()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "matkul" => $this->input->post('matkul', true),
            "jam" => $this->input->post('jam', true),
            "semester" => $this->input->post('semester', true),
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('mata_kuliah', $data);
    }

    public function hapusdatamk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mata_kuliah');
    }

    public function getmatkulByID($id)
    {
        return $this->db->get_where('mata_kuliah', ['id' => $id])->row_array();
    }

    public function ubahdatamk()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "matkul" => $this->input->post('matkul', true),
            "jam" => $this->input->post('jam', true),
            "semester" => $this->input->post('semester', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mata_kuliah', $data);
    }
}

/*matkul_modModel.php */
