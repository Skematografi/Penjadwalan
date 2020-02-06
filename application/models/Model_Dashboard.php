<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Dashboard extends CI_Model {

	public function mahasiswa()
	{	
		$query = $this->db->count_all_results('mahasiswa');
		return $query;
	}

	public function dosen()
	{	
		$query = $this->db->count_all_results('dosen');
		return $query;
	}

	public function mata_kuliah()
	{	
		$query = $this->db->count_all_results('mata_kuliah');
		return $query;
	}

	public function ruangan()
	{	
		$query = $this->db->count_all_results('ruangan');
		return $query;
	}

	

}
