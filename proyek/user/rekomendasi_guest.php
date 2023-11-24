<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>rekomendasi</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: #ffffff;
        background-position: center;
        background-size: cover;
        width:100%;
        height:415px;
    }      
    
    .nav{
        position: relative;
        margin: 20px;
        text-decoration: none;
        color: black;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        left: 100px;
        top: 5px;
    }

    li {
        float: left;
        width: 119px;
        top: 15px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        font-size: 25px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
        display: flex;
    }

    .login{
        position: relative;
        color: white;
        border-radius: 30px;
        border: 1px solid;
        width: 200px;
        height: 55px;
        background-color: orange;
        font-size: 25px;
        left: 100px;
        top: 25px;
        text-decoration: none;
    }

    .login:hover{
        background-color: white;
        color: orange;
        text-decoration: none;
        border-radius: 35px;
        width: 250px;
    }

    li .nav:hover {
        background-color: #000000;
        color: white;
        border-radius: 40px;
        width: 250px;
        transition-timing-function: ease-in-out;
        transition-duration: 0.10s;
    }

    .biolove{
        margin: 12px;
        position: absolute;
        width: 200px;
        height: 89px;
        top: 0;
        left: 65px;
        object-fit: cover;
    }

    .cover {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 200px;
        top: 109px;
        left: 0;
        overflow: hidden;
        background: rgb(78, 134, 166);
        background-position: center;
    }

    .judul{
        position: absolute;
        color: white;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        font-size: 48px;
        margin: 40px;
        left: 30px;
    }

    .logo2{
        position: relative;
        width: 379px;
        height: 167px;
        top: 178px;
        left: 550px;
        object-fit: cover;
    }

    .aboutus1{
        position: absolute;
        width: 508px;
        height: 318px;
        top: 655px;
        left: 185px;
        object-fit: cover;
        border-radius: 35px;
    }

    .keterangan-1{
        position: absolute;
        width: 503px;
        height: 352px;
        top: 777px;
        left: 840px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 25px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    .aboutus2{
        position: absolute;
        width: 508px;
        height: 318px;
        top: 1132px;
        left: 830px;
        object-fit: cover;
        border-radius: 30px;
    }

    .keterangan-2{
        position: absolute;
        width: 459px;
        height: 352px;
        top: 1232px;
        left: 200px;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #000000;
        font-size: 25px;
        text-align: center;
        letter-spacing: 0;
        line-height: normal;
    }

    
    .footer{
        position: absolute;
        width: 100%;
        height: 178px;
        /* top: 1610px; */
        left: -7px;
        background-color: #2b5b75;
        background-size: cover;
    }

    .background{
        position: absolute;
        width: 318px;
        height: 117px;
        top: 24px;
        left: 1037px;
    }

    .kontak {
        position: absolute;
        width: 318px;
        height: 117px;
        top: 0;
        left: 0;
    }

    .hubungi-kami {
        position: absolute;
        width: 163px;
        height: 35px;
        top: 0;
        left: 0;
        font-family: "Karma", Helvetica;
        font-weight: 400;
        color: #ffffff;
        font-size: 24px;
        letter-spacing: 0;
        line-height: normal;
    }

    .instagram {
        position: absolute;
        width: 164px;
        top: 80px;
        left: 43px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .email {
        position: absolute;
        width: 269px;
        top: 39px;
        left: 43px;
        font-family: "Judson", Helvetica;
        font-weight: 700;
        color: #ffffff;
        font-size: 32px;
        letter-spacing: 0;
        line-height: normal;
        white-space: nowrap;
    }

    .instagram-image{
        position: absolute;
        width: 31px;
        height: 31px;
        top: 83px;
        left: 0;
        object-fit: cover;
    }

    .email-image {
        width: 32px;
        height: 32px;
        top: 41px;
        position: absolute;
        left: 0;
        object-fit: cover;
    }

    .biolove-image{
        position: absolute;
        width: 213px;
        height: 86px;
        top: 52px;
        left: 48px;
        object-fit: cover;
    }

    .kategori{
        position: relative;
        border-radius: 40px;
        margin-bottom: 50px;
        margin-right: 50px;
    }

    .sticky {
        position: sticky;
        top: 0;
        background-color: white;
    }

    .semester-container {
    display: flex;
}

.semester-container div {
    flex: 1;
}

.semester-container .border {
    margin-right: 50px;
    border-radius: 50px;
}

.semester-1,
.semester-2 {
    margin-bottom: 20px;
    display: inline-block;
}

.semester-1 {
    padding: 10px;
}

.semester-2 {
    padding: 10px;
}
    
</style>
<body>
    
    <ul class="">
        <li>
        <a href="index.php"><img class="biolove" src="img/logo_hitam.png"></a>
        </li>
        <li>&ensp;</li>
        <li>&ensp;</li>
        <li><a class="nav" href="about_us.php" style="text-decoration: none;">About Us</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="rangkuman_guest.php" style="text-decoration: none;">Rangkuman</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="rekomendasi_guest.php" style="text-decoration: none;">Rekomendasi</a></li>
        <li>&ensp;</li>
        <li><a class="nav" href="kelas.php" style="text-decoration: none;">Kelas</a></li>
        <li>&ensp;</li>
        <li><a class="btn btn-warning login" href="login.php" style="text-decoration: none;"><b>Log In</b></a></li>
    </ul>

<!-- Modal for YouTube video -->
<div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="youtubeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="youtubeModalLabel">YouTube Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="youtubeIframe" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="cover">
        <br><p class="judul">Rekomendasi</p>

        <form action="" method="GET" class="d-none d-sm-inline-block form-inline my-2 my-md-0 mw-100 navbar-search mr-3" style="margin-left: 1100px; padding-top: 50px;">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" style="border-radius: 30px; width: 270px; height: 50px; font-size: 20px;" placeholder="&nbsp;Search..." aria-label="Search" aria-describedby="basic-addon2" name="search">
        <div class="input-group-append">
            <!-- <button type="submit" class="btn btn-primary" style="border-radius: 30px; height: 50px;">
                <i class="fas fa-search"></i> 
            </button> -->
        </div>
</div>
    </div>
            
    <span class="ms-5 mt-5 mb-5 kategori semester-container">
        <div class="border border-dark p-3 mb-3">
            <?php
                include "koneksi.php"; // Sesuaikan dengan nama file koneksi Anda
        
                $queryKelas = "SELECT rekomendasi FROM tbl_rekomendasi ";
                $resultKelas = mysqli_query($koneksi, $queryKelas);
        
                if ($rowKelas = mysqli_fetch_assoc($resultKelas)) {
                    $rekomendasi = $rowKelas['rekomendasi'];
        
                $query = "SELECT k.kategori AS kategori, tr.semester AS semester
                          FROM tbl_rekomendasi tr
                          JOIN tbl_kategori k ON tr.id_kategori = k.id_kategori
                          WHERE tr.semester = 'Semester 1'"; // Hanya memilih data Semester 1
                $result = mysqli_query($koneksi, $query);
                
        
                $counterSemester1 = 0; // Menambahkan variabel counter untuk Semester 1
        
                if (mysqli_num_rows($result) > 0) {
                    echo '<br><h4>&nbsp&nbsp&nbspSemester 1</h4><br>';
        
                    while ($row = mysqli_fetch_assoc($result)) {
                        $kategori = $row['kategori'];
                        echo '<span class="semester-1" style="margin-bottom: 20px; display: inline-block;">';
                        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button class="btn btn-light border-secondary rounded-pill" style="font-size: 20px; font-family: \'Judson\', Helvetica;"><a  onclick="showLoginModal()" style="text-decoration: none; color: black;">&nbsp' . $kategori . '&nbsp</a></button>&nbsp&nbsp&nbsp';
                        echo '</span>';
                        $counterSemester1++;
                    }
        
                    // Menampilkan pesan jika tidak ada kategori untuk Semester 1
                    if ($counterSemester1 == 0) {
                        echo '<p>Semester 1: Data tidak ditemukan.</p>';
                    }
                } else {
                    echo '<br><h4>&nbsp&nbsp&nbspSemester 1</h4><br>';
                    echo "&nbsp&nbsp&nbsp&nbsp Data tidak ditemukan. <br><br>";
                }
            }
                ?>
            </div>
        
            <div class="border border-dark p-3 mb-3">
                <?php
                // Menambahkan query untuk Semester 2
                $querySemester2 = mysqli_query($koneksi, "SELECT k.kategori AS kategori, tr.semester AS semester
                                   FROM tbl_rekomendasi tr
                                   JOIN tbl_kategori k ON tr.id_kategori = k.id_kategori
                                   WHERE tr.semester = 'Semester 2'") or die (mysqli_error($koneksi)); // Hanya memilih data Semester 2
        
                $counterSemester2 = 0; // Menambahkan variabel counter untuk Semester 2
        
                if (mysqli_num_rows($querySemester2) > 0) {
                    echo '<br><h4>&nbsp&nbsp&nbspSemester 2</h4><br>';
        
                    while ($rowSemester2 = mysqli_fetch_assoc($querySemester2)) {
                        $kategoriSemester2 = $rowSemester2['kategori'];
                        echo '<span class="semester-2" style="margin-bottom: 20px; display: inline-block;">';
                        echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button class="btn btn-light border-secondary rounded-pill" style="font-size: 20px; font-family: \'Judson\', Helvetica;"><a  onclick="showLoginModal()"style="text-decoration: none; color: black;">&nbsp' . $kategoriSemester2 . '&nbsp</a></button>&nbsp&nbsp&nbsp';
                        echo '</span>';
                        $counterSemester2++;
                    }   
        
                    // Menampilkan pesan jika tidak ada kategori untuk Semester 2
                    if ($counterSemester2 == 0) {
                        echo '<p>Semester 2: Data tidak ditemukan.</p>';
                    }
                } else {
                    echo '<br><h4>&nbsp&nbsp&nbspSemester 2</h4><br>';
                    echo "&nbsp&nbsp&nbsp&nbsp Data tidak ditemukan. <br><br>";
                }
                ?>
            </div>
            <!-- Login Modal -->
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Anda Belum Login!!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background-color: white;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda harus login terlebih dahulu untuk mengakses halaman ini!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='login.php'">Login</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function showLoginModal() {
                        $('#loginModal').modal('show');
                    }
                </script>

    </div>
</span>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Belum Login</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Login dibawah ini untuk melanjutkan akses</div>
                <div class="modal-footer">
                <a class="btn btn-primary" href="login.php">Log In</a>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="background">
            <div class="kontak">
                <div class="hubungi-kami">Hubungi kami :</div>
                <div class="instagram">@biolove_id</div>
                <div class="email">biolearnsite@gmail.com</div>
                <a href="https://www.instagram.com/ash_shafira_/"><img class="instagram-image" src="img/instagram.png"/></a>
                <a href="#email"><img class="email-image" src="img/email.png" /></a>
            </div>
        </div>
        <img class="biolove-image" src="img/biolove.png" />
    </footer>

    <!-- Sertakan file jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Sertakan file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Add Bootstrap JS and Popper.js scripts at the end of your body tag -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</body>
</html>