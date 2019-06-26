<?php
class UserM extends CI_Model{
  public function add_pelamarM($data)
  {
    $this->db->insert('pendaftaran',$data);
  }

  public function dataPekerjaanM($value='')
  {
    $data = $this->db->get('pendaftaran');
  	return $data->result_array();
  }
}
