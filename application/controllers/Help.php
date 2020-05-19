<?php
class Help extends CI_Controller{
    
public function __construct() {
    
        parent::__construct();
        $this->load->model('Help_m');
    }
    
    function form() {     
        $this->load->view('help_form_v');
        
    }
    
    function insert() { 
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_berita/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);
         
         if ($this->upload->do_upload('help_image'))
             {   
             $image = $this->upload->data();   
             $data = array(       
                 'help_name' => $this->input->post('help_name'),
                 'help_description' => $this->input->post('help_description'),       
                 'help_image' => $image['file_name']);
  //                 'tanggal' => $this->input->post('in_tanggal')  );    
             $this->Help_m->insert_db($data);
         
         } 
         else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Help');
    }   
    
    function index() {     
        $this->load->view('help_v');
        
    }


    function select_by($id) {
        $data['help'] = $this->Help_m->select_by_db($id);
        $this->load   ->view('help_form_edit_v', $data);
    
    } 
    
    function edit() {
         $id = $this->input->post('id');   
         $nm_file = $this->input->post('nm_foto');  
         $config['upload_path'] = './assets/upload_berita/';  
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;
         $config['overwrite'] = TRUE;   
         $this->upload->initialize($config);
         if ($this->upload->do_upload('help_image')) 
             { 
             $image = $this->upload->data(); 
             $data = array(
             'help_name' => $this->input->post('help_name'),
             'help_description' => $this->input->post('help_description'),
             'help_image' => $image['file_name']
         );
         } else {
             $data = array(
                 'help_name' => $this->input->post('help_name'),
                 'help_description' => $this->input->post('help_description')
                 );  
         
         } 
         $this->Help_m->edit_db($id, $data);
         redirect('Help');
         
        
    }    

    function delete($id) {       
        $this->Help_m->delete_db($id);       
    redirect('Help/index');
    
    } 
    
    
    
}