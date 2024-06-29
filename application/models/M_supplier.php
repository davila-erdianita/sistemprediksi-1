<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {


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

    public function FindById_supplier($id_supplier){
		$query = $this->db->get_where("tbl_supplier", array('id_supplier' => $id_supplier));
		return $query->result_array();
	}

	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}
}