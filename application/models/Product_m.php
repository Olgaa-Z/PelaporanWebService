<?php
class Product_m extends CI_Model{  
    
    function insert_db($data) {     
        $this->db  ->insert('product', $data);
        
    }
    
    function select_db(){

        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('category','category.category_id=product.category_id', 'left');
        $query = $this->db->get ();
        return $query->result ();
        // return $this->db->query("Select * FROM product")->result();
        
    }
    
    function delete_db($id) {
        $this->db  ->where('product_id', $id);
        $this->db  ->delete('product');
    
    }
    
    function select_by_db($id) {

        $this->db->select('*');
            $this->db->from('product');
            $this->db->join('category','category.category_id=product.category_id', 'left');
        $this->db->where("product_id", $product_id);
        $query = $this->db->get ();
            return $query->result();
        // return $this->db  ->query("Select * FROM product WHERE product_id='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('product_id', $id);   
        $this->db  ->update('product', $data);
    
    } 
    
    function select_product(){
        $query = $this->db->query("SELECT * FROM product order by tanggal DESC limit 10");
        return $query->result();
    }
    
     function select_product_where($id) {
        $query = $this->db->query("SELECT * FROM product WHERE product_id='$id'");
        return $query->result();
    }
    
    
} 