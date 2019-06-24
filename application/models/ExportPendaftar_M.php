<?php
class ExportPendaftar_M extends CI_Model{
      public function view(){
        // return $this->db->get('user')->result(); // Tampilkan semua data yang ada di tabel siswa
        $data = $this->db->get('user');
    		return $data->result_array();
      }
}
