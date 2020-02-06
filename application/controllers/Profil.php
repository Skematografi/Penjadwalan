<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Profil';
		$this->load->view('layouts/header',$data);

		$data['profil']=$this->db->get('user')->result();
		$this->load->view('profil',$data);
		$this->load->view('layouts/footer');
	}

	public function update(){
		$id=1;
		$user = htmlspecialchars($this->input->post("username", true));
		$email = $this->input->post("email", true);
        $password = $this->input->post("password", true);

		$data=[
			'user' => $user,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_BCRYPT)
		];

		$where = array(
			'id_user' => $id
		);

		$this->db->where($where);
		$this->db->update('user',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil di update</div>');
		redirect('Profil');
	}




























}