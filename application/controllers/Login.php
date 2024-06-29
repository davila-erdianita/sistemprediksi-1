<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	    $this->load->library(array('form_validation','session'));
		$this->load->model('m_pengguna');

	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function login(){
           

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('msg',"Login Gagal");
				$this->session->set_flashdata('msg_class','alert alert-danger');
	            return redirect('Login');
                // $this->load->view('Login');   
            } else {
                $username = $this->input->post('username',true); 
                $password = $this->input->post('password',true);
                // $password = md5($this->input->post('password',true));
               // $user_cek = $this->m_pengguna->user_cek($username, $password);
                $user_cek = $this->m_pengguna->user_cek($username);

                if($user_cek){
                	foreach ($user_cek as $row){
                		// echo "<pre>";
                		// print_r($user_cek);
                		// echo "</pre>";
                		if (password_verify($password, $row->password)) {
    
							if (($row->status)=="Aktif"){
								$this->session->set_userdata('id_user',$row->id_user);
								$this->session->set_userdata('username',$row->username);
								$this->session->set_userdata('role',$row->role);
								if($this->session->userdata('role')=="Admin"){

									// $data['title'] = 'Home';
		
	                    			redirect('Home','refresh');


								}elseif($this->session->userdata('role')=="Pemilik"){

									// $data['title'] = 'Home';
		
	                    			redirect('Home','refresh');
	                    			
								}else{
									//$this->session->sess_destroy();
									$this->session->set_flashdata('msg',"Anda tidak memiliki akses masuk !");
									$this->session->set_flashdata('msg_class','alert alert-danger');
						           	redirect('Login');
									// echo "<script>alert('Anda tidak memiliki akses masuk !');document.location='index'</script>";
									// redirect('Login');
								}
							}else{
								//$this->session->sess_destroy();
								$this->session->set_flashdata('msg',"Akun belum diverifikasi.");
								$this->session->set_flashdata('msg_class','alert alert-danger');
						        return redirect('Login');
								// echo "<script>alert('Akun belum diverifikasi.');</script>";
								// redirect('Login','refresh');
							}
						}else{
							$this->session->set_flashdata('msg',"Username atau Password salah");
							$this->session->set_flashdata('msg_class','alert alert-danger');
				            return redirect('Login');
						}
					}

                } else {
                    $this->session->set_flashdata('msg',"Anda belum terdaftar");
					$this->session->set_flashdata('msg_class','alert alert-danger');
		            return redirect('Login');

                }        

                    
            }
        }

	public function signout(){
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
    public function pendaftaran(){
    	$this->load->view('templates/Header');
		$this->load->view('SignUp');
		$this->load->view('templates/Footer');
				       
	}

	public function register(){
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
         if($this->form_validation->run() === FALSE){
         	$this->session->set_flashdata('msg',"Registrasi Gagal");
			$this->session->set_flashdata('msg_class','alert alert-danger');
            // $this->load->view('SignUp');
            return redirect('Login/pendaftaran');
           
        } else {
            // Encrypt password
           
            // $enc_password = md5($this->input->post('password',true));
            $password = $this->input->post('password',true);
            $enc_password = password_hash($password, PASSWORD_DEFAULT);
           	$data = [
           	'username' => $this->input->post('username',true),
            'password' => $enc_password,
            'role' => "Admin",
            'status' => "Aktif"
           	];
           	// echo "<pre>";
           	// print_r($data);
           	// echo "</pre>";
	        $tambah_user = $this->m_pengguna->register('tbl_user',$data);
	        if ($tambah_user) {
	        	$this->session->set_flashdata('msg',"Registrasi berhasil");
				$this->session->set_flashdata('msg_class','alert alert-success');
				// return redirect('Login/pendaftaran');
				$this->load->view('SignUp');
	        }else{
	        	$this->session->set_flashdata('msg',"Registrasi Gagal");
				$this->session->set_flashdata('msg_class','alert alert-danger');
				// return redirect('Login/pendaftaran');
				$this->load->view('SignUp');
	        }
		}
    }     			 

	public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'Username telah terdaftar. Silahkan menggunakan username lain.');
        if($this->m_pengguna->search_username($username)){
           	return true;
        } else {
           	return false;
        }
        
    }
}
