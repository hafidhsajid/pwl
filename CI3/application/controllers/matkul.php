<?php
defined('BASEPATH') or exit('No direct script access allowed');

class matkul extends CI_Controller
{

    //instansiasi fungsi
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('matkul_model');
        $this->load->library('form_validation');
        
    }


    public function index()
    {
        //modul untuk database 
        // $this->load->database();
        // $data['title']='List Mahasiswa';



        $data['title'] = 'List Mahasiswa';
        $data['matkul'] = $this->matkul_model->getAllmahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('matkul/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['title'] = 'Form Menambahkan Data Mahasiswa';

        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required|numeric');
        $this->form_validation->set_rules('semester', 'Semester', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('matkul/tambah', $data);
            $this->load->view('template/footer');
        }
        else{
            $this->matkul_model->tambahdatamhs();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('matkul','refresh');
        }
    }
    public function hapus($id)
    {
        $this->matkul_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        
        redirect('matkul','refresh');
        
        
    }
}

/* End of file Controllername.php */
