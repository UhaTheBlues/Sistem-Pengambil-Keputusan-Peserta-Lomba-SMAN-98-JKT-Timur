<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Pendukung Pemilihan Peserta Paskib</title>
	
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

	<div class="jumbotron">
		<center>
			<img src="image/logo2.png" img-circle width="200">
        	<h1>SMA NEGERI 98 Jakarta Timur</h1>	
			<h1 class="display-4">Sistem Pendukung Pemilihan Peserta Paskib</h1>
		</center>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<center>
							<h1>Tabel Data Siswa</h1>
					</center><br>
					<table class="table">
						<thead>
							<tr>
								<th><center>No.</center></th>
								<th><center>NIS</center></th>
								<th><center>Nama</center></th>
								<th><center>Postur Tubuh</center></th>
								<th><center>Kelas</center></th>
								<th><center>Kedisiplinan</center></th>
								<th><center>Mental</center></th>
								<th><center>Mimik Wajah</center></th>
								<th><center>Action</center></th>
							</tr>
						</thead>

						<tbody>
							<?php $no=1; ?>
							<?php $ambil=$koneksi->query("SELECT * FROM peserta"); ?>
							<?php while ($pecah=$ambil->fetch_assoc()) { ?>

							<tr class="table-active">
								<td><center><?php echo $no; ?></center></td>
								<td><center><?php echo $pecah["nis"]; ?></center></td>
								<td><center><?php echo $pecah["nama"]; ?></center></td>
								<td><center><?php echo $pecah["postur_tubuh"]; ?></center></td>
								<td><center><?php echo $pecah["kelas"]; ?></center></td>
								<td><center><?php echo $pecah["kedisiplinan"]; ?></center></td>
								<td><center><?php echo $pecah["mental"]; ?></center></td>
								<td><center><?php echo $pecah["mimik_wajah"]; ?></center></td>
								<td>
									<center>
										<a href="ubah.php?id=<?php echo $pecah["id"] ?>" class="btn btn-secondary">ubah</a>
										<a href="hapus.php?id=<?php echo $pecah["id"] ?>" onclick="javascript: return confirm('yakin?');" class="btn btn-secondary">hapus</a>
									</center>
								</td>		
							</tr>
							<?php $no++; ?>
							<?php } ?>
						</tbody>
					</table><br>
						<a href="input.php" class="btn btn-secondary">Tambah Data Siswa</a>
						<a href="hapusall.php" class="btn btn-secondary" onclick="javascript: return confirm('yakin?');">Hapus Semua Data Siswa</a>
						<a href="normalisasi.php" class="btn btn-secondary">Normalisasi</a>				
				</div>
			</div>
		</div>
	</div>

	<footer>
       <div class="container bg-dark text-center col-md-12">
         <div class="card-footer">
           <p class="text-white"> &copy Copyright 2019 | by <a href="http://facebook.com/Zorant"> Kelompok: Amjad, Hana, dan Iwan</a></p>
         </div>
       </div>
    </footer>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>