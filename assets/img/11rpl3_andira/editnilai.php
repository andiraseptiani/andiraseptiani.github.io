<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Nilai</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-4">
				<h3>Edit Data Siswa</h3>
				<?php
				include 'koneksi.php';
				$panggil = $koneksi->query("SELECT * FROM nilaisiswa where idSiswa='$_GET[edit]'");
				?>
				<?php
				while ($row = $panggil->fetch_assoc()) {
				?>
				<form action="koneksi.php" method="POST">
					<div class="form-group">
						<label for="idSiswa">ID Siswa</label>
						<input type="text" class="form-control mb-3" name="idSiswa" value="<?= $row['idSiswa'] 
						?>"readonly>
					</div>
					<div class="form-group">
						<label for="UTS">UTS</label>
						<input type="text" class="form-control mb-3" name="UTS" value="<?= $row['UTS'] ?>">
					</div>
					<div class="form-group">
						<label for="PAS">PAS</label>
						<input type="text" class="form-control mb-3" name="PAS" value="<?= $row['PAS'] ?>">
					</div>
					<div class="form-group">
						<label for="predikat">Predikat</label>
						<input type="text" class="form-control mb-3" name="predikat" value="<?= $row['predikat'] ?>">
					</div>
						<div class="form-group mt-3">
							<input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
						</div>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>