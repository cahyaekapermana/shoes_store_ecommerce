<!DOCTYPE html>
<html lang="en">

<head>
	<title>Halaman Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form action="<?php echo site_url('C_User/aksi_login') ?>" class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43">
						Pandaan Footwear Store Login
					</span>
					<!-- Flashdata Login Gagal-->
					<?php echo $this->session->flashdata('msg'); ?>

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

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="background-color: #353b48;">
							Masuk
						</button>
					</div>

					<!-- Link login user -->
					<br>
					<div>
						<p style="font-size:18px">Belum punya akun? <a style="font-size:18px; color: #40739e;" href="<?php echo site_url('C_User/register') ?>">Daftar Sekarang</a></p>
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
				$img = base_url('assets/login_template/images/boots.jpg');
				?>

				<div class="login100-more" style="background-image: url(' <?php echo $img ?> ')">

				</div>
			</div>
		</div>
	</div>

</body>

</html>