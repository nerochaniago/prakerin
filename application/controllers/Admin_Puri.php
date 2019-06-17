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

  public function addLowonganC(){
    $config['upload_path'] = './uploads/lowongan';
    $config['allowed_types'] = 'jpg|jpeg';
    $this->load->library('upload', $config);

    $this->upload->do_upload('photo');
    $photo= $this->upload->data('file_name');

    $data = array(
      'photo' => $photo,
      'posisi'=>$this->input->post('posisi')
    );
    return $this->Admin_PuriM->addlowonganM($data);
  }

  public function deleteLowonganC(){
    $this->pemiluM->delLowonganM($id_lowongan);
    redirect('Pendaftar_C');
  }

  public function editLowonganC1($id_lowongan) {
  	$data = array();
  	$data['title'] = 'Edit Lowongan'; //datanya  diparsing
  	$data['lowongan'] = $this->admin_puriM->getLowonganM($id_lowongan);
  	$this->load->view('formEditLowongan',$data);
  }

  public function editLowonganC1($id_lowongan) {
    $config['upload_path'] = './uploads/lowongan';
    $config['allowed_types'] = 'jpg|jpeg';
    $this->load->library('upload', $config);

    $this->upload->do_upload('photo');
    $foto_ketua= $this->upload->data('file_name');
  	$data = array(
      'photo' => $photo,
  		'posisi'=>$this->input->post('posisi')
  	);
  	$this->admin_puriM->updateLowonganM($data,$id_lowongan);
  	// redirect('pemiluC');
  }


}
