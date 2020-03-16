<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

    //instansiasi fungsi
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        
    }


    public function index()
    {
        //modul untuk database 
        // $this->load->database();
        // $data['title']='List Mahasiswa';



        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllmahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['title'] = 'Form Menambahkan Data Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Mesin', 'Teknik Kimia'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->mahasiswa_model->tambahdatamhs();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa','refresh');
        }
    }
    public function hapus($id)
    {
        $this->mahasiswa_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash-data', 'dihapus dari database');
        
        redirect('mahasiswa','refresh');
        
        
    }
    public function detail($id)
    {
        $data['title']='Detail_Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
        
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->mahasiswa_model->ubahdatamhs();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('mahasiswa','refresh');
        }
    }

}

/* End of file Controllername.php */
