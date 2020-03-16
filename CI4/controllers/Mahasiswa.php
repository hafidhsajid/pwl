<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{
    // fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        // digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
        parent::__construct();
        // $this->load->database();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        // modul untuk load database
        // $this->load->database();
        $data['title'] = 'List Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getAllmahasiswa();

        if ($this->input->post('keyword')) {
            # code...
            $data['mahasiswa'] = $this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Data Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];
        // $this->form_validation->set_rules('fieldname', 'trim|required|min_length[5]|max_length[12]'|);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jenis-kelamin', 'jenis-kelamin', 'required');
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->mahasiswa_model->tambahdatamhs();
            // untuk flashdata mempunyai 2 paramenter(nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa', 'refresh');
        }
    }

    public function hapus($id)
    {
        # code...
        $this->mahasiswa_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('mahasiswa', 'refresh');
    }

    public function detail($id)
    {
        # code...
        $data['title'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        # code...
        $data['title'] = 'Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jenis-kelamin', 'jenis-kelamin', 'required');


        if ($this->form_validation->run() ==  FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->mahasiswa_model->ubahdatamhs();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('mahasiswa', 'refresh');
        }
    }
}

/* End of file mahasiswa.php */
