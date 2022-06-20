<?php 
include ("koneksi.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
<title>Nilai Hasil Perhitungan Calon Peserta Lomba Paskib</title>
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

	<div class="jumbotron">
		<center>
			<img src="image/logo2.png" img-circle>
        	<h1>SMA NEGERI 98 Jakarta Timur</h1>	
			<h1 class="display-4">Nilai Hasil Perhitungan</h1>
		</center>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<center>
							<h1>Tabel Hasil Perhitungan</h1>
					</center><br> 
					<?php 
						//array boot
						$bobot = array(0.40, 0.20, 0.20, 0.15, 0.05);

						$crmax = $koneksi->query("SELECT max(postur_tubuh) as maxK1, 
												max(kelas) as maxK2,
												max(kedisiplinan) as maxK3,
												max(mental) as maxK4,
												max(mimik_wajah) as maxK5
												FROM peserta");
						$max = $crmax->fetch_array();

						//hitung nirmalisasi
						$sql = $koneksi->query("SELECT * FROM peserta "); 
							echo ",
							<table class='table'>
							<tread>
							<tr align='center'>
							<td><b>No</td>
							<td><b>Nama</td>
							<td><b>Nilai</td>
							<td><b>Status</td>
							</tr>
							</tread>
							";
						$no=1;
						while ($dt2 = $sql->fetch_array()) {

							
							$rangking = round((($dt2['postur_tubuh']/$max['maxK1'])*$bobot[0])+
							(($dt2['kelas']/$max['maxK2'])*$bobot[1])+
							(($dt2['kedisiplinan']/$max['maxK3'])*$bobot[2])+
							(($dt2['mental']/$max['maxK4'])*$bobot[3])+
							(($dt2['mimik_wajah']/$max['maxK5'])*$bobot[4]),3);

												
							$data[] = array('nama'=>$dt2['nama'],'poin'=>$rangking);


						}


						foreach ($data as $key => $isi) {

							$nama[$key]=$isi['nama'];
							$poin[$key]=$isi['poin'];
						}

						array_multisort($poin,SORT_DESC,$data);
						
						$status = "Prioritas";
						$tingkat = 1;

						foreach ($data as $item) { ?>

							

							<tr>
   								<td align="center"><?php echo $no ?></td>
  								<td align="center"><?php echo $item['nama'] ?></td>
   								<td align="center"><?php echo $item['poin'] ?></td>
   								<td align="center"><?php echo "$status $tingkat"?></td>
   							</tr>
						
   						<?php

   							$no++;
   							$tingkat++;
   							
  						 }

						echo "</table><br>";
						?>
 					<a href="home.php" class="btn btn-secondary">Kembali ke Home</a>
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

