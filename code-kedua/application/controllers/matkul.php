<?php

defined('BASEPATH') or exit('No direct script access allowed');

class matkul extends CI_Controller
{
    public function __construct()

    {
        parent::__construct();
        $this->load->model('matkul_model');
        $this->load->library('form_validation');
        //$this->load->database();
    }


    public function index()
    {
        //$this->load->database();
        $data['title'] = 'Daftar Mata Kuliah';
        $data['mata_kuliah'] = $this->matkul_model->getAllmatkul();
        $this->load->view('template/header', $data);
        $this->load->view('matkul/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        // $this->load->helper(array('form', 'url'));

        // $this->load->library('form_validation');

        $data['title'] = 'Form Menambahkan Mata Kuliah';
        $data['semester'] = ['1', '2', '3', '4', '5', '6', '7', '8'];
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('matkul/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->matkul_model->tambahdatamk();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('matkul', 'refresh');
        }
    }
    public function hapus($id)
    {
        $this->matkul_model->hapusdatamk($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('matkul', 'refresh');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mata Kuliah';
        $data['mata_kuliah'] = $this->matkul_model->getmatkulByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('matkul/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Mata Kuliah';
        $data['mata_kuliah'] = $this->matkul_model->getmatkulByID($id);
        $data['semester'] = ['1', '2', '3', '4', '5', '6', '7', '8'];
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('matkul/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->matkul_model->ubahdatamk();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('matkul', 'refresh');
        }
    }
}
/* End of file Controllername.php */
