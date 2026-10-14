<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Siswa | SchoolX</title>

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
                radial-gradient(circle at top left, #450000 0%, transparent 30%),
                radial-gradient(circle at bottom right, #ff0000 0%, transparent 20%),
                #050505;

            padding: 40px 20px;

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

            opacity: .12;

            top: -100px;
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

            bottom: -100px;
            right: -100px;

            z-index: -1;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1200px;
        }


        /* =========================
           MAIN CARD
        ========================= */

        .main-card {

            background: rgba(15, 15, 15, .88);

            border: 1px solid rgba(255, 0, 0, .2);

            border-radius: 25px;

            overflow: hidden;

            box-shadow:
                0 25px 60px rgba(0,0,0,.7),
                0 0 35px rgba(255,0,0,.06);

            backdrop-filter: blur(15px);

            animation: muncul .6s ease;
        }


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
           HEADER
        ========================= */

        .card-header-custom {

            position: relative;

            padding: 25px 30px;

            background:
                linear-gradient(
                    135deg,
                    #160000,
                    #080808
                );

            border-bottom: 1px solid rgba(255,0,0,.2);

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        /* Red Line */

        .card-header-custom::before {

            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background: #ff0000;

            box-shadow: 0 0 20px #ff0000;
        }


        .title-area {

            display: flex;

            align-items: center;

            gap: 15px;
        }


        .title-icon {

            width: 55px;
            height: 55px;

            border-radius: 16px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: rgba(255,0,0,.12);

            border: 1px solid rgba(255,0,0,.3);

            box-shadow:
                0 0 20px rgba(255,0,0,.1);
        }


        .title-icon i {

            font-size: 27px;

            color: #ff2020;

            text-shadow:
                0 0 15px rgba(255,0,0,.6);
        }


        .title-text h2 {

            margin: 0;

            font-size: 23px;

            font-weight: 800;
        }


        .title-text span {

            color: #ff2020;

            text-shadow:
                0 0 15px rgba(255,0,0,.5);
        }


        .title-text p {

            margin: 3px 0 0;

            color: #777;

            font-size: 12px;
        }


        /* =========================
           BUTTON TAMBAH
        ========================= */

        .btn-tambah {

            background: #e60000;

            border: none;

            color: white;

            padding: 11px 18px;

            border-radius: 12px;

            font-size: 13px;

            font-weight: 700;

            text-decoration: none;

            transition: .3s;

            box-shadow:
                0 8px 20px rgba(255,0,0,.2);
        }


        .btn-tambah:hover {

            background: #ff0000;

            color: white;

            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(255,0,0,.4);
        }


        /* =========================
           BODY
        ========================= */

        .card-body-custom {

            padding: 30px;
        }


        /* =========================
           TABLE
        ========================= */

        .table-container {

            border-radius: 18px;

            overflow: hidden;

            border: 1px solid #242424;
        }


        table {

            margin: 0 !important;

            color: white !important;
        }


        .table thead th {

            background: #160000;

            color: #ff3030;

            border-bottom: 1px solid #450000;

            border-top: none;

            padding: 17px 12px;

            font-size: 12px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;

            vertical-align: middle;
        }


        .table tbody td {

            background: #0d0d0d;

            color: #ddd;

            border-color: #242424;

            padding: 16px 12px;

            font-size: 13px;

            vertical-align: middle;
        }


        .table tbody tr {

            transition: .25s;
        }


        .table tbody tr:hover td {

            background: #180606;

            color: white;

            border-color: #3b1111;
        }


        /* =========================
           NIS BADGE
        ========================= */

        .nis-badge {

            display: inline-block;

            padding: 6px 10px;

            border-radius: 8px;

            background: rgba(255,0,0,.1);

            color: #ff3838;

            border: 1px solid rgba(255,0,0,.2);

            font-size: 12px;

            font-weight: 600;
        }


        /* =========================
           ACTION BUTTON
        ========================= */

        .btn-edit {

            background: rgba(255,193,7,.1);

            color: #ffc107;

            border: 1px solid rgba(255,193,7,.3);

            border-radius: 9px;

            padding: 7px 12px;

            font-size: 12px;

            font-weight: 600;

            text-decoration: none;

            transition: .3s;
        }


        .btn-edit:hover {

            background: #ffc107;

            color: #000;

            transform: translateY(-2px);
        }


        .btn-hapus {

            background: rgba(255,0,0,.1);

            color: #ff3838;

            border: 1px solid rgba(255,0,0,.3);

            border-radius: 9px;

            padding: 7px 12px;

            font-size: 12px;

            font-weight: 600;

            text-decoration: none;

            transition: .3s;
        }


        .btn-hapus:hover {

            background: #dc0000;

            color: white;

            transform: translateY(-2px);

            box-shadow:
                0 5px 15px rgba(255,0,0,.3);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            text-align: center;

            margin-top: 25px;

            color: #555;

            font-size: 11px;
        }


        .footer span {

            color: #ff2020;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 768px) {

            body {
                padding: 20px 10px;
            }

            .card-header-custom {

                flex-direction: column;

                gap: 20px;

                align-items: stretch;
            }

            .btn-tambah {

                text-align: center;

                display: block;
            }

            .card-body-custom {

                padding: 18px;
            }

            .title-text h2 {

                font-size: 19px;
            }

        }

    </style>

</head>


<body>


<div class="container">

    <div class="main-card">


        <!-- HEADER -->

        <div class="card-header-custom">

            <div class="title-area">

                <div class="title-icon">

                    <i class="bi bi-people-fill"></i>

                </div>


                <div class="title-text">

                    <h2>
                        Data <span>Siswa</span>
                    </h2>

                    <p>
                        Kelola informasi siswa SCHOOLXI
                    </p>

                </div>

            </div>


            <a href="tambah.php" class="btn-tambah">

                <i class="bi bi-plus-lg"></i>

                Tambah Data

            </a>

        </div>


        <!-- BODY -->

        <div class="card-body-custom">


            <div class="table-container">

                <div class="table-responsive">

                    <table class="table table-hover text-center">


                        <thead>

                            <tr>

                                <th>NIS</th>

                                <th>Nama</th>

                                <th>Alamat</th>

                                <th width="190">Aksi</th>

                            </tr>

                        </thead>


                        <tbody>


                        <?php

                        $query = mysqli_query(
                            $koneksi,
                            "SELECT * FROM siswa"
                        );

                        while($data = mysqli_fetch_array($query)){

                        ?>


                            <tr>


                                <td>

                                    <span class="nis-badge">

                                        <?php
                                        echo $data['nis'];
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <?php
                                    echo $data['nama'];
                                    ?>

                                </td>


                                <td>

                                    <?php
                                    echo $data['alamat'];
                                    ?>

                                </td>


                                <td>


                                    <a
                                        href="edit.php?nis=<?php echo $data['nis']; ?>"
                                        class="btn-edit"
                                    >

                                        <i class="bi bi-pencil-fill"></i>

                                        Edit

                                    </a>


                                    <a
                                        href="hapus.php?nis=<?php echo $data['nis']; ?>"
                                        class="btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    >

                                        <i class="bi bi-trash3-fill"></i>

                                        Hapus

                                    </a>


                                </td>


                            </tr>


                        <?php

                        }

                        ?>


                        </tbody>

                    </table>

                </div>

            </div>


        </div>


    </div>


    <div class="footer">

        © 2026 <span>SCHOOLX</span> · Data Siswa

    </div>


</div>


</body>
</html>