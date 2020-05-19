<?php
class Product extends CI_Controller{
    
public function __construct() {
    
        parent::__construct();
        $this->load->model('Product_m');
    }
    
    function form() {     
        // $data['category'] = $this->Category_m->select('category')->result();
        $this->load->view('product_form_v');
    }

    
    function insert() { 
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_berita/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);
         
         if ($this->upload->do_upload('product_image'))
             {   
             $image = $this->upload->data();   
             $data = array(       
                 'product_id' => $this->input->post('product_id'),
                 'product_name' => $this->input->post('product_name'), 
                 'product_description' => $this->input->post('product_description'),
                 'product_stock' => $this->input->post('product_stock'),
                 'product_price' => $this->input->post('product_price'),
                 'category_id' => $this->input->post('category_name'), 
                 'product_image' => $image['file_name']);
  //                 'tanggal' => $this->input->post('in_tanggal')  );    
             $this->Product_m->insert_db($data);
         
         } 
         else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Product');
    }   
    
    function index() {     
        $this->load->view('product_v');
        
    }


    function select_by($id) {
        $data['product'] = $this->Product_m->select_by_db($id);
        $data['category'] = $this->Product_m->select('category')->result();
        $this->load   ->view('product_form_edit_v', $data);
    
    } 
    
    function edit() {
         $id = $this->input->post('id');   
         $nm_file = $this->input->post('nm_foto');  
         $config['upload_path'] = './assets/upload_berita/';  
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;
         $config['overwrite'] = TRUE;   
         $this->upload->initialize($config);
         if ($this->upload->do_upload('category_image')) 
             { 
             $image = $this->upload->data(); 
             $data = array(
             'product_id' => $this->input->post('product_id'),
                 'product_name' => $this->input->post('product_name'), 
                 'product_description' => $this->input->post('product_description'),
                 'product_stock' => $this->input->post('product_stock'),
                 'product_price' => $this->input->post('product_price'),
                 'category_id' => $this->input->post('category_id'), 
                 'product_image' => $image['file_name']
         );
         } else {
             $data = array(
                 'product_id' => $this->input->post('product_id'),
                 'product_name' => $this->input->post('product_name'), 
                 'product_description' => $this->input->post('product_description'),
                 'product_stock' => $this->input->post('product_stock'),
                 'product_price' => $this->input->post('product_price'),
                 'category_id' => $this->input->post('category_id')
                 ); 
         
         } 
         $this->Product_m->edit_db($id, $data);
         redirect('Product');
         
        
    }    

    function delete($id) {       
        $this->Product_m->delete_db($id);       
    redirect('Product');
    
    } 
    
    
    
}