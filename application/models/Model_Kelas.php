<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Kelas extends CI_Model {

	public function auto_id(){
		$this->db->select('RIGHT(kelas_kuliah.id_kls,3) as auto', FALSE);
		$this->db->order_by('id_kls', 'DESC');
		$this->db->limit(1);

		$query = $this->db->get('kelas_kuliah');
		if($query->num_rows() <> 0){
			$data = $query->row();
			$auto = intval($data->auto) + 1;
		}else{
			$auto = 1;

		}

		$automax = str_pad($auto,3, "0", STR_PAD_LEFT);
		$autofix = "6".$automax;
		return $autofix;
	}

	public function index()
	{	
		$query = $this->db->get('kelas_kuliah')->result_array();
		return $query;
	}

	public function semester()
	{	
		$query = $this->db->get('semester')->result_array();
		return $query;
	}
	public function mata_kuliah()
	{	
		$query = $this->db->get('mata_kuliah')->result_array();
		return $query;
	}

	public function add_kls($data,$table){
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
