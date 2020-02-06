<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Pengajar extends CI_Model {

	public function auto_id(){
		$this->db->select('RIGHT(ajar_dosen.id_ajar,3) as auto', FALSE);
		$this->db->order_by('id_ajar', 'DESC');
		$this->db->limit(1);

		$query = $this->db->get('ajar_dosen');
		if($query->num_rows() <> 0){
			$data = $query->row();
			$auto = intval($data->auto) + 1;
		}else{
			$auto = 1;

		}

		$automax = str_pad($auto,3, "0", STR_PAD_LEFT);
		$autofix = "123".$automax;
		return $autofix;
	}

	public function index()
	{	
		$query = $this->db->get('ajar_dosen')->result_array();
		return $query;
	}

	public function kelas_kuliah()
	{	
		$query = $this->db->get('kelas_kuliah')->result_array();
		return $query;
	}


	public function dosen_pt()
	{	
		$query = $this->db->get('dosen_pt')->result_array();
		return $query;
	}
	public function dosen($id_ptk)
	{
		$this->db->where('id_ptk',$id_ptk);
		$result=$this->db->get('dosen')->result();
		return $result;
	}


	public function add_pengajar($data,$table){
		return $this->db->insert($table,$data);
	}

	public function hapus($data,$table){
		return $this->db->delete($table,$data);
	}

	public function edit($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
