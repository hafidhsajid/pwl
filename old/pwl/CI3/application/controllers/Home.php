<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        
    }


    // public function index()
    // {
    //     //modul untuk database 
    //     // $this->load->database();
    //     // $data['title']='List Mahasiswa';



    //     $data['title'] = 'List Mahasiswa';
    //     $data['mahasiswa'] = $this->mahasiswa_model->getAllmahasiswa();
    //     $this->load->view('template/header', $data);
    //     $this->load->view('mahasiswa/index', $data);
    //     $this->load->view('template/footer');
    // }
    
    public function index($name='')
    {
        $data['title']='Home';
        $data['name']=$name;
        $this->load->view('template/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        // echo "selamat datang di halaman home ";
    }

}

/* End of file Controllername.php */
?>