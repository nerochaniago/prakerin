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
    $data['loker'] = $this->lowongan_m->getLokerFoto();
    if(isset($_POST['submit'])){
              $posisi = $this->input->post('posisi');
              $penempatan = $this->input->post('penempatan');
              $syarat = $this->input->post('syarat');
              $batas = $this->input->post('batas');
              $uploadImage = $_FILES['gambar']['name'];
              if ($uploadImage) {
                // code...
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_sizes'] = '5048';
                $config['upload_path'] = './assets/img/loker/';
                $this->load->library('upload',$config);

                if ($this->upload->do_upload('gambar')) {
                  // code...
                  $old_image = $data['loker']['gambar'];
                  if ($old_image != $old_image) {
                    // code...
                    unlink(FCPATH . 'assets/img/loker/' . $old_image);

                  }

                  $new_img = $this->upload->data('file_name');
                  $this->db->set('gambar', $new_img);


                } else {
                  // code...
                  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                  redirect('Admin_Puri/lowongan');
                }
              }

         // input ke database
              $input = array(
                      'posisi' => $posisi,
                      'penempatan' => $penempatan,
                      'syarat' => $syarat,
                      'role_id' => 1,
                      'batas' => $batas,
                      'gambar' => $uploadImage
              );
              $this->lowongan_m->insert($input);
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               Loker telah ditambahkan
              </div>');
              redirect('Admin_Puri/lowongan');
          }
  }


}
