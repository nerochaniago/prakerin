<?php

class Excel_export_model extends CI_Model{

               public function fetch_data(){
                 $this->db->order_by("id_pelamar", "DESC");
                 $query = $this->db->get("pendaftaran");
                 return $query->result();
               }

               public function fetch_data2(){
                 $this->db->order_by("id_pelamar", "DESC");
                 $this->db->where('hasil','yes');
                 $query = $this->db->get("pendaftaran");
                 return $query->result();
               }

               public function getDataPekerjaanM($table,$where)
               {
                 $this->db->where('id_pelamar',$where);
               	 $mhs = $this->db->get($table);
               	 return $mhs->row_array();
               }

               public function delPelamarM($id_pelamar)
               {
                 $this->db->where('id_pelamar', $id_pelamar);
                 $query = $this->db->get('pendaftaran');
                 $row = $query->row();
                 unlink("./uploads/pelamar/foto/$row->foto");
                 $this->db->delete('pendaftaran', array('id_pelamar' => $id_pelamar));
               }

               public function viewDataM($id_pelamar)
               {
                 $this->db->where('id_pelamar', $id_pelamar);
                 $this->db->get('pendaftaran');
               }

               public function delAll()
               {
                 // $this->db->delete('pendaftaran');
                 $query = $this->db->get('pendaftaran');
                 $row = $query->row();
                 unlink("./uploads/pelamar/foto/$row->foto");
                 $this->db->empty_table('pendaftaran');
               }

}
