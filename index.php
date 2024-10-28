<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Sphere</title>
    <link rel="icon" type="image/svg+xml" href="img/Logo-PS.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
    <script src="https://kit.fontawesome.com/ea4cd18d2a.js" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        .navbar {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-link {
            font-size: 20px;
            color: #4DD052;

        }

        .nav-link i {
            padding: 10px 2px 10px 20px;
            margin-bottom: 25px;
            width: 32px;
            border-radius: 0px 20px 20px 0px;
            transition: background-color 0.2s ease;
        }

        .nav-link.active i {
            background-color: #4DD052;
            color: white;

        }

        .section {
            width: 98.7vw;
            height: 100vh;
            font-family: 'Inter', sans-serif;
            font-size: 2rem;
            color: white;
            background-size: cover;
        }

        .section:nth-child(1) {
            animation: carousel 12s infinite;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .section:nth-child(1) .con1 {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: space-between;
            height: 35vh;
        }

        .section:nth-child(1) .con2 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 21px;
            width: 88vw;

        }

        .section:nth-child(1) .con2 img {
            position: relative;
            top: 29px;
            width: 350px;
        }

        .section:nth-child(1) .con2 a {
            text-decoration: none;
            color: white;
            position: relative;
            bottom: -100px;
            font-size: 28px;
        }

        .con2 a h3:hover {
            color: green;
        }

        .section:nth-child(1) .con3 img {
            position: relative;
            bottom: 240px;
            width: 60px;
        }

        .section:nth-child(2) {
            margin: 0px;
            padding: 0px;
            background-image: url('img/bf.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;

        }

        .judul {
            margin-bottom: 20px;
        }

        .judul img {
            width: 21vw;

        }

        .kartu {
            display: flex;
            margin-left: 61px;
            margin-bottom: 90px;
        }

        .card-container {
            background-color: #4DD052;
            display: flex;
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            margin-right: 20px;

        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            margin-bottom: 10px;
            display: flex;
            width: 30vw;
        }

        .card img {
            width: 140px;
            height: 251px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            object-fit: cover;
        }

        .card-content {
            flex: 1;
            padding: 20px;
            text-align: left;
            cursor: pointer;

        }

        .card h2 {
            margin-top: 0;
            font-size: 18px;
        }

        .card p {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .card-info {
            display: flex;
            flex-direction: column;
        }

        .card-info span {
            font-weight: bold;
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-info p {
            color: black;

        }

        .card:hover .card-info span {
            color: #4DD052;
            transition: color 0.3s ease;

        }


        .section:nth-child(3) {
            background-image: url('img/bf.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container3 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container3 img {
            margin-top: 15px;
            width: 28vw;
        }


        .testi img {
            width: 20vw;
        }

        .testi .g2 {
            position: relative;
            bottom: 190px;
            left: 390px;

        }

        .testi .g2 {
            position: relative;
            bottom: 220px;
            left: 390px;
        }

        .testi .g3 {
            position: relative;
            right: 390px;
            bottom: 480px;
        }

        .testi .g4 {
            position: relative;
            bottom: 530px;
        }

        .testi .g5 {
            position: relative;
            right: 390px;
            bottom: 750px;
        }

        .testi .g6 {
            position: relative;
            left: 390px;
            bottom: 1000px;
        }


        .section:nth-child(4) {
            background-image: url('img/bf.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 220vh;
        }

        .container4 {
            display: flex;
            justify-content: center;
            flex-direction: column;
            color: red;
            align-items: center;
        }

        .container4 img {
            margin-top: 30px;
            width: 55vw;
        }

        .card-form {
            margin-top: 70px;
            height: 60vh;
            width: 54vw;
            background-color: #4DD052;
            display: flex;
            align-items: center;
            flex-direction: row;
            padding-right: 7px;
            border-radius: 14px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .card-form img {
            width: 22vw;
            height: 60vh;
            margin: 0;
        }

        .contact {
            display: flex;
            background-color: white;
            width: 35vw;
            height: 60vh;
            align-items: center;
            flex-direction: column;
        }

        .contact img {
            width: 11vw;
            height: 4vh;
            padding-top: 20px;
        }

        .kontak {
            margin-top: 20px;
            width: 29vw;
            display: flex;
            flex-direction: column;
            align-items: baseline;
        }

        .kontak i {
            color: #4DD052;
            font-size: 32px;
        }

        .kontak span {
            color: black;
            font-style: italic;
            opacity: 0.6;
            font-size: 14px;
            margin-left: 20px;
        }

        .lok {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 27px;
        }

        .email {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 27px;
        }

        .nomor {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 27px;
        }

        .sosmed {
            width: 25vw;
            display: flex;
            height: 12vh;
            flex-direction: column;
        }

        .sosmed img {
            padding: 0;
            width: 6vw;
            height: 2vh;

        }

        .bg {
            margin-top: 10px;
            background-color: #4DD052;
            width: 25vw;
            height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .sos {
            background-color: #EFFFF0;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 24.7vw;
            height: 7.7vh;
            border-radius: 5px;

        }

        .sos i {
            color: #4DD052;
            font-size: 23px;

        }

        .footer {
            display: hidden;
            width: 98.7vw;
            height: 16vh;
            position: relative;
            top: 100px;
            background-color: #4DD052;
            display: flex;
            justify-content: flex-end;
            flex-direction: column;

        }

        .isi {
            width: 98.7vw;
            background-color: #2D2D2D;
            font-size: 15px;
            height: 14vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .sos i:hover {
            color: black;

        }

        @keyframes carousel {

            0%,
            100% {
                background-image: url('img/bg1.jpg');
            }

            25% {
                background-image: url('img/bg2.jpg');
            }

            50% {
                background-image: url('img/bg3.jpeg');
            }

            75% {
                background-image: url('img/bg4.png');
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="#1" class="nav-link active">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="#2" class="nav-link">
            <i class="fa-regular fa-message"></i>
        </a>
        <a href="#3" class="nav-link">
            <i class="fa-solid fa-circle-info"></i>
        </a>
        <a href="#4" class="nav-link">
            <i class="fa-solid fa-users"></i>
        </a>
    </div>

    <div class="container">
        <div class="section carousel-section" id="1">
            <div class="con2">
                <h1>Welcome Website Public Speaking</h1>
                <img src="img/logo/logo.png" alt="">
                <a href="user/index.php">
                    <h3>Join Now!</h3>
                </a>
            </div>
            <div class="con3">
                <a href="ProjectUAS/index.php">
                    <img src="img/logo/Frame 21.png" alt="">

                </a>
            </div>
        </div>
        <div class="section" id="2">
            <div class="judul">
                <img src="img/our mentor.webp" alt="">
            </div>
            <div class="kartu">
                <div class="card-container">
                    <div class="card">
                        <img src="img/mentor1.jpg" alt="Nama Orang 1">
                        <div class="card-content">
                            <div class="card-info">
                                <span>Leonardo Edwin</span>
                                <p>Leonardo merupakan sosok inspiratif bagi para generasi muda Indonesia. Ia membuktikan
                                    bahwa dengan kerja keras dan tekad yang kuat, segala hal dapat dicapai.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="card">
                        <img src="img/mentor2.jpg" alt="Nama Orang 1">
                        <div class="card-content">
                            <div class="card-info">
                                <span>Tsana</span>
                                <p>Figur inspiratif yang sukses berkarya di berbagai bidang. Ia dikenal dengan
                                    kreativitas, kedekatan dengan penggemar, dan kemampuannya bercerita tentang realitas
                                    kehidupan anak muda

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-container">
                    <div class="card">
                        <img src="img/mentor3.jpg" alt="Nama Orang 1">
                        <div class="card-content">
                            <div class="card-info">
                                <span>Najwa Shihab</span>
                                <p>Najwa Shihab, jurnalis dan pembawa acara ternama Indonesia, dikenal memiliki
                                    kemampuan public speaking yang luar biasa. Kemampuannya berbicara di depan publik
                                    begitu memukau dan penuh pesan, membuatnya menjadi salah satu figur inspiratif di
                                    Indonesia.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="section" id="3">
            <div class="container3">
                <img src="img/What they say_.webp" alt="">
                <div class="testi">
                    <div class="g1">
                        <img src="img/Frame 3.webp" alt="">
                    </div>
                    <div class="g2">
                        <img src="img/Frame 4.webp" alt="">
                    </div>
                    <div class="g3">
                        <img src="img/Frame 5.webp" alt="">
                    </div>
                    <div class="g4">
                        <img src="img/Frame 6.webp" alt="">
                    </div>
                    <div class="g5">
                        <img src="img/Frame 7.webp" alt="">
                    </div>
                    <div class="g6">
                        <img src="img/Frame 8.webp" alt="">

                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="4">
            <div class="container4">
                <img src="img/Group 10.webp" alt="">
                <div class="card-form">
                    <img src="img/map.webp" alt="">
                    <div class="contact">
                        <img src="img/Contact Us.webp" alt="">
                        <div class="kontak">
                            <div class="lok">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Jl. Palembang - Prabumulih No.KM.32, Indralaya Indah, Kec. Indralaya, Kabupaten
                                    Ogan Ilir, Sumatera Selatan 30862</span>
                            </div>
                            <div class="email">
                                <i class="fa-solid fa-envelope"></i>
                                <span>speakingsphere@mail.com</span>
                            </div>
                            <div class="nomor">
                                <i class="fa-solid fa-phone"></i>
                                <span>+62 851-6154-6046 (Lab Member 003)</span>
                            </div>
                        </div>
                        <div class="sosmed">
                            <img src="img/Follow us_.webp" alt="">
                            <div class="bg">
                                <div class="sos">
                                    <a href="https://www.facebook.com/unsrii/?locale=id_ID" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/unsri?lang=en" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://wa.me/6285161546046" target="_blank">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a
                                        href="https://www.linkedin.com/company/ikatan-mahasiswa-sakti-alam-kerinci-imsak-sumatera-selatan/?originalSubdomain=id" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@pmm4_unsri" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.instagram.com/unsri/?hl=en" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="isi">
                    <span>©2024 | Lab Member 001 (Hououin Kyouma), Lab Member 002 (Assistant), & Lab Member 003 (Super
                        Hack) - El Psy Kongroo</span>
                </div>
            </div>
        </div>
    </div>


    </div>

    <script>
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            const currentSection = getCurrentSection();
            navLinks.forEach(link => {
                const sectionId = link.getAttribute('href').substring(1);
                if (currentSection === sectionId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });

        function getCurrentSection() {
            const sections = document.querySelectorAll('.section');
            let currentSectionId = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100; // Adjusted offset to trigger change slightly before reaching the section
                if (window.scrollY >= sectionTop) {
                    currentSectionId = section.getAttribute('id');
                }
            });
            return currentSectionId;
        }
    </script>
</body>

</html>