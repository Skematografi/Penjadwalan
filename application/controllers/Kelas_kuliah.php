<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_kuliah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Kelas');
		$this->load->helper('url');
		$this->load->helper('form');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Kelas Kuliah';
		$this->load->view('layouts/header',$data);

		$data['kelas'] = $this->Model_Kelas->index();

		$this->load->view('kurikulum/kelas',$data);
		$this->load->view('layouts/footer');
	}

	public function tambah(){
		$data['title'] = 'Kelas Kuliah';
		$this->load->view('layouts/header',$data);

		$data['auto']=$this->Model_Kelas->auto_id();
		$data['smt']=$this->Model_Kelas->semester();
		$data['mk']=$this->Model_Kelas->mata_kuliah();
		$this->load->view('kurikulum/kelas_tambah',$data);
		$this->load->view('layouts/footer');
	}

	public function tambah_data(){
		$data=[
			'id_kls' => $this->input->post('id_kls'),
			'id_sms' => $this->input->post('id_sms'),
			'id_smt' => $this->input->post('id_smt'),
			'id_mk' => $this->input->post('id_mk'),
			'nm_kls' => htmlspecialchars($this->input->post('nm_kls',TRUE)),
			'sks_mk' => htmlspecialchars($this->input->post('sks_kls',TRUE)),
			'sks_tm' => htmlspecialchars($this->input->post('sks_tm',TRUE)),
			'sks_prak' => htmlspecialchars($this->input->post('sks_prak',TRUE)),
			'sks_prak_lap' => htmlspecialchars($this->input->post('sks_prak_lap',TRUE)),
			'sks_sim' => htmlspecialchars($this->input->post('sks_sim',TRUE)),
			'bahasan_case' => htmlspecialchars($this->input->post('bahasan_case',TRUE)),
			'tgl_mulai_koas' => $this->input->post('tgl_mulai_koas'),
			'tgl_selesai_koas' => $this->input->post('tgl_selesai_koas'),
			'id_mou' => $this->input->post('id_mou'),
			'a_selenggara_pditt' => htmlspecialchars($this->input->post('a_selenggara_pditt',TRUE)),
			'kuota_pditt' => htmlspecialchars($this->input->post('kuota_pditt',TRUE)),
			'a_pengguna_pditt' =>$this->input->post('a_pengguna_pditt'),
			'id_kls_pditt' =>$this->input->post('id_kls_pditt')
		];

		$this->Model_Kelas->add_kls($data,'kelas_kuliah');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas kuliah berhasil di tambah</div>');
			redirect('Kelas_kuliah');
		
	}


	public function hapus_kls($id){
		$where = array('id_kls' => $id);
		$this->Model_Kelas->hapus($where,'kelas_kuliah');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas kuliah berhasil di hapus</div>');
		redirect('Kelas_kuliah');
	}

	public function edit_kls($id){
		$data['title'] = 'Kelas Kuliah';
		$this->load->view('layouts/header',$data);
	
		$where = array('id_kls' => $id);
		$data['smt']=$this->Model_Kelas->semester();
		$data['mk']=$this->Model_Kelas->mata_kuliah();
		$data['data'] = $this->Model_Kelas->edit($where,'kelas_kuliah')->result();
		$this->load->view('kurikulum/kelas_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function update_kls(){
		$id = $this->input->post('id_kls');
		$data=[
			'id_sms' => $this->input->post('id_sms'),
			'id_smt' => $this->input->post('id_smt'),
			'id_mk' => $this->input->post('id_mk'),
			'nm_kls' => htmlspecialchars($this->input->post('nm_kls',TRUE)),
			'sks_mk' => htmlspecialchars($this->input->post('sks_kls',TRUE)),
			'sks_tm' => htmlspecialchars($this->input->post('sks_tm',TRUE)),
			'sks_prak' => htmlspecialchars($this->input->post('sks_prak',TRUE)),
			'sks_prak_lap' => htmlspecialchars($this->input->post('sks_prak_lap',TRUE)),
			'sks_sim' => htmlspecialchars($this->input->post('sks_sim',TRUE)),
			'bahasan_case' => htmlspecialchars($this->input->post('bahasan_case',TRUE)),
			'tgl_mulai_koas' => $this->input->post('tgl_mulai_koas'),
			'tgl_selesai_koas' => $this->input->post('tgl_selesai_koas'),
			'id_mou' => $this->input->post('id_mou'),
			'a_selenggara_pditt' => htmlspecialchars($this->input->post('a_selenggara_pditt',TRUE)),
			'kuota_pditt' => htmlspecialchars($this->input->post('kuota_pditt',TRUE)),
			'a_pengguna_pditt' =>$this->input->post('a_pengguna_pditt'),
			'id_kls_pditt' =>$this->input->post('id_kls_pditt')
		];

		$where = array(
			'id_kls' => $id
		);

		$this->Model_Kelas->update($where,$data,'kelas_kuliah');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas kuliah berhasil di update</div>');
			redirect('Kelas_kuliah');
	}



























}