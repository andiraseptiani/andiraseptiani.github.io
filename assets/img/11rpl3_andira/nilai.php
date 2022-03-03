<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyApp | Halaman Utama</title>
	<!--CSS-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style type="text/css">
		/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

	</style>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">MyApp</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedConnect" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row mt-3">
			<div class="col-sm">
				<h3>Tabel Nilai</h3>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="tambahnilai.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Nilai</a>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<table class="table table-striped table-hover table-sm">
				<tr>
					<th>No</th>
					<th>ID Siswa</th>
					<th>UTS</th>
					<th>PAS</th>
					<th>Predikat</th>
					<th>Action</th>
				</tr>
				<?php
				include 'koneksi.php';
				$no = 1;
				$hasil = $koneksi->query("SELECT * FROM nilaisiswa");
				?>
				<?php
				while ($row = $hasil->fetch_assoc()) {
					?>

					<tr>
						<td><?= $no++; ?></td>
						<td><?= $row['idSiswa']; ?></td>
						<td><?= $row['UTS']; ?></td>
						<td><?= $row['PAS']; ?></td>
						<td><?= $row['predikat']; ?></td>
						<td><a href="editnilai.php?edit=<?= $row['idSiswa']; ?>" class="btn btn-warning btn-sm">Edit</a>
						<button class="btn btn-danger btn-sm" onclick="document.getElementById('id01').style.display='block'">Hapus</button> </td>
					</tr>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <div class="modal-content">
    <div class="container">
      <h1>Yakin ingin menghapus data</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn btn-secondary btn-sm">Cancel</button>
 		<a href="koneksi.php?idSiswa=<?= $row['idSiswa']; ?>" class="btn btn-danger btn-sm">Hapus</a> 
      </div>
    </div>
  </div>
</div>

				<?php } ?>
			</table>
		</div>
	</div>
	
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
</head>
