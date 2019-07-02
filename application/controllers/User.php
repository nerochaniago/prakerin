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
      $this->load->model('UserM');
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

  public function daftarLowonganC()
  {
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('UserM');
    $this->load->view('user/daftarLowonganV',$data);
  }

  public function add_pelamar()
  {
    $this->load->model('UserM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $config1['upload_path'] = './uploads/pelamar/foto';
  	$config1['allowed_types'] = 'jpg|jpeg';
  	$this->load->library('upload', $config1);

    $config2['upload_path'] = './uploads/pelamar/cv';
  	$config2['allowed_types'] = 'pdf|doc';
    $this->load->library('upload', $config2);

  	$this->upload->do_upload('foto');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('cv');
    $cv = $this->upload->data('file_name');

  	$data = array(
  		'posisi'=>$this->input->post('posisi'),
  		'nama'=>$this->input->post('nama'),
  		'tgl_lahir'=>$this->input->post('tgl_lahir'),
  		'tmpt_lahir'=>$this->input->post('tmpt_lahir'),
  		'pendidikan'=>$this->input->post('pendidikan'),
  		'nomor'=>$this->input->post('nomor'),
  		'gender'=>$this->input->post('gender'),
      'alamat'=>$this->input->post('alamat'),
  		'agama'=>$this->input->post('agama'),
  		'status'=>$this->input->post('status'),
  		'foto' => $foto,
  		'cv' => $cv,
      'email'=>$this->session->email
  	);

    $this->UserM->add_pelamarM($data);
  	redirect('User');
  }

  public function dataPekerjaanC()
  {
    $data['user'] = $this->load->model("UserM");
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['list'] = $this->UserM->dataPekerjaanM();
    $this->load->view('user/dataPekerjaanV',$data);
  }

  public function formeEditDataPelamarC($id_pelamar) {
    $this->load->model('UserM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
  	$data['list'] = $this->UserM->getDataPekerjaanM('pendaftaran',$id_pelamar);
    // $where = array('id_pelamar' => $id_pelamar);
		// $data['list'] = $this->UserM->getDataPekerjaanM('pendaftaran',$where)->result();
    $this->load->view('user/editDataV',$data);
  }

  public function editDataPelamarC()
  {
    $this->load->model('UserM');

    $data['pendaftaran'] = $this->db->get_where('pendaftaran',['id_pelamar'])->row_array();
    $id_pelamar = $this->input->post('id_pelamar');
    $posisi = $this->input->post('posisi');
    $nama = $this->input->post('nama');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $tmpt_lahir = $this->input->post('tmpt_lahir');
    $pendidikan = $this->input->post('pendidikan');
    $nomor = $this->input->post('nomor');
    $gender = $this->input->post('gender');
    $alamat = $this->input->post('alamat');
    $agama = $this->input->post('agama');
    $status = $this->input->post('status');
    $upload_image = $_FILES['foto']['name'];
    $upload_cv = $_FILES['cv']['name'];

    if ($upload_image){

      $config1['upload_path'] = './uploads/pelamar/foto';
    	$config1['allowed_types'] = 'jpg|jpeg';
    	$this->load->library('upload', $config1);
      $config1['overwrite'] = true;

      if ($this->upload->do_upload('foto')) {
        $old_image = $data['pendaftaran']['foto'];

        if ($old_image != 'default.jpg') {
          unlink(FCPATH . './uploads/pelamar/foto' . $old_image);
        }
        $new_img = $this->upload->data('file_name');
        $this->db->set('foto', $new_img);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        redirect('user');
      }
    } else if ($upload_cv){
      $config2['upload_path'] = './uploads/pelamar/cv';
    	$config2['allowed_types'] = 'pdf|doc';
      $this->load->library('upload', $config2);
      $config2['overwrite'] = true;

        if ($this->upload->do_upload('cv')) {
          $old_cv = $data['pendaftaran']['cv'];
          if ($old_cv != 'default.jpg') {
            unlink(FCPATH . './uploads/pelamar/cv' . $old_cv);
          }
          $new_cv = $this->upload->data('file_name');
          $this->db->set('cv', $new_cv);
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('user');
        }
    }

    $data = [
      'posisi'=>$this->input->post('posisi'),
      'nama'=>$this->input->post('nama'),
      'tgl_lahir'=>$this->input->post('tgl_lahir'),
      'tmpt_lahir'=>$this->input->post('tmpt_lahir'),
      'pendidikan'=>$this->input->post('pendidikan'),
      'nomor'=>$this->input->post('nomor'),
      'gender'=>$this->input->post('gender'),
      'alamat'=>$this->input->post('alamat'),
      'agama'=>$this->input->post('agama'),
      'status'=>$this->input->post('status')
    ];

    $this->UserM->editDataPekerjaanM($data,$id_pelamar);
    redirect('user');

  }

  public function delPelamarC($id_pelamar){
    $this->load->model("UserM");
    $this->UserM->delPelamarM($id_pelamar);
    redirect($_SERVER['HTTP_REFERER']);
  }


}
