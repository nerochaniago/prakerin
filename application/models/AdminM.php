<?php
class AdminM extends CI_Model{

  public function add_statusM($data)
  {
      $query = $this->db->insert('pendaftaran',$data);

      // if ($query) {
      //   echo "berhasil";
      // } else {
      //   echo "gagal";
      // }
  }

}
