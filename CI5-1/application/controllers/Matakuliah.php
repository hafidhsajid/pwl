<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('matakuliah_model');
        $this->load->library('form_validation');
        
   }

    public function index()
    {
        //$this->load->model('mahasiswa_model');
        //$this->load->database();
        $data['title']='List Mata Kuliah';
        $data['matakuliah']=$this->matakuliah_model->getAllmatakuliah();
        if($this->input->post('keyword')){
            $data['matakuliah']=$this->matakuliah_model->cariDataMatakuliah();
        }
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahakan Data mata kuliah';
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'Mata Kuliah', 'required|min_length[5]');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('matakuliah/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->matakuliah_model->tambahdatamatkul();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('matakuliah','refresh');
        }
        
    }

    public function hapus($id){
        $this->matakuliah_model->hapusdatamatkul($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('matakuliah','refresh');
    }
    public function detail($id){
        $data['title']='Detail Mata Kuliah';
        $data['matakuliah']=$this->matakuliah_model->getmatakuliahByID($id);
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data MataKuliah';
        $data['matakuliah'] =$this->matakuliah_model->getmatakuliahByID($id);
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'MataKuliah', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        
        if ($this->form_validation->run() == FALSE)
                {
                    $this ->load-> view('template/header',$data);
                    $this ->load-> view('matakuliah/edit',$data);
                    $this ->load-> view('template/footer');
                }
                else
                {
                        $this->matakuliah_model->ubahdatamatkul();
                        $this->session->set_flashdata('flash-data', 'diedit');
                        redirect('matakuliah','refresh');
                        
                }
    }

}

/* End of file Controllername.php */

?>