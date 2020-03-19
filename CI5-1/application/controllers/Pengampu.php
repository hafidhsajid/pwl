<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengampu extends CI_Controller {

    public function __construct()
    {
        // digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('pengampu_model');
    }

    public function index()
    {
        $data['title']='List Mahasiswa';
        $data['pengampu']=$this->pengampu_model->getAllData();
        
        $this->load->view('template/header', $data);
        $this->load->view('pengampu/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']= 'Form Menambahkan Data Mahasiswa';
        $data['jurusan']=['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pengampu/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pengampu_model->tambahdatamhs();
            //Untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa','refresh');
        }
    }

    public function hapus($id){
        $this->pengampu_model->hapusDataPengampu($id);
        //Untuk flash data mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pengampu', 'refresh');
    }
}

/* End of file Tugas2.php */

?>