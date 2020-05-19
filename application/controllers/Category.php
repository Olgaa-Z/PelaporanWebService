<?php
class Category extends CI_Controller{
    
public function __construct() {
    
        parent::__construct();
        $this->load->model('Category_m');
    }
    
    function form() {     
        $this->load->view('category_form_v');
        
    }
    
    function insert() { 
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_berita/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);
         
         if ($this->upload->do_upload('category_image'))
             {   
             $image = $this->upload->data();   
             //array : database
             $data = array(       
                 'category_name' => $this->input->post('category_name'),
                 'category_description' => $this->input->post('category_description'),       
                 'category_image' => $image['file_name']);
  //                 'tanggal' => $this->input->post('in_tanggal')  );    
             $this->Category_m->insert_db($data);
         
         } 
         else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Category'); //controller
    }   
    
    function index() {     
        $this->load->view('category_v');
        
    }


    function select_by($id) {
        $data['category'] = $this->Category_m->select_by_db($id);
        $this->load   ->view('category_form_edit_v', $data);
    
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
             'category_name' => $this->input->post('category_name'),
             'category_description' => $this->input->post('category_description'),
             'category_image' => $image['file_name']
         );
         } else {
             $data = array(
                 'category_name' => $this->input->post('category_name'),
                 'category_description' => $this->input->post('category_description')
                 );  
         
         } 
         $this->Category_m->edit_db($id, $data);
         redirect('Category');
         
        
    }    

    function delete($id) {       
        $this->Category_m->delete_db($id);       
    redirect('Category/index');
    
    } 
    
    
    
}