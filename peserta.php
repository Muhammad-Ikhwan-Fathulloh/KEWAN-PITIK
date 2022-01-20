<?php include('includes/header.php'); ?>

<?php session_start(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php  
			if (isset($_SESSION['status']) && $_SESSION['status'] != "") 
			{
				?>
				<hr>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Halo Guys!</strong> <?php echo $_SESSION['status']; ?>

				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<?php 
				unset($_SESSION['status']);
			}
			?>
		</div>

		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-body">
					<?php
						include('includes/dbconfig.php');
						$ref = "peserta/";
						$total = $database->getReference($ref)->getSnapshot()->numChildren();
					?>
					<h3>Data Peserta
					<a href="#" class="btn btn-info ml-3 text-white float-right">Total No : <?php echo $total; ?></a>
					<a href="insert.php" class="btn btn-primary float-right">Tambah</a>
					</h3>
					<hr>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>UID</th>
									<th>No KTP</th>
									<th>Nama Lengkap</th>
									<th>Nama Panggilan</th>
									<th>Alamat</th>
									<th>No HP</th>
									<th>Status</th>
									<th>Ubah</th>
									<th>Hapus</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include('includes/dbconfig.php');
									$ref = "peserta/";
									$ambildata = $database->getReference($ref)->getValue();
									$i = 0;
								if ($ambildata > 0) {
								
									foreach ($ambildata as $key => $row) {
										$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['noktp']; ?></td>
									<td><?php echo $row['fullname']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['alamat']; ?></td>
									<td><?php echo $row['nohp']; ?></td>
									<td><?php echo $row['status']; ?></td>
									<td>
										<a href="edit.php?token=<?php echo $key ?>" class="btn btn-primary">Ubah</a>
									</td>
									<td>
										<form action="code.php" method="POST">
											<input type="hidden" name="ref_token_delete" value="<?php echo $key; ?>">
											<button type="submit" name="delete_data" class="btn btn-danger">Hapus</button>
										</form>
									</td>
								</tr>
								<?php  
									}
								}
								else{
									?>
									<tr>
										<td colspan="10">Data kosong!</td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>			
				</div>
			</div>
		</div>

	</div>
</div>

<?php include('includes/footer.php'); ?>
