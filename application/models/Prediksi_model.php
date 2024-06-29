<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediksi_model extends CI_Model {
    function __construct(){

    parent::__construct();
}
    public function getAll_bulan(){
            $this->db->select("DISTINCT MONTH(tgl_penjualan) AS bulan,  MONTHNAME(tgl_penjualan) AS nama_bulan");
            $this->db->from("tbl_penjualan");
            $query =$this->db->get();
            return $query->result_array();
          
  	}
  	public function getAll_tahun(){
            $this->db->select("DISTINCT YEAR(tgl_penjualan) AS tahun");
            $this->db->from("tbl_penjualan");
            $query =$this->db->get();
            return $query->result_array();
         
  	}
  	public function getAll_barang(){
            $this->db->select("id_barang,  nama_barang");
            $this->db->from("tbl_barang");
            $query =$this->db->get();
            return $query->result_array();

  	}

    public function getAll($tbl){
      return $this->db->get($tbl)->result_array();
    }

    public function delete_data($tabel, $where){
      $query=$this->db->delete($tabel,$where);
      return $query;
    }

    public function hasil_prediksi($id_barang, $bulan_prediksi, $tahun_prediksi, $bobot){
          $tanggal_prediksi = "$tahun_prediksi-0$bulan_prediksi-30";
          //print_r($tanggal_prediksi);
           $this->db->select('detail_penjualan.id_detail, detail_penjualan.id_penjualan, detail_penjualan.id_barang, detail_penjualan.jml_penjualan,tbl_barang.nama_barang, tbl_penjualan.tgl_penjualan');
           $this->db->from('detail_penjualan');   
           $this->db->join('tbl_penjualan','detail_penjualan.id_penjualan  = tbl_penjualan.id_penjualan','inner');
           $this->db->join('tbl_barang','detail_penjualan.id_barang  = tbl_barang.id_barang','inner');
           $this->db->where("detail_penjualan.id_barang",$id_barang);
           $this->db->where("tbl_penjualan.tgl_penjualan <",$tanggal_prediksi);
           $this->db->order_by('tbl_penjualan.tgl_penjualan', 'DESC');
           $this->db->limit(count($bobot));

           $query =$this->db->get();
           $data_penjualan = $query->result_array();
           // echo "<pre>";
           // print_r($data_penjualan);
           // echo "</pre>";
           
           $tabel_prediksi = array();
           $perhitungan = array();

           $jml_data = count($data_penjualan);
           // $bobot = array('4','3','2','1');
           // $n = array_sum($bobot);
           

          //----------Memasukkan data ke $tabel_prediksi-----------
                $tabel_prediksi[0]['id_barang'] = $id_barang;
                $tabel_prediksi[0]['nm_barang'] = $data_penjualan[0]['nama_barang'];
                $tabel_prediksi[0]['bulan_prediksi'] = $bulan_prediksi;
                $tabel_prediksi[0]['tahun_prediksi'] = $tahun_prediksi;
                $tabel_prediksi[0]['bobot_1'] = $bobot[0];
                $tabel_prediksi[0]['bobot_2'] = $bobot[1];
                $tabel_prediksi[0]['bobot_3'] = $bobot[2];
                $tabel_prediksi[0]['bobot_4'] = $bobot[3];
                $tabel_prediksi[0]['jml_bobot'] = array_sum($bobot);
                if (count($bobot) == 5) {
                  $tabel_prediksi[0]['bobot_5'] = $bobot[4];
                }

// echo "<pre>";
//            print_r($tabel_prediksi);
//            echo "</pre>";
          //----------------------------------------------------------------------

          //------Menghitung WMA dan memasukkan data ke $tabel_prediksi-------
           
           
           for ($i=0; $i < count($bobot); $i++) {
              $perhitungan[$i] = $data_penjualan[$i]['jml_penjualan']*$bobot[$i];  
              // echo '<pre>';
              // echo $data_penjualan[$i]['jml_penjualan']." * ".$bobot[$i]." = ".$perhitungan[$i];
              // echo '</pre>';
              $tabel_prediksi[0]['jml_penjualan'.($i+1)] = $data_penjualan[$i]['jml_penjualan'];
             
           }
           $hasil_WMA = array_sum($perhitungan)/array_sum($bobot);
           $tabel_prediksi[0]['hasil_WMA'] = round($hasil_WMA);
              // echo '<pre>';
              // echo array_sum($perhitungan)."/".array_sum($bobot)." = ".$hasil_WMA;
              // echo '</pre>';

            //-----data aktual--------
          $this->db->select('detail_penjualan.jml_penjualan');
          $this->db->from('detail_penjualan');
          $this->db->join('tbl_penjualan','detail_penjualan.id_penjualan = tbl_penjualan.id_penjualan','inner');
          $this->db->where("detail_penjualan.id_barang",$id_barang);
          $this->db->where("MONTH(tbl_penjualan.tgl_penjualan)", $bulan_prediksi);
          $this->db->where("YEAR(tbl_penjualan.tgl_penjualan)", $tahun_prediksi);
          $query =$this->db->get();
          $data_aktual = $query->result_array();
          if (count($data_aktual) == 0) {
             $tabel_prediksi[0]['data_aktual'] = "";
             $total_error = 0-$hasil_WMA;
          }else{
           $tabel_prediksi[0]['data_aktual'] = $data_aktual[0]['jml_penjualan'];
           $total_error = $data_aktual[0]['jml_penjualan']-$hasil_WMA;
           $tabel_prediksi[0]['total_error'] = $total_error;
          }

          //----------------------------------------------------------------------------

          //-----menghitung metode EOQ--------
          $this->db->select("*");
          $this->db->from("tbl_barang");
          $this->db->where("id_barang",$id_barang);
          $query =$this->db->get();
          $data_barang = $query->result_array();
              // echo '<pre>';
              // print_r($data_barang);
              // echo '</pre>';
          if (count($data_barang) == 1) {
             $perhitungan_eoq = sqrt((2*round($hasil_WMA)*$data_barang[0]['biaya_pemesanan'])/$data_barang[0]['biaya_penyimpanan']);
             $frekuensi_pemesanan = round($hasil_WMA)/round($perhitungan_eoq);
             $jarak_pemesanan = 30/round($frekuensi_pemesanan);
          }
          //-------------------------------------

          //-----menyimpan data prediksi ke table hasil_prediksi----
          $this->db->select("*");
          $this->db->from("hasil_prediksi");
          $this->db->where("id_barang",$id_barang);
          $this->db->where("bulan_prediksi",$bulan_prediksi);
          $this->db->where("tahun_prediksi",$tahun_prediksi);
          $query =$this->db->get();
          $jumlah_riwayat = $query->result_array();
          
          $id=$this->session->userdata('id_user');
          $tanggal = date('Y-m-d');
          // print_r(count($jumlah_riwayat));
          //     echo '<pre>';
          //     print_r($jumlah_riwayat);
          //     echo '</pre>';
          if (count($jumlah_riwayat) == 1) {
            $this->db->query("DELETE FROM hasil_prediksi WHERE id_prediksi = ".$jumlah_riwayat[0]['id_prediksi']."");
          }

          if (count($bobot) == 5) {
            $this->db->query("INSERT INTO hasil_prediksi(id_user,id_barang, nm_barang, bulan_prediksi, tahun_prediksi, bobot_1, bobot_2, bobot_3, bobot_4, bobot_5, data_aktual, hasil_wma, hasil_eoq, total_error, tgl_prediksi) VALUES('".$id."','".$id_barang."','".$data_barang[0]['nama_barang']."','".$bulan_prediksi."','".$tahun_prediksi."','".$bobot[0]."','".$bobot[1]."','".$bobot[2]."','".$bobot[3]."','".$bobot[4]."','".$tabel_prediksi[0]['data_aktual']."','".round($hasil_WMA,1)."','".round($perhitungan_eoq)."','".round($total_error,1)."','".$tanggal."')");
          }else{
            $this->db->query("INSERT INTO hasil_prediksi(id_user,id_barang, nm_barang, bulan_prediksi, tahun_prediksi, bobot_1, bobot_2, bobot_3, bobot_4, data_aktual, hasil_wma, hasil_eoq, total_error, tgl_prediksi) VALUES('".$id."','".$id_barang."','".$data_barang[0]['nama_barang']."','".$bulan_prediksi."','".$tahun_prediksi."','".$bobot[0]."','".$bobot[1]."','".$bobot[2]."','".$bobot[3]."','".$tabel_prediksi[0]['data_aktual']."','".round($hasil_WMA,1)."','".round($perhitungan_eoq)."','".round($total_error,1)."','".$tanggal."')");
          }
          //-----------------------------------------------------------

          //----Memasukkan data ke $tabel_prediksi------------
          $tabel_prediksi[0]['eoq'] = $perhitungan_eoq;
          $tabel_prediksi[0]['frekuensi_pemesanan'] = round($frekuensi_pemesanan);
          $tabel_prediksi[0]['jarak_pemesanan'] = round($jarak_pemesanan);

          return $tabel_prediksi;
          
          //------------------------------------------------------------
           
    }

   

  	
}