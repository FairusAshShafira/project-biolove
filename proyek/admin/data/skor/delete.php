<?php
include "../../koneksi.php";

// Periksa apakah parameter id_rekomendasi ada dan merupakan bilangan bulat
if (isset($_GET['id_skor']) && is_numeric($_GET['id_skor'])) {
    $id_skor = $_GET['id_skor'];

    // Periksa apakah data dengan id_rekomendasi yang diberikan ada
    $query = "SELECT * FROM tbl_skor WHERE id_skor = $id_skor";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan, maka lakukan penghapusan
        $delete_query = "DELETE FROM tbl_skor WHERE id_skor = $id_skor";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil
            header("Location: tables_skor.php");
        } else {
            // Penghapusan gagal
            echo "Penghapusan data gagal: " . mysqli_error($koneksi);
        }
    } else {
        // Data tidak ditemukan
        echo "Data dengan ID $id_skor tidak ditemukan.";
    }
} else {
    // ID tidak valid atau tidak ada
    echo "ID Rekomendasi tidak valid.";
}

mysqli_close($koneksi);
?>
