<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {

    $username = $_SESSION['username'];

    require_once('koneksi.php');

    $data_user = mysqli_query($koneksi, "select * from tbl_user");
    $data_kelas = mysqli_query($koneksi, "select * from tbl_kelas");
    $data_paket_belajar = mysqli_query($koneksi, "select * from tbl_paketbelajar");
    $data_soal = mysqli_query($koneksi, "select * from tbl_soal");
    $data_rekomendasi = mysqli_query($koneksi, "select * from tbl_rekomendasi");
    $data_rangkuman = mysqli_query($koneksi, "select * from tbl_rangkuman");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/jquery.flot.categories.min.js"></script>
    <script src="plugins/float/jquery.flot.js"></script>
    <script src="plugins/float/jquery.flot.pie.js"></script>



    <title>Halaman admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .navbar-nav{
        color: #4E73DF;
    }
    .sidebar-brand{
        width: 70px;
        height: 84px;
    }
    .logo{
        margin: 0px;
        position: absolute;
        width: 50px;
        height: 54px;
        top: 23px;
        left: 20px;
    }
    .biolove{
        margin: 2px;
        position: absolute;
        width: 150px;
        height: 50px;
        top: 25px;
        left: 55px;
        object-fit: cover;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img class="logo" src="img/logo.png">
                </div>
                <div class="sidebar-brand-text">
                    <img  class="biolove" src ="img/biolove.png">
                </div>
                <!-- <sup>2</sup> ini buat pangkat kecil -->
            </a>

            <!-- Divider -->

            <br>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="data/user/tables_user.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/kategori/tables_kategori.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/skor/tables_skor.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Skor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/kelas/tables_kelas.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Kelas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/paketBelajar/tables.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Materi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/soal/tables_soal.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Soal</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/rekomendasi/tables_rekomendasi.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Rekomendasi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data/rangkuman/tables_rangkuman.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Rangkuman</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin <?php echo $_SESSION['username']; ?> </span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_user FROM tbl_user";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalUser = $row['total_user'];
                        } else {
                            $totalUser = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                User</div>
                                            <div class="text white"><h4><?php echo $totalUser; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_kategori FROM tbl_kategori";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalKat = $row['total_kategori'];
                        } else {
                            $totalKat = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kategori</div>
                                            <div class="text white"><h4><?php echo $totalKat; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        // include('koneksi.php');

                        // // Query untuk mengambil data pengguna
                        // $query = "SELECT COUNT(*) as total_mapel FROM tbl_mapel";
                        // $result = mysqli_query($koneksi, $query);

                        // // Mengambil hasil query
                        // if ($result) {
                        //     $row = mysqli_fetch_assoc($result);
                        //     $totalMap = $row['total_mapel'];
                        // } else {
                        //     $totalMap = 0; // Default jika tidak ada data
                        // }
                        ?>

                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Mata Pelajaran</div>
                                            <div class="text white"><h4><?php echo $totalMap; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_kelas FROM tbl_kelas";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalKelas = $row['total_kelas'];
                        } else {
                            $totalKelas = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Kelas</div>
                                            <div class="text white"><h4><?php echo $totalUser; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_paketbelajar FROM tbl_paketbelajar";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalPaket = $row['total_paketbelajar'];
                        } else {
                            $totalPaket = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Paket Belajar</div>
                                            <div class="text white"><h4><?php echo $totalPaket; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->

                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_soal FROM tbl_soal";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalSoal = $row['total_soal'];
                        } else {
                            $totalSoal = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Soal</div>
                                            <div class="text white"><h4><?php echo $totalSoal; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_rekomendasi FROM tbl_rekomendasi";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalRekom = $row['total_rekomendasi'];
                        } else {
                            $totalRekom = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rekomendasi</div>
                                            <div class="text white"><h4><?php echo $totalRekom; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        include('koneksi.php');

                        // Query untuk mengambil data pengguna
                        $query = "SELECT COUNT(*) as total_rangkuman FROM tbl_rangkuman";
                        $result = mysqli_query($koneksi, $query);

                        // Mengambil hasil query
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $totalrang = $row['total_rangkuman'];
                        } else {
                            $totalrang = 0; // Default jika tidak ada data
                        }
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rangkuman</div>
                                            <div class="text white"><h4><?php echo $totalrang; ?></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Diagram -->
    <div class="row">
        <div class="col-md-6">
            <!-- Bar chart -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Grafik Batang</h3>
                </div>
                <div class="box-body">
                    <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-bar-chart-o"></i>
                    <h3 class="box-title">Grafik Donut</h3>
                </div>
                <div class="box-body">
                    <div id="donut-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
            </div><!-- /.box -->
        </div>
    </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BIOLOVE 2023 </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Log Out jika anda benar benar ingin keluar dari website</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        // Your existing code for fetching data and creating the charts

        // BAR CHART
        var bar_data = {
            data: [
                ["Data User", <?php echo mysqli_num_rows($data_user); ?>], 
                ["Data Kelas", <?php echo mysqli_num_rows($data_kelas); ?>], 
                ["Data Paket Belajar", <?php echo mysqli_num_rows($data_paket_belajar); ?>], 
                ["Data Soal", <?php echo mysqli_num_rows($data_soal); ?>], 
                ["Data Rekomendasi", <?php echo mysqli_num_rows($data_rekomendasi); ?>],
                ["Data Rangkuman", <?php echo mysqli_num_rows($data_rangkuman); ?>]
            ],
            color: "#4E73DF"
        };
        $.plot("#bar-chart", [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: "#f3f3f3",
                tickColor: "#F39C12"
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });

        // DONUT CHART
        var donutData = [
    { label: "Data User", data: <?php echo mysqli_num_rows($data_user); ?>, color: "#488AC7" },
    { label: "Data Kelas", data: <?php echo mysqli_num_rows($data_kelas); ?>, color: "#4863A0" },
    { label: "Data Paket Belajar", data: <?php echo mysqli_num_rows($data_paket_belajar); ?>, color: "#728FCE" },
    { label: "Data Soal", data: <?php echo mysqli_num_rows($data_soal); ?>, color: "#488AC7" },
    { label: "Data Rekomendasi", data: <?php echo mysqli_num_rows($data_rekomendasi); ?>, color: "#4863A0" },
    { label: "Data Rangkuman", data: <?php echo mysqli_num_rows($data_rangkuman); ?>, color: "#728FCE" }
];


        $.plot("#donut-chart", donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }
                }
            },
            legend: {
                show: false
            }
        });

        // Rest of your code
        function labelFormatter(label, series) {
            return "<div style='font-size:11px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
                + label
                + "<br/>"
                + Math.round(series.percent) + "%</div>";
        }
    });
    </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
} else {
    echo "<h2
    style ='
    text-align: center;
    color: #333;
    font-family: 'Arial', 
    '>anda belum login</h2>";
}
?>
