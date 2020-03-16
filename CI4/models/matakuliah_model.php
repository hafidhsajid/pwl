<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah_model extends CI_Model {

    public function getAllmataKuliah()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html
        // $query digunakan untuk menampung isi dari tabel mahasiswa
        $query = $this->db->get('matakuliah');

        // https://www.codeigniter.com/user_guide/database/results.html
        // untuk menampilkan isi dari query
        return $query->result_array();

        // atau bisa juga menggunakan code berikut:
        // return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMatakuliah()
    {
        $data = [
            "kode" => $this->input->post('kode', true), // ini sama dengan htmlspecalchars($_POST['nama'])
            "matakuliah" => $this->input->post('matakuliah', true),
            "jam" => $this->input->post('jam', true),
            "semester" => $this->input->post('semester', true)
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('matakuliah', $data);
    }

    public function ubahDataMatakuliah()
    {
        # code...
        $data = [
            "kode" => $this->input->post('kode', true), // ini sama dengan htmlspecalchars($_POST['nama'])
            "matakuliah" => $this->input->post('matakuliah', true),
            "jam" => $this->input->post('jam', true),
            "semester" => $this->input->post('semester', true)
        ];
        $this->db->where('id_matkul', $this->input->post('id'));
        $this->db->update('matakuliah', $data);
    }

    public function hapusDataMatakuliah($id)
    {
        # code...
        $this->db->where('id_matkul', $id);
        $this->db->delete('matakuliah');
    }

    public function getmatakuliahByID($id)
    {
        # code...
        return $this->db->get_where('matakuliah', ['id_matkul' => $id])->row_array();
    }

}

/* End of file matakuliah.php */
