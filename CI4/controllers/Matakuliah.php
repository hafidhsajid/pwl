<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

    public function __construct()
    {
        // digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
        parent::__construct();
        // $this->load->database();
        $this->load->model('matakuliah_model');
    }

    public function index()
    {
        // modul untuk load database
        // $this->load->database();
        $data['title'] = 'List Mata Kuliah';
        $data['matakuliah'] = $this->matakuliah_model->getAllmatakuliah();
        $this->load->view('template/header', $data);
        $this->load->view('matakuliah/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form tambah mata kuliah';

        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'matakuliah', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required|numeric');
        $this->form_validation->set_rules('semester', 'semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->matakuliah_model->tambahDataMatakuliah();
            // untuk flashdata mempunyai 2 paramenter(nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('matakuliah', 'refresh');
        }
    }

    public function hapus($id)
    {
        # code...
        $this->matakuliah_model->hapusDataMatakuliah($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('matakuliah', 'refresh');
    }

    public function detail($id)
    {
        # code...
        $data['title'] = 'Detail Mata Kuliah';
        $data['matakuliah'] = $this->matakuliah_model->getmatakuliahByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        # code...
        $data['title'] = 'Form edit mata kuliah';
        $data['matakuliah'] = $this->matakuliah_model->getmatakuliahByID($id);
        $data['semester'] = ['1','2','3','4','5','6','7','8'];
        $this->form_validation->set_rules('kode', 'kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'matakuliah', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required|numeric');
        $this->form_validation->set_rules('semester', 'semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->matakuliah_model->ubahDataMatakuliah();
            // untuk flashdata mempunyai 2 paramenter(nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('matakuliah', 'refresh');
        }
    }
    

}

/* End of file matakuliah.php */

?>