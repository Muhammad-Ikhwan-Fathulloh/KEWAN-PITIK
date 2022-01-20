<?php include('includes/header.php'); ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">

			<script type="text/javascript">
				function getData() {
			    $.ajax({
			        url: "insert.php",
			        type: "GET",
			        success: function () {
			            
			        }
			    }
			}
			$('document').ready(function () {
			    setInterval(function () { getData()}, 1000); // panggil setiap 10 detik
			}); 


			function getData() {
			    $.ajax({
			        url: "insert.php",
			        type: "GET",
			        success: function () {
			            // bla bla bla
			        }
			    }
			}
			</script>

			<?php  
				include('includes/dbconfig.php');
				$ref = "id/";
				$getdata = $database->getReference($ref)->getSnapshot()->getValue();
			?>

			<form action="code.php" method="POST">
				<h3>Form Daftar</h3>
				<hr>
				<div class="form-group">
					<input type="text" name="id" class="form-control" value="<?php echo $getdata['rfid']; ?>"placeholder ="Tap Kartu">
					<a href="insert.php" class="btn btn-primary float-left">Cek</a>
				</div>
				<div class="form-group">
					<input type="text" name="noktp" class="form-control" placeholder="Masukkan No KTP">
				</div>
				<div class="form-group">
					<input type="text" name="fullname" class="form-control" placeholder="Masukkan Nama Lengkap">
				</div>
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Masukkan Nama Panggilan">
				</div>
				<div class="form-group">
					<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<input type="text" name="nohp" class="form-control" placeholder="Masukkan No Handphone">
				</div>
				<div class="form-group">
					<input type="text" name="status" class="form-control" placeholder="Masukkan Status">
				</div>
				<div class="form-group">
					<button type="submit" name="save_push_data" class="btn btn-primary btn-block">Simpan Data</button>
					<hr>
					<a href="peserta.php" class="btn btn-danger btn-block">Batal</a>
				</div>
			</form>
		</div>	
	</div>
</div>

<?php include('includes/footer.php'); ?>
