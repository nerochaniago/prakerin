<?php
class lowongan_m extends CI_Model{
  public function __construct(){
    parent::__construct();
 }

 public function getLowonganPekerjaan(){
    $this->db->select('lo.id_loker,lo.posisi,lo.penempatan,lo.syarat,lo.batas,lo.gambar');
    $this->db->from('loker_baru lo');
		$this->db->join('user u', 'lo.role_id = u.role_id','inner');
    $this->db->group_by('id_loker');
    return $this->db->get()->result_array();

	}



  public function insertLowongan(){

    if ($this->input->post('gambar')) {
      // code...
      $uploadImage = $_FILES['gambar'];
      var_dump($uploadImage);
      die;
    }

      $data = [
        'posisi' => $this->input->post('posisi'),
        'role_id' => 1,
        'penempatan' => $this->input->post('penempatan'),
        'syarat' => $this->input->post('syarat'),
        'batas' => $this->input->post('batas')

      ];

      $this->db->insert('loker_baru',$data);
    }


}
