<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Matkul');
		$this->load->helper('url');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Mata Kuliah';
		$this->load->view('layouts/header',$data);

		$data['matkul'] = $this->Model_Matkul->index();

		$this->load->view('kurikulum/matkul',$data);
		$this->load->view('layouts/footer');
	}

	public function tambah(){
		$data['title'] = 'Mata Kuliah';
		$this->load->view('layouts/header',$data);

		$data['auto']=$this->Model_Matkul->auto_id();
		$this->load->view('kurikulum/matkul_tambah',$data);
		$this->load->view('layouts/footer');
	}

	public function tambah_data(){
		$data=[
			'id_mk' => htmlspecialchars($this->input->post('id_mk',TRUE)),
			'id_sms' => htmlspecialchars($this->input->post('id_sms',TRUE)),
			'id_jenj_didik' => htmlspecialchars($this->input->post('id_jenj_didik',TRUE)),
			'kode_mk' => htmlspecialchars($this->input->post('kode_mk',TRUE)),
			'nm_mk' => htmlspecialchars($this->input->post('nm_mk',TRUE)),
			'jns_mk' => htmlspecialchars($this->input->post('jns_mk',TRUE)),
			'kel_mk' => htmlspecialchars($this->input->post('kel_mk',TRUE)),
			'sks_mk' => htmlspecialchars($this->input->post('sks_mk',TRUE)),
			'sks_tm' => htmlspecialchars($this->input->post('sks_tm',TRUE)),
			'sks_prak' => htmlspecialchars($this->input->post('sks_prak',TRUE)),
			'sks_prak_lap' => htmlspecialchars($this->input->post('sks_prak_lap',TRUE)),
			'sks_sim' => htmlspecialchars($this->input->post('sks_sim',TRUE)),
			'metode_pelaksanaan_kuliah' => htmlspecialchars($this->input->post('metode_pelaksanaan_kuliah',TRUE)),
			'a_sap' => htmlspecialchars($this->input->post('a_sap',TRUE)),
			'a_silabus' => htmlspecialchars($this->input->post('a_silabus',TRUE)),
			'a_bahan_ajar' => htmlspecialchars($this->input->post('a_bahan_ajar',TRUE)),
			'acara_prak' => htmlspecialchars($this->input->post('acara_prak',TRUE)),
			'a_diktat' => htmlspecialchars($this->input->post('a_diktat',TRUE)),
			'tgl_mulai_efektif' =>$this->input->post('tgl_mulai_efektif'),
			'tgl_akhir_efektif' =>$this->input->post('tgl_akhir_efektif')
		];

		$this->Model_Matkul->add_mk($data,'mata_kuliah');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mata kuliah berhasil di tambah</div>');
			redirect('Mata_kuliah');
		
	}


	public function hapus_mk($id){
		$where = array('id_mk' => $id);
		$this->Model_Matkul->hapus($where,'mata_kuliah');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mata kuliah berhasil di hapus</div>');
		redirect('Mata_kuliah');
	}

	public function edit_mk($id){
		$data['title'] = 'Mata Kuliah';
		$this->load->view('layouts/header',$data);
	
		$where = array('id_mk' => $id);
		$data['data'] = $this->Model_Matkul->edit($where,'mata_kuliah')->result();
		$this->load->view('kurikulum/matkul_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function update_mk(){
		$id = $this->input->post('id_mk');
		$data=[
			'id_sms' => htmlspecialchars($this->input->post('id_sms',TRUE)),
			'id_jenj_didik' => htmlspecialchars($this->input->post('id_jenj_didik',TRUE)),
			'kode_mk' => htmlspecialchars($this->input->post('kode_mk',TRUE)),
			'nm_mk' => htmlspecialchars($this->input->post('nm_mk',TRUE)),
			'jns_mk' => htmlspecialchars($this->input->post('jns_mk',TRUE)),
			'kel_mk' => htmlspecialchars($this->input->post('kel_mk',TRUE)),
			'sks_mk' => htmlspecialchars($this->input->post('sks_mk',TRUE)),
			'sks_tm' => htmlspecialchars($this->input->post('sks_tm',TRUE)),
			'sks_prak' => htmlspecialchars($this->input->post('sks_prak',TRUE)),
			'sks_prak_lap' => htmlspecialchars($this->input->post('sks_prak_lap',TRUE)),
			'sks_sim' => htmlspecialchars($this->input->post('sks_sim',TRUE)),
			'metode_pelaksanaan_kuliah' => htmlspecialchars($this->input->post('metode_pelaksanaan_kuliah',TRUE)),
			'a_sap' => htmlspecialchars($this->input->post('a_sap',TRUE)),
			'a_silabus' => htmlspecialchars($this->input->post('a_silabus',TRUE)),
			'a_bahan_ajar' => htmlspecialchars($this->input->post('a_bahan_ajar',TRUE)),
			'acara_prak' => htmlspecialchars($this->input->post('acara_prak',TRUE)),
			'a_diktat' => htmlspecialchars($this->input->post('a_diktat',TRUE)),
			'tgl_mulai_efektif' =>$this->input->post('tgl_mulai_efektif'),
			'tgl_akhir_efektif' =>$this->input->post('tgl_akhir_efektif')
		];

		$where = array(
			'id_mk' => $id
		);

		$this->Model_Matkul->update($where,$data,'mata_kuliah');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mata kuliah berhasil di update</div>');
			redirect('Mata_kuliah');
	}



























}