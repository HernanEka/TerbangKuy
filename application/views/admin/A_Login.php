<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
</head>
<body>
	<div id="admin" class="section">
		<div class="container">
			<div class="section-center align-items-center row justify-content-center row" >
				<div class="admin-form">
					<h1 class="text-center">Login</h1>
					<span class="form-label">Admin Panel TerbangKuy</span>
					<form action="<?=base_url()?>admin/A_Account/login_process" method="post">
						<input type="hidden" name="url_before" value='<?php 
						if(isset($_GET['url'])){
							echo $_GET['url'];
						}
						else{
							echo '';
						}
						?>'>
						<div class="col">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="submit" name="submit" class="submit-btn" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>