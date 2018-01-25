<?php require_once('includes/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-5 mx-auto my-5">
			<form action="" method="POST" autocomplete="off" class="auth-form">
				<div class="form-contents">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="user_email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" autocomplete="new-password">
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember_me" id="remember">
						<label for="remember">Remember Me</label>
					</div>
					<div class="form-group">
						<a href="register.php" class="text-primary">Register New Users</a>
					</div>
					<div class="form-group">
						<button class="btn btn-secondary" type="reset">Reset</button>
						<button class="btn btn-primary" type="submit">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require_once('includes/footer.php'); ?>