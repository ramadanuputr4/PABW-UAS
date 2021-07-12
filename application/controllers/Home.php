<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_fans');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['isi'] = $this->m_data_fans->tampil();
		$this->load->view('home',$data);
	}

	public function tampil_pasien()
	{
		$data['isi'] = $this->m_data_fans->tampil_pasien();
		$this->load->view('pasien',$data);
	}

	public function edit_data_pasien(){
		// print_r($this->input->post('id'));die();
		$id				= $this->input->post('id');
		$id_pasien		= $this->input->post('id_pasien');
		$id_ruang		= $this->input->post('id_ruang');
		$nama			= $this->input->post('nama');
		$penyakit		= $this->input->post('penyakit');
		$tgl_lahir		= $this->input->post('tgl_lahir');

		$data = array(
        'id_pasien' => $id_pasien,
        'id_ruang' => $id_ruang,
        'nama' => $nama,
        'penyakit' => $penyakit,
        'tgl_lahir' => $tgl_lahir
		);

		$this->db->where('id', $id);
		$this->db->update('pasien', $data);
		// $this->m_data_fans->edit_data_pasien($id,$nama_pasien,$negara);
		redirect('home/tampil_pasien');
	}

	public function tambah_data_pasien(){
		//print_r($this->input->post('nama'));die();
		$id_pasien		= $this->input->post('id_pasien');
		$id_ruang		= $this->input->post('id_ruang');
		$nama			= $this->input->post('nama');
		$penyakit		= $this->input->post('penyakit');
		$tgl_lahir		= $this->input->post('tgl_lahir');

		$data = array(
        'id_pasien' => $id_pasien,
        'id_ruang' => $id_ruang,
        'nama' => $nama,
        'penyakit' => $penyakit,
        'tgl_lahir' => $tgl_lahir
		);

		$this->db->insert('pasien', $data);
		redirect('home/tampil_pasien');
	}

	public function hapus_data_pasien(){
		//print_r($this->input->post('nama'));die();
		$id = $this->input->post('id');
		$this->db->delete('pasien', array('id' => $id)); 
		redirect('home/tampil_pasien');
	}

	public function tampil_dokter()
	{
		$data['isi'] = $query = $this->db->get('dokter')->result();
		$this->load->view('dokter',$data);
	}

	public function edit_data_dokter(){
		// print_r($this->input->post('id'));die();
		$id				= $this->input->post('id');
		$id_dokter		= $this->input->post('id_dokter');
		$nama			= $this->input->post('nama');
		$spesialis		= $this->input->post('spesialis');
		$jam_kerja		= $this->input->post('jam_kerja');

		$data = array(
        'id_dokter' => $id_dokter,
        'nama' => $nama,
        'spesialis' => $spesialis,
        'jam_kerja' => $jam_kerja
		);

		$this->db->where('id', $id);
		$this->db->update('dokter', $data);
		// $this->m_data_fans->edit_data_dokter($id,$nama_dokter,$negara);
		redirect('home/tampil_dokter');
	}

	public function tambah_data_dokter(){
		//print_r($this->input->post('nama'));die();
		$id_dokter		= $this->input->post('id_dokter');
		$nama			= $this->input->post('nama');
		$spesialis		= $this->input->post('spesialis');
		$jam_kerja		= $this->input->post('jam_kerja');

		$data = array(
        'id_dokter' => $id_dokter,
        'nama' => $nama,
        'spesialis' => $spesialis,
        'jam_kerja' => $jam_kerja
		);

		$this->db->insert('dokter', $data);
		redirect('home/tampil_dokter');
	}

	public function hapus_data_dokter(){
		//print_r($this->input->post('nama'));die();
		$id = $this->input->post('id');
		$this->db->delete('dokter', array('id' => $id)); 
		redirect('home/tampil_dokter');
	}

}
