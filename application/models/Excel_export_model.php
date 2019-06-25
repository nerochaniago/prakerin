<?php

class Excel_export_model extends CI_Model{

               function fetch_data(){

                              $this->db->order_by("id_pelamar", "DESC");

                              $query = $this->db->get("pendaftaran");

                              return $query->result();

               }

}
