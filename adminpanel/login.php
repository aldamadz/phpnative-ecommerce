<?php
session_start();
require "../koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tokotea</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" </head>

<body>

    <style>
        .main {
            height: 100vh;
        }

        .login-box {
            width: 500px;
            height: 300px;
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div>
            <?php
            if (isset($_POST['loginbtn'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);

                if ($countdata > 0) {
                    if (password_verify($password, $data['password'])) {
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['login'] = true;
                        header('location: ../adminpanel');
                    } else {
            ?>
                        <div class="alert alert-warning" role="alert">
                            Password salah!!!
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Akun tidak ditemukan!!!
                    </div>
            <?php
                }
            }
            ?>

        </div>
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <label for=" username">Username</label>
                <input type="text" class="form-control" name="username">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <div class="pt-2">
                    <button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>