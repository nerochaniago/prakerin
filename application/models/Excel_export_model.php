<?php

class Excel_export_model extends CI_Model{

               public function fetch_data(){

                              $this->db->order_by("id_pelamar", "DESC");

                              $query = $this->db->get("pendaftaran");

                              return $query->result();

               }

               public function delPelamarM($id_pelamar)
               {
                 $this->db->where('id_pelamar', $id_pelamar);
                 $this->db->delete('pendaftaran');
               }

}