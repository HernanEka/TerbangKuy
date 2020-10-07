	<div id="login" class="section">
		<div class="section-center login-box row justify-content-center align-items-center" style="max-width: 99.8vw !important;">
			<div class="login-form">
				<form action="<?=base_url()?>account/login_process" method="post">
					<div class="text-center">
						<h2>Login</h2>
					</div>
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
							<span class="form-label">Masukkan Username</span>
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<span class="form-label">Masukkan Password</span>
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<span class="form-label">Belum punya akun? <a href="<?=base_url()?>account/signup">Daftar</a></span>
						</div>
					</div>
					<div class="col">
						<div class="form-btn">
							<input type="submit" name="submit" class="submit-btn" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>