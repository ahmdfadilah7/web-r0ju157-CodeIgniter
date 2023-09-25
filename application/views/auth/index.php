<style>
	body {
		
	}
</style>
<div class="container mt-5 pt-4">
	<div class="row justify-content-center mt-5">
		<div class="col-lg-4 col-10 text-black rounded p-4 mt-5">
			<h3 class="mb-4 text-center">Login</h3>
			<form action="<?= base_url('auth/login'); ?>" method="post">
				<div class="form-group">
					<label for="username"><i class="fas fa-fw fa-user"></i> Username</label>
					<input type="text" id="username" class="form-control rounded-pill" placeholder="Masukkan Username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-fw fa-lock"></i> Password</label>
					<input type="password" id="password" class="form-control rounded-pill" placeholder="Masukkan Password" name="password" required>
				</div>
				<div class="form-group text-right">
					<center><button type="submit" class="btn btn-success rounded-pill px-4">Login</button></center>
				</div>
			</form>
			<br><center><p style="color: black;">Warung Lalapan Bude</a></p></center>
			
		</div>
	</div>
</div>
