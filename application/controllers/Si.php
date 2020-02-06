<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Si extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Si');
		$this->load->helper('url');
		$this->load->helper('form');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}



	public function index()
	{
		
		$data['title'] = 'Jadwal Semester 1';
		$this->load->view('layouts/header',$data);

		$smt='smt1';
		$jur='si';
		$where='Sistem Informasi 1';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si1',$data);
		$this->load->view('layouts/footer');
	}

	public function si_2()
	{
		
		$data['title'] = 'Jadwal Semester 2';
		$this->load->view('layouts/header',$data);

		$smt='smt2';
		$jur='si';
		$where='Sistem Informasi 2';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si2',$data);
		$this->load->view('layouts/footer');
	}

	public function si_3()
	{
		
		$data['title'] = 'Jadwal Semester 3';
		$this->load->view('layouts/header',$data);

		$smt='smt3';
		$jur='si';
		$where='Sistem Informasi 3';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si3',$data);
		$this->load->view('layouts/footer');
	}

	public function si_4()
	{
		
		$data['title'] = 'Jadwal Semester 4';
		$this->load->view('layouts/header',$data);

		$smt='smt4';
		$jur='si';
		$where='Sistem Informasi 4';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si4',$data);
		$this->load->view('layouts/footer');
	}

	public function si_5()
	{
		
		$data['title'] = 'Jadwal Semester 5';
		$this->load->view('layouts/header',$data);

		$smt='smt5';
		$jur='si';
		$where='Sistem Informasi 5';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si5',$data);
		$this->load->view('layouts/footer');
	}

	public function si_6()
	{
		
		$data['title'] = 'Jadwal Semester 6';
		$this->load->view('layouts/header',$data);

		$smt='smt6';
		$jur='si';
		$where='Sistem Informasi 6';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si6',$data);
		$this->load->view('layouts/footer');
	}

	public function si_7()
	{
		
		$data['title'] = 'Jadwal Semester 7';
		$this->load->view('layouts/header',$data);

		$smt='smt7';
		$jur='si';
		$where='Sistem Informasi 7';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si7',$data);
		$this->load->view('layouts/footer');
	}

	public function si_8()
	{
		
		$data['title'] = 'Jadwal Semester 8';
		$this->load->view('layouts/header',$data);

		$smt='smt8';
		$jur='si';
		$where='Sistem Informasi 8';
		//id jadwal otomatis
		$data['auto']=$this->Model_Si->auto_id();

		//sortir kelas mahasiswa semester 1
		$data['sort'] = $this->Model_Si->sort_kelas($smt,$jur);
		$data['ruangan'] = $this->Model_Si->index();

		//sortir mata kuliah semester 1
		$data['join_kls'] = $this->Model_Si->join_kelas_kuliah($smt);

		$data['jadwal'] = $this->Model_Si->jadwal_si($where);

		$this->load->view('si/si8',$data);
		$this->load->view('layouts/footer');
	}

	//mengambil nama dosen sesuai mata kuliah di tabel ajar dosen
	public function get_values($id_kls)
    {
    	$this->db->select('*');
	 	$this->db->from('dosen_pt');
	 	$this->db->join('dosen','dosen.id_ptk=dosen_pt.id_ptk');
	 	$this->db->join('ajar_dosen','ajar_dosen.id_reg_ptk=dosen_pt.id_reg_ptk');
	 	$this->db->where('ajar_dosen.id_kls',$id_kls);
	 	$query = $this->db->get();

        foreach ($query->result() as $row)
        {
            $arr = array(
            	'nm_ptk'=>$row->nm_ptk
            );
            header('Content-Type: application/json');
            echo json_encode($arr);
        }
    }





























}