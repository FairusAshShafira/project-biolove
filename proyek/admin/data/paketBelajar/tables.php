<?php
include '../../koneksi.php';

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabel</title>

    <!-- Custom fonts for this template -->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

    .container-fluid .btn {
        left: 1000px;
    }

    .table .btn{
        border-radius: 10px;
    }

    .custom-textarea-wrapper {
        width: 300px;
        height: 100px;
        overflow: hidden;
        position: relative;
    }

    .custom-textarea {
        resize: none;
        overflow: auto;
        border: none;
        height: 100%;
        width: 100%;
        white-space: pre-wrap;
        position: absolute;
        top: 0;
        left: 0;
        scrollbar-width: thin; /* For Firefox */
        scrollbar-color: transparent transparent; /* For Firefox */
        -ms-overflow-style: none; /* For IE and Edge */
    }

    .custom-textarea::-webkit-scrollbar {
        width: 0.5em; /* Adjust as needed */
    }

    .custom-textarea::-webkit-scrollbar-thumb {
        background-color: transparent;
    }

    .custom-textarea::-webkit-scrollbar-track {
        background-color: transparent;
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
                    <img class="logo" src="../../img/logo.png">
                </div>
                <div class="sidebar-brand-text">
                    <img  class="biolove" src ="../../img/biolove.png">
                </div>
                <!-- <sup>2</sup> ini buat pangkat kecil -->
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->


            <br>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../user/tables_user.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../kategori/tables_kategori.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../skor/tables_skor.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Skor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../kelas/tables_kelas.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Kelas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../paketBelajar/tables.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Materi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../soal/tables_soal.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Soal</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../rekomendasi/tables_rekomendasi.php">
                    <!-- <i class="fas fa-fw fa-table"></i> -->
                    <span>Tabel Rekomendasi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../rangkuman/tables_rangkuman.php">
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

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin <?php echo $_SESSION['username']; ?></span>
                                <!-- <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> -->
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Paket belajar</h1>
                    <p class="mb-4">Data Materi</p>

                    <!-- -->
                    <a href='insert_paketBelajar.php' class='btn btn-success float-end'>tambah data</a><br><br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Table paket belajar</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Judul</th>
                                            <th>Materi</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    
                                    // include "../../koneksi.php";

                                    // $query= "SELECT * FROM tbl_paketBelajar";
                                    // $hasil= mysqli_query($koneksi, $query);
                                    // $no= 1;
                                    // while ($data=mysqli_fetch_array($hasil)) {

                                        include "../../koneksi.php";
                                    
                                        $query = "SELECT pb.id_paketBelajar, pb.semester, pb.nama, pb.materi, k.kategori AS kategori, kl.kelas AS kelas
                                                  FROM tbl_paketbelajar pb
                                                  JOIN tbl_kategori k ON pb.id_kategori = k.id_kategori
                                                  JOIN tbl_kelas kl ON pb.id_kelas = kl.id_kelas";
                                    
                                        $hasil = mysqli_query($koneksi, $query);
                                        $no = 1;
                                    
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        
                                    ?>

                                        <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $data ['kategori'];?></td>
                                        <td><?php echo $data ['kelas'];?></td>
                                        <td><?php echo $data ['semester'];?></td>
                                        <td><?php echo $data ['nama'];?></td>
                                        <td>
    <div class="custom-textarea-wrapper">
        <textarea class="custom-textarea" disabled><?php echo $data['materi'];?></textarea>
    </div>
</td>                
                                        <td><a href= "formUpdate_paketBelajar.php?id_paketBelajar=<?php echo $data['id_paketBelajar']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href= "delete_paketBelajar.php?id_paketBelajar=<?php echo $data['id_paketBelajar'];?>" class="btn btn-sm btn-danger" onclick= "return confirm ('Apakah Anda Yakin? Jika anda menghapus materi, maka data rangkuman dengan judul yang sama akan otomatis terhapus!')"> Delete</a></td>
                                        </tr> 
                                        
                                    <?php

                                    }
                                    
                                    ?> 
                        
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BIOLOVE 2023</span>
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
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>

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