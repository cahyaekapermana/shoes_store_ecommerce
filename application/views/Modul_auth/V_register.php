<!DOCTYPE html>
<html lang="en">
<head>
	<title>Membuat Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form action="<?php echo site_url('C_User/aksi_login')?>" class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43">
						Buat Akun Baru
					</span>
										
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="f_username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="f_password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="f_nama_lengkap">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="f_email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="radio" name="f_status1" value="admin"/>Male
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color: #353b48;">
							Daftar Sekarang
						</button>
					</div>
					
					<br>
					<center><span>Follow Us On</span></center>
					<br>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>
                <!-- BG IMAGE -->
                <?php 
                    $img = base_url('assets/login_template/images/sepatu_yayan.jpg');
                ?>

				<div class="login100-more" style="background-image: url(' <?php echo $img ?> ')">

                </div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login_template/js/main.js')?>"></script>

</body>
</html>