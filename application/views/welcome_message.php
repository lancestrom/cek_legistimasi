<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


	<title>Selamat Datang Di Website Resmi SMK Tunas Harapan Jakarta Barat</title>
	<link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">
</head>

<body>
	<div class="jumbotron jumbotron-fluid text-white bg-primary">
		<div class="container">
			<h1 class="display-4 text-center">CEK LEGISTIMASI <br> XI DKV</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md">
				<div class="card">
					<div class="card-header bg-success text-white">
						<h5 class="text-center text-uppercase font-weight-bolder">AMBIL KARTU LEGISTIMASI <br> (sudah punya /belum ambil)</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr class="text-center">
										<th scope="col">
											<h6 class="font-weight-bold" style="text-transform: uppercase;">NAMA SISWA</h6>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
										$no = 1;
										foreach ($punya_legistimasi as $row) {
										?>
											<td>
												<h6 class="text-uppercase text-center"><?php echo $row['firstname']; ?></h6>
											</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="card">
					<div class="card-header bg-warning text-white">
						<h5 class="text-center text-uppercase font-wight-bolder">BELUM AMBIL KARTU LEGISTIMASI <br> (pembayaran)</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr class="text-center">
										<th scope="col">
											<h6 class="font-weight-bold" style="text-transform: uppercase;">NAMA SISWA</h6>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
										$no = 1;
										foreach ($belum_punya_legistimasi as $row) {
										?>
											<td>
												<h6 class="text-uppercase text-center"><?php echo $row['firstname']; ?></h6>
											</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>