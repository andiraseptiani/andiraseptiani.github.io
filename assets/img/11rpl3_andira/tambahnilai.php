<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-
	scale=1.0">

	<title>Tambah Data Nilai</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-4">
				<h3>Tambah Data Nilai</h3>
				<form action="koneksi.php" method="POST">
					<div class="form-group">
						<label for="idSiswa">ID Siswa</label>
						<input type="text" class="form-control mb-3" name="idSiswa" placeholder="ID Siswa">
					</div>
					<div class="form-group">
						<label for="UTS">UTS</label>
						<input type="text" class="form-control mb-3" name="UTS" placeholder="UTS">
					</div>
					<div class="form-group">
						<label for="PAS">PAS</label>
						<input type="text" class="form-control mb-3" name="PAS" placeholder="PAS">
					</div>
					<div class="form-group">
						<label for="predikat">Predikat</label>
						<input type="text" class="form-control mb-3" name="predikat" placeholder="predikat">
					</div>
							<div class="form-group mt-3">
								<input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>