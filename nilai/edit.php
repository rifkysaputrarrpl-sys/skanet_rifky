<?php
include "koneksi.php";

$id_nilai = $_GET['id_nilai'];

$query = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_nilai='$id_nilai'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Nilai | SCHOOLX</title>

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

            min-height: 100vh;

            font-family: 'Poppins', sans-serif;

            color: white;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(255,0,0,.18),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 90%,
                    rgba(255,0,0,.12),
                    transparent 25%
                ),
                #050505;

            display: flex;

            flex-direction: column;

        }


        /* =========================
           BACKGROUND GLOW
        ========================= */

        body::before {

            content: "";

            position: fixed;

            width: 300px;

            height: 300px;

            background: #ff0000;

            filter: blur(150px);

            opacity: .08;

            top: -100px;

            left: -100px;

            pointer-events: none;

            z-index: -1;
        }


        body::after {

            content: "";

            position: fixed;

            width: 300px;

            height: 300px;

            background: #ff0000;

            filter: blur(150px);

            opacity: .08;

            right: -100px;

            bottom: -100px;

            pointer-events: none;

            z-index: -1;
        }


        /* =========================
           HEADER
        ========================= */

        .header {

            position: relative;

            padding: 25px 30px;

            background:
                linear-gradient(
                    135deg,
                    #170000,
                    #090909
                );

            border-bottom: 1px solid rgba(255,0,0,.2);

            box-shadow:
                0 10px 30px rgba(0,0,0,.4);

        }


        .header::before {

            content: "";

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 4px;

            background: #ff0000;

            box-shadow:
                0 0 20px #ff0000;

        }


        .brand {

            max-width: 900px;

            margin: auto;

        }


        .brand h1 {

            margin: 0;

            font-size: 25px;

            font-weight: 800;

            letter-spacing: -1px;

        }


        .brand h1 span {

            color: #ff2020;

            text-shadow:
                0 0 15px rgba(255,0,0,.5);

        }


        .brand p {

            margin: 4px 0 0;

            color: #777;

            font-size: 11px;

        }


        /* =========================
           MAIN
        ========================= */

        main {

            flex: 1;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 45px 15px;

        }


        /* =========================
           CARD
        ========================= */

        .edit-card {

            width: 500px;

            background: rgba(14,14,14,.95);

            border: 1px solid rgba(255,0,0,.22);

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 25px 70px rgba(0,0,0,.8),
                0 0 45px rgba(255,0,0,.07);

            animation: muncul .6s ease;

        }


        @keyframes muncul {

            from {

                opacity: 0;

                transform:
                    translateY(30px)
                    scale(.96);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);

            }

        }


        /* =========================
           CARD HEADER
        ========================= */

        .card-header-custom {

            text-align: center;

            padding: 32px 25px 25px;

            background:
                linear-gradient(
                    135deg,
                    #180000,
                    #0c0c0c
                );

            border-bottom: 1px solid #252525;

        }


        .icon-box {

            width: 78px;

            height: 78px;

            margin: auto;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 22px;

            background: rgba(255,0,0,.1);

            border: 1px solid rgba(255,0,0,.3);

            box-shadow:
                0 0 30px rgba(255,0,0,.12);

            transition: .3s;

        }


        .icon-box i {

            font-size: 37px;

            color: #ff2020;

            text-shadow:
                0 0 18px rgba(255,0,0,.6);

        }


        .edit-card:hover .icon-box {

            transform:
                rotate(-5deg)
                scale(1.06);

            background: #e60000;

            box-shadow:
                0 0 35px rgba(255,0,0,.4);

        }


        .edit-card:hover .icon-box i {

            color: white;

        }


        .card-header-custom h2 {

            margin: 18px 0 5px;

            font-size: 23px;

            font-weight: 800;

        }


        .card-header-custom h2 span {

            color: #ff2020;

        }


        .card-header-custom p {

            margin: 0;

            color: #666;

            font-size: 11px;

        }


        /* =========================
           BODY
        ========================= */

        .card-body-custom {

            padding: 30px;

        }


        /* =========================
           LABEL
        ========================= */

        .form-label {

            color: #ddd;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;

        }


        /* =========================
           INPUT
        ========================= */

        .input-wrapper {

            position: relative;

        }


        .input-wrapper i {

            position: absolute;

            left: 16px;

            top: 50%;

            transform: translateY(-50%);

            color: #666;

            z-index: 2;

            transition: .3s;

        }


        .form-control {

            height: 52px;

            background: #101010;

            border: 1px solid #292929;

            border-radius: 13px;

            color: white;

            padding-left: 46px;

            font-size: 13px;

            transition: .3s;

        }


        .form-control:focus {

            background: #111;

            color: white;

            border-color: #ff2020;

            box-shadow:
                0 0 0 3px rgba(255,0,0,.08),
                0 0 20px rgba(255,0,0,.08);

        }


        .form-control:focus + i {

            color: #ff2020;

        }


        /* =========================
           BUTTON
        ========================= */

        .button-area {

            display: flex;

            justify-content: space-between;

            gap: 15px;

            margin-top: 25px;

        }


        .btn-custom {

            border-radius: 12px;

            padding: 11px 18px;

            font-size: 12px;

            font-weight: 700;

            text-decoration: none;

            transition: .3s;

        }


        /* BACK */

        .btn-back {

            background: #181818;

            border: 1px solid #333;

            color: #aaa;

        }


        .btn-back:hover {

            background: #292929;

            color: white;

            border-color: #555;

            transform: translateY(-2px);

        }


        /* SAVE */

        .btn-save {

            border: none;

            background: #e60000;

            color: white;

            box-shadow:
                0 8px 22px rgba(255,0,0,.2);

        }


        .btn-save:hover {

            background: #ff0000;

            color: white;

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(255,0,0,.4);

        }


        /* =========================
           FOOTER
        ========================= */

        footer {

            text-align: center;

            padding: 18px;

            background: #030303;

            border-top: 1px solid #191919;

            color: #444;

            font-size: 10px;

        }


        footer span {

            color: #ff2020;

        }


        /* =========================
           MOBILE
        ========================= */

        @media(max-width:600px) {

            .header {

                padding: 20px;

            }


            .brand h1 {

                font-size: 21px;

            }


            main {

                padding: 25px 12px;

            }


            .edit-card {

                width: 100%;

            }


            .card-body-custom {

                padding: 22px;

            }


            .button-area {

                flex-direction: column;

            }


            .btn-custom {

                width: 100%;

                text-align: center;

            }

        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header class="header">

    <div class="brand">

        <h1>
            SCHOOL<span>X</span>
        </h1>

        <p>
            Sistem Informasi Sekolah • Data Akademik
        </p>

    </div>

</header>


<!-- =========================
     MAIN
========================= -->

<main>


<div class="edit-card">


    <!-- HEADER CARD -->

    <div class="card-header-custom">


        <div class="icon-box">

            <i class="bi bi-pencil-square"></i>

        </div>


        <h2>
            Edit <span>Nilai Siswa</span>
        </h2>


        <p>
            Perbarui nilai siswa dengan data yang benar
        </p>


    </div>


    <!-- BODY -->

    <div class="card-body-custom">


        <form action="update.php" method="POST">


            <!-- ID -->

            <input
                type="hidden"
                name="id_nilai"
                value="<?php echo $data['id_nilai']; ?>"
            >


            <!-- NILAI -->

            <div class="mb-3">

                <label class="form-label">

                    <i class="bi bi-graph-up-arrow"></i>

                    Nilai

                </label>


                <div class="input-wrapper">

                    <input
                        type="text"
                        name="nilai"
                        value="<?php echo $data['nilai']; ?>"
                        placeholder="Masukkan nilai siswa"
                        class="form-control"
                        required
                    >

                    <i class="bi bi-star-fill"></i>

                </div>

            </div>


            <!-- BUTTON -->

            <div class="button-area">


                <a
                    href="index.php"
                    class="btn-custom btn-back"
                >

                    <i class="bi bi-arrow-left"></i>

                    Kembali

                </a>


                <button
                    type="submit"
                    class="btn-custom btn-save"
                >

                    <i class="bi bi-check2-circle"></i>

                    Simpan Perubahan

                </button>


            </div>


        </form>


    </div>


</div>


</main>


<!-- =========================
     FOOTER
========================= -->

<footer>

    © <?php echo date("Y"); ?>

    <span>SCHOOLX</span>

    • Edit Data Nilai

</footer>


</body>

</html>