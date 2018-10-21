<?php
class User_model extends CI_Model{
    function  user_data(){
        $this->load->database();
        //$this->db->like('name','ha');
        $query=$this->db->get('info');
        return $query->result_array();

    }
    function insert_data($data){
        $this->load->database();
       $this->db->insert("info",$data);

    }
    function delete_data($data){
        $this->load->database();
        $this->db->where('id',$data);
        $this->db->delete('info');
        return "Deleted";

    }
    function update_data($data,$id){
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->update('info',$data);

    }


}

?>