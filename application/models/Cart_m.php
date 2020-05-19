<?php
class Cart_m extends CI_Model{  
    
    function insert_db($data) {     
        return $this->db ->insert('cart', $data);
        
    }
    function select_db(){
        return $this->db->query("Select * FROM cart")->result();
        
    }
    
    function delete_db($id) {
        $this->db  ->where('cart_id', $id);
        $this->db  ->delete('cart');
    
    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM cart WHERE cart_id='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('cart_id', $id);   
        $this->db  ->update('cart', $data);
    
    } 
    
    function select_cart(){
        $query = $this->db->query("SELECT * FROM cart order by tanggal DESC limit 10");
        return $query->result();
    }
    
     function select_cart_where($id) {
        $query = $this->db->query("SELECT * FROM cart WHERE cart_id='$id'");
        return $query->result();
    }
    
    
} 