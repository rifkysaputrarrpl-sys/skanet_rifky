<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Siswa | SCHOOLX</title>

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

        .add-card {

            width: 520px;

            background: rgba(15,15,15,.90);

            border: 1px solid rgba(255,0,0,.25);

            border-radius: 28px;

            overflow: hidden;

            backdrop-filter: blur(20px);

            box-shadow:
                0 25px 70px rgba(0,0,0,.75),
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

        .card-header-custom {

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

        .card-header-custom::before {

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


        /* ICON */

        .add-icon {

            width: 75px;
            height: 75px;

            margin: 0 auto 18px;

            display: flex;

            justify-content: center;

            align-items: center;

            border-radius: 22px;

            background: rgba(255,0,0,.12);

            border: 1px solid rgba(255,0,0,.3);

            box-shadow:
                0 0 30px rgba(255,0,0,.12);

            transition: .3s;

        }


        .add-icon i {

            font-size: 36px;

            color: #ff2222;

            text-shadow:
                0 0 20px rgba(255,0,0,.6);

        }


        .add-card:hover .add-icon {

            transform:
                rotate(5deg)
                scale(1.06);

            background: #e60000;

            box-shadow:
                0 0 35px rgba(255,0,0,.45);

        }


        .add-card:hover .add-icon i {

            color: white;

        }


        .card-header-custom h3 {

            margin: 0;

            font-weight: 800;

            font-size: 25px;

        }


        .card-header-custom h3 span {

            color: #ff2020;

            text-shadow:
                0 0 15px rgba(255,0,0,.5);

        }


        .card-header-custom p {

            color: #777;

            font-size: 12px;

            margin-top: 6px;

        }


        /* =========================
           BODY
        ========================= */

        .card-body-custom {

            padding: 30px;

        }


        /* =========================
           FORM
        ========================= */

        .form-label {

            color: #ddd;

            font-size: 13px;

            font-weight: 600;

            margin-bottom: 8px;

        }


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


        .textarea-box i {

            top: 20px;

        }


        .form-control {

            height: 50px;

            background: #101010;

            border: 1px solid #292929;

            border-radius: 13px;

            color: white;

            padding-left: 45px;

            font-size: 13px;

            transition: .3s;

        }


        textarea.form-control {

            height: 105px;

            resize: vertical;

            padding-top: 14px;

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

            padding: 11px 17px;

            font-size: 13px;

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

        @media(max-width: 600px) {

            .add-card {

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


<div class="add-card">


    <!-- HEADER -->

    <div class="card-header-custom">

        <div class="add-icon">

            <i class="bi bi-person-plus-fill"></i>

        </div>


        <h3>
            Tambah <span>Data Siswa</span>
        </h3>


        <p class="mb-0">
            Tambahkan siswa baru ke sistem SCHOOLX
        </p>

    </div>


    <!-- BODY -->

    <div class="card-body-custom">


        <form action="simpan.php" method="POST">


            <!-- NIS -->

            <div class="mb-4">

                <label class="form-label">
                    NIS
                </label>

                <div class="input-box">

                    <i class="bi bi-person-vcard-fill"></i>

                    <input
                        type="text"
                        name="nis"
                        class="form-control"
                        placeholder="Masukkan NIS"
                        required
                    >

                </div>

            </div>


            <!-- NAMA -->

            <div class="mb-4">

                <label class="form-label">
                    Nama Siswa
                </label>

                <div class="input-box">

                    <i class="bi bi-person-fill"></i>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Masukkan nama siswa"
                        required
                    >

                </div>

            </div>


            <!-- ALAMAT -->

            <div class="mb-3">

                <label class="form-label">
                    Alamat
                </label>

                <div class="input-box textarea-box">

                    <i class="bi bi-geo-alt-fill"></i>

                    <textarea
                        name="alamat"
                        class="form-control"
                        placeholder="Masukkan alamat siswa"
                        required
                    ></textarea>

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

                    <i class="bi bi-cloud-arrow-up-fill"></i>

                    Simpan Data

                </button>


            </div>


        </form>


        <div class="footer">

            © 2026 <span>SCHOOLX</span> · Tambah Data Siswa

        </div>


    </div>

</div>


</body>
</html>