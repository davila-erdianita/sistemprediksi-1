<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/Login.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/all.min.css">
    <style type="text/css">
    	body{
	/*background-color: #e5e8ef;
	background-color:#e4ebf2;*/
	/*background-color:#c7ceda;*/
	background-color:#d2d8e2;

}
.container{
	width: 60%;
	margin-top: 6%;
	margin-bottom: 6%;
	box-shadow: 0 3px 20px rgba(0,0,0,0.2);
	 border-radius: 40px;
	 background-color: white;
	/*padding: 35px;*/
	/*margin-bottom: 40%;*/
}
.login{
	/*padding: 40px;*/
	padding: 60px 40px 0px 55px;
}

.signup{
	/*padding: 40px;*/
	padding: 30px 40px 0px 55px;
}

button{
	width: 42%;
}
.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}

.sign_up{
	/*background-color: black;*/
	margin-top: 40px;
	margin-bottom: 20px;
}

.login_user{
	/*background-color: black;*/
	margin-top: 20px;
	margin-bottom: 20px;
}

h4{
	font-weight: 700;
	color: #545b62;
}


    </style>
    <title>Sign Up</title>
  </head>
  <body>
    
<div class="container">
	<div class="row">
		<div class="col-md-6 signup">
			<!-- <div class="login"> -->
			<!-- <p><?php echo $this->session->flashdata('msg');?></p> -->
			<?php if($this->session->flashdata('msg')):?>
                            <div class="<?= $this->session->flashdata('msg_class')?>">
                                <?= $this->session->flashdata('msg')?>
                            </div>
                 <?php endif;?>
			<h4 class="text-center">SIGN UP</h4>
			<hr>
			<form method="post" action="<?php echo base_url()?>Login/register">
				<div class="form-group">
					<label>Username</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-user"></i></div>
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Password</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Confirm Password</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-unlock"></i></div>
							<input type="password" name="password2" class="form-control" placeholder="Confirm Password">
						</div>
					</div>
				</div>

				<button type="submit" class="btn btn-primary">SUBMIT</button>
				<button type="reset" class="btn btn-danger">RESET</button>
			</form>
			 <p class="text-center login_user">Already have an account? <a href="<?php echo base_url()?>Login">Login Now</a></p>
		</div>
			<!-- <div class="col-md-6 nopadding" style="border-radius: 0px 40px 40px 0px;background-color: linear-gradient(to top right, #57abae, #499b9e, #57abae, #85e1e4);background-image: radial-gradient(#000 10%, transparent 11%),
    radial-gradient(#e53935 10%, transparent 11%);
  background-size: 60px 60px;
  background-position: 0 0, 30px 30px;
  background-repeat: repeat; " > -->
  			<div class="col-md-6 nopadding" style="border-radius: 0px 40px 40px 0px;background: linear-gradient(135deg, #72d1e5 25%, transparent 25%) -50px 0, linear-gradient(225deg, #47c7e2 25%, transparent 25%) -50px 0, linear-gradient(315deg, #35b2cd 25%, transparent 25%), linear-gradient(45deg, #47c7e2 25%, transparent 25%);background-size: 100px 100px;background-color:#d4e6ef;">
 <!--  #e1e1e1 -->
<!--  background: rgb(205,154,232);
background: linear-gradient(81deg, rgba(205,154,232,1) 8%, rgba(148,214,233,1) 100%);  -->

				<!-- <img src="img/1.jpg" style="width: 100%; height: 100%; border-radius: 0px 40px 40px 0px;"> -->
				<!-- <a href="https://www.freepik.com/free-photo/banner-with-abstract-background-with-blue-tones-paper-cutout-waves_22982427.htm#query=animation%20background&position=2&from_view=search">Image by denamorado</a> on Freepik -->
		</div>
	</div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>