
    

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
	<a class="btn btn-outline-info mb-1" href="<?=base_url()?>Pembelian" role="button" style ="border-color: white;"><i class="fa-solid fa-chevron-left"></i> Kembali</a>	
	<div class="card" style="box-shadow: 0 3px 20px rgba(0,0,0,0.2);">
	  <div class="card-body">		
	    <h3><i class="fa-solid fa-gauge mr-2"></i>UBAH DATA PEMBELIAN</h3><hr>
	    <?php
                foreach ($pembelian as $data) {
            ?>
                    <form action="<?php echo base_url()."Pembelian/update_data";?>" method="POST">
                    	<input type="hidden" class="form-control" name="id_pembelian" id="id_pembelian" value="<?php echo $data['id_pembelian']?>">
                      <div class="form-group">
                            <label for="" class="form-label">Nama Barang</label>
                            <select name="id_barang" class="form-control" id="id_barang">
                             <!--  <?php foreach ($all_barang as $d) : ?>
                            <option value="<?= $d['id_barang'];?>"><?= $d['nama_barang'];?></option>
                              <?php endforeach; ?> -->
                              <?php foreach ($all_barang as $d) : ?>
                            <option value="<?= $d['id_barang'];?>"
                            	<?php if ($d['id_barang'] == $data['id_barang']) : ?> selected<?php endif; ?>
                            	><?= $d['nama_barang'];?></option>
                              <?php endforeach; ?>
                        </select>
                            <small><?php echo form_error('id_barang');?></small>
                      </div>
                      <div class="form-group">
                            <label for="" class="form-label">Nama Supplier</label>
                            <select name="id_supplier" class="form-control" id="id_supplier">
                              <!-- <?php foreach ($all_supplier as $d) : ?>
                            <option value="<?= $d['id_supplier'];?>"><?= $d['nama_supplier'];?></option>
                              <?php endforeach; ?> -->
                              <?php foreach ($all_supplier as $d) : ?>
                            <option value="<?= $d['id_supplier'];?>"
                            	<?php if ($d['id_supplier'] == $data['id_supplier']) : ?> selected<?php endif; ?>
                            	><?= $d['nama_supplier'];?></option>
                              <?php endforeach; ?>
                        </select>
                            <small><?php echo form_error('id_supplier');?></small>
                      </div>
                      <div class="form-group">
                            <label for="" class="form-label">Jumlah Pembelian</label>
                            <input type="text" class="form-control" name="jml_pembelian" value="<?php echo $data['jml_pembelian']?>"> 
                            <small><?php echo form_error('jml_pembelian');?></small>
                      </div>
                      <div class="form-group">
                            <label for="" class="form-label">Tanggal Pembelian</label>
                            <input type="text" class="form-control" name="tgl_pembelian" id="datepicker" value="<?php echo $data['tgl_pembelian']?>"> 
                            <small><?php echo form_error('tgl_pembelian');?></small>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Simpan</button><button type="reset" class="btn btn-secondary">Batal</button>
                    </form>
        <?php }?>
         
	</div>	
	</div>
</div>
</div>
   