<?php include('includes/header.php'); ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">

			<?php  
				$token = $_GET['token'];
				include('includes/dbconfig.php');
				$ref = "peserta/";
				$getdata = $database->getReference($ref)->getChild($token)->getValue();
			?>

			<form action="code.php" method="POST">
				<h3>Form Ubah Data</h3>
				<hr>
				<input type="hidden" name="token" value="<?php echo $token; ?>">

				<div class="form-group">
					<input type="text" name="id" class="form-control" value="<?php echo $getdata['id']; ?>" readonly placeholder="Tap Kartu">
				</div>
				<div class="form-group">
					<input type="text" name="noktp" class="form-control" value="<?php echo $getdata['noktp']; ?>" placeholder="Masukkan No KTP">
				</div>
				<div class="form-group">
					<input type="text" name="fullname" class="form-control" value="<?php echo $getdata['fullname']; ?>" placeholder="Masukkan Nama Lengkap">
				</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control" value="<?php echo $getdata['username']; ?>" placeholder="Masukkan Nama Panggilan">
				</div>
				<div class="form-group">
					<input type="text" name="alamat" class="form-control" value="<?php echo $getdata['alamat']; ?>" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<input type="text" name="nohp" class="form-control" value="<?php echo $getdata['nohp']; ?>" placeholder="Masukkan No Handphone">
				</div>
				<div class="form-group">
					<input type="text" name="status" class="form-control" value="<?php echo $getdata['status']; ?>" placeholder="Masukkan Status">
				</div>
				<div class="form-group">
					<button type="submit" name="update_data" class="btn btn-primary btn-block">Ubah Data</button>
					<hr>
					<a href="peserta.php" class="btn btn-danger btn-block">Batal</a>
				</div>
			</form>
		</div>	
	</div>
</div>

<?php include('includes/footer.php'); ?>
