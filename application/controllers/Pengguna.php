<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_pengguna');


		if ($this->session->userdata('role')!= 'Admin') {
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['all_user'] = $this->m_pengguna->getAll("tbl_user");

		$this->load->view('templates/Header');
		$this->load->view('Pengguna',$data);
		$this->load->view('templates/Footer');
	}

	public function FormPengguna()
	{
		$this->load->view('templates/Header');
		$this->load->view('FormPengguna');
		$this->load->view('templates/Footer');
	}

	public function delete_data($id_user){
		$id = array(
			'id_user' => $id_user
		);
		
		$this->m_pengguna->delete_data('tbl_user',$id);
		$this->session->set_flashdata('status_pengguna','Data berhasil dihapus');

		redirect(base_url('Pengguna'), 'refresh');

	}

	public function insert_data(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal_pengguna','Proses simpan gagal! Pastikan data yang anda masukkan benar.');
			redirect(base_url('Pengguna'), 'refresh');
        } else {
            $password = $this->input->post('password',true);
        	$enc_password = password_hash($password, PASSWORD_DEFAULT);
            $data_pengguna=[ 
            				"username" => $this->input->post('username', true),
					        "password" => $enc_password,
	            			"role" => $this->input->post('role', true),
	            			"status" => $this->input->post('status', true)
							];
							// print_r($data_pembelian);
			$this->m_pengguna->insert_data('tbl_user',$data_pengguna);
           	$this->session->set_flashdata('status_pengguna','Data berhasil disimpan');
			redirect(base_url('Pengguna'), 'refresh');
        }
    }

     public function UpdateForm($id_user){
		$data['user'] = $this->m_pengguna->FindById_pengguna($id_user);
        $this->load->view('templates/Header');
		$this->load->view('FormUbahPengguna', $data);
		$this->load->view('templates/Footer');

	}
    public function update_data(){
		$password = $this->input->post('password',true);
		if(empty($password)){
			$data = array(
						        "username" => $this->input->post('username', true),
		            			"role" => $this->input->post('role', true),
		            			"status" => $this->input->post('status', true)
					);

			$id = array(
				'id_user' => $this->input->post('id_user',true)
			);
		
			$dataUser = $this->m_pengguna->update_data("tbl_user", $data, $id);
			$this->session->set_flashdata('status_pengguna','Data berhasil diubah');
			redirect(base_url('Pengguna'), 'refresh');
		}else{
			$enc_password = password_hash($password, PASSWORD_DEFAULT);
			$data = array(
						        "username" => $this->input->post('username', true),
						        "password" => $enc_password,
		            			"role" => $this->input->post('role', true),
		            			"status" => $this->input->post('status', true)
					);

			$id = array(
				'id_user' => $this->input->post('id_user',true)
			);
			
			$dataUser = $this->m_pengguna->update_data("tbl_user", $data, $id);
			$this->session->set_flashdata('status_pengguna','Data berhasil diubah');
			redirect(base_url('Pengguna'), 'refresh');
		}
	}
}
