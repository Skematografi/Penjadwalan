<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Matkul extends CI_Model {

	public function auto_id(){
		$this->db->select('RIGHT(mata_kuliah.id_mk,3) as auto', FALSE);
		$this->db->order_by('id_mk', 'DESC');
		$this->db->limit(1);

		$query = $this->db->get('mata_kuliah');
		if($query->num_rows() <> 0){
			$data = $query->row();
			$auto = intval($data->auto) + 1;
		}else{
			$auto = 1;

		}

		$automax = str_pad($auto,3, "0", STR_PAD_LEFT);
		$autofix = "5".$automax;
		return $autofix;
	}

	public function index()
	{	
		$query = $this->db->get('mata_kuliah')->result_array();
		return $query;
	}

	public function add_mk($data,$table){
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
