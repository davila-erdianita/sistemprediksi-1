<?php if($this->session->userdata('role')=="Pemilik"){?>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <a class="navbar-brand" href="#">Selamat Datang | <b>Sistem Prediksi WMA dan EOQ</b> </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	         <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> <?php echo $this->session->userdata('username');?></a>
	      </li>
	    </ul>
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	  </div>
	</nav>

   <div class="row no-gutters mt-3 pt-4 sidebar">
	<!-- <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color: #333;position: fixed;"> -->
		<div class="col-md-2 mt-5 pr-3 pt-4" style="background-color: #333;position: fixed;
    /*width: 400px;*/
    /*background-color: #DDD; */
   /* font-size: 15px;
    overflow-y: scroll;*/
    height: 100%;
    padding-top: 40px;
    top: 0;
    bottom: 0;">
		<ul class="nav flex-column ml-3 mb-5" style="height: 100%; font-size: 12px;">
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="<?=base_url()?>Home"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Prediksi"><i class="fa-solid fa-file-pen mr-2"></i> Data Prediksi</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Laporan"><i class="fa-solid fa-file-pen mr-2"></i>Laporan</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Login/signout"><i class="fa-solid fa-right-from-bracket mr-2"></i> SignOut</a><hr class="bg-secondary">
		  </li>
		</ul>
	</div>
<div class="col-md-10 p-5 pt-2 ml-auto" style="background-color: white;">
	<div class="card">
	  <div class="card-body">		
	    <h3><i class="fa-solid fa-gauge mr-2"></i> DATA PREDIKSI</h3><hr>
	    <!-- <div class="row">
	    <div class="col-md-7 mt-2">
	    	<a href="<?php echo base_url();?>Prediksi" class="btn btn-outline-primary btn-sm mb-3">Prediksi Data</a>
		</div>
		<div class="col pl-5">
			<form class="form-inline my-2 my-lg-0 p-20" style="margin-right: 0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div>
	</div> -->
	<div class="row">
                <?php if($this->session->flashdata('status_prediksi')){?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('status_prediksi')?>
                            </div>
                        <?php }elseif($this->session->flashdata('gagal_prediksi')){?>
                          <div class="alert alert-danger">
                                <?= $this->session->flashdata('gagal_prediksi')?>
                            </div>
                        <?php }?> 
                        <!-- <?= $status ?> -->

    	</div>

	<?php if(!empty($hasil_prediksi)){?>
	<div class="row mt-2 text-black">
			<div class="col">
				<div class="card">
				  <div class="card-body">		
				    <!-- <h3><i class="fa-solid fa-gauge mr-2"></i>DATA PREDIKSI</h3><hr> -->
				    <h5 style="font-size: 20px;">Data prediksi yang dicari: </h5>
				    <div class="row text-black">
					<div class="col">
					<div class="table-responsive">
					  <table class="table">
						  <thead>
						    <tr class="bg-info">
						      <th scope="col">No</th>
						      <!-- <th scope="col">id detail</th> -->
						      <th scope="col">Nama Barang</th>
						      <th scope="col">Bulan</th>
						      <th scope="col">Terjual</th>
						      <th scope="col">Hasil Prediksi</th>
						      <th scope="col">Jumlah Pemesanan</th>
						      <th scope="col">Frekuensi Pemesanan</th>
						      <th scope="col">Jarak Pemesanan</th>
						    </tr>
						  </thead>
						  <tbody><?php $i=1; foreach ($hasil_prediksi as $data) : ?>
						    <tr>
						      <td><?= $i++;?></td>
						      <!-- <td><?= $data['id_detail'];?></td> -->
						      <td><?= $data['nm_barang'];?></td>
						      <td><?php if($data['bulan_prediksi'] == 1){
						      				echo "Januari ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 2){
						      				echo "Februari ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 3){
						      				echo "Maret ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 4){
						      				echo "April ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 5){
						      				echo "Mei ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 6){
						      				echo "Juni ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 7){
						      				echo "Juli ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 8){
						      				echo "Agustus ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 9){
						      				echo "September ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 10){
						      				echo "Oktober ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 11){
						      				echo "November ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 12){
						      				echo "Desember ".$data['tahun_prediksi'];
						      			}
						      	?></td>
						      <td><?= $data['data_aktual'];?></td>
						      <td><?= $data['hasil_WMA'];?></td>
						      <td><?= round($data['eoq']);?></td>
						      <td><?= $data['frekuensi_pemesanan'];?></td>
						      <td><?= $data['jarak_pemesanan'];?></td>
						    </tr>
						<?php endforeach; ?>
						  </tbody>
						</table>

			</div>
		</div>
		
		</div>

				</div>
			</div>
		</div>
	</div>
	<h6 style="font-weight: 700;margin-top: 20px;">Catatan</h6>
<small><p>* jumlah pemesanan = jumlah pemesanan barang ke supplier</p></small>
<?php }?>
	</div>
</div>
<?php }elseif($this->session->userdata('role')=="Admin"){?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <a class="navbar-brand" href="#">Selamat Datang | <b>Sistem Prediksi WMA dan EOQ</b> </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	         <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> <?php echo $this->session->userdata('username');?></a>
	      </li>
	    </ul>
	    <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	  </div>
	</nav>

   <div class="row no-gutters mt-3 pt-4 sidebar">
	<!-- <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color: #333;position: fixed;"> -->
		<div class="col-md-2 mt-5 pr-3 pt-4" style="background-color: #333;position: fixed;
    /*width: 400px;*/
    /*background-color: #DDD; */
   /* font-size: 15px;
    overflow-y: scroll;*/
    height: 100%;
    padding-top: 40px;
    top: 0;
    bottom: 0;">
		<ul class="nav flex-column ml-3 mb-5" style="height: 100%; font-size: 12px;">
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Home"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="<?=base_url()?>Penjualan"><i class="fa-solid fa-file-pen mr-2"></i> Data Penjualan</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Barang"><i class="fa-solid fa-table mr-2"></i> Data Barang</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Pengguna"><i class="fa-solid fa-address-card mr-2"></i> Kelola Admin</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Supplier"><i class="fa-solid fa-users mr-2"></i> Data Supplier</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Pembelian"><i class="fa-solid fa-file-lines mr-2"></i> Data Pembelian</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Prediksi/riwayat"><i class="fa-solid fa-calculator mr-2"></i>Riwayat Prediksi</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Laporan"><i class="fa-solid fa-file-pen mr-2"></i>Laporan</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url()?>Login/signout"><i class="fa-solid fa-right-from-bracket mr-2"></i> SignOut</a><hr class="bg-secondary">
		  </li>
		</ul>
	</div>
<div class="col-md-10 p-5 pt-2 ml-auto" style="background-color: white;">
	<div class="card">
	  <div class="card-body">		
	    <h3><i class="fa-solid fa-gauge mr-2"></i> DATA PREDIKSI</h3><hr>
	    <!-- <div class="row">
	    <div class="col-md-7 mt-2">
	    	<a href="<?php echo base_url();?>Prediksi" class="btn btn-outline-primary btn-sm mb-3">Prediksi Data</a>
		</div>
		<div class="col pl-5">
			<form class="form-inline my-2 my-lg-0 p-20" style="margin-right: 0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div>
	</div> -->
	<div class="row">
                <?php if($this->session->flashdata('status_prediksi')){?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('status_prediksi')?>
                            </div>
                        <?php }elseif($this->session->flashdata('gagal_prediksi')){?>
                          <div class="alert alert-danger">
                                <?= $this->session->flashdata('gagal_prediksi')?>
                            </div>
                        <?php }?> 
                        <!-- <?= $status ?> -->

    	</div>

	<?php if(!empty($hasil_prediksi)){?>
	<div class="row mt-2 text-black">
			<div class="col">
				<div class="card">
				  <div class="card-body">		
				    <!-- <h3><i class="fa-solid fa-gauge mr-2"></i>DATA PREDIKSI</h3><hr> -->
				    <h5 style="font-size: 20px;">Data prediksi yang dicari: </h5>
				    <div class="row text-white">
					<div class="col">
					<div class="table-responsive">
					  <table class="table">
						  <thead>
						    <tr class="bg-info">
						      <th scope="col">No</th>
						      <!-- <th scope="col">id detail</th> -->
						      <th scope="col">Nama Barang</th>
						      <th scope="col">Bulan</th>
						      <th scope="col">Bobot 1</th>
						      <th scope="col">Bobot 2</th>
						      <th scope="col">Bobot 3</th>
						      <th scope="col">Bobot 4</th>
						      <th scope="col">Bobot 5</th>
						      <th scope="col">Data Aktual</th>
						      <th scope="col">WMA</th>
						      <th scope="col">Rumus</th>
						      <th scope="col">Hasil EOQ</th>
						      <th scope="col">Frekuensi Pemesanan</th>
						      <th scope="col">Jarak Pemesanan</th>
						    </tr>
						  </thead>
						  <tbody><?php $i=1; foreach ($hasil_prediksi as $data) : ?>
						    <tr>
						      <td><?= $i++;?></td>
						      <!-- <td><?= $data['id_detail'];?></td> -->
						      <td><?= $data['nm_barang'];?></td>
						      <td><?php if($data['bulan_prediksi'] == 1){
						      				echo "Januari ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 2){
						      				echo "Februari ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 3){
						      				echo "Maret ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 4){
						      				echo "April ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 5){
						      				echo "Mei ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 6){
						      				echo "Juni ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 7){
						      				echo "Juli ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 8){
						      				echo "Agustus ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 9){
						      				echo "September ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 10){
						      				echo "Oktober ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 11){
						      				echo "November ".$data['tahun_prediksi'];
						      			}elseif($data['bulan_prediksi'] == 12){
						      				echo "Desember ".$data['tahun_prediksi'];
						      			}
						      	?></td>
						      <td><?= $data['bobot_1'];?></td>
						      <td><?= $data['bobot_2'];?></td>
						      <td><?= $data['bobot_3'];?></td>
						      <td><?= $data['bobot_4'];?></td>
						      <td><?php if (empty($data['bobot_5'])) {
						      				echo"-";
								      }else{
								      		echo $data['bobot_5'];
								      }?></td>
						      <td><?= $data['data_aktual'];?></td>
						      <td><?= $data['hasil_WMA'];?></td>
						      <td><?php if (empty($data['bobot_5'])) {
						      				echo"((".$data['jml_penjualan1']."*".$data['bobot_1'].") + (".$data['jml_penjualan2']."*".$data['bobot_2'].") + (".$data['jml_penjualan3']."*".$data['bobot_3'].") + (".$data['jml_penjualan4']."*".$data['bobot_4']."))/".$data['jml_bobot']."";
								      }else{
								      		echo"((".$data['jml_penjualan1']."*".$data['bobot_1'].") + (".$data['jml_penjualan2']."*".$data['bobot_2'].") + (".$data['jml_penjualan3']."*".$data['bobot_3'].") + (".$data['jml_penjualan4']."*".$data['bobot_4'].") + (".$data['jml_penjualan5']."*".$data['bobot_5']."))/".$data['jml_bobot']."";
								      }?></td>
						      <td><?= round($data['eoq']);?></td>
						      <td><?= $data['frekuensi_pemesanan'];?></td>
						      <td><?= $data['jarak_pemesanan'];?></td>
						    </tr>
						<?php endforeach; ?>
						  </tbody>
						</table>

			</div>
		</div>
		
		</div>

				</div>
			</div>
		</div>
	</div>
<?php }?>
	</div>
</div>
<?php }?>