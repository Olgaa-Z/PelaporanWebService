<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {


  public function m_register() {

        $data = array('nama' =>$this->input->post('nama'),
                      'email'=>$this->input->post('email'),
                      'password'=>get_hash($this->input->post('password')));

        return $this->db->insert('user',$data);

  }

     public function m_cek_mail() {

     return $this->db->get_where('user',array('email' => $this->input->post('email')));

     }	

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */