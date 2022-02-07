<?php
include 'koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($konek, "DELETE FROM siswa WHERE id_siswa = $id");
echo "<script>alert('data berhasil dihapus')</script>";
header("Location: index.php");
?>
