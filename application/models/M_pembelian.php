<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelian extends CI_Model {


     public function getAllpembelian(){
    	$this->db->select('tbl_pembelian_barang.id_pembelian,tbl_supplier.nama_supplier, tbl_barang.nama_barang, tbl_pembelian_barang.jml_pembelian, tbl_pembelian_barang.tgl_pembelian');
		$this->db->from('tbl_pembelian_barang');   
		$this->db->join('tbl_supplier','tbl_pembelian_barang.id_supplier  = tbl_supplier.id_supplier','inner');
		$this->db->join('tbl_barang','tbl_pembelian_barang.id_barang  = tbl_barang.id_barang','inner');
		$this->db->order_by('tbl_pembelian_barang.tgl_pembelian', 'ASC');

		$query=$this->db->get();
		     return $query->result_array();
    }

    public function getAll($tbl){
    	return $this->db->get($tbl)->result_array();
    }

     public function delete_data($tabel, $where){
	    $query=$this->db->delete($tabel,$where);
	    return $query;
	}

	public function insert_data($tabel, $data){
        $query= $this->db->insert($tabel,$data);
        return $query;
     }

     public function FindById_pembelian($id_pembelian){
		$query = $this->db->get_where("tbl_pembelian_barang", array('id_pembelian' => $id_pembelian));
		return $query->result_array();
	}

	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}

	
}