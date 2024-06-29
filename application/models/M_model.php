<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

    public function delete_data($tabel, $where){
	    $query=$this->db->delete($tabel,$where);
	    return $query;
	}
	
	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}
	public function insert_data($tabel, $data){
        $query= $this->db->insert($tabel,$data);
        return $query;
      }

     public function getAll($tbl){
    	return $this->db->get($tbl)->result_array();
    }
	//-------------------------------------------------



	//---------------------HOME------------------------
	public function count_items(){
	   $this->db->select('count(nama_barang) AS jumlah');
       $this->db->from('tbl_barang');
       $query =$this->db->get();

	   return $query->result_array();
	}

	public function count_suppliers(){
	   $this->db->select('count(nama_supplier) AS jumlah');
       $this->db->from('tbl_supplier');
       $query =$this->db->get();

	   return $query->result_array();
	}
	public function sum_penjualan(){
	   $this->db->select('sum(jml_penjualan) AS jumlah');
       $this->db->from('detail_penjualan');
       $query =$this->db->get();

	   return $query->result_array();
	}

	public function fetch_item()
	 {
		$this->db->select('detail_penjualan.id_barang,tbl_barang.nama_barang');
		$this->db->from('detail_penjualan');   
		$this->db->join('tbl_barang','detail_penjualan.id_barang  = tbl_barang.id_barang','inner');
	  	$this->db->group_by('detail_penjualan.id_barang');
	  	$this->db->order_by('tbl_barang.nama_barang', 'ASC');
	  	return $this->db->get();
	 }

	 public function fetch_chart_data($year)
	 {
		$this->db->select('detail_penjualan.jml_penjualan, Month(tbl_penjualan.tgl_penjualan) as bulan');
		$this->db->from('detail_penjualan');   
		$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan  = tbl_penjualan.id_penjualan','inner');
	  	$this->db->where('detail_penjualan.id_barang', $year);
	  	$this->db->order_by('Month(tbl_penjualan.tgl_penjualan)', 'ASC');
	 	return $this->db->get();
	 	 // $this->db->where('id_barang', $year);
		  // $this->db->order_by('id_detail', 'ASC');
		  // return $this->db->get('detail_penjualan');
	 }

	 //------------------------------------------------------------------
	//-----hasil uji akurasi-----//
	public function penjualan($id_barang,$bobot){

		if (count($bobot) == 4) {
			$tgl_awal_perhitungan = '2021-04-30';
			$this->db->select('detail_penjualan.jml_penjualan, tbl_penjualan.tgl_penjualan, MONTH(tbl_penjualan.tgl_penjualan)AS bulan_penjualan, YEAR(tbl_penjualan.tgl_penjualan)AS tahun_penjualan');
			$this->db->from('detail_penjualan');
			$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan = tbl_penjualan.id_penjualan','inner');
			$this->db->where('detail_penjualan.id_barang',$id_barang);
			$this->db->where('tbl_penjualan.tgl_penjualan >',$tgl_awal_perhitungan);
		}elseif(count($bobot) == 5){
			$tgl_awal_perhitungan = '2021-05-31';
			$this->db->select('detail_penjualan.jml_penjualan, tbl_penjualan.tgl_penjualan, MONTH(tbl_penjualan.tgl_penjualan)AS bulan_penjualan, YEAR(tbl_penjualan.tgl_penjualan)AS tahun_penjualan');
			$this->db->from('detail_penjualan');
			$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan = tbl_penjualan.id_penjualan','inner');
			$this->db->where('detail_penjualan.id_barang',$id_barang);
			$this->db->where('tbl_penjualan.tgl_penjualan >',$tgl_awal_perhitungan);
		}
			$query =$this->db->get();
		   return $query->result_array();
	}

	public function riwayat_prediksi($id_barang,$bobot){
		if (count($bobot) == 4) {
			$this->db->select('*');
			$this->db->from('hasil_prediksi');
			$this->db->where('id_barang',$id_barang);
			$this->db->order_by('id_prediksi','ASC');
		}elseif(count($bobot) == 5){
			$this->db->select('*');
			$this->db->from('hasil_prediksi');
			$this->db->where('id_barang',$id_barang);
			$this->db->where('bobot_5 IS NOT NULL');
			$this->db->order_by('id_prediksi','ASC');
		}
		$query =$this->db->get();
	   return $query->result_array();
	}


}
