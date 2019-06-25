<?php
class lowongan_m extends CI_Model{
  public function __construct(){
    parent::__construct();
 }

 public function getLowonganPekerjaan(){
		$this->db->join('user', 'loker.role_id = user.role_id');
		return $this->db->get('loker');
	}

  public function insert($input){
    $res = $this->db->insert('loker', $input);
    return $res;
    }
}
