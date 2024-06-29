<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_supplier');


		if ($this->session->userdata('role')!= 'Admin') {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['all_supplier'] = $this->m_supplier->getAll("tbl_supplier");
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->load->view('templates/Header');
		$this->load->view('Supplier', $data);
		$this->load->view('templates/Footer');
	}

	public function FormSupplier()
	{
		$this->load->view('templates/Header');
		$this->load->view('FormSupplier');
		$this->load->view('templates/Footer');
	}

	public function delete_data($id_supplier){
		$id = array(
			'id_supplier' => $id_supplier
		);
		
		$this->m_supplier->delete_data('tbl_supplier',$id);
		$this->session->set_flashdata('status_supplier','Data berhasil dihapus');

		redirect(base_url('Supplier'), 'refresh');

	}

	public function insert_data(){
		// $data['title'] = 'Data Pembelian';
		
        $this->form_validation->set_rules('nama_supplier', 'nama_supplier', 'required');
        $this->form_validation->set_rules('alamat_supplier', 'alamat_supplier', 'required|max_length[60]');
        // $this->form_validation->set_rules('telp', 'telp','required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_supplier','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('Supplier'), 'refresh');
        } else {
            $data_supplier=[ 
            				"nama_supplier" => $this->input->post('nama_supplier', true),
            				"alamat_supplier" => $this->input->post('alamat_supplier', true),
	            			// "telp" => $this->input->post('telp', true)
							];
							// print_r($data_pembelian);
			$this->m_supplier->insert_data('tbl_supplier',$data_supplier);
           	$this->session->set_flashdata('status_supplier','Data berhasil disimpan');
			redirect(base_url('Supplier'), 'refresh');
        }
    }

    public function UpdateForm($id_supplier){
		// $id = array(
		// 	'id_pembelian' => $id_pembelian
		// );
		$data['supplier'] = $this->m_supplier->FindById_supplier($id_supplier);
		// $data['title'] = 'Ubah data';
        $this->load->view('templates/Header');
		$this->load->view('FormUbahSupplier', $data);
		$this->load->view('templates/Footer');

	}
    public function update_data(){
    	$this->form_validation->set_rules('nama_supplier', 'nama_supplier', 'required');
        $this->form_validation->set_rules('alamat_supplier', 'alamat_supplier', 'required|max_length[60]');
        // $this->form_validation->set_rules('telp', 'telp','required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_supplier','Tidak dapat ubah data.');
			redirect(base_url('Supplier'), 'refresh');
        } else {
			$data = array(
	            				"nama_supplier" => $this->input->post('nama_supplier', true),
	            				"alamat_supplier" => $this->input->post('alamat_supplier', true),
	            				// "telp" => $this->input->post('telp', true),
					);

			$id = array(
				"id_supplier" => $this->input->post('id_supplier', true)
			);
			$dataMhs = $this->m_supplier->update_data("tbl_supplier", $data, $id);
			$this->session->set_flashdata('status_supplier','Data berhasil diubah');
			redirect(base_url('Supplier'), 'refresh');
		}
	}

}