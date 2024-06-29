<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_pembelian');

		if ($this->session->userdata('role')!= 'Admin') {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['all_pembelian'] = $this->m_pembelian->getAllpembelian();

		$this->load->view('templates/Header');
		$this->load->view('Pembelian',$data);
		$this->load->view('templates/Footer');
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}

	public function FormPembelian()
	{
		$data['all_supplier'] = $this->m_pembelian->getAll("tbl_supplier");
		$data['all_barang'] = $this->m_pembelian->getAll("tbl_barang");
		$this->load->view('templates/Header');
		$this->load->view('FormPembelian',$data);
		$this->load->view('templates/Footer');
	}

	public function delete_data($id_pembelian){
		$id = array(
			'id_pembelian' => $id_pembelian
		);
		
		$this->m_pembelian->delete_data('tbl_pembelian_barang',$id);
		$this->session->set_flashdata('status_pembelian','Data berhasil dihapus');

		redirect(base_url('pembelian'), 'refresh');

	}

	public function insert_data(){
		// $data['title'] = 'Data Pembelian';
		// $this->form_validation->set_rules('id_pembelian', 'Id_pembelian', 'required');
		$this->form_validation->set_rules('id_supplier', 'Id_supplier', 'required');
		$this->form_validation->set_rules('id_barang', 'Id_barang', 'required');
        $this->form_validation->set_rules('jml_pembelian', 'jml_pembelian', 'required|numeric');
        $this->form_validation->set_rules('tgl_pembelian', 'tgl_pembelian', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_pembelian','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('pembelian'), 'refresh');
        } else {
            $data_pembelian=[ 
            				"id_supplier" => $this->input->post('id_supplier', true),
            				"id_barang" => $this->input->post('id_barang', true),
	            			"jml_pembelian" => $this->input->post('jml_pembelian', true),
	            			"tgl_pembelian" => $this->input->post('tgl_pembelian', true)
							];
							// print_r($data_pembelian);
			$this->m_pembelian->insert_data('tbl_pembelian_barang',$data_pembelian);
           	$this->session->set_flashdata('status_pembelian','Data berhasil disimpan');
			redirect(base_url('pembelian'), 'refresh');
        }
    }

    public function UpdateForm($id_pembelian){
		// $id = array(
		// 	'id_pembelian' => $id_pembelian
		// );
		$data['pembelian'] = $this->m_pembelian->FindById_pembelian($id_pembelian);
		$data['all_supplier'] = $this->m_pembelian->getAll("tbl_supplier");
		$data['all_barang'] = $this->m_pembelian->getAll("tbl_barang");
		// $data['title'] = 'Ubah data';
        $this->load->view('templates/Header');
		$this->load->view('FormUbahPembelian', $data);
		$this->load->view('templates/Footer');

	}
    public function update_data(){
    	$this->form_validation->set_rules('id_supplier', 'Id_supplier', 'required');
		$this->form_validation->set_rules('id_barang', 'Id_barang', 'required');
        $this->form_validation->set_rules('jml_pembelian', 'jml_pembelian', 'required|numeric');
        $this->form_validation->set_rules('tgl_pembelian', 'tgl_pembelian', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_pembelian','Tidak dapat ubah data.');
			redirect(base_url('pembelian'), 'refresh');
        } else {
			$data = array(
						       "id_supplier" => $this->input->post('id_supplier', true),
	            				"id_barang" => $this->input->post('id_barang', true),
		            			"jml_pembelian" => $this->input->post('jml_pembelian', true),
		            			"tgl_pembelian" => $this->input->post('tgl_pembelian', true)
					);

			$id = array(
				'id_pembelian' => $this->input->post('id_pembelian',true)
			);
			$dataMhs = $this->m_pembelian->update_data("tbl_pembelian_barang", $data, $id);
			$this->session->set_flashdata('status_pembelian','Data berhasil diubah');
			redirect(base_url('pembelian'), 'refresh');
		}
	}


}
