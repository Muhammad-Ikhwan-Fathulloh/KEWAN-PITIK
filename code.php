<?php 

session_start();
include('includes/dbconfig.php');

if (isset($_POST['save_push_data'])) 
{
	$id = $_POST['id'];
	$noktp = $_POST['noktp'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$status = $_POST['status'];

	$data = [
		'id' => $id,
		'noktp' => $noktp,
		'fullname' => $fullname,
		'username' => $username,
		'alamat' => $alamat,
		'nohp' => $nohp,
		'status' => $status
	];
	$uid = $id;
	$ref = "peserta/".$uid;
	$postdata = $database->getReference($ref)->set($data);

	if ($postdata) {
		$_SESSION['status'] = "Simpan data sukses";
		header("Location: peserta.php");
	}else{
		$_SESSION['status'] = "Simpan data gagal";
		header("Location: peserta.php");
	}
}

if (isset($_POST['update_data'])) 
{
	$id = $_POST['id'];
	$noktp = $_POST['noktp'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$status = $_POST['status'];

	$token = $_POST['token'];

	$data = [
		'id' => $id,
		'noktp' => $noktp,
		'fullname' => $fullname,
		'username' => $username,
		'alamat' => $alamat,
		'nohp' => $nohp,
		'status' => $status
	];
	$uid = $id;
	$ref = "peserta/".$token;
	$postdata = $database->getReference($ref)->update($data);

	if ($postdata) {
		$_SESSION['status'] = "Ubah data sukses";
		header("Location: peserta.php");
	}else{
		$_SESSION['status'] = "Ubah data gagal";
		header("Location: peserta.php");
	}
}

if(isset($_POST['delete_data'])){
	$token = $_POST['ref_token_delete'];

	$ref = "peserta/".$token;
	$deletedata = $database->getReference($ref)->remove();

	if ($deletedata) {
		$_SESSION['status'] = "Hapus data sukses";
		header("Location: peserta.php");
	}else{
		$_SESSION['status'] = "Hapus data gagal";
		header("Location: peserta.php");
	}
}

?>
