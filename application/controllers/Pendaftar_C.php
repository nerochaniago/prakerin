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

    public function action2(){

      $this->load->model("excel_export_model");

      $this->load->library("excel");

      $object = new PHPExcel();

      $object->setActiveSheetIndex(0);

      $table_columns = array("Posisi", "Nama", "Email","Pendidikan", "Universitas", "Jurusan");

      $column = 0;

      foreach($table_columns as $field){

        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

        $column++;

      }

      $employee_data = $this->excel_export_model->fetch_data2();

      $excel_row = 2;

      foreach($employee_data as $row){

        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->posisi);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->email);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->pendidikan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->universitas);
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->jurusan);
        $excel_row++;
      }

      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="Employee Data.xls"');
      $berhasil = $object_writer->save('php://output');

    }

}
