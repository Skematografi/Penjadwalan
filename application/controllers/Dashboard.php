<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Dashboard');
		$ver=$this->session->userdata('status');

		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Dashboard';
		$this->load->view('layouts/header',$data);

		$query['mhs'] = $this->Model_Dashboard->mahasiswa();
		$query['dosen'] = $this->Model_Dashboard->dosen();
		$query['matkul'] = $this->Model_Dashboard->mata_kuliah();
		$query['ruang'] = $this->Model_Dashboard->ruangan();
		
		$this->load->view('dashboard',$query);
		$this->load->view('layouts/footer');
	}




























}