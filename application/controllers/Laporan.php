<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_laporan');


		// if ($this->session->userdata('role')!= 'Admin') {
		// 	redirect('Login','refresh');
		// }
	}
	public function index()
	{
		$data['Year'] = $this->m_laporan->Year();
		$this->load->view('templates/Header');
		$this->load->view('Laporan',$data);
		$this->load->view('templates/Footer');
		// print_r($data);
	}

	public function pencarian(){
		$search = $this->input->post('year', true);
        if($search) {
            $data['cari'] = $this->m_laporan->search($search);
            $this->session->set_flashdata('status_laporan','Data berhasil ditemukan');
        }else{
        $this->session->set_flashdata('gagal_laporan','Data tidak berhasil ditemukan');
    	}


		// echo "<pre>";
  //       print_r($data);
  //       echo "</pre>";
        $this->load->view('templates/Header');
		$this->load->view('Laporan',$data);
		$this->load->view('templates/Footer');	       
	}

	public function print($year)
	{
		$data['print'] = $this->m_laporan->search($year);
		$this->load->view('templates/Header');
		$this->load->view('print',$data);
		$this->load->view('templates/Footer');
		// print_r($data);
	}

}
