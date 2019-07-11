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
            'button' => 'Posisi',
            // 'action' => site_url('provinsi/create_action'),
            'dd_provinsi' => $this->UserM->dataLowonganM(),
            'provinsi_selected' => $this->input->post('posisi') ? $this->input->post('posisi') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
	      );
    $this->load->view('user/daftarLowonganV',$data);

  }

  public function add_pelamar()
  {
    $this->load->model('UserM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $config['upload_path'] = './uploads/pelamar';
  	$config['allowed_types'] = 'jpg|jpeg|pdf|doc';
  	$this->load->library('upload', $config);

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
      'email'=>$this->session->email,
      'universitas'=>$this->input->post('universitas'),
      'jurusan'=>$this->input->post('jurusan'),
      'hasil'=>$this->input->post('hasil')
  	);

    $this->UserM->add_pelamarM($data);
  	redirect('User');
  }

  public function dataPekerjaanC()
  {
    $data['user'] = $this->load->model("UserM");
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['list'] = $this->UserM->dataPekerjaanM();
    //
    // $kota = $this->KotaModel->viewByProvinsi($id_loker);
    // $lists = "<option value=''>Pilih</option>";
    //
    // foreach($kota as $data){
    //   $lists .= "<option value='".$data->id."'>".$data->nama."</option>"; // Tambahkan tag option ke variabel $lists
    // }
    //
    // $callback = array('list_kota'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
    // echo json_encode($callback); // konversi varibael $callback menjadi JSON

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
    $hasil = $this->input->post('hasil');


    if ($foto){
      $config['upload_path'] = './uploads/pelamar';
    	$config['allowed_types'] = 'jpg|jpeg|pdf|doc';
      $config['overwrite'] = true;
    	$this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $old_image = $data['pendaftaran']['foto'];
        // var_dump($old_image);
        // die;
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
      // 'posisi'=>$this->input->post('posisi'),
      // 'nama'=>$this->input->post('nama'),
      // 'tgl_lahir'=>$this->input->post('tgl_lahir'),
      // 'tmpt_lahir'=>$this->input->post('tmpt_lahir'),
      // 'pendidikan'=>$this->input->post('pendidikan'),
      // 'nomor'=>$this->input->post('nomor'),
      // 'gender'=>$this->input->post('gender'),
      // 'alamat'=>$this->input->post('alamat'),
      // 'agama'=>$this->input->post('agama'),
      // 'status'=>$this->input->post('status')

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
      'hasil'=> $hasil

    ];

    // $this->UserM->editDataPekerjaanM($data,$id_pelamar);
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
