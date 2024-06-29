<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_barang');

		if ($this->session->userdata('role')!= 'Admin') {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['all_barang'] = $this->m_barang->getAll("tbl_barang");
		$this->load->view('templates/Header');
		$this->load->view('Barang',$data);
		$this->load->view('templates/Footer');
	}
	public function FormBarang()
	{
		$data['all_jenis'] = $this->m_barang->getAll("tbl_jenis_barang");
		$this->load->view('templates/Header');
		$this->load->view('FormBarang',$data);
		$this->load->view('templates/Footer');
	}

	public function delete_data($id_barang){
		$id = array(
			'id_barang' => $id_barang
		);
		
		$this->m_barang->delete_data('tbl_barang',$id);
		$this->session->set_flashdata('status_barang','Data berhasil dihapus');

		redirect(base_url('Barang'), 'refresh');

	}

	public function insert_data(){
		// $data['title'] = 'Data Pembelian';
		// $this->form_validation->set_rules('id_pembelian', 'Id_pembelian', 'required');
		$this->form_validation->set_rules('id_jenis_barang', 'id_jenis_barang', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('biaya_penyimpanan', 'biaya_penyimpanan', 'required|numeric');
        $this->form_validation->set_rules('biaya_pemesanan', 'biaya_pemesanan', 'required|numeric');
        $this->form_validation->set_rules('harga_pembelian', 'harga_pembelian', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'harga_jual', 'required|numeric');
        $this->form_validation->set_rules('jml_persediaan', 'jml_persediaan', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_barang','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('Barang'), 'refresh');
        } else {
            $data_barang=[ 
            				"id_jenis_barang" => $this->input->post('id_jenis_barang', true),
            				"nama_barang" => $this->input->post('nama_barang', true),
	            			"biaya_penyimpanan" => $this->input->post('biaya_penyimpanan', true),
	            			"biaya_pemesanan" => $this->input->post('biaya_pemesanan', true),
	            			"harga_pembelian" => $this->input->post('harga_pembelian', true),
	            			"harga_jual" => $this->input->post('harga_jual', true),
	            			"jml_persediaan" => $this->input->post('jml_persediaan', true)
							];
							// print_r($data_pembelian);
			$this->m_barang->insert_data('tbl_barang',$data_barang);
           	$this->session->set_flashdata('status_barang','Data berhasil disimpan');
			redirect(base_url('Barang'), 'refresh');
        }
    }

    public function UpdateForm($id_barang){
		$data['barang'] = $this->m_barang->FindById_barang("tbl_barang",$id_barang);
		$data['all_jenis'] = $this->m_barang->getAll("tbl_jenis_barang");
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
        $this->load->view('templates/Header');
		$this->load->view('FormUbahBarang', $data);
		$this->load->view('templates/Footer');

	}
    public function update_data(){
    	$this->form_validation->set_rules('id_jenis_barang', 'id_jenis_barang', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('biaya_penyimpanan', 'biaya_penyimpanan', 'required|numeric');
        $this->form_validation->set_rules('biaya_pemesanan', 'biaya_pemesanan', 'required|numeric');
        $this->form_validation->set_rules('harga_pembelian', 'harga_pembelian', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'harga_jual', 'required|numeric');
        $this->form_validation->set_rules('jml_persediaan', 'jml_persediaan', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_barang','Tidak dapat ubah data.');
			redirect(base_url('Barang'), 'refresh');
        } else {
			$data = array(
						      "id_jenis_barang" => $this->input->post('id_jenis_barang', true),
	            				"nama_barang" => $this->input->post('nama_barang', true),
		            			"biaya_penyimpanan" => $this->input->post('biaya_penyimpanan', true),
		            			"biaya_pemesanan" => $this->input->post('biaya_pemesanan', true),
		            			"harga_pembelian" => $this->input->post('harga_pembelian', true),
		            			"harga_jual" => $this->input->post('harga_jual', true),
		            			"jml_persediaan" => $this->input->post('jml_persediaan', true)
					);

			$id_barang = array(
				'id_barang' => $this->input->post('id_barang',true)
			);
			$dataBarang = $this->m_barang->update_data("tbl_barang", $data, $id_barang);
			$this->session->set_flashdata('status_barang','Data berhasil diubah');
			redirect(base_url('Barang'), 'refresh');
		}
	}
}
