<?php
session_start();
include ("../koneksi.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND Password='$password' ") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit; // Jangan lupa untuk keluar dari skrip setelah melakukan pengalihan
    } else {
        // Kode JavaScript untuk menampilkan notifikasi kesalahan
        echo "<script>
                alert('Password atau email salah');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
    <script src="https://kit.fontawesome.com/ea4cd18d2a.js" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            font-family: 'inter';

        }

        .container {
            height: 100vh;
            display: flex;
            flex-direction: row;
            background-image: url('../img/logo/bgg blur.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 59vw;

        }

        .kiri {
            background-image: url('../img/logo/bgg blur.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 55vw;
        }

        .atas img {
            width: 10vw;
            margin: 40px 0px 0px 40px;
        }

        .bawah {
            width: 55vw;
            height: 87vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bawah img {
            width: 14vw;
        }

        .kanan {
            background-color: #4DD052;
            width: 45vw;
            border-radius: 10px;
        }

        .card {
            width: 44.2vw;
            margin-left: 8px;
            background-image: url("../img/bg-putih.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            display: flex;
            flex-direction: column;
            width: 35vw;
            display: flex;
            align-items: center;
            height: 70vh;
        }

        .a1 h2 {
            color: #4DD052;
            margin: 0;
            margin-bottom: 30px;
            font-size: 36px;
        }

        .email {
            width: 27VW;
            height: 8vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 2px solid #A3E5A6;
            background-color: white;
            border-radius: 9px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            margin-bottom: 33px;
        }

        .email i {
            color: #4DD052;
            font-size: 32px;
            margin-left: 20px;
            margin-right: 40px;
        }

        .email input {
            border: none;
            border-bottom: none;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            font-style: italic;
            font-size: 16px;
        }

        .pass {
            width: 27VW;
            height: 8vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 2px solid #A3E5A6;
            background-color: white;
            border-radius: 9px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }

        .pass i {
            color: #4DD052;
            font-size: 32px;
            margin-left: 20px;
            margin-right: 40px;
        }

        .pass input {
            border: none;
            border-bottom: none;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            font-style: italic;
            font-size: 16px;
        }

        .a3 {
            width: 23vw;
            margin-top: 37px;
            color: green;
        }

        .a3 {
            font-weight: bold;
        }

        .a4 {
            width: 27vw;
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .tombol {
            width: 9vw;
            height: 7vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            border: 1px solid green;
            border-radius: 9px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .tombol input {
            width: 9vw;
            height: 7vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            border: 1px solid green;
            border-radius: 9px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            background-color: white;
            font-size: 18px;
            color: #4DD052;
            font-weight: bold;
        }

        .tombol input:hover {
            background-color: green;
            color: white;
            cursor: pointer;
        }

        .a5 {
            border-top: 3px dashed green;
            margin-left: 0px;
            margin-top: 29px;
            width: 27.1vw;
            display: flex;
            font-weight: 500;
            justify-content: center;
            height: 10vh;
            padding-top: 30px;
        }

        .a5 a {
            font-style: underline;
            color: #4DD052;
            margin-left: 7px;
            margin-right: 7px;
        }
    </style>

</head>

<body>
    <!--  -->
    <div class="container">
        <div class="kiri">
            <div class="atas">
                <img src="../img/logo/Logo.png" alt="">
            </div>
            <div class="bawah">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
        <div class="kanan">
            <div class="card">
                <div class="content">
                    <div class="a1">
                        <h2>Hai, Login dulu yuk</h2>
                    </div>
                    <form action="" method="post">
                        <div class="a2">
                            <div class="email">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" name="email" id="email" autocomplete="off" required
                                    placeholder="Masukkan Email...">
                            </div>
                            <div class="pass">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="password" id="password" autocomplete="off"
                                    placeholder="Masukan Password" required>
                            </div>
                        </div>
                        <div class="a3">
                            <input type="checkbox" id="myCheckbox">
                            <span>Ingat Saya</span>
                        </div>
                        <div class="a4">
                            <div class="login">
                                <div class="tombol">
                                    <input type="submit" name="submit" value="Login" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="a5">
                            <span>Belum Punya Akun?</span>
                            <a href="access/register.php">Sign-Up </a>
                            <span>Dulu!</span>

                        </div>
                    </form>

                </div>

            </div>
        </div>


    </div>
</body>

</html>