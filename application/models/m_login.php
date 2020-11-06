<?php
class M_login extends CI_Model{
  
  function cekdb()
  {
		$username = set_value('username');
		$password = md5(set_value('password'));
		$jabatan = set_value('jabatan');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->where('jabatan', $jabatan)
						  ->limit(1)
						  ->get('m_users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

}
?>