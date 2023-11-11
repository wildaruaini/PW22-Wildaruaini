<?php
include 'proses.php';

$nim = $_POST['nim'];
$nm_mhs = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$agama = $_POST['agama'];
$jeniskelamin = $_POST['jeniskelamin'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nim','$nm_mh','$alamat','$telp','$agama','$jeniskelamin')");


header("location:index.php");