<?php
class UserM extends CI_Model{
  public function fetch_data()
  {
      // // cek username dan password yang di input
      // $cek = $this->db->query("SELECT * FROM pendaftaran where email='$email'");
      // $row = $cek->row_array();
      // if ($cek->num_rows()>=1){ // cek jml record yang ditemukan
      //   // Session username diciptakan dan menyimpan data username si user
      //   $this->session->set_userdata(array('email'=>$row['email']));
      //   // echo "Login Sukses";
      //   // buat query cek user berdasarkan session username yang sukses login,..
      //   $rows = $this->db->query("SELECT * FROM pendaftaran where email='".$this->session->email."'")->row_array();
      //   // echo "Selamat datang : $rows[nama_lengkap]";
      // }
   $this->db->select("*");
   $this->db->from('pendaftaran');
   $this->db->where('email', $this->session->userdata('email'));

   return $this->db->get();
  }

  public function add_pelamarM($data)
  {
    $this->db->insert('pendaftaran',$data);
  }

  public function dataPekerjaanM()
  {
    $this->db->select('*');
    $this->db->from('pendaftaran pen');
		// $this->db->join('user u', 'pen.email = u.email','inner');
    $this->db->join('user u', 'pen.role_id = u.role_id');
    // $this->db->group_by('id_pelamar');
    return $this->db->get()->result_array();
  }
}
