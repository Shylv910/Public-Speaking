<?php
include '../koneksi.php';

// Tangkap data dari formulir detail pendaftaran
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$harga = $_POST['harga'];

// Proses unggahan gambar
$gambar = $_FILES['bukti']['tmp_name']; // Nama sementara file gambar

// Ambil konten gambar
$gambar_content = addslashes(file_get_contents($gambar));

// Proses penyimpanan data ke dalam database
$query = "INSERT INTO datapendaftarleo (firstname, lastname, gender, kelas, email, nohp, harga, bukti) VALUES ('$firstname', '$lastname', '$gender', '$kelas', '$email', '$nohp', '$harga', '$gambar_content')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Mendapatkan data terbaru dari database
$query_last = "SELECT * FROM datapendaftarleo ORDER BY id DESC LIMIT 1"; // Mendapatkan data terbaru
$result_last = mysqli_query($koneksi, $query_last);

// Memeriksa apakah ada hasil yang ditemukan
if (mysqli_num_rows($result_last) > 0) {
    $row = mysqli_fetch_assoc($result_last);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Pendaftaran</title>
        <style>
            /* Add your CSS styles here */
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(to right, #638889, #89B9AD, #AAD9BB);
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .container2 {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #EFECEC;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }

            .btn {
                display: block;
                width: 20%;
                padding: 10px;
                margin: 20px;
                text-align: center;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .btn-hover {
                background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Detail Pendaftaran Kelas Public Speaking</h2>
            <table>
                <tr>
                    <td>First Name <b>:</b></td>
                    <td>
                        <?php echo $row['firstname']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Last Name <b>:</b></td>
                    <td>
                        <?php echo $row['lastname']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender <b>:</b></td>
                    <td>
                        <?php echo $row['gender']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas <b>:</b></td>
                    <td>
                        <?php echo $row['kelas']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email <b>:</b></td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone <b>:</b></td>
                    <td>
                        <?php echo $row['nohp']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga <b>:</b></td>
                    <td>
                        <?php echo $row['harga']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Bukti <b>:</b></td>
                    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['bukti']); ?>" width='150'
                            alt="Bukti Pendaftaran"></td>
                </tr>
            </table>
        </div>
        <!-- Informasi Detail Kelas -->
        <div class="container2"> 
            <h2>Detail Informasi Pendaftaran Kelas Public Speaking</h2>
            <h3>Mentor: Leonardo Edwin</h3>
            <p>Jenis Kelas: Online & Offline</p>
            <p>Alamat: Rp. Jl.Mawar No 90 Jakarta Pusat</p>
            <p>Jadwal Kelas: Senin & Rabu</p>
            <p>Jam: 19.00 - 21.00</p>
            <p>Jika Anda Mengikuti Kelas Online Kami, Link Zoom Akan di berikan melalui email anda pada h-1 sebelum kelas di
                mulai,</p>
        </div>
        <!-- Tombol Kembali -->
        <div>
            <a href="datapendaftarLEO.php" class="btn btn-sm btn-info pull-right">Kembali</a>
        </div>
    </body>

    </html>
    <?php
} else {
    echo "Data tidak ditemukan.";
}
?>