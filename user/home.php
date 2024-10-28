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
            background-image: url('../img/bf.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'inter';
        }

        .container {
            /* height: 100vh; */
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .atas {
            display: flex;
            width: 89vw;
            align-items: center;
            justify-content: space-between;
            height: 18vh;
        }

        .left img {
            width: 9vw;
        }


        .right i {
            color: #4dd052;
            font-size: 24px;
            margin: 0px 4px 0px 10px;

        }

        .card {
            width: 47vw;
            height: 38.3vh;
            background-color: #4dd052;
            border-radius: 10px;
            margin-bottom: 50px;

        }

        .isi {
            display: flex;
            background-color: white;
            width: 46.5vw;
        }

        .kiri img {
            width: 15vw;
            height: 38.3vh;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .kanan {
            width: 46.5vw;
            height: 38.3vh;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: flex;
            flex-direction: column;
            padding-left: 90px;
        }

        .kanan-atas h3 {
            font-size: 29px;
            margin: 20px 15px 20px 0px;
        }

        .kanan-tengah {
            font-size: 13px;
        }

        .kanan-tengah span {
            font-weight: bold;
            opacity: 0.9;
        }

        .kanan-tengah i {
            color: #4dd052;
            margin-bottom: 15px;

        }

        .a1 i {
            font-size: 12px;
            margin-right: 10px;
        }

        .a2 i {
            margin-right: 13px;
        }

        .a3 i {
            margin-right: 13px;
        }

        .kanan-bawah {
            width: 23vw;
            display: flex;
            justify-content: flex-end;
        }

        .kanan-bawah button {
            background-color: #4dd052;
            border-radius: 5px;
            border: none;
            color: white;
            padding: 10px 20px 10px 20px;
            font-weight: bold;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            transition: background-color 0.3s, transform 0.1s;
        }

        .kanan-bawah button:active {
            background-color: #3aa043;
            /* Ubah warna saat tombol ditekan */
            transform: translateY(1px);
            /* Geser tombol sedikit ke bawah saat ditekan */
        }

        .kanan-bawah button {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="atas">
            <div class="left">
                <img src="../img/Logo.png" alt="">
            </div>
            <div class="right">
                <a href="publicspeaking/index.php">
                    <i class="fa-solid fa-house"></i>
                </a>
                <a href="logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>

                </a>
            </div>
        </div>
        <div class="bawah">
            <div class="card">
                <div class="isi">
                    <div class="kiri">
                        <img src="../img/mentor1.jpg" alt="">
                    </div>
                    <div class="kanan">
                        <div class="kanan-atas">
                            <h3>Leonardo Edwin</h3>
                        </div>
                        <div class="kanan-tengah">
                            <div class="a1">
                                <i class="fa-solid fa-laptop"></i>
                                <span>Offline & Online</span>
                            </div>
                            <div class="a2">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>Senin & Rabu</span>
                            </div>
                            <div class="a3">
                                <i class="fa-solid fa-clock"></i>
                                <span>19.00 - 21.00</span>
                            </div>
                        </div>
                        <div class="kanan-bawah">
                            <a href="formleo.php">
                                <button><i class="fa-regular fa-pen-to-square"></i> Daftar Sekarang!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="isi">
                    <div class="kiri">
                        <img src="../img/mentor2.jpg" alt="">
                    </div>
                    <div class="kanan">
                        <div class="kanan-atas">
                            <h3>Tsana</h3>
                        </div>
                        <div class="kanan-tengah">
                            <div class="a1">
                                <i class="fa-solid fa-laptop"></i>
                                <span>Offline & Online</span>
                            </div>
                            <div class="a2">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>Selasa & Kamis</span>
                            </div>
                            <div class="a3">
                                <i class="fa-solid fa-clock"></i>
                                <span>20.00 - 22.00</span>
                            </div>
                        </div>
                        <div class="kanan-bawah">
                            <a href="formTsa.php">
                                <button><i class="fa-regular fa-pen-to-square"></i> Daftar Sekarang!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="isi">
                <div class="kiri">
                    <img src="../img/mentor3.jpg" alt="">
                </div>
                <div class="kanan">
                    <div class="kanan-atas">
                        <h3>Najwa Shihab</h3>
                    </div>
                    <div class="kanan-tengah">
                        <div class="a1">
                            <i class="fa-solid fa-laptop"></i>
                            <span>Offline & Online</span>
                        </div>
                        <div class="a2">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Sabtu & Minggu</span>
                        </div>
                        <div class="a3">
                            <i class="fa-solid fa-clock"></i>
                            <span>19.00 - 21.00</span>
                        </div>
                    </div>
                    <div class="kanan-bawah">
                        <a href="formnaj.php">
                            <button><i class="fa-regular fa-pen-to-square"></i> Daftar Sekarang!</button>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
</body>

</html>