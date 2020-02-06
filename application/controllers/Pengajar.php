<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Pengajar');
		$this->load->helper('url');
		$ver=$this->session->userdata('status');
		if($ver == 0){
			redirect('auth');
		}
	}


	public function index()
	{
		
		$data['title'] = 'Pengajar Kuliah';
		$this->load->view('layouts/header',$data);

		$data['pengajar'] = $this->Model_Pengajar->index();

		$this->load->view('kurikulum/pengajar',$data);
		$this->load->view('layouts/footer');
	}

	public function tambah(){
		$data['title'] = 'Pengajar Kuliah';
		$this->load->view('layouts/header',$data);

		$data['auto']=$this->Model_Pengajar->auto_id();
		$data['dosen']=$this->Model_Pengajar->dosen_pt();
		$data['kls']=$this->Model_Pengajar->kelas_kuliah();
		$this->load->view('kurikulum/pengajar_tambah',$data);
		$this->load->view('layouts/footer');
	}

	public function get_values($id_kls)
    {
        $data_kelas=$this->db->get_where("kelas_kuliah",array("id_kls"=>$id_kls));
        foreach ($data_kelas->result() as $row)
        {
            $arr = array(
            	'sks_tm' => $row->sks_tm,
            	'sks_prak' => $row->sks_prak,
            	'sks_prak_lap' => $row->sks_prak_lap,
            	'sks_sim' => $row->sks_sim
            );
            header('Content-Type: application/json');
            echo json_encode($arr);
        }
    }


	public function tambah_data(){
		$data=[
			'id_ajar' => $this->input->post('id_ajar'),
			'id_reg_ptk' => $this->input->post('id_reg_ptk'),
			'id_subst' => $this->input->post('id_subst'),
			'id_kls' => $this->input->post('id_kls'),
			'sks_subst_tot' => $this->input->post('sks_subst_tot'),
			'sks_tm_subst' => $this->input->post('sks_tm_subst'),
			'sks_prak_subst' => $this->input->post('sks_prak_subst'),
			'sks_prak_lap_subst' => $this->input->post('sks_prak_lap_subst'),
			'sks_sim_subst' => $this->input->post('sks_sim_subst'),
			'jml_tm_renc' => $this->input->post('jml_tm_renc'),
			'jml_tm_real' => $this->input->post('jml_tm_renc'),
			'id_jns_eval' => $this->input->post('id_jns_eval')
		];

		$this->Model_Pengajar->add_pengajar($data,'ajar_dosen');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajar kuliah berhasil di tambah</div>');
			redirect('Pengajar');
		
	}


	public function hapus_pengajar($id){
		$where = array('id_ajar' => $id);
		$this->Model_Pengajar->hapus($where,'ajar_dosen');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajar kuliah berhasil di hapus</div>');
		redirect('Pengajar');
	}

	public function edit_pengajar($id){
		$data['title'] = 'Pengajar Kuliah';
		$this->load->view('layouts/header',$data);
	
		$where = array('id_ajar' => $id);
		$data['data'] = $this->Model_Pengajar->edit($where,'ajar_dosen')->result();
		$data['dosen']=$this->Model_Pengajar->dosen_pt();
		$data['kls']=$this->Model_Pengajar->kelas_kuliah();
		$this->load->view('kurikulum/pengajar_edit',$data);
		$this->load->view('layouts/footer');
	}

	public function update_pengajar(){
		$id = $this->input->post('id_ajar');
		$data=[
			'id_reg_ptk' => $this->input->post('id_reg_ptk'),
			'id_subst' => $this->input->post('id_subst'),
			'id_kls' => $this->input->post('id_kls'),
			'sks_subst_tot' => $this->input->post('sks_subst_tot'),
			'sks_tm_subst' => $this->input->post('sks_tm_subst'),
			'sks_prak_subst' => $this->input->post('sks_prak_subst'),
			'sks_prak_lap_subst' => $this->input->post('sks_prak_lap_subst'),
			'sks_sim_subst' => $this->input->post('sks_sim_subst'),
			'jml_tm_renc' => $this->input->post('jml_tm_renc'),
			'jml_tm_real' => $this->input->post('jml_tm_renc'),
			'id_jns_eval' => $this->input->post('id_jns_eval')
		];


		$where = array(
			'id_ajar' => $id
		);

		$this->Model_Pengajar->update($where,$data,'ajar_dosen');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajar kuliah berhasil di update</div>');
			redirect('Pengajar');
	}


























}