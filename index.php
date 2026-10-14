<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin | SchoolX</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top left, #3b0000 0%, transparent 35%),
                radial-gradient(circle at bottom right, #ff0000 0%, transparent 25%),
                #050505;
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Background Glow */
        body::before {
            content: "";
            position: fixed;
            width: 350px;
            height: 350px;
            background: #ff0000;
            filter: blur(150px);
            opacity: .15;
            top: 10%;
            left: -100px;
            z-index: -1;
        }

        body::after {
            content: "";
            position: fixed;
            width: 300px;
            height: 300px;
            background: #ff0000;
            filter: blur(150px);
            opacity: .12;
            bottom: 0;
            right: -100px;
            z-index: -1;
        }

        .overlay {
            min-height: 100vh;
            padding: 50px 20px;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .badge-admin {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 50px;
            background: rgba(255, 0, 0, .12);
            border: 1px solid rgba(255, 0, 0, .4);
            color: #ff3b3b;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
            box-shadow: 0 0 20px rgba(255, 0, 0, .15);
        }

        .judul {
            font-size: clamp(30px, 5vw, 52px);
            font-weight: 800;
            margin: 0;
            letter-spacing: -1px;
        }

        .judul span {
            color: #ff1a1a;
            text-shadow: 0 0 25px rgba(255, 0, 0, .6);
        }

        .subtitle {
            color: #999;
            margin-top: 12px;
            font-size: 15px;
        }

        /* Card */
        .menu-card {
            position: relative;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 24px;
            background: rgba(20, 20, 20, .8);
            backdrop-filter: blur(15px);
            padding: 30px 20px !important;
            min-height: 210px;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            transition: all .35s ease;
            overflow: hidden;
        }

        /* Red line */
        .menu-card::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            background: #ff0000;
            top: 0;
            left: 0;
            transform: scaleX(0);
            transition: .35s;
            box-shadow: 0 0 20px #ff0000;
        }

        .menu-card:hover::before {
            transform: scaleX(1);
        }

        .menu-card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 0, 0, .45);
            background: rgba(30, 5, 5, .9);
            box-shadow:
                0 15px 40px rgba(0,0,0,.6),
                0 0 30px rgba(255,0,0,.15);
        }

        /* Icon */
        .icon-box {
            width: 75px;
            height: 75px;
            border-radius: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255, 0, 0, .1);
            border: 1px solid rgba(255, 0, 0, .25);

            margin-bottom: 20px;

            transition: .35s;
        }

        .menu-card:hover .icon-box {
            transform: rotate(-5deg) scale(1.1);
            background: #ff0000;
            box-shadow: 0 0 30px rgba(255,0,0,.5);
        }

        .menu-card i {
            font-size: 35px;
            color: #ff2b2b;
            transition: .35s;
        }

        .menu-card:hover i {
            color: white !important;
        }

        /* Text */
        .menu-card a {
            text-decoration: none;
            color: white;
            font-weight: 700;
            font-size: 18px;
            transition: .3s;
        }

        .menu-card p {
            color: #777;
            font-size: 12px;
            margin-top: 7px;
            margin-bottom: 0;
        }

        .menu-card:hover a {
            color: #ff2b2b;
        }

        /* Logout */
        .logout {
            min-height: 80px;
            flex-direction: row;
            justify-content: center;
            gap: 15px;
            background: linear-gradient(
                135deg,
                rgba(100,0,0,.5),
                rgba(20,0,0,.8)
            );
        }

        .logout .icon-box {
            width: 50px;
            height: 50px;
            margin: 0;
            border-radius: 15px;
        }

        .logout i {
            font-size: 25px;
        }

        .logout a {
            color: #ff3b3b !important;
            font-size: 17px;
        }

        .logout:hover {
            background: linear-gradient(
                135deg,
                #700000,
                #150000
            );
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 45px;
            color: #555;
            font-size: 12px;
        }

        .footer span {
            color: #ff2020;
        }

        /* Mobile */
        @media (max-width: 768px) {

            .overlay {
                padding: 35px 15px;
            }

            .header {
                margin-bottom: 35px;
            }

            .menu-card {
                min-height: 180px;
            }

            .judul {
                font-size: 30px;
            }

        }

    </style>
</head>

<body>

<div class="overlay">

    <!-- HEADER -->
    <div class="header">

        <div class="badge-admin">
            <i class="bi bi-shield-lock-fill"></i>
            WELCOME
        </div>

        <h1 class="judul">
            SCHOOL<span>XI</span>
        </h1>

        <p class="subtitle">
            Dashboard Sistem Informasi Sekolah
        </p>

    </div>


    <div class="container">

        <div class="row g-4">

            <!-- SISWA -->
            <div class="col-md-6 col-lg-3">

                <div class="card menu-card">

                    <div class="icon-box">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <a href="siswa">
                        Data Siswa
                    </a>

                    <p>
                        Kelola data siswa
                    </p>

                </div>

            </div>


            <!-- GURU -->
            <div class="col-md-6 col-lg-3">

                <div class="card menu-card">

                    <div class="icon-box">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <a href="guru">
                        Data Guru
                    </a>

                    <p>
                        Kelola data guru
                    </p>

                </div>

            </div>


            <!-- MAPEL -->
            <div class="col-md-6 col-lg-3">

                <div class="card menu-card">

                    <div class="icon-box">
                        <i class="bi bi-book-half"></i>
                    </div>

                    <a href="mapel">
                        Mata Pelajaran
                    </a>

                    <p>
                        Kelola mata pelajaran
                    </p>

                </div>

            </div>


            <!-- NILAI -->
            <div class="col-md-6 col-lg-3">

                <div class="card menu-card">

                    <div class="icon-box">
                        <i class="bi bi-bar-chart-fill"></i>
                    </div>

                    <a href="nilai">
                        Data Nilai
                    </a>

                    <p>
                        Lihat data nilai
                    </p>

                </div>

            </div>


            <!-- LOGOUT -->
            <div class="col-12 mt-3">

                <div class="card menu-card logout">

                    <div class="icon-box">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>

                    <a href="logout.php">
                        Logout dari Dashboard
                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <div class="footer">
        © 2026 <span>SCHOOLX</span> — Sistem Informasi Sekolah
    </div>

</div>

</body>
</html>