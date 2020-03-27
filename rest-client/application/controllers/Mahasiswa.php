<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        //diisi dengan RESTful API ynag sebelumnya dibuat
        $this->API = "http://localhost/pwl/kode-kedelapan/api/mahasiswa";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {

        //mengambil data server RESTful dan mendecode datanya yang berformat JSON
        $respon = json_decode($this->curl->simple_get($this->API . '/mahasiswa'));
        $data['datamahasiswa'] = $respon->data;
        $this->load->view('mahasiswa/index', $data);
    }


    public function create()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->NULL,
                'nrp'   => $this->input->post('nrp'),
                'nama'  => $this->input->post('nama'),
                'email'  => $this->input->post('email'),
                'jurusan'  => $this->input->post('jurusan')
            );

            $insert = $this->curl->simple_post($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }

            redirect('mahasiswa');
        } else {
            $this->load->view('mahasiswa/create');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'    => $this->input->post('id'),
                'nrp'   => $this->input->post('nrp'),
                'nama'  => $this->input->post('nama'),
                'email'  => $this->input->post('email'),
                'jurusan'  => $this->input->post('jurusan')
            );

            $update = $this->curl->simple_put($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }

            redirect('mahasiswa');
        } else {
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API . '/mahasiswa', $params));
            $data['datamahasiswa'] = $respon->data;
            $this->load->view('mahasiswa/edit', $data);
        }
    }

    function delete($id)
    {
        if (empty($id)) {
            redirect('mahasiswa');
        } else {
            $delete = $this->curl->simple_delete($this->API . '/kontak', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('mahasiswa');
        }
    }
}

/* End of file mahasiswa.php */
