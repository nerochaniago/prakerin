<?php
class UserM extends CI_Model{

  public function Excel_Export_pengumuman()
  {
    $this->load->model("excel_export_model");

    $data["employee_data"] = $this->excel_export_model->fetch_data();
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("admin/pelamar", $data);
  }

  public function dataLowonganM()
  {
    // ambil data dari db
        $this->db->order_by('id_loker', 'asc');
        $result = $this->db->get('loker_baru');
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->posisi] = $row->posisi;
            }
        }
        return $dd;
  }

  public function add_pelamarM($data)
  {
    $this->db->insert('pendaftaran',$data);


    // $emailnya = $this->input->POST['email'];
    // $query = "SELECT email FROM pendaftaran WHERE email = $emailnya";
    // $cekdulu= "SELECT email FROM pendaftaran WHERE email='$this->session->email'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
    // $prosescek= mysql_query($cekdulu);
    // if (mysql_num_rows($prosescek)>0) {
    // if ($query){
    // $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
    //    Anda Sudah mendaftar Lowongan Pekerjaan lain
    //   </div>');
    // }
    // else {
    //   $this->db->insert('pendaftaran',$data);
      $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
       Pendaftaran Berhasil, Pengumuman akan di umumkan pada website resmi www.purimakmurlestari.co.id
      </div>');
    // }
  }

  public function dataPekerjaanM()
  {
    $this->db->select('*');
    $this->db->from('pendaftaran pen');
    $this->db->where('email', $this->session->userdata('email'));
    return $this->db->get()->result_array();
  }

  public function getDataPekerjaanM($table,$where)
  {
    $this->db->where('id_pelamar',$where);
  	$mhs = $this->db->get($table);
  	return $mhs->row_array();
    // return $this->db->get_where($table,$where);
  }

  public function editDataPekerjaanM($data, $id_pelamar)
  {
    $this->db->where('id_pelamar',$id_pelamar);
    $this->db->update('pendaftaran',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
     Your data has been updated
    </div>');
  }

  public function delPelamarM($id_pelamar)
  {
    $this->db->where('id_pelamar', $id_pelamar);
    $query = $this->db->get('pendaftaran');
    $row = $query->row();
    unlink("./uploads/pelamar/$row->foto");
    $this->db->delete('pendaftaran', array('id_pelamar' => $id_pelamar));
  }

}
