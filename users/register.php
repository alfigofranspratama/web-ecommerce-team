<?php
include '../asset/sistem/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .main {
            height: 90vh;
        }

        .box-login {
            width: 400px;
        }

        .center {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="main justify-content-center align-items-center d-flex flex-column">
        <div class="row">
            <div class="col p-3 shadow">
                <div class="box-login">
                    <form action="" method="post">
                        <div class="center mb-3">
                            <h2>Register Users</h2>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="nama_lengkap" class="form-control" id="floatingInput" require placeholder="Enter you full name...">
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingUsername" require placeholder="Enter you full name...">
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingEmail" require placeholder="name@example.com">
                            <label for="floatingEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="no_hp" class="form-control" id="floatingPhone" require placeholder="Phone">
                            <label for="floatingPhone">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" require placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="btn-block" style="text-align: center;">
                            <a href="login.php" class="btn btn-primary">Sign In</a>
                            <input type="submit" value="Sign Up" name="reg" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['reg'])) {
                    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
                    $username = htmlspecialchars($_POST['username']);
                    $email = htmlspecialchars($_POST['email']);
                    $no_hp = htmlspecialchars($_POST['no_hp']);
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    $cekData = mysqli_query($con, "SELECT * FROM tb_login");
                    $existData = mysqli_fetch_array($cekData);
                    $reg = mysqli_query($con, "INSERT INTO tb_login (nama_lengkap,username,password,email,no_hp) VALUES ('$nama_lengkap','$username','$password','$email','$no_hp')");

                    if ($reg) {
                ?>
                        <div class="alert alert-success mt-4" role="alert">
                            your account success sign up, please wait 3s redirect to login.
                        </div>
                        <meta http-equiv="refresh" content="3; url=login.php">
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>