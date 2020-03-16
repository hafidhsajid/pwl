<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        // $this->load->model('mahasiswa_model');
        
        // $this->load->database();
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['title']='Form Menambahkan Data Mahasiswa';
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');        
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');        

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->tambahdatamhs();
            echo "data berhasil ditambah";
            redirect('mahasiswa', 'refresh');
        }
        }
        

}

/* End of file mahasiswa.php */


?>