<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Mapel | SCHOOLX</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <style>

        /* =========================
           GLOBAL
        ========================= */

        * {
            box-sizing: border-box;
        }

        body {

            margin: 0;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 30px 15px;

            font-family: 'Poppins', sans-serif;

            color: white;

            background:
                radial-gradient(
                    circle at top left,
                    #450000 0%,
                    transparent 30%
                ),
                radial-gradient(
                    circle at bottom right,
                    #ff0000 0%,
                    transparent 20%
                ),
                #050505;

            overflow-x: hidden;
        }


        /* =========================
           BACKGROUND GLOW
        ========================= */

        body::before {

            content: "";

            position: fixed;

            width: 350px;
            height: 350px;

            background: #ff0000;

            filter: blur(150px);

            opacity: .13;

            top: -120px;

            left: -120px;

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

            bottom: -100px;

            right: -100px;

            z-index: -1;
        }


        /* =========================
           CARD
        ========================= */

        .mapel-card {

            width: 540px;

            background: rgba(14,14,14,.94);

            border: 1px solid rgba(255,0,0,.25);

            border-radius: 28px;

            overflow: hidden;

            backdrop-filter: blur(20px);

            box-shadow:
                0 25px 70px rgba(0,0,0,.8),
                0 0 40px rgba(255,0,0,.08);

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
           HEADER
        ========================= */

        .mapel-header {

            position: relative;

            text-align: center;

            padding: 30px 25px 25px;

            background:
                linear-gradient(
                    135deg,
                    #180000,
                    #090909
                );

            border-bottom: 1px solid rgba(255,0,0,.2);
        }


        /* RED LINE */

        .mapel-header::before {

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


        /* =========================
           ICON
        ========================= */

        .mapel-icon {

            width: 82px;

            height: 82px;

            margin: 0 auto 18px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 23px;

            background: rgba(255,0,0,.1);

            border: 1px solid rgba(255,0,0,.3);

            box-shadow:
                0 0 30px rgba(255,0,0,.1);

            transition: .3s;
        }


        .mapel-icon i {

            font-size: 38px;

            color: #ff2222;

            text-shadow:
                0 0 18px rgba(255,0,0,.6);
        }


        .mapel-card:hover .mapel-icon {

            transform:
                rotate(-5deg)
                scale(1.06);

            background: #e60000;

            box-shadow:
                0 0 35px rgba(255,0,0,.4);
        }


        .mapel-card:hover .mapel-icon i {

            color: white;
        }


        /* =========================
           TITLE
        ========================= */

        .mapel-header h2 {

            margin: 0;

            font-size: 24px;

            font-weight: 800;
        }


        .mapel-header h2 span {

            color: #ff2020;

            text-shadow:
                0 0 15px rgba(255,0,0,.5);
        }


        .mapel-header p {

            margin: 7px 0 0;

            color: #777;

            font-size: 12px;
        }


        /* =========================
           BODY
        ========================= */

        .mapel-body {

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

        .input-box {

            position: relative;
        }


        .input-box i {

            position: absolute;

            left: 16px;

            top: 50%;

            transform: translateY(-50%);

            color: #777;

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


        .form-control::placeholder {

            color: #555;
        }


        .form-control:focus {

            background: #111;

            color: white;

            border-color: #ff2020;

            box-shadow:
                0 0 0 3px rgba(255,0,0,.08),
                0 0 20px rgba(255,0,0,.08);
        }


        .input-box:focus-within i {

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

            background: #1b1b1b;

            border: 1px solid #333;

            color: #aaa;
        }


        .btn-back:hover {

            background: #292929;

            border-color: #555;

            color: white;

            transform: translateY(-2px);
        }


        /* SAVE */

        .btn-save {

            border: none;

            background: #e60000;

            color: white;

            box-shadow:
                0 8px 20px rgba(255,0,0,.2);
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

        .footer {

            text-align: center;

            margin-top: 20px;

            color: #444;

            font-size: 10px;
        }


        .footer span {

            color: #ff2020;
        }


        /* =========================
           MOBILE
        ========================= */

        @media(max-width:600px) {

            .mapel-card {

                width: 100%;
            }

            .mapel-body {

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


<div class="mapel-card">


    <!-- HEADER -->

    <div class="mapel-header">


        <div class="mapel-icon">

            <i class="bi bi-journal-bookmark-fill"></i>

        </div>


        <h2>
            Tambah <span>Mata Pelajaran</span>
        </h2>


        <p>
            Tambahkan mata pelajaran baru ke SCHOOLX
        </p>


    </div>


    <!-- BODY -->

    <div class="mapel-body">


        <form action="simpan.php" method="POST">


            <!-- ID MAPEL -->

            <div class="mb-4">

                <label class="form-label">

                    <i class="bi bi-hash"></i>

                    ID Mata Pelajaran

                </label>


                <div class="input-box">

                    <i class="bi bi-upc-scan"></i>

                    <input
                        type="text"
                        name="id_mapel"
                        class="form-control"
                        placeholder="Masukkan ID Mapel"
                        required
                    >

                </div>

            </div>


            <!-- NAMA MAPEL -->

            <div class="mb-3">

                <label class="form-label">

                    <i class="bi bi-book-half"></i>

                    Nama Mata Pelajaran

                </label>


                <div class="input-box">

                    <i class="bi bi-journal-text"></i>

                    <input
                        type="text"
                        name="mapel"
                        class="form-control"
                        placeholder="Contoh: Matematika"
                        required
                    >

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

                    Simpan Data

                </button>


            </div>


        </form>


        <div class="footer">

            © 2026 <span>SCHOOLX</span> · Tambah Mata Pelajaran

        </div>


    </div>


</div>


</body>
</html>