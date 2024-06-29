<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_penjualan');


		if ($this->session->userdata('role')!= 'Admin') {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['all_penjualan'] = $this->m_penjualan->getAllpenjualan();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$this->load->view('templates/Header');
		$this->load->view('Penjualan', $data);
		$this->load->view('templates/Footer');
	}

	public function FormPenjualan()
	{
		// $data['all_supplier'] = $this->m_penjualan->getAll("tbl_supplier");
		$data['all_barang'] = $this->m_penjualan->getAll("tbl_barang");
		$this->load->view('templates/Header');
		$this->load->view('FormPenjualan',$data);
		$this->load->view('templates/Footer');
	}

	public function delete_data($id_detail){
		$id = array(
			'id_detail' => $id_detail
		);

		// $id_penjualan = array(
		// 	'id_penjualan' => $id_penjualan
		// );
		$id_penjualan = $this->m_penjualan->FindById_detail('detail_penjualan',$id_detail);
		$delete_detail = $this->m_penjualan->delete_data('detail_penjualan',$id);
		if ($delete_detail) {
			$this->m_penjualan->delete_data('tbl_penjualan',$id_penjualan);
			$this->session->set_flashdata('status_penjualan','Data berhasil dihapus');
			redirect(base_url('Penjualan'), 'refresh');
		}else{
			$this->session->set_flashdata('gagal_penjualan','Data tidak berhasil dihapus');
			redirect(base_url('Penjualan'), 'refresh');
		}
		// print_r($id_detail);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

	}

	public function insert_data(){
		// $data['title'] = 'Data Pembelian';
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('jml_penjualan', 'jml_penjualan', 'required|numeric');
        $this->form_validation->set_rules('tgl_penjualan', 'tgl_penjualan', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_penjualan','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('Penjualan'), 'refresh');
        }else {
        	$id_barang = $this->input->post('id_barang', true);
        	$jml_penjualan = $this->input->post('jml_penjualan', true); 
        	$stok = implode($this->m_penjualan->stock('tbl_barang',$id_barang));
        	// print_r($id_barang);
        	// echo "<pre>";
        	// print_r($jml_penjualan);
        	// echo "</pre>";
        	// print_r($stok);
        	if ($jml_penjualan > $stok) {
        		$this->session->set_flashdata('gagal_penjualan','Proses simpan gagal! Jumlah penjualan lebih besar dari stok.');
				redirect(base_url('Penjualan'), 'refresh');
        	}else{
	            $data_penjualan=[ 
	            				"id_user" => $this->session->userdata('id_user'),
		            			"tgl_penjualan" => $this->input->post('tgl_penjualan', true)
								];
				$data = $this->m_penjualan->insert_data('tbl_penjualan',$data_penjualan);
					if ($data) {
						$id_penjualan = implode($this->m_penjualan->maks_id('tbl_penjualan','id_penjualan'));
						$detail_penjualan=[ 
											"id_penjualan" => $id_penjualan,
						            		"id_barang" => $this->input->post('id_barang', true),
							            	"jml_penjualan" => $this->input->post('jml_penjualan', true)
										];
						// print_r($data_penjualan);
						// print_r($detail_penjualan);
						// print_r($id_penjualan);
						$this->m_penjualan->insert_data('detail_penjualan',$detail_penjualan);
						$this->session->set_flashdata('status_penjualan','Data berhasil disimpan');
						redirect(base_url('Penjualan'), 'refresh');
					}else{
						$this->session->set_flashdata('gagal_penjualan','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
						redirect(base_url('Penjualan'), 'refresh');
					}
			}
			
        }
    }

    public function UpdateForm($id_detail){
		// $id = array(
		// 	'id_pembelian' => $id_pembelian
		// );
		$data['penjualan'] = $this->m_penjualan->FindById($id_detail);
		$data['all_barang'] = $this->m_penjualan->getAll("tbl_barang");
		// $data['title'] = 'Ubah data';
        $this->load->view('templates/Header');
		$this->load->view('FormUbahPenjualan', $data);
		$this->load->view('templates/Footer');

	}
    public function update_data(){
		// $id_penjualan = $this->m_penjualan->FindById_detail('detail_penjualan',$id_detail);
    	$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('jml_penjualan', 'jml_penjualan', 'required|numeric');
        $this->form_validation->set_rules('tgl_penjualan', 'tgl_penjualan', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_penjualan','Tidak dapat ubah data.');
			redirect(base_url('Penjualan'), 'refresh');
		}else {
			$id_detail = $this->input->post('id_detail',true);
        	$id_barang = $this->input->post('id_barang', true);
        	$jml_penjualan = $this->input->post('jml_penjualan', true); 
        	$jml_penjualan_lama = implode($this->m_penjualan->jml_penjualan_lama('detail_penjualan',$id_detail));
        	$stok = implode($this->m_penjualan->stock('tbl_barang',$id_barang));
        	$stok_awal = $stok + $jml_penjualan_lama;
        	// print_r($id_barang);
        	// echo "<pre>";
        	// print_r($jml_penjualan);
        	// echo "</pre>";
        	// print_r($stok);
        	if ($jml_penjualan > $stok_awal) {
        		$this->session->set_flashdata('gagal_penjualan','Proses simpan gagal! Jumlah penjualan lebih besar dari stok.');
				redirect(base_url('Penjualan'), 'refresh');
	        }else {
				$data_penjualan = array(
							       "tgl_penjualan" => $this->input->post('tgl_penjualan', true)
						);

				$id_penjualan = array(
					'id_penjualan' => $this->input->post('id_penjualan',true)
				);

				$data_detail = array(
							       "id_barang" => $this->input->post('id_barang', true),
							       "jml_penjualan" => $this->input->post('jml_penjualan', true)
						);

				$id_detail = array(
					'id_detail' => $this->input->post('id_detail',true)
				);
				// print_r($id_detail);
				
				$this->m_penjualan->update_data("tbl_penjualan", $data_penjualan, $id_penjualan);
				$this->m_penjualan->update_data("detail_penjualan", $data_detail, $id_detail);
				$this->session->set_flashdata('status_penjualan','Data berhasil diubah');
				redirect(base_url('penjualan'), 'refresh');
			}
		}
	}
}