<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($name='')
    {
        // echo " Selamat Datang di Halaman Home";
        // $this->load->view('home/index');
        // $this->load->view('tugas/index');
        $data['title'] = 'Home';
        //$data adalah sebuah array dengan isi arraynya adalah name dan diisi $name.
        $data['name']=$name;
        $this->load->view('template/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
        $this->load->library('session');
    
        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

}

/* End of file belajarci2.php */

?>