<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD Simple</title>
</head>

<body>
    <style>
        .menu {
            padding: 10px 0;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 teks">

                    <div class="col-md-12 menu">
                        <h3>CRUD</h3>
                        <a href="tambah.php" class="btn btn-primary">Tambah Siswa</a>
                    </div>
                    <table class="table text-center">
                        <tr class="bg-secondary text-white">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        $query = mysqli_query($konek, "SELECT * FROM siswa");
                        $data = mysqli_fetch_array($query);
                        foreach ($query as $dta) {
                            echo "
                                <tr>
                                    <td>".$i++."</td>
                                    <td>".$dta['nama']."</td>
                                    <td>".$dta['email']."</td>
                                    <td>".$dta['no_telp']."</td>
                                    <td>".$dta['alamat']."</td>
                                    <td>".$dta['kelas']."</td>
                                    <td><a href='edit.php?id=".$dta['id_siswa']."' class='btn btn-primary'>Edit</a>
                                    <a href='hapus.php?id=".$dta['id_siswa']."' class='btn btn-danger' onClick=\"'return confirm(' Apakah anda yakin untuk menghapus data ?')\">Hapus</a></td>
                                </tr>

                            ";
                        }
                        ?>
                    </table>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
