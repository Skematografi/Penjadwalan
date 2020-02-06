<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Si extends CI_Model {

	public function index(){
		return $this->db->get('ruangan')->result();
	}

	public function auto_id(){
		$this->db->select('RIGHT(jadwal.id_jadwal,4) as auto', FALSE);
		$this->db->order_by('id_jadwal', 'DESC');
		$this->db->like('id_jadwal','JDWL','AFTER');
		$this->db->limit(1);

		$query = $this->db->get('jadwal');
		if($query->num_rows() <> 0){
			$data = $query->row();
			$auto = intval($data->auto) + 1;
		}else{
			$auto = 1;

		}

		$automax = str_pad($auto,4, "0", STR_PAD_LEFT);
		$autofix = "JDWL-SI".$automax;
		return $autofix;
	}

	public function auto_id_sia(){
		$this->db->select('RIGHT(jadwal.id_jadwal,4) as auto', FALSE);
		$this->db->order_by('id_jadwal', 'DESC');
		$this->db->like('id_jadwal','JWL','AFTER');
		$this->db->limit(1);

		$query = $this->db->get('jadwal');
		if($query->num_rows() <> 0){
			$data = $query->row();
			$auto = intval($data->auto) + 1;
		}else{
			$auto = 1;

		}

		$automax = str_pad($auto,4, "0", STR_PAD_LEFT);
		$autofix = "JWL-SIA".$automax;
		return $autofix;
	}

	public function sort_kelas($smt,$jur)
	{	
		$this->db->distinct();
		$this->db->select('gelombang');
		$this->db->where('id_jur',$jur);
		$this->db->where('id_smt',$smt);
		$query=$this->db->get('kuliah')->result_array();

		return $query;
	}


	public function join_kelas_kuliah($smt)
	{	
		$this->db->select('*');
	 	$this->db->from('kelas_kuliah');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->where('id_smt',$smt);
	 	$query=$this->db->get()->result();

		return $query;
	}

	
	public function jadwal_si($where){

		$this->db->select('*');
	 	$this->db->from('jadwal');
	 	$this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
	 	$this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
	 	$this->db->like('kelas',$where,'after');
	 	$query=$this->db->get()->result();

		return $query;
	}


	//CRUD tabel jadwal
	public function add_jadwal($data,$table){
		return $this->db->insert($table,$data);
	}

	public function update_jadwal($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus($data,$table){
		return $this->db->delete($table,$data);
	}

}