<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {


   public function Year()
	 {
		$this->db->select('Year(tgl_penjualan) as tahun');
		$this->db->from('tbl_penjualan');   
	  	$this->db->group_by('Year(tgl_penjualan)');
	  	$this->db->order_by('Year(tgl_penjualan)', 'ASC');
	  	$query =$this->db->get();

	   return $query->result_array();
	 }

	 public function search($search){
    	$this->db->select('sum(detail_penjualan.jml_penjualan) AS jumlah, detail_penjualan.id_barang, detail_penjualan.id_detail, tbl_barang.nama_barang, tbl_barang.harga_jual, tbl_barang.harga_pembelian, tbl_barang.biaya_penyimpanan, tbl_barang.biaya_pemesanan, YEAR(tbl_penjualan.tgl_penjualan) as tahun');
		$this->db->from('detail_penjualan');   
		$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan  = tbl_penjualan.id_penjualan','inner');
		$this->db->join('tbl_barang','detail_penjualan.id_barang  = tbl_barang.id_barang','inner');
		$this->db->where('YEAR(tbl_penjualan.tgl_penjualan)', $search);
	  	$this->db->group_by('detail_penjualan.id_barang');
	  	$query =$this->db->get();

	   return $query->result_array();

	}
	
}