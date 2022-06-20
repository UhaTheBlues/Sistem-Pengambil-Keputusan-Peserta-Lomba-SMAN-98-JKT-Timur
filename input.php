<?php include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data Siswa</title>
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
			<a href="" class="navbar-brand">SMA Negeri 98 Jakarta Timur</a>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<center><h1>Input Data Siswa</h1></center><br>

	<form method="POST">
		<div class="form-group">
			<label>NIS :</label>
			<input type="text" name="nis" class="form-control" placeholder="Masukan NIM Siswa" required>
		</div>
		<div class="form-group">
			<label>Nama :</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Siswa" required>
		</div>
		<div class="form-group">
			<label>Postur Tubuh :</label>
			<input type="text" name="postur_tubuh" class="form-control" placeholder="Masukan Angka 1-100" required>
		</div>
		<div class="form-group">
			<label>kelas :</label>
			<select name="kelas">
					<option value="1">kelas 10</option>
					<option value="2">kelas 11</option>
			</select>
		</div>
		<div class="form-group">
			<label>Kedisiplinan :</label>
			<input type="text" name="kedisiplinan" class="form-control" placeholder="Masukan Angka 1-100" required>
		</div>
		<div class="form-group">
			<label>Mental :</label>
			<select name="mental">
					<option value="1">Tidak Siap</option>
					<option value="2">kurang Siap</option>
					<option value="3">Cukup Siap</option>
					<option value="4">Siap</option>
					<option value="5">Sangat Siap</option>
			</select>
		</div>
		<div class="form-group">
			<label>Mimik Wajah :</label>
			<select name="mimik_wajah">
					<option value="1">Kurang Menarik</option>
					<option value="2">Menarik</option>
					<option value="3">Cukup Menarik</option>
					<option value="4">Sangat Menarik</option>
					<option value="5">Istimewa</option>
			</select>
		</div>
		<div>
			<button type="submit" class="btn btn-primary" name="add">Tambahkan Data</button>
			<button type="button" class="btn btn-secondary" onclick="history.back(-1)">Kembali</button>
		</div>
	</form>
				<h3><center>Keterangan</center></h3>
				<div class="table">
				<p>Metode Penilaian:</p>
				<td>Postur Tubuh: isi dengan nilai antara 1-100</td>
				</div>
					</div>
				</div>
			</div>
		</div>
<?php
	if (isset($_POST["add"]))
	{
		$koneksi->query("INSERT INTO peserta (nis, nama, postur_tubuh, kelas, kedisiplinan, mental, mimik_wajah) VALUES ('$_POST[nis]', '$_POST[nama]', '$_POST[postur_tubuh]', '$_POST[kelas]', '$_POST[kedisiplinan]', '$_POST[mental]', '$_POST[mimik_wajah]')");

		echo "<script>alert('Data Ditambahkan');</script>";
		echo "<script>location='home.php';</script>";
	}
?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>