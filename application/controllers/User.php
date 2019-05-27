<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct() {
    parent::__construct();
    is_logged_user();
  }

  public function index() {

      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('user/index',$data);
  }

  public function edit_user() {
    $this->load->helper('form');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/edit_profile',$data);
  }

}
