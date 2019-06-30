<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_C extends CI_Controller {
    public function index() {
        $this->load->view('pendaftar/home');
    }
    
    public function lowonganKerja() {
      $this->load->model('lowongan_m');
      $data['loker_baru'] = $this->lowongan_m->getLowonganPekerjaan();
      $this->load->view('pendaftar/lowonganKerja',$data);
    }

    public function pengumuman() {
      $this->load->view('pendaftar/pengumuman');
    }

}
