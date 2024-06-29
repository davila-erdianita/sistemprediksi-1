<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediksi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('prediksi_model');
		$this->load->model('m_model');


		// if ($this->session->userdata('role')!= 'Admin') {
		// 	redirect('Login','refresh');
		// }
		
	}
	public function index()
	{
		$data['all_bulan'] = $this->prediksi_model->getAll_bulan();
		$data['all_tahun'] = $this->prediksi_model->getAll_tahun();
		$data['all_barang'] = $this->prediksi_model->getAll_barang();
		$this->load->view('templates/Header');
		$this->load->view('FormPrediksi',$data);
		$this->load->view('templates/Footer');
	}

	public function hasil()
	{
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
        $this->form_validation->set_rules('bulan', 'bulan', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('id_bobot', 'id_bobot', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_prediksi','Proses prediksi gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('Prediksi'), 'refresh');
        }else {

		$id_barang = $this->input->post('id_barang',true);
		$bulan_prediksi = $this->input->post('bulan',true);
		$tahun_prediksi = $this->input->post('tahun',true);
		$id_bobot = $this->input->post('id_bobot',true);

		if ($id_bobot == 1) {
			$bobot = array('4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 2) {
			 //$bobot = array('5','4','3','2');
			//$bobot = array('5','4','2','2','1');
			$bobot = array('5','4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 3) {
			$bobot = array('6','4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 4) {
			$bobot = array('5','3','2','1');
			$jumlah_bobot = count($bobot);
		}


		if ($tahun_prediksi == 2021) {//jika tahun prediksi yang dipilih 2021
				if ($jumlah_bobot == 4) {
					if ($bulan_prediksi <= 4 ) {//jika bulan januari sampai april 2021, maka tidak dapat prediksi
						$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Data Penjualan hanya sampai akhir tahun 2021');
						redirect(base_url('Prediksi'), 'refresh');
					//jika bulan prediksi mei-desember
					}elseif ($bulan_prediksi > 4) {//menampilkan data prediksi bulan tertentu di tahun 2021
						$data['hasil_prediksi'] = $this->prediksi_model->hasil_prediksi($id_barang,$bulan_prediksi,$tahun_prediksi,$bobot);	
						$this->session->set_flashdata('status_prediksi','Berhasil menampilkan data prediksi yang dicari');

					}else{
						$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Data Penjualan hanya sampai akhir tahun 2021');
						redirect(base_url('Prediksi'), 'refresh');
					}
				}elseif ($jumlah_bobot == 5) {
					if ($bulan_prediksi <= 5) {//jika bulan januari sampai april 2021, maka tidak dapat prediksi
						$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Data Penjualan hanya sampai akhir tahun 2021');
						redirect(base_url('Prediksi'), 'refresh');
					//jika bulan prediksi juni-desember
					}elseif ($bulan_prediksi > 5) {//menampilkan data prediksi bulan tertentu di tahun 2021
						$data['hasil_prediksi'] = $this->prediksi_model->hasil_prediksi($id_barang,$bulan_prediksi,$tahun_prediksi,$bobot);				
						$this->session->set_flashdata('status_prediksi','Berhasil menampilkan data prediksi yang dicari');

					}else{
						$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Data Penjualan hanya sampai akhir tahun 2021');
						redirect(base_url('Prediksi'), 'refresh');
						
					}
				}
		}elseif($tahun_prediksi > 2021){// jika tahun prediksi dipilih 2022
			if ($bulan_prediksi == 1) {//jika bulan yang diprediksi januari 2022
				$data['hasil_prediksi'] = $this->prediksi_model->hasil_prediksi($id_barang,$bulan_prediksi,$tahun_prediksi,$bobot);
				$this->session->set_flashdata('status_prediksi','Berhasil menampilkan data prediksi yang dicari');
			}else{// hanya dapat memprediksi sampai bulan januari 2022
				$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Data Penjualan hanya sampai akhir tahun 2021');
				redirect(base_url('Prediksi'), 'refresh');
			}
		}else{
			$this->session->set_flashdata('gagal_prediksi','Tidak dapat menampilkan hasil prediksi yang dicari. Harap periksa kembali data penjualan');
			redirect(base_url('Prediksi'), 'refresh');
		}

		$this->load->view('templates/Header');
		$this->load->view('Prediksi',$data);
		$this->load->view('templates/Footer');
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
		
		}
	}

	public function riwayat()
	{
			$data['all_data'] = $this->prediksi_model->getAll("hasil_prediksi");
			$this->load->view('templates/Header');
			$this->load->view('Riwayat',$data);
			$this->load->view('templates/Footer');
	}

	public function delete_data($id_prediksi){
			$id = array(
				'id_prediksi' => $id_prediksi
			);
			
			$this->prediksi_model->delete_data('hasil_prediksi',$id);
			$this->session->set_flashdata('status_riwayat','Data berhasil dihapus');

			redirect(base_url('Prediksi/riwayat'), 'refresh');

	}

	public function uji_akurasi(){
		$id_barang = $this->input->post('id_barang', true);
		$id_bobot = $this->input->post('id_bobot', true);
		$data['barang'] = $this->m_model->getAll("tbl_barang");
		if (is_null($id_barang)) {
				$id_barang =1;
				$id_bobot =1;
		}
		if ($id_bobot == 1) {
			$bobot = array('4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 2) {
			//$bobot = array('5','4','3','2');
			//$bobot = array('5','4','2','2','1');
			$bobot = array('5','4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 3) {
			$bobot = array('6','4','3','2','1');
			$jumlah_bobot = count($bobot);
		}elseif ($id_bobot == 4) {
			$bobot = array('5','3','2','1');
			$jumlah_bobot = count($bobot);
		}

		$data_penjualan = $this->m_model->penjualan($id_barang,$bobot);
		$tanggal_penjualan = array();
		$hasil_uji = array();
		$hitung_MAD = array();
		$hitung_MSE = array();
		$hitung_MAPE = array();
		
		for ($i=0; $i < count($data_penjualan); $i++) { 
			$this->prediksi_model->hasil_prediksi($id_barang, $data_penjualan[$i]['bulan_penjualan'], $data_penjualan[$i]['tahun_penjualan'], $bobot);
		}

		$bulan_akhir = $data_penjualan[count($data_penjualan)-1]['tgl_penjualan'];
		$bulan_prediksi = date('n', strtotime('+1 months',strtotime($bulan_akhir)));
		$tahun_prediksi = date('Y', strtotime('+1 months',strtotime($bulan_akhir)));

		$this->prediksi_model->hasil_prediksi($id_barang, $bulan_prediksi, $tahun_prediksi,$bobot);

		$riwayat_prediksi = $this->m_model->riwayat_prediksi($id_barang,$bobot);


		for ($i=0; $i <= count($riwayat_prediksi)-1; $i++) { 
			if ($i ==  count($riwayat_prediksi)-1) {
				$hasil_uji[$i]['MAD'] = array_sum($hitung_MAD)/$i; 

				$hasil_uji[$i]['MSE'] = array_sum($hitung_MSE)/$i; 

				$hasil_uji[$i]['MAPE'] = array_sum($hitung_MAPE)/$i;   
			}else{
				$hitung_MAD[$i] = round(abs($riwayat_prediksi[$i]['data_aktual'] - $riwayat_prediksi[$i]['hasil_wma']),2);
				$hitung_MSE[$i] = round(pow($riwayat_prediksi[$i]['data_aktual'] - $riwayat_prediksi[$i]['hasil_wma'],2),2);
				$hitung_MAPE[$i] = round(abs($riwayat_prediksi[$i]['data_aktual'] - $riwayat_prediksi[$i]['hasil_wma'])*100/$riwayat_prediksi[$i]['data_aktual'],2);

				$hasil_uji[$i]['MAD'] = $hitung_MAD[$i];
				$hasil_uji[$i]['MSE'] = $hitung_MSE[$i];
				$hasil_uji[$i]['MAPE'] = $hitung_MAPE[$i];
			}

		}
		
	
		for ($i=0; $i < count($hasil_uji); $i++) { 
			$hasil_uji[$i]['nm_barang'] = $riwayat_prediksi[$i]['nm_barang'];
			$hasil_uji[$i]['bulan_prediksi'] = $riwayat_prediksi[$i]['bulan_prediksi'];
			$hasil_uji[$i]['tahun_prediksi'] = $riwayat_prediksi[$i]['tahun_prediksi'];
			$hasil_uji[$i]['data_aktual'] = $riwayat_prediksi[$i]['data_aktual'];
			$hasil_uji[$i]['hasil_wma'] = $riwayat_prediksi[$i]['hasil_wma'];
		}

		$data['hasil_uji'] = $hasil_uji;
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
    		$this->load->view('templates/Header');
			$this->load->view('UjiAkurasi',$data);
			$this->load->view('templates/Footer');
	}
}
