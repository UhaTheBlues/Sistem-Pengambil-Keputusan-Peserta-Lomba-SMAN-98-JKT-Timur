<?php 
	
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
if (!empty($username) && !empty($password)) {
	$sql = $koneksi->query( "SELECT * FROM user WHERE username = '$username' AND password ='$password'");
	$result = mysqli_num_rows($sql);
	if ($result) {
		echo "<script>alert('Anda Berhasil Login');
				location='home.php';</script>";
	}else{
		echo "<script>alert('Username dan Password anda Salah');
			location='login.php';</script>";
	}
}

 ?>