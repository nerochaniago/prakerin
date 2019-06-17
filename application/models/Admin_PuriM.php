<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemiluM extends CI_Model {
	public function getDataKomen()
	{
		$data = $this->db->get('komentar');
		return $data->result_array();
	}
	public function addlowonganM($data){
		$this->db->insert('lowongan',$data);
	}
  public function dellowonganM($id_lowongan){
    $this->db->where('id_lowongan', $id_lowongan);
    $this->db->delete('lowongan','photo');
  }
