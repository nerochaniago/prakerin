<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct() {
    parent::__construct();
    is_logged_user();
    $this->load->helper('form');
    $this->load->library('form_validation');
  }

  public function index() {

      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('user/index',$data);
  }

  public function edit_user() {
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('name','Full Name','required|trim');

    if($this->form_validation->run() == false){
      $this->load->view('user/edit_profile',$data);
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');


      $uploadImage = $_FILES['image']['name'];
      if ($uploadImage) {
        // code...
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_sizes'] = '2048';
        $config['upload_path'] = './assets/img/profile/';

        $this->load->library('upload',$config);

        if ($this->upload->do_upload('image')) {

          $old_image = $data['user']['image'];
          if ($old_image != 'default.jpg') {
            // code...
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }

          $new_img = $this->upload->data('file_name');
          $this->db->set('image', $new_img);
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('user');
        }
      }

      $this->db->set('name',$name);
      $this->db->where('email',$email);
      $this->db->update('user');
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Your account has been updated
      </div>');
      redirect('user');
    }



  }

}
