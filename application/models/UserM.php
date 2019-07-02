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
    unlink("./uploads/pelamar/foto/$row->foto");
    $this->db->delete('pendaftaran', array('id_pelamar' => $id_pelamar));
  }

}
