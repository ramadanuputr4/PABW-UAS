<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function auth(){
		// print_r($this->input->post());die();
		$email			= $this->input->post('email');
		$password		= $this->input->post('password');

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('pendaftaran')->num_rows();
		// print_r($query);die();
		if($query >= 1){
			echo $this->session->set_flashdata('sukses','Berhasil Login');
			redirect('home');
		}else{
			echo $this->session->set_flashdata('msg','Email or Password is Wrong');
        	redirect('login');
		}
	}

	function register()
	{
		$this->load->view('register');
	}

	function daftar(){
		// print_r($this->input->post());die();
		$fullname		= $this->input->post('fullname');
		$email			= $this->input->post('email');
		$password		= $this->input->post('password');
		$password2		= $this->input->post('password2');

		$this->db->where('email', $email);
		$query = $this->db->get('pendaftaran')->num_rows();
		// print_r($query);die();
		if($query >= 1){
			echo $this->session->set_flashdata('msg','Email sudah terdaftar');
			redirect('login/register');
		} elseif ($password != $password2) {
			echo $this->session->set_flashdata('msg','Password 1 & 2 not match');
			redirect('login/register');
		}else {
			$data = array(
	        'fullname' => $fullname,
	        'email' => $email,
	        'password' => $password
			);

			$this->db->insert('pendaftaran', $data);
			echo $this->session->set_flashdata('sukses','Berhasil Daftar');
        	redirect('login/register');
		}
	}

}
