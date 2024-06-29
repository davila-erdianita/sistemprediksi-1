<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model {
 	public function getAllpenjualan(){
    	// return $this->db->get('tbl_penjualan')->result_array();


    	
    	$this->db->select('detail_penjualan.id_detail, detail_penjualan.id_penjualan, detail_penjualan.id_barang, detail_penjualan.jml_penjualan,tbl_barang.nama_barang, tbl_penjualan.tgl_penjualan');
		$this->db->from('detail_penjualan');   
		$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan  = tbl_penjualan.id_penjualan','inner');
		$this->db->join('tbl_barang','detail_penjualan.id_barang  = tbl_barang.id_barang','inner');
		$this->db->order_by('tbl_penjualan.tgl_penjualan', 'ASC');

		$query=$this->db->get();
		     return $query->result_array();
    }

    public function getAll($tbl){
    	return $this->db->get($tbl)->result_array();
    }

    public function FindById_detail($tbl,$id){
	   $this->db->select("id_penjualan");
       $this->db->from($tbl);
       $this->db->where("id_detail",$id);
       $query =$this->db->get();

	   return $query->row_array();
	}

	 public function delete_data($tabel, $where){
	    $query=$this->db->delete($tabel,$where);
	    return $query;
	}

	public function insert_data($tabel, $data){
        $query= $this->db->insert($tabel,$data);
        return $query;
      }

   	public function stock($tbl,$id){
	   $this->db->select("jml_persediaan");
       $this->db->from($tbl);
       $this->db->where("id_barang",$id);
       $query =$this->db->get();

	   return $query->row_array();
	}

	public function maks_id($tbl,$id){
	   $this->db->select_max($id);
       $this->db->from($tbl);
       $query =$this->db->get();

	   return $query->row_array();
	}

	public function FindById($id){
	   $this->db->select('detail_penjualan.id_detail, detail_penjualan.id_penjualan, detail_penjualan.id_barang, detail_penjualan.jml_penjualan, tbl_penjualan.tgl_penjualan');
		$this->db->from('detail_penjualan');   
		$this->db->join('tbl_penjualan','detail_penjualan.id_penjualan  = tbl_penjualan.id_penjualan','inner');
		$this->db->where("detail_penjualan.id_detail",$id);
		$query=$this->db->get();
		     return $query->result_array();
	}

	public function jml_penjualan_lama($tbl,$id){
	   $this->db->select("jml_penjualan");
       $this->db->from($tbl);
       $this->db->where("id_detail",$id);
       $query =$this->db->get();

	   return $query->row_array();
	}

	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}

}