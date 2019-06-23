<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemiluM extends CI_Model {
	public function getLowonganM()
	{
    $this->db->where('id_lowongan',$id_lowongan);
    $lowongan = $this->db->get('lowongan');
    return $lowongan->row_array();
	}

	public function addLowonganM($data){
		$this->db->insert('lowongan',$data);
	}

  public function delLowonganM($id_lowongan){
    $this->db->where('id_lowongan', $id_lowongan);
    $this->db->delete('lowongan','photo');
  }

  public function updateLowonganM($data, $id_lowongan) {
  	$this->db->where('id_lowongan',$id_lowongan);
  	$this->db->update('lowongan',$data);
  }
