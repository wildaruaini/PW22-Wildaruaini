<?php
include 'proses.php'; // Sertakan berkas koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $agama = $_POST['agama'];
    $jeniskelamin = $_POST['jeniskelamin'];

    // Lakukan query UPDATE untuk mengubah data dalam tabel 'mahasiswa'
    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', telp = '$telp', agama = '$agama', jenis kelamin = '$jeniskelamin', WHERE nim = '$id'";
    $result = mysqli_query($penghubung, $query);

    if ($result) {
        // Jika pengeditan berhasil, alihkan kembali ke halaman awal atau halaman lain yang diinginkan
        header('Location: index.php'); // Ganti index.php dengan halaman yang sesuai
        exit;
    } else {
        // Jika terjadi kesalahan saat mengedit
        echo "Error: " . mysqli_error($penghubung);
    }
} else {
    echo "Akses tidak sah.";
}
?>
