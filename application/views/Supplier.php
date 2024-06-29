
    

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
	    <h3><i class="fa-solid fa-gauge mr-2"></i> DATA SUPPLIER</h3><hr>
	    <div class="row pt-2">
                <?php if($this->session->flashdata('status_supplier')){?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('status_supplier')?>
                            </div>
                        <?php }elseif($this->session->flashdata('gagal_supplier')){?>
                          <div class="alert alert-danger">
                                <?= $this->session->flashdata('gagal_supplier')?>
                            </div>
                        <?php }?> 
    	</div>
	    <div class="row">
	    <div class="col-md-7 mt-2">
	    	<a href="<?php echo base_url();?>Supplier/FormSupplier" class="btn btn-outline-primary btn-sm mb-3">Tambah Data</a>
		</div>
		<!-- <div class="col pl-5">
			<form class="form-inline my-2 my-lg-0 p-20" style="margin-right: 0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</div> -->
	</div>
		<div class="row text-black">
			<div class="col">
				<div class="table-responsive">
					  <table class="table" id="datatables">
						  <thead>
						    <tr class="bg-info">
						      <th scope="col">No</th>
						     <!--  <th scope="col">id detail</th>
						      <th scope="col">id_penjualan</th>
						      <th scope="col">id barang</th> -->
						      <th scope="col">Nama Supplier</th>
						      <th scope="col">Alamat Supplier</th>
						      <!-- <th scope="col">Telepon</th> -->
						      <th scope="col">Aksi</th>
						    </tr>
						  </thead>
						  <tbody><?php $i=1; foreach ($all_supplier as $data) : ?>
						    <tr>
						      <td><?= $i++;?></td>
						      <td><?= $data['nama_supplier'];?></td>
						      <td><?= $data['alamat_supplier'];?></td>
						      <!-- <td><?= $data['telp'];?></td> -->
						      <td><a href="<?php echo base_url()."Supplier/delete_data/".$data['id_supplier'];?>" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                  <a href="<?php echo base_url()."Supplier/UpdateForm/".$data['id_supplier'];?>" id="edit" class="btn btn-sm btn-outline-info"><i class="fas fa-edit"></i></a>
                              </td>
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
   