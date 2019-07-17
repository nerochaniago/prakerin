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
    $this->load->model('UserM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['list'] = $this->UserM->dataLowonganM();
    $posisi = $this->input->post('posisi');
    $data['posisi'] = $posisi;
    // load model dan form helper
        $this->load->model('UserM');
        $this->load->helper('form_helper');
        $data = array(
            'user' => $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array(),
            'button' => 'posisi',
            // 'action' => site_url('provinsi/create_action'),
            'dd_lowongan' => $this->UserM->dataLowonganM(),
            'lowongan_selected' => $this->input->post('$row->posisi') // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
	      );
    $this->load->view('user/daftarLowonganV',$data);

  }

  public function add_pelamar()
  {
    $this->load->model('UserM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $config['upload_path'] = './uploads/pelamar';
  	$config['allowed_types'] = 'jpg|jpeg|pdf|doc|png';
  	$this->load->library('upload', $config);

  	$this->upload->do_upload('foto');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('cv');
    $cv = $this->upload->data('file_name');
    $this->upload->do_upload('sertif1');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('sertif2');
    $cv = $this->upload->data('file_name');
    $this->upload->do_upload('sertif3');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('ijazah');
    $cv = $this->upload->data('file_name');
    $this->upload->do_upload('nilai');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('skkb');
    $cv = $this->upload->data('file_name');
    $this->upload->do_upload('ks');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('ktp');
    $cv = $this->upload->data('file_name');
    $this->upload->do_upload('kk');
    $foto = $this->upload->data('file_name');
    $this->upload->do_upload('npwp');
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
      'email'=>$this->session->email,
      'universitas'=>$this->input->post('universitas'),
      'jurusan'=>$this->input->post('jurusan'),
      'sertif1'=> $sertif1,
      'sertif2'=> $sertif2,
      'sertif3'=> $sertif3,
      'ijazah'=> $ijazah,
      'nilai'=> $nilai,
      'skkb'=> $skkb,
      'ks'=> $ks,
      'ktp'=> $ktp,
      'kk'=> $kk,
      'npwp'=> $npwp,
      'kelengkapan'=> $kelengkapan      
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
    $this->load->view('user/editDataV',$data);
  }

  public function editDataPelamarC()
  {
    $this->load->model('UserM');
    // $data['pendaftaran'] = $this->db->get_where('pendaftaran',['id_pelamar'])->row_array();
    $data['pendaftaran'] = $this->db->get_where('pendaftaran',['id_pelamar' => $this->input->post('id_pelamar') ])->row_array();
    // $id_pelamar = $this->input->post('id_pelamar');
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
    $foto = $_FILES['foto']['name'];
    $cv = $_FILES['cv']['name'];
    $universitas = $this->input->post('universitas');
    $jurusan = $this->input->post('jurusan');

    if ($foto){
      $config['upload_path'] = './uploads/pelamar';
    	$config['allowed_types'] = 'jpg|jpeg|pdf|doc';
      $config['overwrite'] = true;
    	$this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $old_image = $data['pendaftaran']['foto'];
        if ($old_image) {
          unlink(FCPATH . './uploads/pelamar' . $old_image);
        }
        $new_img = $this->upload->data('file_name');
        $this->db->set('foto', $new_img);
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
        redirect('user');
      }
    } else if ($cv){
        if ($this->upload->do_upload('cv')) {
          $old_cv = $data['pendaftaran']['cv'];
          if ($old_cv) {
            unlink(FCPATH . './uploads/pelamar' . $old_cv);
          }
          $new_cv = $this->upload->data('file_name');
          $this->db->set('cv', $new_cv);
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('user');
        }
    }

    $data = [
      'posisi'=> $posisi,
      'nama'=> $nama,
      'tgl_lahir'=> $tgl_lahir,
      'tmpt_lahir'=> $tmpt_lahir,
      'pendidikan'=> $pendidikan,
      'nomor'=> $nomor,
      'gender'=> $gender,
      'alamat'=> $alamat,
      'agama'=> $agama,
      'status'=> $status,
      'universitas'=> $universitas,
      'jurusan'=> $jurusan,
    ];

    $this->db->where('id_pelamar',$this->input->post('id_pelamar'));
    $this->db->update('pendaftaran',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     Loker has been updated
    </div>');
    redirect('user');

  }

  public function delPelamarC($id_pelamar){
    $this->load->model("UserM");
    $this->UserM->delPelamarM($id_pelamar);
    redirect($_SERVER['HTTP_REFERER']);
  }


}
