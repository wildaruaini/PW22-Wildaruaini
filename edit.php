<?php
include 'proses.php'; // Sertakan berkas koneksi database Anda

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memeriksa apakah data dengan ID yang diberikan ada dalam database
    $query = "SELECT * FROM mahasiswa WHERE nim = '$id'";
    $result = mysqli_query($penghubung, $query);

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_array($result);

        // Form untuk mengedit data
        echo '<h2>Edit Data Mahasiswa</h2>';
        echo '<form method="post" action="update.php">'; // Buat berkas 'update.php' untuk menyimpan perubahan
        echo '<input type="hidden" name="id" value="' . $data['nim'] . '">';
        echo 'NIM: <input type="text" name="nim" value="' . $data['nim'] . '"><br>';
        echo 'Nama Mahasiswa: <input type="text" name="nama" value="' . $data['nama'] . '"><br>';
        echo 'Alamat: <input type="text" name="alamat" value="' . $data['alamat'] . '"><br>';
        echo 'No Telp: <input type="text" name="telp" value="' . $data['telp'] . '"><br>';
        echo 'Agama: <input type="text" name="agama" value="' . $data['agama'] . '"><br>';
        echo 'JenisKelamin: <input type="text" name="jeniskelamin" value="' . $data['jeniskelamin'] . '"><br>';
        echo '<input type="submit" value="Simpan">';
        echo '</form>';
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
