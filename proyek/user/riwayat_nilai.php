<?php
session_start();

include "koneksi.php";

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil username pengguna yang login
$username = $_SESSION['username'];

// Query untuk mendapatkan riwayat pembayaran berdasarkan username
$sql = "SELECT * FROM tbl_skor WHERE username = '$username'";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengerjaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f2f2f2;
        }

        h2 {
            margin: 0;
        }

        .user-profile {
            position: relative;
            cursor: pointer;
        }

        .user-dropdown {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            background-color: #fff;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            min-width: 160px;
        }

        .user-dropdown a {
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        .user-dropdown a:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <header>
        <div class="user-profile">
            <span><?php echo $username; ?></span>
            <div class="user-dropdown" id="userDropdown">
                <a href="#">Profil</a>
                <a href="riwayat_nilai.php">Riwayat Pembayaran</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </header>

    <h2>Riwayat Pengerjaan</h2>
    <p>Selamat datang, <?php echo $username; ?>!</p>

    <?php
    // Periksa apakah ada riwayat pembayaran
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Username</th>
                <th>Nilai yang didapatkan</th>
              </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['score'] . "</td><td>" . $row['score'] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Anda belum mengerjakan latihan apapun.</p>";
    }

    // Tutup koneksi database
    $koneksi->close();
    ?>

<script>
        document.addEventListener("click", function (e) {
            var userDropdown = document.getElementById("userDropdown");

            if (e.target.closest(".user-profile")) {
                userDropdown.style.display = (userDropdown.style.display === "block") ? "none" : "block";
            } else if (!e.target.closest(".user-dropdown")) {
                userDropdown.style.display = "none";
            }
        });
    </script>

</body>
</html>
