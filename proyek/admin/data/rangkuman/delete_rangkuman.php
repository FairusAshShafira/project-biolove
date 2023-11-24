<?php
include "../../koneksi.php";

// Periksa apakah parameter id_rekomendasi ada dan merupakan bilangan bulat
if (isset($_GET['id_paketBelajar']) && is_numeric($_GET['id_paketBelajar'])) {
    $id_paketBelajar = $_GET['id_paketBelajar'];

    // Periksa apakah data dengan id_rekomendasi yang diberikan ada
    $query = "SELECT rangkuman FROM tbl_paketbelajar WHERE id_paketBelajar = '$id_paketBelajar'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan, maka lakukan penghapusan
        $delete_query = "DELETE FROM tbl_paketbelajar WHERE id_paketbelajar = $id_paketBelajar";
        if (mysqli_query($koneksi, $delete_query)) {
            // Penghapusan berhasil
            header("Location: tables_rangkuman.php");
        } else {
            // Penghapusan gagal
            echo "Penghapusan data gagal: " . mysqli_error($koneksi);
        }
    } else {
        // Data tidak ditemukan
        echo "Data dengan ID $id_paketBelajar tidak ditemukan.";
    }
} else {
    // ID tidak valid atau tidak ada
    echo "ID Rekomendasi tidak valid.";
}

mysqli_close($koneksi);
?>
