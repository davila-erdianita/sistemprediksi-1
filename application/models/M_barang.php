<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {


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

    public function FindById_barang($tbl,$id){
	   $this->db->select("*");
       $this->db->from($tbl);
       $this->db->where("id_barang",$id);
       $query =$this->db->get();

	   return $query->result_array();
	}

	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}

	
}