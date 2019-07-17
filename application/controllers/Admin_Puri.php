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
    $data['loker_baru'] = $this->lowongan_m->getLowonganPekerjaan();
    $this->load->view('admin/lowongan',$data);
  }

  public function tambahLowongan(){

    $posisi = $this->input->post('posisi');
    $penempatan = $this->input->post('penempatan');
    $syarat = $this->input->post('syarat');
    $batas = $this->input->post('batas');
    $uploadImage = $_FILES['gambar']['name'];
    if ($uploadImage) {
      // code...
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_sizes'] = '5048';
      $config['upload_path'] = './assets/img/loker/';
      $this->load->library('upload',$config);

      if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $data = [
                'posisi' => $posisi,
                'penempatan' => $penempatan,
                'syarat' => $syarat,
                'batas' => $batas,
                'gambar' => $upload_data['file_name']
              ];

              $this->db->insert('loker_baru',$data);
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               Input Loker Berhasil
              </div>');
              redirect('Admin_Puri/lowongan');
      } else {
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               gagal
              </div>');
              redirect('Admin_Puri/lowongan');
    }

    }
    $data = [
        'posisi' => $posisi,
        'penempatan' => $penempatan,
        'syarat' => $syarat,
        'batas' => $batas
      ];
      $this->db->insert('loker_baru',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Input Loker Berhasil
      </div>');
      redirect('Admin_Puri/lowongan');



  }

public function editLoker(){



  $data['loker_baru'] = $this->db->get_where('loker_baru',['id_loker' => $this->input->post('id_loker') ])->row_array();
  $posisi = $this->input->post('posisi');
  $penempatan = $this->input->post('penempatan');
  $syarat = $this->input->post('syarat');
  $batas = $this->input->post('batas');
  $uploadImage = $_FILES['gambar']['name'];
  if ($uploadImage) {
    // code...
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_sizes'] = '5048';
    $config['upload_path'] = './assets/img/loker/';
    $config['overwrite'] = true;
    $this->load->library('upload',$config);

    if ($this->upload->do_upload('gambar')) {
      // code...
      $old_image = $data['loker_baru']['gambar'];
      if ($old_image) {
        // code...
        unlink(FCPATH . 'assets/img/loker/' . $old_image);
      }
      $new_img = $this->upload->data('file_name');
      $this->db->set('gambar', $new_img);

      $data = [
        'posisi' => $posisi,
        'penempatan' => $penempatan,
        'syarat' => $syarat,
        'batas' => $batas
      ];

      $this->db->where('id_loker',$this->input->post('id_loker'));
      $this->db->update('loker_baru',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Loker has been updated
      </div>');
      redirect('Admin_Puri/lowongan');

    } else {
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
             gagal
            </div>');
            redirect('Admin_Puri/lowongan');
  }
  }

      $data = [
        'posisi' => $posisi,
        'penempatan' => $penempatan,
        'syarat' => $syarat,
        'batas' => $batas
      ];
      $this->db->where('id_loker',$this->input->post('id_loker'));
      $this->db->update('loker_baru',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Loker has been updated
      </div>');
      redirect('Admin_Puri/lowongan');
  }


public function hapusLoker($id_loker){
  $this->lowongan_m->hapusLoker($id_loker);
  $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
   Loker Berhasil Dihapus
  </div>');
  redirect('Admin_Puri/lowongan');
}

  public function viewPendaftar()
  {
    $this->load->model("excel_export_model");
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data["employee_data"] = $this->excel_export_model->fetch_data();
    $this->load->view('informasiinfo',$data);
  }

  public function delPelamarC($id_pelamar){
    $this->load->model("Excel_export_model");
    $this->Excel_export_model->delPelamarM($id_pelamar);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     Pelamar has been deleted
    </div>');
    redirect('Admin_Puri/Excel_Export');
  }

  public function viewData($id_pelamar){
    $this->load->model("Excel_export_model");
    $this->Excel_export_model->viewDataM($id_pelamar);
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['list'] = $this->Excel_export_model->getDataPekerjaanM('pendaftaran',$id_pelamar);
    $this->load->view('admin/viewDataV',$data);
  }

  public function delAllPendaftar(){
    $this->load->model("Excel_export_model");
    $this->Excel_export_model->delAll();
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function delAllUser(){
    $this->load->model("Excel_export_model");
    $this->Excel_export_model->delAllUser();
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     All user has been deleted
    </div>');
    redirect('Admin_Puri/Excel_Export');;
  }

  public function Excel_Export()
  {
    $this->load->model("Excel_export_model");
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data["pelamar"] = $this->Excel_export_model->fetch_data();
    $this->load->view("admin/pelamar", $data);
  }


  public function Publish(){
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['publish_hasil'] = $this->lowongan_m->getPublishHasil();
    $this->load->view('admin/hasil',$data);
  }

  public function tambahHasil(){
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $isi = $this->input->post('isi');
    $file = $_FILES['file']['name'];
    if ($file) {
      // code...
      $config['allowed_types'] = 'gif|jpg|png|xls|xlsx|csv';
      $config['upload_path'] = './hasil_seleksi/';
      $this->load->library('upload',$config);

      if ($this->upload->do_upload('file')) {
            $upload_data = $this->upload->data();
            $data = [
                'judul' => $judul,
                'tanggal' => $tanggal,
                'isi' => $isi,
                'file' => $upload_data['file_name']
              ];

              $this->db->insert('publish_hasil',$data);
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               Input Hasil Seleksi Berhasil
              </div>');
              redirect('Admin_Puri/Publish');
      } else {
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               gagal
              </div>');
              redirect('Admin_Puri/Publish');
    }

    }
    $data = [
      'judul' => $judul,
      'tanggal' => $tanggal,
      'isi' => $isi
      ];
      $this->db->insert('publish_hasil',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
       Input Hasil Seleksi Berhasil
      </div>');
      redirect('Admin_Puri/Publish');
  }

  public function editHasil(){
    $data['publish_hasil'] = $this->db->get_where('publish_hasil',['id_hasil' => $this->input->post('id_hasil') ])->row_array();
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $isi = $this->input->post('isi');
    $file = $_FILES['file']['name'];
    if ($file) {
      // code...
      $config['allowed_types'] = 'gif|jpg|png|xls|xlsx|csv';
      $config['upload_path'] = './hasil_seleksi/';
      $config['overwrite'] = true;
      $this->load->library('upload',$config);
      if ($this->upload->do_upload('file')) {
        $old_file = $data['publish_hasil']['file'];
        if ($old_file) {
          // code...
          unlink(FCPATH . 'hasil_seleksi/' . $old_file);
        }
        $new_file = $this->upload->data('file_name');
        $this->db->set('file', $new_file);

        $data = [
          'judul' => $judul,
          'tanggal' => $tanggal,
          'isi' => $isi
        ];

        $this->db->where('id_hasil',$this->input->post('id_hasil'));
        $this->db->update('publish_hasil',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
         Hasil seleksi has been updated
        </div>');
        redirect('Admin_Puri/Publish');

      } else {
              $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
               gagal
              </div>');
              redirect('Admin_Puri/Publish');
    }


    }
            $data = [
              'judul' => $judul,
              'tanggal' => $tanggal,
              'isi' => $isi
            ];
            $this->db->where('id_hasil',$this->input->post('id_hasil'));
            $this->db->update('publish_hasil',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
             Hasil seleksi has been updated
            </div>');
            redirect('Admin_Puri/Publish');
  }

  public function hapusHasil($id_hasil){
    $this->lowongan_m->hapusHasil($id_hasil);
    $this->session->set_flashdata('message','<div class="alert alert-warning" role="alert">
     Data Hasil Seleksi Berhasil Dihapus
    </div>');
    redirect('Admin_Puri/Publish');
  }

  public function action(){

    $this->load->model("excel_export_model");

    $this->load->library("excel");

    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("posisi", "nama", "tgl_lahir", "tmpt_lahir", "gender", "status", "agama", "alamat", "nomor", "email", "pendidikan", "universitas", "jurusan");

    $column = 0;

    foreach($table_columns as $field){

      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

      $column++;

    }

    $employee_data = $this->excel_export_model->fetch_data();

    $excel_row = 2;

    foreach($employee_data as $row){

      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->posisi);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->tgl_lahir);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->tmpt_lahir);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->gender);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->status);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->agama);
      $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->alamat);
      $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->nomor);
      $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->email);
      $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pendidikan);
      $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->universitas);
      $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->jurusan);
      $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->kelengkapan);

      $excel_row++;

    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    header('Content-Type: application/vnd.ms-excel');

    header('Content-Disposition: attachment;filename="Employee Data.xls"');

    $berhasil = $object_writer->save('php://output');

  }

  public function saveStatus()
  {
    $this->load->model('AdminM');
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $hasil = $this->input->post('hasil');

    $data = array('hasil'=>$hasil
                  );
    // $this->AdminM->add_statusM($data);

    $this->db->where('id_pelamar',$this->input->post('id_pelamar'));
    $this->db->update('pendaftaran',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     Status has been updated
    </div>');
    redirect('Admin_Puri/Excel_Export');

    // redirect('admin');
  }






}
