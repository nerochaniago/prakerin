<?php
class lowongan_m extends CI_Model{
  public function __construct(){
    parent::__construct();
 }

 public function getLowonganPekerjaan(){
    $this->db->select('lo.id_loker,lo.posisi,lo.penempatan,lo.syarat,lo.batas,lo.gambar');
    $this->db->from('loker_baru lo');
    $this->db->group_by('id_loker');
    return $this->db->get()->result_array();

	}

  public function hapusLoker($id_loker) {
    $this->db->where('id_loker',$id_loker);
    $query = $this->db->get('loker_baru');
    $row = $query->row();
    unlink("./assets/img/loker/$row->gambar");
    $this->db->delete('loker_baru', array('id_loker' => $id_loker));
  }


  public function getAllLowongan(){
    $this->db->select('lo.id_loker,lo.posisi,lo.penempatan,lo.syarat,lo.batas,lo.gambar');
    $this->db->from('loker_baru lo');
    $this->db->group_by('id_loker');
    return $this->db->get()->result_array();
  }

  public function getAllLokerById($id_loker){
    return $this->db->get_where('loker_baru',['id_loker' => $id_loker])->row_array();
  }

  public function getLowongan($limit,$start){
    $this->db->order_by('id_loker','DESC');
    return $this->db->get('loker_baru',$limit,$start)->result_array();
  }

  public function countAllLoker(){
    return $this->db->get('loker_baru')->num_rows();
  }

}
