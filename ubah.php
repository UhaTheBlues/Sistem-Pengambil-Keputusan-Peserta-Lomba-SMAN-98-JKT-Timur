<?php include 'koneksi.php';

$id = $_GET["id"];
$ambil=$koneksi->query("SELECT * FROM peserta WHERE id='$id'");
$pecah=$ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a href="" class="navbar-brand">logo</a>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<center><h1>Ubah Data Siswa</h1></center>

	<form method="POST">
		<div class="form-group">
			<label>NIS :</label>
			<input type="text" name="nis" class="form-control" value="<?php echo $pecah['nis'];?>">
		</div>

		<div class="form-group">
			<label>Nama :</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama'];?>">
		</div>

		<div class="form-group">
			<label>Postur Tubuh :</label>
			<input type="text" name="postur_tubuh" class="form-control" value="<?php echo $pecah['postur_tubuh'];?>">
		</div>

		<div class="form-group">
			<label>kelas :</label>
			<select name="kelas" value="<?php echo $pecah['kelas']; ?>">
					<option value="1">kelas 10</option>
					<option value="2">kelas 11</option>
			</select>
		</div>

		<div class="form-group">
			<label>Kedisiplinan :</label>
			<input type="text" name="kedisiplinan" class="form-control" value="<?php echo $pecah['kedisiplinan'];?>">
		</div>

		<div class="form-group">
			<label>Mental :</label>
			<select name="mental" value="<?php echo $pecah['mental']; ?>">
					<option value="1">Tidak Siap</option>
					<option value="2">kurang Siap</option>
					<option value="3">Cukup Siap</option>
					<option value="4">Siap</option>
					<option value="5">Sangat Siap</option>
			</select>
		</div>
		<div class="form-group">
			<label>Mimik Wajah :</label>
			<select name="mimik_wajah" value="<?php echo $pecah['mimik_wajah']; ?>">
					<option value="1">Kurang Menarik</option>
					<option value="2">Menarik</option>
					<option value="3">Cukup Menarik</option>
					<option value="4">Sangat Menarik</option>
					<option value="5">Istimewa</option>
			</select>
		</div>

		<div>
			<button type="submit" class="btn btn-primary" name="submit">Ubah data</button>
			<input type="button" value="Kembali"  class="btn btn-secondary" onclick="history.back(-1)" />
		</div>
	</form>
					</div>
				</div>
			</div>
		</div>

<?php


	if (isset($_POST["submit"]))
	{
		$koneksi->query("UPDATE peserta SET nis='$_POST[nis]', nama='$_POST[nama]', postur_tubuh='$_POST[postur_tubuh]', kelas='$_POST[kelas]', kedisiplinan='$_POST[kedisiplinan]', mental='$_POST[mental]', mimik_wajah='$_POST[mimik_wajah]' WHERE id='$id'");

		echo "<script>alert('Data Diperbarui');</script>";
		echo "<script>location='home.php';</script>";
	}
?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</body>
</html>