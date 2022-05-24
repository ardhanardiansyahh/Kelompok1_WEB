<?php 
include '../koneksi.php';
session_start();
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	$tambah = mysqli_query($koneksi, "insert into admin values (NULL,'$nama','$username','$password','')");
	if ($tambah) {
		$_SESSION['info'] = 'sukses';
		header("location:admin.php?alert=sukses");
	}else{
		// 
	}
	
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:admin.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		$tambah = mysqli_query($koneksi, "insert into admin values (NULL,'$nama','$username','$password','$file_gambar')");
		if ($tambah) {
			$_SESSION['info'] = 'sukses';
			header("location:admin.php?alert=sukses");
		}else{
			// 
		}
	}
}

