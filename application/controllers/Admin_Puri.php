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
    if(isset($_POST['submit'])){
              $posisi = $this->input->post('posisi');
              $penempatan = $this->input->post('penempatan');
              $batas = $this->input->post('batas');

              $input = array(
                      'posisi' => $posisi,
                      'penempatan' => $penempatan,
                      'role_id' => 1,
                      'batas' => $batas
              );
              $this->lowongan_m->insert($input);
              redirect('Admin_Puri/lowongan');
          }
  }

  public function Excel_Export()
  {
    $this->load->model("excel_export_model");

    $data["employee_data"] = $this->excel_export_model->fetch_data();
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("admin/pelamar", $data);
  }

  function view(){
    $data["employee_data"] = $this->excel_export_model->fetch_data();
    $this->load->view("admin/pelamar", $data);

  }

  function action(){

    $this->load->model("excel_export_model");

    $this->load->library("excel");

    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Name", "Email");

    $column = 0;

    foreach($table_columns as $field){

      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

      $column++;

    }

    $employee_data = $this->excel_export_model->fetch_data();

    $excel_row = 2;

    foreach($employee_data as $row){

      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->name);

      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->email);

      $excel_row++;

    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    header('Content-Type: application/vnd.ms-excel');

    header('Content-Disposition: attachment;filename="Employee Data.xls"');

    $object_writer->save('php://output');

  }

}
