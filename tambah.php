<?php
include 'koneksi.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tambah Data</title>
</head>

<body>
	<div class="container">
		<div class="col-md-2" style="margin: 50px;">
		</div>
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<form action="tambah.php" method="post" name="form1" class="form-label">
					<table class="table col-md-12">
						<tr>
							<td>
								<a href="index.php" class="btn btn-primary row">Home</a>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" class="form-control"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" class="form-control"></td>
						</tr>
						<tr>
							<td>No Telepon</td>
							<td><input type="number" name="no_telp" class="form-control"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" class="form-control"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="number" name="kelas" class="form-control"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Add" class="btn btn-primary form-control"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php
	if (isset($_POST['submit'])) {

		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$kelas = $_POST['kelas'];
		$query = mysqli_query($konek, "INSERT INTO siswa (nama, email, no_telp, alamat, kelas) VALUES ('$nama','$email','$no_telp','$alamat','$kelas')");
		echo "<script>alert('data berhasil ditambahkan'); window.location='index.php';</script>";
	}

	?>
</body>

</html>