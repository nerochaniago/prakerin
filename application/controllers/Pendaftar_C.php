<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_C extends CI_Controller {
    public function index() {
        $this->load->view('pendaftar/home');
    }
}
