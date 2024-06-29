
    

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
    /*font-size: 15px;
    overflow-y: scroll;*/
    height: 100%;
    padding-top: 40px;
    top: 0;
    bottom: 0;">
    <?php if($this->session->userdata('role')=="Admin"){?>
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

		<?php }elseif($this->session->userdata('role')=="Pemilik"){?>
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
	<?php }else{
  redirect('Login','refresh');
} ?>
	</div>
<div class="col-md-10 p-5 pt-2 ml-auto" style="background-color: white;">
	<div class="card">
	  <div class="card-body">		
	    <h3><i class="fa-solid fa-gauge mr-2"></i> FORM PREDIKSI</h3><hr>
		<div class="row text-black">

              
                        <?php if($this->session->flashdata('gagal_prediksi')){?>
                          <div class="alert alert-danger">
                                <?= $this->session->flashdata('gagal_prediksi')?>
                            </div>
                        <?php }?> 
                        <!-- <?= $status ?> -->

         </div>
			<div class="col">
					<form class="form-inline" action="<?php echo base_url()."Prediksi/Hasil";?>" method="POST">
                      <div class="form-group" style="margin-right: 5px;">
                            <label for="" class="form-label">Nama Barang</label>
                            <select name="id_barang" class="form-control" id="id_barang">
                            <option value="" selected="selected" hidden="hidden">--Pilih--</option>
                              <?php foreach ($all_barang as $data) : ?>
                            <option value="<?= $data['id_barang'];?>"><?= $data['nama_barang'];?></option>
                              <?php endforeach; ?>
                        </select>
                            <small><?php echo form_error('id_barang');?></small>
                      </div>
                       <div class="form-group" style="margin-right: 5px;">
                            <label for="" class="form-label">Bulan Prediksi</label>
                            <select name="bulan" class="form-control" id="bulan">
                            <option value="" selected="selected" hidden="hidden">--Pilih--</option>
                              <?php foreach ($all_bulan as $data) : ?>
                            <option value="<?= $data['bulan'];?>"><?= $data['nama_bulan'];?></option>
                              <?php endforeach; ?>
                        </select>
                            <small><?php echo form_error('bulan');?></small>
                      </div>
                       <div class="form-group" style="margin-right: 5px;">
                            <label for="" class="form-label">Tahun Prediksi</label>
                            <select name="tahun" class="form-control" id="tahun">
                            <option value="" selected="selected" hidden="hidden">--Pilih--</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                            <small><?php echo form_error('tahun');?></small>
                      </div>
                      <div class="form-group" style="margin-right: 5px;">
                            <label for="" class="form-label">Bobot</label>
                            <select name="id_bobot" class="form-control" id="id_bobot">
                            <option value="" selected="selected" hidden="hidden">--Pilih--</option>
                            <option value="1">4,3,2,1</option>
                            <option value="4">5,3,2,1</option>
                            <option value="2">5,4,3,2,1</option>
                            <option value="3">6,4,3,2,1</option>
                        </select>
                            <small><?php echo form_error('id_bobot');?></small>
                      </div>
                      <button type="submit" class="btn btn-primary p-2 mr-1 mt-2">Simpan</button><button type="reset" class="btn btn-secondary p-2 mt-2">Batal</button>
                    </form>

			</div>

		
		</div>
	  </div>
	</div>	
	</div>
</div>
   