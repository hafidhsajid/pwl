<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->select('username,password,level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getByid($nama)
    {
        return $this->db->get_where('mahasiswa', ['nama' => $nama])->row_array();
    }
}


/* End of file mahasiswa_model.php */
