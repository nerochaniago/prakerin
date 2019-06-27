<?php
class lowongan_m extends CI_Model{
  public function __construct(){
    parent::__construct();
 }

 public function getLowonganPekerjaan(){
		$this->db->join('user', 'loker_baru.role_id = user.role_id');
    return $this->db->get('loker_baru')->result_array();

	}

  public function insertLowongan(){
      $data = [
        'posisi' => $this->input->post('posisi'),
        'role_id' => 1
      ];

      $this->db->insert('loker_baru',$data);
    }


}
