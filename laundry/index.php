<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Laundry</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #fff9fd;
            color: #342d35;
            overflow-x: hidden;
        }

        .section {
            padding: 85px 0;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            min-height: 68px;
            background: rgba(48, 34, 49, 0.97) !important;
            box-shadow: 0 5px 25px rgba(50, 30, 50, 0.16);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-header,
        .navbar-collapse {
            min-height: 68px;
        }

        .navbar-brand {
            height: 68px;
            line-height: 38px;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #fff !important;
        }

        .navbar-brand:before {
            content: "✦";
            color: #f3a9e5;
            margin-right: 8px;
        }

        .navbar-nav > li > a {
            color: #eee !important;
            height: 68px;
            line-height: 38px;
            font-size: 14px;
            font-weight: 600;
            padding-left: 16px;
            padding-right: 16px;
            transition: .25s ease;
        }

        .navbar-nav > li > a:hover,
        .navbar-nav > li > a:focus {
            background: #e47bd1 !important;
            color: #fff !important;
        }

        .navbar-nav > li:last-child > a {
            margin: 14px 0 14px 10px;
            height: 40px;
            line-height: 20px;
            padding: 10px 20px;
            border-radius: 22px;
            background: #e47bd1 !important;
        }

        .navbar-nav > li:last-child > a:hover {
            background: #cf60bd !important;
            transform: translateY(-2px);
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 590px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;

            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(255,255,255,.28) 0 90px,
                    transparent 91px
                ),
                radial-gradient(
                    circle at 76% 85%,
                    rgba(255,255,255,.18) 0 140px,
                    transparent 141px
                ),
                linear-gradient(
                    135deg,
                    #e985d7 0%,
                    #dca7e9 48%,
                    #f4d8ef 100%
                );
        }

        .hero:before {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 50%;
            right: -140px;
            top: -170px;
        }

        .hero:after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border: 1px solid rgba(255,255,255,.28);
            border-radius: 50%;
            left: -150px;
            bottom: -170px;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            animation: muncul .8s ease;
        }

        .hero h1 {
            font-size: 56px;
            font-weight: 800;
            line-height: 1.08;
            letter-spacing: -1.5px;
            margin: 0 0 22px;
            color: #302333;
            max-width: 700px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.8;
            max-width: 610px;
            color: #4c4050;
            margin-bottom: 0;
        }

        .hero-buttons {
            margin-top: 32px;
        }

        .hero-buttons .btn {
            margin-right: 9px;
            margin-bottom: 10px;
            padding: 13px 27px;
            border-radius: 28px;
            font-weight: 700;
        }

        .hero-buttons .btn-default {
            background: rgba(255,255,255,.72);
            border: 1px solid rgba(255,255,255,.9);
            color: #594454;
        }

        .hero-decoration {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            width: 245px;
            height: 245px;
            border-radius: 50%;
            background: rgba(255,255,255,.24);
            border: 1px solid rgba(255,255,255,.5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 115px;
            color: rgba(72, 44, 72, .35);
            box-shadow: 0 25px 60px rgba(98, 51, 99, .13);
        }

        .hero-decoration:before {
            content: "";
            position: absolute;
            width: 175px;
            height: 175px;
            border: 2px dashed rgba(255,255,255,.55);
            border-radius: 50%;
        }

        /* =========================
           JUDUL SECTION
        ========================= */

        .section-title {
            text-align: center;
            margin-bottom: 52px;
        }

        .section-title h2 {
            font-size: 34px;
            font-weight: 800;
            color: #302333;
            margin: 0 0 16px;
        }

        .section-title h2:after {
            content: "";
            display: block;
            width: 58px;
            height: 4px;
            background: linear-gradient(90deg, #d65bc2, #f1a6e2);
            border-radius: 10px;
            margin: 14px auto 0;
        }

        .section-title p {
            color: #7c707d;
            font-size: 15px;
        }

        /* =========================
           LAYANAN
        ========================= */

        .service-box {
            background: rgba(255,255,255,.96);
            padding: 34px 25px;
            text-align: center;
            min-height: 265px;
            margin-bottom: 25px;
            border-radius: 22px;
            border: 1px solid #f1d9ed;
            box-shadow: 0 10px 30px rgba(83, 48, 83, .07);
            transition: .3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-box:before {
            content: "";
            position: absolute;
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: #fceafa;
            right: -48px;
            top: -48px;
            transition: .3s ease;
        }

        .service-box:hover {
            transform: translateY(-10px);
            border-color: #e9a2dc;
            box-shadow: 0 18px 38px rgba(180, 100, 170, .15);
        }

        .service-box:hover:before {
            transform: scale(1.25);
        }

        .service-box .glyphicon {
            width: 72px;
            height: 72px;
            line-height: 72px;
            border-radius: 20px;
            font-size: 31px;
            color: #d158bd;
            background: #fff0fb;
            margin-bottom: 19px;
            position: relative;
        }

        .service-box h3 {
            font-size: 20px;
            font-weight: 800;
            margin: 0 0 13px;
        }

        .service-box p {
            line-height: 1.75;
            color: #706571;
            margin: 0;
        }

        /* =========================
           HARGA
        ========================= */

        #harga {
            background: #fff5fc;
        }

        .price-box {
            background: #fff;
            padding: 34px 25px;
            text-align: center;
            border-radius: 22px;
            border: 1px solid #efd9eb;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(83, 48, 83, .07);
            transition: .3s ease;
            position: relative;
            overflow: hidden;
        }

        .price-box:before {
            content: "";
            position: absolute;
            height: 5px;
            left: 0;
            right: 0;
            top: 0;
            background: linear-gradient(90deg, #d65bc2, #efa8df);
        }

        .price-box:hover {
            transform: translateY(-9px);
            box-shadow: 0 18px 38px rgba(180,100,170,.15);
        }

        .price-box h3 {
            font-size: 20px;
            font-weight: 800;
            margin-top: 5px;
        }

        .price {
            font-size: 30px;
            font-weight: 800;
            color: #c84fb3;
            margin: 22px 0 12px;
        }

        .price-box p {
            color: #706571;
            margin-bottom: 24px;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn {
            border-radius: 26px;
            transition: .25s ease;
            font-weight: 600;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(70,40,70,.15);
        }

        .btn-primary {
            border: none;
            background: linear-gradient(135deg, #d85bc2, #b94eaa);
            box-shadow: 0 7px 18px rgba(191, 76, 172, .22);
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background: linear-gradient(135deg, #c94db5, #a94398);
        }

        /* =========================
           ANTAR JEMPUT
        ========================= */

        .pickup {
            background:
                radial-gradient(
                    circle at 90% 15%,
                    rgba(255,255,255,.25) 0 80px,
                    transparent 81px
                ),
                linear-gradient(135deg, #e985d7, #d9a5e6);
            position: relative;
            overflow: hidden;
        }

        .pickup h2 {
            font-weight: 800;
            color: #302333;
            margin-top: 5px;
        }

        .pickup p {
            font-size: 17px;
            line-height: 1.8;
            color: #4e4150;
            max-width: 700px;
        }

        .pickup:after {
            content: "✦";
            position: absolute;
            right: 10%;
            top: 20px;
            font-size: 90px;
            color: rgba(255,255,255,.4);
        }

        /* =========================
           CARA KERJA
        ========================= */

        .step-box {
            text-align: center;
            padding: 25px 15px;
            transition: .3s ease;
            position: relative;
        }

        .step-box:hover {
            transform: translateY(-8px);
        }

        .step-number {
            width: 62px;
            height: 62px;
            line-height: 62px;
            border-radius: 50%;
            background: linear-gradient(135deg, #d85bc2, #b94eaa);
            color: white;
            font-size: 21px;
            font-weight: 800;
            margin: auto;
            box-shadow: 0 8px 20px rgba(180,80,160,.22);
            position: relative;
            z-index: 2;
        }

        .step-box h3 {
            font-size: 19px;
            font-weight: 800;
            margin-top: 19px;
        }

        .step-box p {
            color: #706571;
            line-height: 1.65;
        }

        /* =========================
           TENTANG
        ========================= */

        #tentang {
            background: #fff5fc;
        }

        .about-box {
            background: white;
            padding: 42px 48px;
            border-radius: 24px;
            border: 1px solid #efd9eb;
            box-shadow: 0 12px 35px rgba(70,40,70,.07);
            line-height: 1.9;
            position: relative;
        }

        .about-box:before {
            content: "LAUNDRY";
            position: absolute;
            right: 28px;
            top: 20px;
            font-size: 12px;
            letter-spacing: 3px;
            font-weight: 800;
            color: #e5b6dc;
        }

        .about-box p {
            margin-bottom: 17px;
        }

        .about-box p:last-child {
            margin-bottom: 0;
        }

        /* =========================
           KONTAK
        ========================= */

        .contact-box {
            text-align: center;
            background: white;
            padding: 35px 30px;
            border-radius: 22px;
            border: 1px solid #efd9eb;
            box-shadow: 0 10px 30px rgba(70,40,70,.07);
            transition: .3s ease;
        }

        .contact-box:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 35px rgba(180,100,170,.13);
        }

        .contact-box p {
            line-height: 1.7;
            margin-bottom: 25px;
            color: #5f5360;
        }

        .contact-box p:last-child {
            margin-bottom: 0;
        }

        .contact-box .glyphicon {
            display: inline-block;
            width: 48px;
            height: 48px;
            line-height: 48px;
            border-radius: 50%;
            color: #d158bd;
            background: #fff0fb;
            font-size: 20px;
            margin-bottom: 9px;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #302333;
            color: white;
            text-align: center;
            padding: 28px 15px;
        }

        footer p {
            margin: 0;
            opacity: .82;
            font-size: 13px;
            letter-spacing: .3px;
        }

        /* =========================
           ANIMASI
        ========================= */

        @keyframes muncul {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
           HP
        ========================= */

        @media (max-width: 991px) {

            .hero {
                min-height: 550px;
            }

            .hero h1 {
                font-size: 46px;
            }

            .hero-decoration {
                width: 190px;
                height: 190px;
                font-size: 90px;
            }
        }

        @media (max-width: 768px) {

            .section {
                padding: 65px 0;
            }

            .navbar-nav > li > a {
                height: auto;
                line-height: 25px;
                padding: 12px 15px;
            }

            .navbar-nav > li:last-child > a {
                margin: 5px 15px 12px;
                text-align: center;
            }

            .hero {
                text-align: center;
                min-height: 570px;
                padding: 75px 20px;
            }

            .hero h1 {
                font-size: 38px;
                letter-spacing: -1px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero-decoration {
                display: none;
            }

            .service-box,
            .price-box {
                margin-left: 10px;
                margin-right: 10px;
            }

            .about-box {
                padding: 30px 25px;
            }

            .about-box:before {
                display: none;
            }

            .pickup {
                text-align: center;
            }
        }

        @media (max-width: 480px) {

            .hero h1 {
                font-size: 32px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .hero-buttons .btn {
                width: 100%;
                margin-right: 0;
            }
        }

    </style>
</head>

<body id="top">

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-inverse">

    <div class="container">

        <div class="navbar-header">

            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#top">
                LAUNDRY
            </a>

        </div>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="#layanan">
                        Layanan
                    </a>
                </li>

                <li>
                    <a href="#harga">
                        Harga
                    </a>
                </li>

                <li>
                    <a href="#antar-jemput">
                        Antar Jemput
                    </a>
                </li>

                <li>
                    <a href="#cara-kerja">
                        Cara Kerja
                    </a>
                </li>

                <li>
                    <a href="#tentang">
                        Tentang
                    </a>
                </li>

                <li>
                    <a href="login_page.php">
                        <span class="glyphicon glyphicon-log-in"></span>
                        Login
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="container">

        <div class="hero-content">

            <div class="row">

                <div class="col-md-7">

                    <h1>
                        Laundry Bersih,
                        Praktis, Tanpa Ribet
                    </h1>

                    <p>
                        Kami membantu merawat pakaian Anda
                        dengan layanan laundry yang mudah,
                        cepat, dan terpercaya.
                    </p>

                    <div class="hero-buttons">

                        <a href="login_page.php"
                           class="btn btn-primary btn-lg">

                            Login

                        </a>

                        <a href="#layanan"
                           class="btn btn-default btn-lg">

                            Lihat Layanan

                        </a>

                    </div>

                </div>

                <div class="col-md-5">

                    <div class="hero-decoration">
                        ♨
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     LAYANAN
========================= -->

<section class="section" id="layanan">

    <div class="container">

        <div class="section-title">

            <h2>Layanan Kami</h2>

            <p>
                Pilih layanan laundry sesuai kebutuhan Anda
            </p>

        </div>

        <div class="row">

            <div class="col-md-3">

                <div class="service-box">

                    <span class="glyphicon glyphicon-tint"></span>

                    <h3>Cuci Kering</h3>

                    <p>
                        Pakaian dicuci dan dikeringkan
                        hingga siap digunakan.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="service-box">

                    <span class="glyphicon glyphicon-star"></span>

                    <h3>Cuci Setrika</h3>

                    <p>
                        Pakaian dicuci, dikeringkan,
                        dan disetrika hingga rapi.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="service-box">

                    <span class="glyphicon glyphicon-leaf"></span>

                    <h3>Setrika</h3>

                    <p>
                        Pakaian disetrika dengan rapi
                        dan siap digunakan.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="service-box">

                    <span class="glyphicon glyphicon-home"></span>

                    <h3>Antar Jemput</h3>

                    <p>
                        Kami menyediakan layanan
                        antar dan jemput pakaian.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     HARGA
========================= -->

<section class="section" id="harga">

    <div class="container">

        <div class="section-title">

            <h2>Harga Laundry</h2>

            <p>
                Harga terjangkau dengan pelayanan terbaik
            </p>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="price-box">

                    <h3>Cuci Kering</h3>

                    <div class="price">
                        Rp5.000 / Kg
                    </div>

                    <p>
                        Cuci dan pengeringan pakaian.
                    </p>

                    <a href="login_page.php"
                       class="btn btn-primary">

                        Pesan Sekarang

                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="price-box">

                    <h3>Cuci Setrika</h3>

                    <div class="price">
                        Rp7.000 / Kg
                    </div>

                    <p>
                        Cuci, kering, dan setrika.
                    </p>

                    <a href="login_page.php"
                       class="btn btn-primary">

                        Pesan Sekarang

                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="price-box">

                    <h3>Setrika</h3>

                    <div class="price">
                        Rp4.000 / Kg
                    </div>

                    <p>
                        Pakaian disetrika hingga rapi.
                    </p>

                    <a href="login_page.php"
                       class="btn btn-primary">

                        Pesan Sekarang

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     ANTAR JEMPUT
========================= -->

<section class="section pickup" id="antar-jemput">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <h2>
                    Tidak Sempat Datang ke Laundry?
                </h2>

                <p>
                    Jangan khawatir. Kami menyediakan
                    layanan antar jemput pakaian untuk
                    memudahkan Anda.
                </p>

            </div>

            <div class="col-md-4 text-center">

                <br>

                <a href="login_page.php"
                   class="btn btn-primary btn-lg">

                    Pesan Antar Jemput

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CARA KERJA
========================= -->

<section class="section" id="cara-kerja">

    <div class="container">

        <div class="section-title">

            <h2>Cara Kerja</h2>

            <p>
                Proses laundry yang mudah dan praktis
            </p>

        </div>

        <div class="row">

            <div class="col-md-3">

                <div class="step-box">

                    <div class="step-number">
                        1
                    </div>

                    <h3>Pilih Layanan</h3>

                    <p>
                        Pilih layanan laundry
                        sesuai kebutuhan.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="step-box">

                    <div class="step-number">
                        2
                    </div>

                    <h3>Pesan</h3>

                    <p>
                        Login dan lakukan
                        pemesanan laundry.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="step-box">

                    <div class="step-number">
                        3
                    </div>

                    <h3>Proses</h3>

                    <p>
                        Pakaian akan kami
                        proses dengan baik.
                    </p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="step-box">

                    <div class="step-number">
                        4
                    </div>

                    <h3>Selesai</h3>

                    <p>
                        Pakaian siap diambil
                        atau diantar kembali.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     TENTANG
========================= -->

<section class="section" id="tentang">

    <div class="container">

        <div class="section-title">

            <h2>Tentang Kami</h2>

            <p>
                Kenali layanan laundry kami
            </p>

        </div>

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="about-box">

                    <p>
                        Laundry kami hadir untuk membantu
                        masyarakat dalam merawat pakaian
                        dengan lebih mudah dan praktis.
                    </p>

                    <p>
                        Kami mengutamakan kebersihan,
                        kerapian, dan pelayanan yang baik
                        agar setiap pakaian dapat kembali
                        dalam kondisi bersih dan siap digunakan.
                    </p>

                    <p>
                        Dengan proses yang sederhana dan
                        layanan yang terpercaya, kami berusaha
                        memberikan pengalaman laundry yang
                        nyaman bagi setiap pelanggan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     KONTAK
========================= -->

<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>Hubungi Kami</h2>

            <p>
                Silakan hubungi kami untuk informasi
                lebih lanjut.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <div class="contact-box">

                    <p>

                        <span class="glyphicon glyphicon-earphone"></span>

                        <br>

                        0812-3456-7890

                    </p>


                    <p>

                        <span class="glyphicon glyphicon-envelope"></span>

                        <br>

                        laundry@gmail.com

                    </p>


                    <p>

                        <span class="glyphicon glyphicon-map-marker"></span>

                        <br>

                        Boja, Kendal

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        &copy; 2026 Sistem Informasi Laundry.
        All Rights Reserved.
    </p>

</footer>


</body>
</html>
