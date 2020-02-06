<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Si_kelola extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Si');
		$this->load->helper('url');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}	
	}

	public function tambah_data(){

		$link = $this->input->post('link');
		$id = htmlspecialchars($this->input->post('id_jadwal',TRUE));
		$kelas = htmlspecialchars($this->input->post('kelas',TRUE));
		$matkul =htmlspecialchars($this->input->post('id_kls',TRUE));
		$dosen = htmlspecialchars($this->input->post('nm_ptk',TRUE));
		$ruang =htmlspecialchars($this->input->post('ruangan',TRUE));
		$hari =htmlspecialchars($this->input->post('hari',TRUE));
		$jam = htmlspecialchars($this->input->post('jam',TRUE));


		//mengecek apakah waktu dan tempat sudah ada di database
		$waktu_tempat = $this->db->get_where('jadwal',['ruangan'=>$ruang,'hari'=>$hari,'jam'=>$jam])->row_array();
		
		//mengecek apakah kelas sudah ada jadwal
		$jadwal_kelas = $this->db->get_where('jadwal',['kelas'=>$kelas,'id_kls'=>$matkul])->row_array();

		//mengecek apakah jadwal dosen tidak bertabrakan
		$jadwal_dosen = $this->db->get_where('jadwal',['dosen'=>$dosen,'hari'=>$hari,'jam'=>$jam])->row_array();

		if($waktu_tempat){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Waktu dan tempat sudah digunakan.</div>');
			redirect($link);
		}else if($jadwal_kelas){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jadwal kuliah sudah ada.</div>');
			redirect($link);
		}else if($jadwal_dosen){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jadwal dosen sudah ada.</div>');
			redirect($link);
		}else{

			$data=[
			'id_jadwal' => $id,
			'kelas' => $kelas,
			'id_kls' => $matkul,
			'dosen' => $dosen,
			'ruangan' => $ruang,
			'hari' => $hari,
			'jam' => $jam
		];

		$this->Model_Si->add_jadwal($data,'jadwal');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal berhasil disimpan.</div>');
			redirect($link);
		}
		
	}


	public function hapus($id, $class, $method = 'index'){
		$where = array('id_jadwal' => $id);
		$this->Model_Si->hapus($where,'jadwal');
		$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Jadwal kuliah berhasil di hapus</div>');
		redirect($class.'/'.$method);
	}
	

	public function edit_1($id){
		$data['title'] = 'Jadwal Semester 1';
		$this->load->view('layouts/header',$data);

		$smt='smt1';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si1_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_2($id){
		$data['title'] = 'Jadwal Semester 2';
		$this->load->view('layouts/header',$data);

		$smt='smt2';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si2_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_3($id){
		$data['title'] = 'Jadwal Semester 3';
		$this->load->view('layouts/header',$data);

		$smt='smt3';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si3_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_4($id){
		$data['title'] = 'Jadwal Semester 4';
		$this->load->view('layouts/header',$data);

		$smt='smt4';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si4_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_5($id){
		$data['title'] = 'Jadwal Semester 5';
		$this->load->view('layouts/header',$data);

		$smt='smt5';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si5_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_6($id){
		$data['title'] = 'Jadwal Semester 6';
		$this->load->view('layouts/header',$data);

		$smt='smt6';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si6_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_7($id){
		$data['title'] = 'Jadwal Semester 7';
		$this->load->view('layouts/header',$data);

		$smt='smt7';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si7_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_8($id){
		$data['title'] = 'Jadwal Semester 8';
		$this->load->view('layouts/header',$data);

		$smt='smt8';
		$jur='si';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('si/si8_edit',$data);
		$this->load->view('layouts/footer');
	}


	public function edit_sia2($id){
		$data['title'] = 'Jadwal Semester 2';
		$this->load->view('layouts/header',$data);

		$smt='smt2';
		$jur='sia';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('sia/sia2_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_sia4($id){
		$data['title'] = 'Jadwal Semester 4';
		$this->load->view('layouts/header',$data);

		$smt='smt4';
		$jur='sia';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('sia/sia4_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function edit_sia6($id){
		$data['title'] = 'Jadwal Semester 6';
		$this->load->view('layouts/header',$data);

		$smt='smt6';
		$jur='sia';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_jadwal',$id);
	 	$data['data']=$this->db->get()->result();

		$this->load->view('sia/sia6_edit',$data);
		$this->load->view('layouts/footer');
	}




	public function update(){
		$link = $this->input->post('link');
		$id = htmlspecialchars($this->input->post('id_jadwal',TRUE));
		$kelas = htmlspecialchars($this->input->post('kelas',TRUE));
		$matkul =htmlspecialchars($this->input->post('id_kls',TRUE));
		$dosen = htmlspecialchars($this->input->post('nm_ptk',TRUE));
		$ruang =htmlspecialchars($this->input->post('ruangan',TRUE));
		$hari =htmlspecialchars($this->input->post('hari',TRUE));
		$jam = htmlspecialchars($this->input->post('jam',TRUE));

		$data=[
			'kelas' => $kelas,
			'id_kls' => $matkul,
			'dosen' => $dosen,
			'ruangan' => $ruang,
			'hari' => $hari,
			'jam' => $jam
		];

		$where = array(
			'id_jadwal' => $id
		);


		$this->Model_Si->update_jadwal($where,$data,'jadwal');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal berhasil di update.</div>');
			redirect($link);
	}



























}