<?php 
class m_data_fans extends CI_Model{ //baris untuk menerangkah bahwa m_curd adalah sebuah model

	function tampil(){ 
		$query = $this->db->get('data_fans');
                //menampilkan  hasil dari query di atas
		return $query->result();
	}

	function simpan_data_fans($nama,$jurusan,$pasien){ 
		$data = array(
        'nama' => $nama,
        'jurusan' => $jurusan,
        'pasien' => $pasien
		);
		return $this->db->insert('data_fans', $data);
	}

	function edit_data_fans($id,$nama,$jurusan,$pasien){ 
		$data = array(
        'nama' => $nama,
        'jurusan' => $jurusan,
        'pasien' => $pasien
		);

		$this->db->where('id', $id);
		return $this->db->update('data_fans', $data);
	}

	function hapus_data_fans($id){ 
		$this->db->where('id', $id);
		return $this->db->delete('data_fans');
	}

	function tampil_pasien(){ 
		$query = $this->db->get('pasien');
                //menampilkan  hasil dari query di atas
		return $query->result();
	}

	function simpan_data_pasien($nama_pasien,$negara){ 
		$data = array(
        'nama' => $nama_pasien,
        'negara' => $negara,
		);
		return $this->db->insert('pasien', $data);
	}

	function edit_data_pasien($id,$nama_pasien,$negara){ 
		$data = array(
        'nama' => $nama_pasien,
        'negara' => $negara,
		);

		$this->db->where('id', $id);
		return $this->db->update('pasien', $data);
	}

	function hapus_data_pasien($id){ 
		$this->db->where('id', $id);
		return $this->db->delete('pasien');
	}

	function tampil_mahasiswa(){ 
		$query = $this->db->get('mahasiswa');
                //menampilkan  hasil dari query di atas
		return $query->result();
	}
}