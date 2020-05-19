<?php
class Category_m extends CI_Model{  
    
    function insert_db($data) {     
        $this->db  ->insert('category', $data);
        
    }
    function select_db(){
        return $this->db->query("Select * FROM category")->result();
        
    }
    
    function delete_db($id) {
        $this->db  ->where('category_id', $id);
        $this->db  ->delete('category');
    
    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM category WHERE category_id='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('category_id', $id);   
        $this->db  ->update('category', $data);
    
    } 

    //gak guna
    // function select_category(){
    //     $query = $this->db->query("SELECT * FROM category order by tanggal DESC limit 10");
    //     return $query->result();
    // }
    
     function select_category_where($id) {
        $query = $this->db->query("SELECT * FROM category WHERE category_id='$id'");
        return $query->result();
    }
    
    
} 