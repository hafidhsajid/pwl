<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        // digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mahasiswa_model');

        if($this->session->userdata('level')!="admin")
        {
            redirect('login');
        }

    }

    public function index()
    {
        // modul untuk load database
        // $this->load->database();
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
        if ($this->input->post('keyword')) {
            # code...
            $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
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
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->tambahdatamhs();
            //Untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa','refresh');
        }
    }

    public function hapus($id){
        $this->mahasiswa_model->hapusdatamhs($id);
        //Untuk flash data mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('mahasiswa', 'refresh');
    }

    public function detail($id)
    {
        $data['title']='Detail Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);        
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title']= 'Form Edit Data Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaByID($id);
        $data['jurusan']=['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];
        
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->ubahdatamhs();
            //Untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('mahasiswa','refresh');
        }
    }
}
?>