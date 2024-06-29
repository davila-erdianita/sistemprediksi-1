<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/all.min.css">
    <title>LOGIN</title>
  </head>
  <body>
    
<div class="container">
	<div class="row">
		<div class="col-md-6 login">
			<!-- <div class="login"> -->
			<!-- <p><?php echo $this->session->flashdata('msg');?></p> -->
			<?php if($this->session->flashdata('msg')):?>
                            <div class="<?= $this->session->flashdata('msg_class')?>">
                                <?= $this->session->flashdata('msg')?>
                            </div>
                 <?php endif;?>
			<h4 class="text-center">LOGIN</h4>
			<hr>
			<form action="<?php echo base_url()?>Login/login" method="post">
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

				<button type="submit" class="btn btn-primary">SUBMIT</button>
				<button type="reset" class="btn btn-danger">RESET</button>
			</form>
			<!--  <p class="content-divider center mt-4"><span>or</span></p> -->
			  <p class="text-center sign_up"> Don't have an account yet? <a href="<?=base_url()?>Login/pendaftaran">Sign Up Now</a>
              </p>
		</div>
	<!-- </div> -->
			<!-- <div class="col-md-6 nopadding">
				<img src="img/1.jpg" style="width: 100%; height: 100%; border-radius: 0px 40px 40px 0px;"> -->
				<div class="col-md-6 nopadding" style="border-radius: 0px 40px 40px 0px;background: linear-gradient(135deg, #72d1e5 25%, transparent 25%) -50px 0, linear-gradient(225deg, #47c7e2 25%, transparent 25%) -50px 0, linear-gradient(315deg, #35b2cd 25%, transparent 25%), linear-gradient(45deg, #47c7e2 25%, transparent 25%);background-size: 100px 100px;background-color:#d4e6ef;">
		</div>
	</div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>