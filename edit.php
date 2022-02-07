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
	<title>Edit Data</title>
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
            <?php

            $id = mysqli_real_escape_string($konek, $_GET['id']);
            $data = mysqli_query($konek, "SELECT * FROM siswa WHERE id_siswa = $id");
            while($dta = mysqli_fetch_array($data)) {
                $nama = $dta['nama'];
                $email = $dta['email'];
                $no_telp = $dta['no_telp'];
                $alamat = $dta['alamat'];
                $kelas = $dta['kelas'];
            }


            ?>
			<div class="col-md-12">
				<form action="edit.php" method="post" name="form1" class="form-label">
					<table class="table col-md-12">
						<tr>
							<td>
								<a href="index.php" class="btn btn-primary row">Home</a>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" class="form-control" value="<?= $nama; ?>"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" class="form-control" value="<?= $email; ?>"></td>
						</tr>
						<tr>
							<td>No Telepon</td>
							<td><input type="number" name="no_telp" class="form-control" value="<?= $no_telp; ?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" class="form-control" value="<?= $alamat; ?>"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="number" name="kelas" class="form-control" value="<?= $kelas; ?>"></td>
						</tr>
						<tr>
                            <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
							<td><input type="submit" name="update" value="Submit" class="btn btn-primary form-control"></td>
						</tr>
					</table>
				</form>
                <?php
                    if(isset($_POST['update'])) {

                        $id = $_POST['id'];
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $no_telp = $_POST['no_telp'];
                        $alamat = $_POST['alamat'];
                        $kelas = $_POST['kelas'];

                        $query = mysqli_query($konek, "UPDATE siswa SET nama = '$nama', email = '$email', no_telp = '$no_telp', alamat = '$alamat', kelas = '$kelas' WHERE id_siswa = $id");
                        header("Location: index.php");
                    }
                ?>
			</div>
		</div>
	</div>

</body>

</html>
