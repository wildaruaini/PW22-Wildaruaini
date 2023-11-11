<?php
// Melakukan koneksi ke database
include 'proses.php'; // Sesuaikan dengan berkas koneksi database Anda

// Memeriksa apakah parameter ID telah diterima dari tautan 'Hapus'
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query DELETE untuk menghapus data dari tabel 'mahasiswa'
    $query = "DELETE FROM mahasiswa WHERE nim = '$id'";
    $result = mysqli_query($penghubung, $query);

    if ($result) {
        // Jika penghapusan berhasil, alihkan kembali ke halaman awal atau halaman lain yang diinginkan
        header('Location: index.php'); // Ganti index.php dengan halaman yang sesuai
        exit;
    } else {
        // Jika terjadi kesalahan saat menghapus
        echo "Error: " . mysqli_error($penghubung);
    }
} else {
    // Jika parameter ID tidak ditemukan
    echo "ID tidak ditemukan";
}
?>
