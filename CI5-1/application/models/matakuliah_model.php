<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah_model extends CI_Model {

   public function getAllmatakuliah(){
       //$query=$this->db->get('mahasiswa');
       //return $query ->result_array();
       return $this->db->get('matakuliah')->result_array();
   }

   public function tambahdatamatkul(){
       $data=[
           "kode"=> $this->input->post('kode',true),
           "matakuliah"=> $this->input->post('matakuliah',true),
           "jam"=> $this->input->post('jam',true),
           "semester"=> $this->input->post('semester',true),
       ];
       $this->db->insert('matakuliah',$data);
   }

   public function hapusdatamatkul($id){
       $this->db->where('id',$id);
       $this->db->delete('matakuliah');

   }
   public function getmatakuliahByID($id){
    return $this->db->get_where('matakuliah',['id' => $id])-> row_array();
}
public function ubahdatamatkul()
 {
     $data =[
     'kode' => $this->input->post('kode',true),
     'matakuliah' => $this->input->post('matakuliah',true),
     'jam' => $this->input->post('jam',true),
     'semester' => $this->input->post('semester',true)
     ];
     
     $this->db->where('id',$this->input->post('id'));
     $this->db->update('matakuliah',$data);
 }

 public function cariDataMatakuliah(){
     $keyword=$this->input->post('keyword');
     $this->db->like('matakuliah',$keyword);
     $this->db->or_like('kode',$keyword);
     return $this->db->get('matakuliah')->result_array();
 }
 


}

/* End of file Controllername.php */

?>