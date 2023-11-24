<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

header('Location: index.php');

// Redirect ke halaman login
exit();
?>
