<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($name='')
    {
        $data['title']='Home';
        $this->load->view('template/header', $data);
        $data['name']=$name;
        // echo "Selamat Datang di Halaman Home";
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }

}

/* End of file Home.php */


?>