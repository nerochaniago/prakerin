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
