<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    //tambahkan parameter nama pada index
    public function index()
    {
        $data['title']='List Mahasiswa';
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index');
        $this->load->view('template/footer');
    }

}

/* End of file Home.php */

?>