<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

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


	<aside id="colorlib-hero">
		<div class="container">
			<div class="shadow">
				<div class="row">
					<div class="col-md-12">

						<center><h1>Masukan Akun Anda</h1></center><br>
						<center>
						<form action="config_login.php" method="POST">
							
								
							<div class="form-group">
								<label>
									<b class="">Id/Username</b>
								</label>
								<div class="col-sm-4">
									<input type="text" id="username" name="username" class="form-control" placeholder="Masukan Id/User Anda" required>
								</div>
							</div>
							<div class="form-group">
								<label>
									<b class="">Password</b>
								</label>
								<div class="col-sm-4">
									<input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password Anda" required>
								</div>
							</div>
							<input type="submit" class="btn btn-secondary" name="login" value="Login">	
						</form>	
						</center>
					</div>
				</div>
			</div>
		</div>
	</aside>
	

</body>
</html>