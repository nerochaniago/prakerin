<?php
class UserM extends CI_Model{

  public function add_pelamarM($data)
  {
    // $data1 = $this->session->email;
    //
    // // $data1 = $this->db->query('SELECT email FROM pendaftaran');
    //
    // if ($data1 > 0) {
    // $this->session->set_flashdata('Anda sudah mendaftar', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');

    // }
    // else {
      $this->db->insert('pendaftaran',$data);
    // }
  }

  public function dataPekerjaanM()
  {
    $this->db->select('*');
    $this->db->from('pendaftaran pen');
    $this->db->where('email', $this->session->userdata('email'));
    return $this->db->get()->result_array();
  }

  public function getDataPekerjaanM($id_pelamar)
  {
    $this->db->where('id_pelamar',$id_pelamar);
  	$mhs = $this->db->get('pendaftaran');
  	return $mhs->row_array();
  }

}
