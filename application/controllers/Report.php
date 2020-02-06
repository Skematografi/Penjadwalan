<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Report extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_Jadwal');
        $this->load->helper('form');
        $this->load->library('pdf');
        $ver=$this->session->userdata('status');
        if($ver == 0){
            redirect('auth');
        }
    }
    
  function index()
    {
        $prodi = $this->input->post('prodi');
        $dari = $this->input->post('dr_thn');
        $sampai = $this->input->post('sm_thn');
        $kls = $this->input->post('kls');
        $smt = $this->input->post('smt');


        $pdf = new FPDF('P','mm','A4'); //L = lanscape P= potrait
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('courier','B',12);
        $pdf->Image('./assets/image/stmik.png',10,7,20);
        // mencetak string 
        $pdf->Cell(30,6,'',0,0,'C');
        $pdf->Cell(130,6,'Jadwal Kuliah STMIK Insan Pembangunan ( Kelas '.$kls.' )',0,1,'C');
        $pdf->SetFont('courier','B',12);
        $pdf->Cell(30,6,'',0,0,'C');
        $pdf->Cell(130,6,'Tahun Akademik '.$dari.' / '.$sampai.' ( Semester '.$smt.' )',0,1,'C');
        $pdf->Line(10,30,200,30);
        $pdf->Ln();
        $pdf->Ln();
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,6,'',0,1);
        $pdf->SetFont('courier','B',8);
        $pdf->Cell(30,6,'',0,0,'C');
        $pdf->Cell(40,6,'Program Studi',1,0,'C');
        $pdf->Cell(90,6,'Keterangan',1,1,'C');

        $pdf->SetFont('courier','B',8);
        $pdf->Cell(30,6,'',0,0,'C');
        $pdf->Cell(40,6,'Jurusan',1,0,'C');
        $pdf->Cell(30,6,'Mata Kuliah',1,0,'C');
        $pdf->Cell(15,6,'Dosen',1,0,'C');
        $pdf->Cell(15,6,'Ruang',1,0,'C');
        $pdf->Cell(15,6,'Hari',1,0,'C');
        $pdf->Cell(15,6,'Jam',1,1,'C');

        $pdf->SetFont('courier','',8);
        if($prodi == 'Sistem Informasi'){
            $data=$this->Model_Jadwal->jadwal_si();
            foreach ($data as $row){
                $pdf->Cell(30,6,'',0,0,'C');
                $pdf->Cell(40,5,$row->kelas,1,0);
                $pdf->Cell(30,5,$row->kode_mk,1,0);
                $pdf->Cell(15,5,$row->dosen,1,0,'C');
                $pdf->Cell(15,5,$row->ruangan,1,0,'C');
                $pdf->Cell(15,5,$row->hari,1,0,'C');
                $pdf->Cell(15,5,$row->jam,1,1,'C');
      
            }
        }else{
            $data=$this->Model_Jadwal->jadwal_sia();
            foreach ($data as $row){
                $pdf->Cell(30,6,'',0,0,'C');
                $pdf->Cell(40,5,$row->kelas,1,0);
                $pdf->Cell(30,5,$row->kode_mk,1,0);
                $pdf->Cell(15,5,$row->dosen,1,0,'C');
                $pdf->Cell(15,5,$row->ruangan,1,0,'C');
                $pdf->Cell(15,5,$row->hari,1,0,'C');
                $pdf->Cell(15,5,$row->jam,1,1,'C');
      
            }
        }
        


























        $pdf->Output();
    }
}
?>