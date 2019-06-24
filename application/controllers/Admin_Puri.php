<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Puri extends CI_Controller {

  public function __construct() {
    parent::__construct();
    is_logged_in();
    $this->load->model('lowongan_m');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }

  public function index() {
      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('admin/index',$data);
  }

  public function lowongan(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['loker'] = $this->lowongan_m->getLowonganPekerjaan();
    $this->load->view('admin/lowongan',$data);
  }

  public function tambahLowongan(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    if(isset($_POST['submit'])){
              $posisi = $this->input->post('posisi');
              $penempatan = $this->input->post('penempatan');
              $batas = $this->input->post('batas');

              $input = array(
                      'posisi' => $posisi,
                      'penempatan' => $penempatan,
                      'role_id' => 1,
                      'batas' => $batas
              );
              $this->lowongan_m->insert($input);
              redirect('Admin_Puri/lowongan');
          }
  }


}
