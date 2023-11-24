<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    body {
        background-color: #d5f0ff;
        margin: 70px;
    }

    h2 {
        font-family: 'Gidugu';
    }

    .form-control {
        border-radius: 20px;
        height: 40px;
        font-family: 'Gidugu';
        font-size: 17px;
    }

    .btn {
        border-radius: 20px;
        height: 40px;
        background-color: #6b6b6b;
        font-family: 'Gidugu';
    }

    .form-container {
        min-width: 285px;
    }
</style>
<body class="body">
    <div class="table-responsive">
        <form method="post" action="submit_login.php" class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
            <h2 class="text-center"><b>Registrasi</b></h2><br><Br>
                <table border="0" class="w-100">
                        <tr>
                            <td>
                                <label for="formGroupExampleInput" class="form-label">Username :</label>
                                <input name="username" type="text" class="form-control form-control-sm" id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="formGroupExampleInput" class="form-label">Password :</label>
                                <input name="pass1" type="password" class="form-control" id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="formGroupExampleInput" class="form-label">Ulangi password :</label>
                                <input name="pass2" type="password" class="form-control " id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="formGroupExampleInput" class="form-label">Nama Lengkap :</label>
                                <input name="nama_lengkap" type="text" class="form-control " id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="formGroupExampleInput" class="form-label">Email/No.Telpon :</label>
                                <input name="email_no_telp" type="text" class="form-control " id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                &nbsp&nbsp<input type="submit" name="Submit" value="Daftar" class="form-control btn btn-dark">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>

        <?php
            // echo "<br><p align='center'>Sudah memiliki akun? <a href='login.php'>Login disini</a></p>"
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
