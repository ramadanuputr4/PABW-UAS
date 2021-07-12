<?php 
class m_login extends CI_Model{ //baris untuk menerangkah bahwa m_curd adalah sebuah model

	function tampil(){ 
		$query = $this->db->get('data_fans');
                //menampilkan  hasil dari query di atas
		return $query->result();
	}
}