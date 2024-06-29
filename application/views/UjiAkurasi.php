
    

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
		    <a class="nav-link text-white" href="<?=base_url()?>Penjualan"><i class="fa-solid fa-file-pen mr-2"></i> Data Penjualan</a><hr class="bg-secondary">
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
		    <a class="nav-link active text-white" href="<?=base_url()?>Pembelian"><i class="fa-solid fa-file-lines mr-2"></i> Data Pembelian</a><hr class="bg-secondary">
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
	    <h3><i class="fa-solid fa-gauge mr-2"></i> Uji Akurasi Prediksi</h3><hr>
	    <div class="row pt-2">
               <!-- // -->
    	</div>
    	<div class="col mb-2">
    		<form class="form-inline" action="<?php echo base_url()."Prediksi/uji_akurasi";?>" method="POST">
    		<div class="form-group" style="margin-right: 5px;">
    		<label style="margin-right: 10px;" for="" class="form-label">Nama Barang</label>
		      <select name="id_barang" id="id_barang" class="form-control">
			  <option value="">--Pilih--</option>
			  <?php
				                        foreach($barang as $row)
				                        {
				                            echo '<option value="'.$row["id_barang"].'">'.$row["nama_barang"].'</option>';
				                        }
				                        ?>
			</select></div>
			 <div class="form-group" style="margin-right: 5px;">
                            <label style="margin-right: 10px;" for="" class="form-label">Bobot</label>
                            <select name="id_bobot" class="form-control" id="id_bobot">
                            <option value="" selected="selected" hidden="hidden">--Pilih--</option>
                            <option value="1">4,3,2,1</option>
                            <option value="4">5,3,2,1</option>
                            <option value="2">5,4,3,2,1</option>
                            <option value="3">6,4,3,2,1</option>
                        </select>
                            <small><?php echo form_error('id_bobot');?></small>
                      </div>
			  <button type="submit" class="btn btn-primary p-2 mr-1 ml-2">Cari</button>
		    </form>
    	</div>
	    <div class="row">
	    <div class="col-md-2 mt-2">
	    <!-- // -->
		</div>

	</div>  
		 <?php if($this->session->flashdata('status_laporan')){?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('status_laporan')?>
                            </div>
                        <?php }elseif($this->session->flashdata('gagal_laporan')){?>
                          <div class="alert alert-danger">
                                <?= $this->session->flashdata('gagal_laporan')?>
                            </div>
                        <?php }?> 


		<div class="row text-black">
			<div class="col">
				<div class="table-responsive">
					  <table class="table" id="datatables">
						  <thead>
						    <tr class="bg-info">
						      <th scope="col">No</th>
						      <th scope="col">Nama Barang</th>
						      <th scope="col">Bulan</th>
						      <th scope="col">Tahun</th>
						      <th scope="col">Data Aktual</th>
						      <th scope="col">Hasil WMA</th>
						      <th scope="col">MAD</th>
						      <th scope="col">MSE</th>
						      <th scope="col">MAPE</th>
						    </tr>
						  </thead>
						  <tbody><?php $i=1; foreach ($hasil_uji as $data) : ?>
						    <tr>
						      <td><?= $i++;?></td>
						      <td><?= $data['nm_barang'];?></td>
						      <td><?php if($data['bulan_prediksi'] == 1){
						      				echo "Januari ";
						      			}elseif($data['bulan_prediksi'] == 2){
						      				echo "Februari ";
						      			}elseif($data['bulan_prediksi'] == 3){
						      				echo "Maret ";
						      			}elseif($data['bulan_prediksi'] == 4){
						      				echo "April ";
						      			}elseif($data['bulan_prediksi'] == 5){
						      				echo "Mei ";
						      			}elseif($data['bulan_prediksi'] == 6){
						      				echo "Juni ";
						      			}elseif($data['bulan_prediksi'] == 7){
						      				echo "Juli ";
						      			}elseif($data['bulan_prediksi'] == 8){
						      				echo "Agustus ";
						      			}elseif($data['bulan_prediksi'] == 9){
						      				echo "September ";
						      			}elseif($data['bulan_prediksi'] == 10){
						      				echo "Oktober ";
						      			}elseif($data['bulan_prediksi'] == 11){
						      				echo "November ";
						      			}elseif($data['bulan_prediksi'] == 12){
						      				echo "Desember ";
						      			}
						      	?></td>
						      <td><?= $data['tahun_prediksi'];?></td>
						      <td><?= $data['data_aktual'];?></td>
						      <td><?= $data['hasil_wma'];?></td>						     
						      <td><?= round($data['MAD'],1);?></td>
						      <td><?= round($data['MSE'],1);?></td>
						      <td><?= round($data['MAPE'],1);?></td>
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
   