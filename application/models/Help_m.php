<?php
class Help_m extends CI_Model{  
    
    function insert_db($data) {     
        $this->db  ->insert('help', $data);
        
    }
    function select_db(){
        return $this->db->query("Select * FROM help")->result();
        
    }
    
    function delete_db($id) {
        $this->db  ->where('help_id', $id);
        $this->db  ->delete('help');
    
    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM help WHERE help_id='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('help_id', $id);   
        $this->db  ->update('help', $data);
    
    } 
    
    function select_help(){
        $query = $this->db->query("SELECT * FROM help order by tanggal DESC limit 10");
        return $query->result();
    }
    
     function select_help_where($id) {
        $query = $this->db->query("SELECT * FROM help WHERE help_id='$id'");
        return $query->result();
    }
    
    
} 