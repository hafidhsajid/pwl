<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengampu_model extends CI_Model {

    public function getAllData()
    {
        $this->db->select('m.id_mengampu, ma.nim, ma.nama, mk.nama_matkul, k.nama_kelas, k.ruang_kelas');
        $this->db->from('mengampu m');
        $this->db->join('mahasiswa ma', 'm.id = ma.id', 'left');
        $this->db->join('matakuliah mk', 'm.id_matkul = mk.id_matkul', 'left');
        $this->db->join('kelas k', 'm.id_kelas = k.id_kelas', 'left');
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    public function hapusDataPengampu($id)
    {
        $this->db->where('id_mengampu', $id);
        $this->db->delete('mengampu');
    }

}

/* End of file pengampu_model.php */
