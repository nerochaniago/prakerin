<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Puri extends CI_Controller {

  public function __construct() {
    parent::__construct();
    is_logged_in();
  }

  public function index() {
      $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('admin/index',$data);
  }

  public function lowongan(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('admin/lowongan',$data);
  }

  public function addlowonganC(){
    $config['upload_path'] = './uploads/lowongan';
    $config['allowed_types'] = 'jpg|jpeg';
    $this->load->library('upload', $config);

    $this->upload->do_upload('photo');
    $foto_ketua= $this->upload->data('file_name');

    $data = array(
      'foto_wakil' => $foto_wakil,
      'posisi'=>$this->input->post('posisi')
    );
    return $this->Admin_PuriM->addlowonganM($data);
  }

  public function editlowonganC(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('admin/lowongan',$data);
  }

  public function deletelowonganC(){
    $this->pemiluM->dellowonganM($id_lowongan);
    redirect('Pendaftar_C');
  }


}
