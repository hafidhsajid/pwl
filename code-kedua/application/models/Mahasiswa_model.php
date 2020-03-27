<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{

    public function getAllmahasiswa()
    {
        // $query = $this->db->get('mahasiswa');

        // return $query->result_array();

        return $this->db->get('mahasiswa')->result_array();
    }

    private function uploadFoto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }
    public function datatables()
    {
        $query= $this->db->order_by('id', 'DESC')->get('mahasiswa');
        return $query->result();
    }

    public function tambahdatamhs()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "foto" => $this->uploadFoto()
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function getmahasiswaByID($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahdatamhs()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "foto" => $this->input->post('foto', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}

/*mahasiswa_modModel.php */
