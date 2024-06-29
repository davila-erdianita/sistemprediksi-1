<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_model');


		// if ($this->session->userdata('role')!= 'Admin') {
		// 	redirect('Login','refresh');
		// }
		      
	}
	public function index()
	{
		$data['barang'] = $this->m_model->count_items();
		$data['supplier'] = $this->m_model->count_suppliers();
		$data['penjualan'] = $this->m_model->sum_penjualan();
		$data['nama_barang'] = $this->m_model->fetch_item();
		// $this->load->view('templates/Header');
		$this->load->view('Home',$data);
		// $this->load->view('templates/Footer');
	}
	public function fetch_data()
 	{
 		// $id_barang = $this->input->post('year');
 		//  if ($id_barang == NULL) {
 		//  	echo "<div class='text-red'>Tidak tersedia</div>";
 		//  	echo "alert('coba')";
 		//  }
	  // if($this->input->post('id_barang'))
	  // {
	  //  $data_barang = $this->m_model->fetch_chart_data($this->input->post('id_barang'));
	   
	  //  foreach($data_barang->result_array() as $row)
	  //  {
	  //   $output[] = array(
	  //    'month'  => $row["month"],
	  //    'jml_penjualan' => floatval($row["jml_penjualan"])
	  //   );
	  //  }
	  //  echo json_encode($output);
	  // }

 	if($this->input->post('year'))
  {
   $chart_data = $this->m_model->fetch_chart_data($this->input->post('year'));
   
   foreach($chart_data->result_array() as $row)
   {
    $output[] = array(
     'bulan'  => floatval($row["bulan"]),
     'jml_penjualan' => floatval($row["jml_penjualan"])
    );
   }
   echo json_encode($output);
  }
 
	 }
}
