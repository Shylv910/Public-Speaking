<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            height: 160vh;
            background-color: #EFFFF0;
            display: flex;
        }

        .container img {
            width: 120px;
            height: 30px;
            margin: 40px 0px 0px 49px;
        }

        .bg {
            margin-top: 59px;
            background-color: #4DD052;
            display: flex;
            margin-left: 250px;
            justify-content: center;
            width: 44.2vw;
            height: 100vh;
            border-radius: 10px;
        }

        .card {
            width: 44.2vw;
            margin-top: 8px;
            padding-top: 25px;
            background-image: url("../img/bg-putih.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 130vh;
            display: flex;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            align-items: center;
            justify-content: center;
            border-radius: 0px 0px 10px 10px;

        }

        .content {
            display: flex;
            flex-direction: column;
            width: 35vw;
            display: flex;
            align-items: center;
            /* height: 70vh; */
        }

        .a1 {
            margin: 0;
            position: relative;
            bottom: 80px;
        }

        .a1 h2 {
            color: #4DD052;
            margin-bottom: 30px;
            font-size: 36px;
        }

        .a2 {
            position: relative;
            bottom: 60px;
        }

        .username,
        .email,
        .pass,
        .nama {
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

        .username i,
        .email i,
        .pass i,
        .nama i {
            color: #4DD052;
            font-size: 32px;
            margin-left: 20px;
            margin-right: 40px;
        }

        .username input,
        .email input,
        .pass input,
        .nama input {
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
            position: relative;
            bottom: 60px;
            color: #4DD052;
            left: 15px;

        }

        .a3 i {
            margin-right: 20px;
            font-size: 30px;
        }

        .gender {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .gender span {
            font-size: 17px;
            font-weight: 500;
            color: black;
        }

        .kelas {
            font-size: 20px;
        }

        .kelas span {
            font-size: 17px;
            font-weight: 500;
            color: black;
        }

        .upload {
            width: 26vw;
            height: 8vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 2px solid #A3E5A6;
            background-color: white;
            border-radius: 9px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            margin-top: 20px;
            position: relative;
            right: 10px;
        }

        .upload input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            display: inline-block;
            cursor: pointer;
            padding: 10px 20px;
            background-color: #4DD052;
            color: white;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        .custom-file-upload:hover {
            background-color: #3aa43f;
        }

        .custom-file-upload:active {
            transform: translateY(1px);
        }

        .custom-file-upload::before {
            content: "\f574";
            font-family: "FontAwesome";
            margin-left: 10px;
        }

        .custom-file-upload::after {
            content: "Upload";
        }

        .a4 {
            width: 27vw;
            display: flex;
            /* justify-content: flex-end; */
            margin-top: 30px;
            position: relative;
            bottom: 50px;
            margin-left: 5px;
        }

        .tombol {
            width: 26vw;
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
            width: 26vw;
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

        .kode {
            position: relative;
            top: 15px;
            right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="../img/Logo.png" alt="">
        <div class="bg">
            <div class="card">
                <div class="content">
                    <div class="a1">
                        <h2>Isi Pendaftarannya</h2>
                    </div>
                    <form action="detailT.php" method="post" enctype="multipart/form-data">
                        <div class="a2">
                            <div class="username">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Nama Awalan" name="firstname" required>
                            </div>
                            <div class="email">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Nama Akhiran" id="lastname" name="lastname" required>
                            </div>
                            <div class="pass">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="Email" name="email" id="email" placeholder="Masukkan Email" required>
                            </div>
                            <div class="nama">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" placeholder="Nomor Telepon" id="nohp" name="nohp" required>
                            </div>
                        </div>
                        <div class="a3">
                            <div class="gender">
                                <i class="fa-solid fa-mars-stroke"></i>
                                <input type="radio" name="gender" value="m" id="male" required> <span
                                    style="color: black;">Laki-Laki</span>
                                <input type="radio" name="gender" value="f" id="female" required> <span>Perempuan</span>
                            </div>
                            <div class="kelas">
                                <i class="fa-solid fa-tv"></i>
                                <input type="radio" id="offline" required name="kelas" value="offline"
                                    style="position: relative; right: 9px;  "> <span
                                    style="position: relative; right: 9px; color: black;">offline</span>
                                <input type="radio" id="online" name="kelas" value="online"
                                    style="position: relative; left: 10px;"> <span
                                    style="position: relative; left: 10px; color: black; ">online</span>
                            </div>
                            <div class="kode">
                                <span style="font-weight: bold;">Kode Bank: </span>
                                <span><?php echo '' . time(); ?></span>
                            </div>
                            <!-- Input untuk mengunggah gambar -->
                            <div class="upload">
                                <label for="bukti" class="custom-file-upload">

                                </label>
                                <input type="file" id="bukti" name="bukti" accept="image/png, image/jpeg, image/jpg"
                                    required onchange="showFileName()">
                                <span id="file-name"></span>
                            </div>
                        </div>
                        <div class="a4">
                            <div class="login">
                                <div class="tombol">
                                    <input type="hidden" id="harga" name="harga" value="250000" />

                                    <input type="submit" value="Submit"></input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return 'Rp. ' + ribuan + ' ,-';
        }

        function showFileName() {
            var input = document.getElementById('bukti');
            var fileName = input.files[0].name;
            document.getElementById('file-name').innerText = fileName;
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Function to update harga based on kelas selection
            function updateHarga() {
                var selectedKelas = document.querySelector('input[name="kelas"]:checked').value;
                var hargaField = document.getElementById('harga');
                var harga;

                if (selectedKelas === 'online') {
                    harga = 260000;
                } else {
                    harga = 250000;
                }

                // Hapus format Rupiah sebelum menyimpan ke database
                hargaField.value = harga;

                // Format Rupiah untuk ditampilkan di layar
                var formattedHarga = formatRupiah(harga);
                document.getElementById('harga').innerText = formattedHarga;
            }

            // Attach change event listener to kelas radio buttons
            var kelasRadios = document.querySelectorAll('input[name="kelas"]');
            kelasRadios.forEach(function (radio) {
                radio.addEventListener('change', updateHarga);
            });

            // Event listener for form submission
            var submitButton = document.querySelector('input[type="submit"]');
            submitButton.addEventListener('click', function (event) {
                // Update harga before form submission
                updateHarga();
            });
        });
        
    </script>
</body>

</html>