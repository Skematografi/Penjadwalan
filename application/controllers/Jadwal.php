<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Jadwal');
		$this->load->helper('url');
		$this->load->helper('form');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Jadwal Kuliah';
		$this->load->view('layouts/header',$data);

		$data['jadwal'] = $this->Model_Jadwal->jadwal();
		$this->load->view('kurikulum/jadwal',$data);
		$this->load->view('layouts/footer');
	}




























}