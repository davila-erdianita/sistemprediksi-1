<?php if($this->session->userdata('role')=="Pemilik"){?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--  <link rel="stylesheet" type="text/css" href="css/admin.css">
     <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
      <script type="text/javascript" src="css/jquery-1.12.4.js"></script>
      <script type="text/javascript" src="css/jquery-ui.js"></script> -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/admin.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui.css">
     <script type="text/javascript" src="<?php echo base_url();?>css/jquery-1.12.4.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>css/jquery-ui.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

     <style type="text/css">

       .pagination {
          display: inline-block;
        }

        .pagination a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
        }
     </style>
    <title>Sistem Prediksi</title>
  </head>
  <body>
   <!--  <h1>Hello, world!</h1> --> 
   

 
                                                                                                               
    

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
	<div class="col-md-2 mt-5 pr-3 pt-4" style="background-color: #333;position: fixed;
    /*width: 400px;*/
    /*background-color: #DDD; */
   /* font-size: 15px;*/
    /*overflow-y: scroll;*/
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
	    <h3><i class="fa-solid fa-gauge mr-2"></i> DASHBOARD</h3><hr>

		<div class="row text-white">
			<div class="col">
			<div class="card text-white bg-success ml-3" style="max-width: 18rem;height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard mr-2"></i></div>
			    <h5 class="card-title">Nama Barang</h5>
				   <p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($barang as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<!-- <div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Barang" role="button" style ="">Tabel Barang <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div> -->
					</div>
			</div>

		<div class="col">
			<div class="card text-white bg-info ml-3" style="max-width: 18rem;height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard-check mr-2"></i></div>
			    <h5 class="card-title">Jumlah Supplier</h5>
			    	<p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($supplier as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<!-- <div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Supplier" role="button" style ="">Tabel Supplier <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div> -->
					</div>
			</div>
		<div class="col">
			<div class="card text-white bg-primary ml-3" style="max-width: 18rem; height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard-user mr-2"></i></div>
			    <h5 class="card-title">Jumlah Penjualan</h5>
			    	<p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($penjualan as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<!-- <div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Penjualan" role="button" style ="">Tabel Penjualan <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div> -->
					</div>
			</div>
	</div>
	<div class="row text-dark mt-5">
			<div class="col">
			<div class="card text-dark ml-3" style="max-width: 60rem;height: auto;">
			  <div class="card-body">
			  	<div class="card-body-icon"></div>
			    <center><h5 class="card-title">Penjualan Barang Pada Bulan Januari - Desember 2021</h5></center>
				                    <div class="col-md-3 mt-2 ml-auto mb-1">
				                        <select name="year" id="year" class="form-control">
				                            <option value="">--Pilih--</option>
				                        <?php
				                        foreach($nama_barang->result_array() as $row)
				                        {
				                            echo '<option value="'.$row["id_barang"].'">'.$row["nama_barang"].'</option>';
				                        }
				                        ?>

				                        </select>
				                    </div>
				               
				            <div class="panel-body">
				                <div id="chart_area" style="width: 90%; height: 420px; padding-left: 100px"></div>
				            </div>
				        

				  </div>
				</div>
			</div>
		</div>

	  </div>
	</div>	

	</div>
</div>
  

<!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   <!--  <script src="<?php echo base_url();?>assets/dataTables/datatables.min.js"></script> -->

  </body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {packages:['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(year, title)
{
    var temp_title = title + ' ' + year;
    $.ajax({
        url:"<?php echo base_url(); ?>home/fetch_data",
        method:"POST",
        data:{year:year},
        dataType:"JSON",
        success:function(data)
        {
        	//alert(data);

            drawMonthwiseChart(data, temp_title);
        }
    })
}

function drawMonthwiseChart(chart_data, chart_main_title)
{ 
	
    var jsonData = chart_data;

    var data = new google.visualization.DataTable();
    data.addColumn('number', 'bulan');
    data.addColumn('number', 'jml_penjualan');

    $.each(jsonData, function(i, jsonData){
        var bulan = jsonData.bulan;
        var jml_penjualan = parseFloat($.trim(jsonData.jml_penjualan));
        data.addRows([[bulan, jml_penjualan]]);
    });


    var options = {
        title:chart_main_title,
        hAxis: {
            title: "Bulan"
        },
        vAxis: {
            title: 'Jumlah Penjualan'
        },
        chartArea:{width:'90%',height:'75%'}
    }

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){
    $('#year').change(function(){
        var year = $(this).val();
        if(year != '')
        {
        	if (year == 1) {
           		 load_monthwise_data(year, 'Data Barang Rinso Molto 750ml');
        	}
        	if (year == 2) {
           		 load_monthwise_data(year, 'Data Barang Gulaku 1 Kg');
        	}
        	if (year == 3) {
           		 load_monthwise_data(year, 'Data Barang Aqua 15 L');
        	}
        	if (year == 4) {
           		 load_monthwise_data(year, 'Data Barang Le Minerale 15 L');
        	}
        	if (year == 5) {
           		 load_monthwise_data(year, 'Data Barang LPG 3 Kg');
        	}
        	if (year == 8) {
           		 load_monthwise_data(year, 'Data Barang cuka dixi 100 ml');
        	}
        	if (year == 9) {
           		 load_monthwise_data(year, 'Data Barang ABC syrup squash delight leci 460 ml');
        	}
        	if (year == 10) {
           		 load_monthwise_data(year, 'Data Barang ABC syrup squash delight jeruk 460 ml');
        	}
        	if (year == 11) {
           		 load_monthwise_data(year, 'Data Barang Sapu Lidi Panjang Kipas');
        	}
        	if (year == 12) {
           		 load_monthwise_data(year, 'Data Barang Sapu Lidi Pendek Kipas');
        	}
        	if (year == 13) {
           		 load_monthwise_data(year, 'Data Barang Sapu Kipas');
        	}
        	if (year == 14) {
           		 load_monthwise_data(year, 'Data Barang wipol karbol cemara 200 ml');
        	}
        	if (year == 15) {
           		 load_monthwise_data(year, 'Data Barang Autan Lotion anti nyamuk');
        	}
        	if (year == 16) {
           		 load_monthwise_data(year, 'Data Barang proclin pemutih 200 ml');
        	}
        	if (year == 17) {
           		 load_monthwise_data(year, 'Data Barang bedak salicyl');
        	}
        }
    });
});

</script>




<?php }elseif($this->session->userdata('role')=="Admin"){?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--  <link rel="stylesheet" type="text/css" href="css/admin.css">
     <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
      <script type="text/javascript" src="css/jquery-1.12.4.js"></script>
      <script type="text/javascript" src="css/jquery-ui.js"></script> -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/admin.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui.css">
     <script type="text/javascript" src="<?php echo base_url();?>css/jquery-1.12.4.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>css/jquery-ui.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

     <style type="text/css">

       .pagination {
          display: inline-block;
        }

        .pagination a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
        }
     </style>
    <title>Sistem Prediksi</title>
  </head>
  <body>
   <!--  <h1>Hello, world!</h1> --> 
   

 
                                                                                                               
    

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
	<div class="col-md-2 mt-5 pr-3 pt-4" style="background-color: #333;position: fixed;
    /*width: 400px;*/
    /*background-color: #DDD; */
   /* font-size: 15px;*/
    /*overflow-y: scroll;*/
    height: 100%;
    padding-top: 40px;
    top: 0;
    bottom: 0;">
		<ul class="nav flex-column ml-3 mb-5" style="height: 100%; font-size: 12px;">
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="<?=base_url()?>Home"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
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
	    <h3><i class="fa-solid fa-gauge mr-2"></i> DASHBOARD</h3><hr>

		<div class="row text-white">
			<div class="col">
			<div class="card text-white bg-success ml-3" style="max-width: 18rem;height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard mr-2"></i></div>
			    <h5 class="card-title">Nama Barang</h5>
				   <p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($barang as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Barang" role="button" style ="">Tabel Barang <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div>
					</div>
			</div>

		<div class="col">
			<div class="card text-white bg-info ml-3" style="max-width: 18rem;height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard-check mr-2"></i></div>
			    <h5 class="card-title">Jumlah Supplier</h5>
			    	<p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($supplier as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Supplier" role="button" style ="">Tabel Supplier <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div>
					</div>
			</div>
		<div class="col">
			<div class="card text-white bg-primary ml-3" style="max-width: 18rem; height: 12rem;">
			  <div class="card-body">
			  	<div class="card-body-icon"><i class="fa-solid fa-clipboard-user mr-2"></i></div>
			    <h5 class="card-title">Jumlah Penjualan</h5>
			    	<p class="card-text pt-1" style="font-size: 70px;font-style: bold;"> 
			    	<?php foreach ($penjualan as $data) : ?>
					    <div class="display-4 pt-2"><?= $data['jumlah'];?></div>
					    <?php endforeach; ?>
					</p>
				  </div>
				  		<div class="card-footer">
			      				<small><a style="text-decoration:none; color: 	#F0F8FF;" href="<?=base_url()?>Penjualan" role="button" style ="">Tabel Penjualan <i class="fa-solid fa-chevron-right"></i></a></small>
			    		</div>
					</div>
			</div>
	</div>
	<div class="row text-dark mt-5">
			<div class="col">
			<div class="card text-dark ml-3" style="max-width: 60rem;height: auto;">
			  <div class="card-body">
			  	<div class="card-body-icon"></div>
			    <center><h5 class="card-title">Penjualan Barang Pada Bulan Januari - Desember 2021</h5></center>
				                    <div class="col-md-3 mt-2 ml-auto mb-1">
				                        <select name="year" id="year" class="form-control">
				                            <option value="">--Pilih--</option>
				                        <?php
				                        foreach($nama_barang->result_array() as $row)
				                        {
				                            echo '<option value="'.$row["id_barang"].'">'.$row["nama_barang"].'</option>';
				                        }
				                        ?>

				                        </select>
				                    </div>
				               
				            <div class="panel-body">
				                <div id="chart_area" style="width: 90%; height: 420px; padding-left: 100px"></div>
				            </div>
				        

				  </div>
				</div>
			</div>
		</div>

	  </div>
	</div>	

	</div>
</div>
  

<!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   <!--  <script src="<?php echo base_url();?>assets/dataTables/datatables.min.js"></script> -->

  </body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {packages:['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(year, title)
{
    var temp_title = title + ' ' + year;
    $.ajax({
        url:"<?php echo base_url(); ?>home/fetch_data",
        method:"POST",
        data:{year:year},
        dataType:"JSON",
        success:function(data)
        {
        	//alert(data);

            drawMonthwiseChart(data, temp_title);
        }
    })
}

function drawMonthwiseChart(chart_data, chart_main_title)
{ 
	
    var jsonData = chart_data;

    var data = new google.visualization.DataTable();
    data.addColumn('number', 'bulan');
    data.addColumn('number', 'jml_penjualan');

    $.each(jsonData, function(i, jsonData){
        var bulan = jsonData.bulan;
        var jml_penjualan = parseFloat($.trim(jsonData.jml_penjualan));
        data.addRows([[bulan, jml_penjualan]]);
    });


    var options = {
        title:chart_main_title,
        hAxis: {
            title: "Bulan"
        },
        vAxis: {
            title: 'Jumlah Penjualan'
        },
        chartArea:{width:'90%',height:'75%'}
    }

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){
    $('#year').change(function(){
        var year = $(this).val();
        if(year != '')
        {
        	if (year == 1) {
           		 load_monthwise_data(year, 'Data Barang Rinso Molto 750ml');
        	}
        	if (year == 2) {
           		 load_monthwise_data(year, 'Data Barang Gulaku 1 Kg');
        	}
        	if (year == 3) {
           		 load_monthwise_data(year, 'Data Barang Aqua 15 L');
        	}
        	if (year == 4) {
           		 load_monthwise_data(year, 'Data Barang Le Minerale 15 L');
        	}
        	if (year == 5) {
           		 load_monthwise_data(year, 'Data Barang LPG 3 Kg');
        	}
        	if (year == 8) {
           		 load_monthwise_data(year, 'Data Barang cuka dixi 100 ml');
        	}
        	if (year == 9) {
           		 load_monthwise_data(year, 'Data Barang ABC syrup squash delight leci 460 ml');
        	}
        	if (year == 10) {
           		 load_monthwise_data(year, 'Data Barang ABC syrup squash delight jeruk 460 ml');
        	}
        	if (year == 11) {
           		 load_monthwise_data(year, 'Data Barang Sapu Lidi Panjang Kipas');
        	}
        	if (year == 12) {
           		 load_monthwise_data(year, 'Data Barang Sapu Lidi Pendek Kipas');
        	}
        	if (year == 13) {
           		 load_monthwise_data(year, 'Data Barang Sapu Kipas');
        	}
        	if (year == 14) {
           		 load_monthwise_data(year, 'Data Barang wipol karbol cemara 200 ml');
        	}
        	if (year == 15) {
           		 load_monthwise_data(year, 'Data Barang Autan Lotion anti nyamuk');
        	}
        	if (year == 16) {
           		 load_monthwise_data(year, 'Data Barang proclin pemutih 200 ml');
        	}
        	if (year == 17) {
           		 load_monthwise_data(year, 'Data Barang bedak salicyl');
        	}
        }
    });
});

</script>
<?php }else{
  redirect('Login','refresh');
} ?>