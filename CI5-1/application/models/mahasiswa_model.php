<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

   public function getAllmahasiswa(){
       //$query=$this->db->get('mahasiswa');
       //return $query ->result_array();
       return $this->db->get('mahasiswa')->result_array();
   }

   public function tambahdatamhs(){
       $data=[
           "nama"=> $this->input->post('nama',true),
           "nim"=> $this->input->post('nim',true),
           "email"=> $this->input->post('email',true),
           "jurusan"=> $this->input->post('jurusan',true),
           "jeniskelamin" => $this->input->post('jeniskelamin',true),
           "foto" => $this->uploadFoto()
       ];
       $this->db->insert('mahasiswa',$data);
   }
   private function uploadFoto()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '5000';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show"
            role="alert">' . $this->upload->display_errors() . '<button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>');
            redirect('mahasiswa');
        }
    }

   public function hapusdatamhs($id){
       $this->db->where('id',$id);
       $this->db->delete('mahasiswa');

   }

   public function getmahasiswaByID($id){
       return $this->db->get_where('mahasiswa',['id' => $id])-> row_array();
   }
   public function ubahdatamhs()
    {
        $data =[
        'nama' => $this->input->post('nama',true),
        'nim' => $this->input->post('nim',true),
        'email' => $this->input->post('email',true),
        'jurusan' => $this->input->post('jurusan',true),
        "jeniskelamin" => $this->input->post('jeniskelamin',true),
        "foto" => $this->ubahFoto()
        ];
        
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('mahasiswa',$data);
    }
    private function ubahFoto()
    {
        if (empty($_FILES['foto']['name'])) {
            $foto = $this->input->post('fotoLama');
        } else {
            $foto = $this->uploadFoto();
        }

        return $foto;
    }

    public function cariDataMahasiswa(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
    


}

/* End of file Controllername.php */

?>