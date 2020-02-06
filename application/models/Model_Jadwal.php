<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Model_Jadwal extends CI_Model {

	public function jadwal()
	{	

	$this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
        $this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
        $this->db->order_by('kelas','ASC');
        $data=$this->db->get()->result();

        return $data;
	}

	public function jadwal_si()
	{	

	$this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
        $this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
        $this->db->order_by('kelas','ASC');
        $this->db->like('kelas','Sistem','AFTER');
        $data=$this->db->get()->result();

        return $data;
	}

	public function jadwal_sia()
	{	

	$this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas_kuliah','kelas_kuliah.id_kls=jadwal.id_kls');
        $this->db->join('mata_kuliah','mata_kuliah.id_mk=kelas_kuliah.id_mk');
        $this->db->order_by('kelas','ASC');
        $this->db->like('kelas','Akuntansi','MATCH');
        $data=$this->db->get()->result();

        return $data;
	}

}
