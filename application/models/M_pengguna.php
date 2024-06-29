<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {


    public function register($nama_tabel, $data){
    	return $this->db->insert($nama_tabel, $data);
    }

    public function search_username($username){
	   $query = $this->db->get_where('tbl_user', array('username' => $username));
	   if(empty($query->row_array())){
	    return true;
	   } else {
	    return false;
	   }
	}
	// public function user_cek($username, $password){
	// 	//$this->db->where('nama_user', $username);
 //   		//$this->db->where('password', $password);

 //   		//$query = $this->db->get('tbl_user');
 //   		$query = $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password));
 //   		if ($query->num_rows()==1) {
	// 		return $query->result();//akan melempar data jika ada
	// 	}else{
	// 		return false;
	// 	}
	// }
	public function user_cek($username){//cek sudah daftar atau belum
		$query = $this->db->get_where('tbl_user', array('username' => $username));
		if ($query->num_rows()==1) {
			return $query->result();//akan melempar data jika ada
		}else{
			return false;
		}
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

    public function FindById_pengguna($id_user){
		$query = $this->db->get_where("tbl_user", array('id_user' => $id_user));
		return $query->result_array();
	}

	public function update_data($tabel, $data, $where){
		$query= $this->db->update($tabel, $data, $where);
		return $query;
	}
}