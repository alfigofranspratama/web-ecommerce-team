<?php
session_start();
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
                            <h2>Login Users</h2>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingUsername" require placeholder="Enter you full name...">
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" require placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mb-3 center">
                            <span>Forgot Password? <a href="#">Clik Here</a></span>
                        </div>
                        <div class="btn-block" style="text-align: center;">
                            <a href="register.php" class="btn btn-primary">Sign Up</a>
                            <input type="submit" value="Sign In" name="login" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['login'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $login = mysqli_query($con, "SELECT * FROM tb_login WHERE username='$username'");
                    $cekData = mysqli_num_rows($login);

                    if ($cekData > 0) {
                        $data = mysqli_fetch_array($login);

                        if (password_verify($password, $data['password'])) {
                            if ($data['level'] == "admin") {
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "admin";
                ?>
                                <meta http-equiv="refresh" content="0; url=../admin/index.php">
                            <?php
                            } elseif ($data['level'] == "user") {
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "user";

                            ?>
                                <meta http-equiv="refresh" content="0; url=../user/index.php">
                <?php

                            }
                        } else {
                            echo "<script>alert('Katasandi Salah.')</script>" . '<meta http-equiv="refresh" content="0; url=login.php">';
                        }
                    } else {
                        echo "<script>alert('akun tidak tersedia silahkan hubungi admin.')</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>