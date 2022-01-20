<?php include('includes/header.php'); ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">

			<form action="code.php" method="POST">
				<h3>Login</h3>
				<hr>
			
				<div class="form-group">
					<input type="text" name="username" class="form-control" value="" placeholder="Masukkan Username">
				</div>
				<div class="form-group">
					<input type="text" name="password" class="form-control" value="" placeholder="Masukkan Password">
				</div>
				<div class="form-group">
					<a href="dashboard.php" class="btn btn-primary btn-block">Login</a>
				</div>
			</form>
		</div>	
	</div>
</div>

<?php include('includes/footer.php'); ?>
