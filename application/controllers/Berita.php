<?php
class Berita extends CI_Controller{
    


    
    function form() {     
        $this->load->view('berita_form_v');
        
    }
    
    function insert() { 
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_berita/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);
         
         if ($this->upload->do_upload('in_gambar'))
             {   
             $gambar = $this->upload->data();   
             $data = array(       
                 'judul' => $this->input->post('in_judul'),
                 'isi' => $this->input->post('in_isi'),       
                 'gambar' => $gambar['file_name']);
  //                 'tanggal' => $this->input->post('in_tanggal')  );    
             $this->Berita_m->insert_db($data);
         
         }else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Berita');
    }   


    
    function index() {     
        $this->load->view('berita_v');
        
    }


    function select_by($id) {
        $data['berita'] = $this->Berita_m->select_by_db($id);
        $this->load   ->view('berita_form_edit_v', $data);
    
    } 
    
    function edit() {
         $id = $this->input->post('id');   
         $nm_file = $this->input->post('nm_foto');  
         $config['upload_path'] = './assets/upload_berita/';  
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;
         $config['overwrite'] = TRUE;   
         $this->upload->initialize($config);
         if ($this->upload->do_upload('in_gambar')) 
             { 
             $gambar = $this->upload->data(); 
             $data = array(
             'judul' => $this->input->post('in_judul'),
             'isi' => $this->input->post('in_isi'),
             'gambar' => $gambar['file_name'],
              'tanggal' => date('Y-m-d H:i:s')  
         );
         } else {
             $data = array(
                 'judul' => $this->input->post('in_judul'),
                 'isi' => $this->input->post('in_isi'),
                 'tanggal' => $this->input->post('in_tanggal'),
                 );  
         
         } 
         $this->Berita_m->edit_db($id, $data);
         redirect('Berita');
         
        
    }    

    function delete($id) {       
        $this->Berita_m->delete_db($id);       
    redirect('Berita');
    
    } 
    
    
    
}