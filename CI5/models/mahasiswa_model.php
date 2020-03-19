<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{
    public function getAllmahasiswa()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html
        // $query digunakan untuk menampung isi dari tabel mahasiswa
        $query = $this->db->get('mahasiswa');

        // https://www.codeigniter.com/user_guide/database/results.html
        // untuk menampilkan isi dari query
        return $query->result_array();

        // atau bisa juga menggunakan code berikut:
        // return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahdatamhs()
    {
        $data = [
            "nama" => $this->input->post('nama', true), // ini sama dengan htmlspecalchars($_POST['nama'])
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jenis-kelamin" => $this->input->post('jenis-kelamin', true),
            "jurusan" => $this->input->post('jurusan', true),
            "foto" => $this->uploadFoto()
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusdatamhs($id)
    {
        # code...
        $this->deleteFoto($id);
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    private function uploadFoto()
    {
        $config['upload_path']          = './uploads/foto';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '2048';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }
    }

    private function deleteFoto($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('mahasiswa');
        $row = $query->row();
        unlink("./uploads/foto/$row->foto");
    }

    public function getmahasiswaByID($id)
    {
        # code...
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahdatamhs()
    {
        # code...
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "jenis-kelamin" => $this->input->post('jenis-kelamin', true),
            "jurusan" => $this->input->post('jurusan', true),
            "foto" => $this->ubahFoto()
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    private function ubahFoto()
    {
        $id = $this->input->post('id');
        $mahasiswa = $this->getmahasiswaByID($id);

        if ($mahasiswa['foto'] == null) {
            # code...
            $foto = $this->uploadFoto();

        }else if (empty($_FILES['image']['name'])) {
            $foto = $this->input->post('fotoLama');

        } else {
            $this->deleteFoto($this->input->post('id'));
            $foto = $this->uploadFoto();
        }
        return $foto;
    }

    public function cariDataMahasiswa()
    {
        # code...
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}

/* End of file mahasiswa_model.php */
