<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == false){
			$data['title'] = 'Login Page';
			$this->load->view('layouts/auth_header',$data);
			$this->load->view('auth/login');
			$this->load->view('layouts/auth_footer');
		}else{
			//validasi sukses
			$this->_login();
		}
	}

	private function _login(){
	    $email = $this->input->post('email');  
	    $password = $this->input->post('password'); 

	    $user = $this->db->get_where('user', ['email' => $email])->row_array();

	    if($user){

	    		if(password_verify($password,$user['password'])){
	    			$data = [
	    				'email' => $user['email'],
	    				'user' => $user['user'],
	    				'status' => $user['status']

	    			];
	    			$this->session->set_userdata($data);
	    			redirect('dashboard');

	    		}else{
	    			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
	    			redirect('auth');
	    		}

	    }else{
	    	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak ditemukan!</div>');
	    	redirect('auth');
	    }

	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('status');

		$this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Anda telah berhasil keluar.</div>');
		redirect('Auth');
	}
}
