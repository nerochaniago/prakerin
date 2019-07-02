<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_C extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    $this->load->helper('text');
  }

    public function index() {
        $this->load->view('pendaftar/home');
    }

    public function lowonganKerja() {
      $this->load->model('lowongan_m');
      $this->load->library('pagination');
      $config['base_url'] = 'http://localhost/prakerin/Pendaftar_C/lowonganKerja';
      $config['total_rows'] = $this->lowongan_m->countAllLoker();
      $config['per_page'] = 6;
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';

      $config['next_tag_open'] = '<li class="page-item grey" style="width:50px;">';
      $config['next_tag_close'] = '</li>';

      $config['prev_tag_open'] = '<li class="page-item grey" style="width:50px;">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="active green"><a href="#!" style="width:50px;">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page-item" style="width:50px;">';
      $config['num_tag_close'] = '</li>';

      $config['attributes'] = array('class'=>'page-link');

      $data['start'] = $this->uri->segment(3);
      $data['loker_baru'] = $this->lowongan_m->getLowongan($config['per_page'],$data['start']);
      $this->pagination->initialize($config);
      $this->load->view('pendaftar/lowonganKerja',$data);
    }

    public function pengumuman() {
      $this->load->view('pendaftar/pengumuman');
    }

    public function detailLoker($id_loker){
      $this->load->helper('text');
      $this->load->model('lowongan_m');
      $data['loker_baru'] = $this->lowongan_m->getAllLokerById($id_loker);
      $this->load->view('pendaftar/detail_lowongan',$data);
    }

}
