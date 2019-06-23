<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {

  public function construct() {
    parrent::__construct();
    $this->load->model('loker_model');
  }


  public function index() {

  }
}
