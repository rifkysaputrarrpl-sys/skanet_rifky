<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "sukses") {
    header("location:../login.php");
    exit();
}

include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Mata Pelajaran | SCHOOLX</title>

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

    padding: 40px 15px;

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
   CONTAINER
========================= */

.container-box {

    max-width: 1100px;

    margin: 0 auto;

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
   MAIN CARD
========================= */

.main-card {

    border: 1px solid rgba(255,0,0,.22);

    border-radius: 25px;

    background: rgba(15,15,15,.92);

    backdrop-filter: blur(18px);

    overflow: hidden;

    box-shadow:
        0 25px 60px rgba(0,0,0,.75),
        0 0 35px rgba(255,0,0,.06);
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
            #180000,
            #090909
        );

    border-bottom: 1px solid rgba(255,0,0,.2);

    display: flex;

    justify-content: space-between;

    align-items: center;
}


/* GARIS MERAH */

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


/* =========================
   TITLE AREA
========================= */

.title-area {

    display: flex;

    align-items: center;

    gap: 15px;
}


.title-icon {

    width: 58px;
    height: 58px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 17px;

    background: rgba(255,0,0,.12);

    border: 1px solid rgba(255,0,0,.3);

    box-shadow:
        0 0 25px rgba(255,0,0,.1);

    transition: .3s;
}


.title-icon i {

    font-size: 29px;

    color: #ff2222;

    text-shadow:
        0 0 15px rgba(255,0,0,.6);
}


.main-card:hover .title-icon {

    transform:
        rotate(-5deg)
        scale(1.05);

    background: #e60000;

    box-shadow:
        0 0 30px rgba(255,0,0,.4);
}


.main-card:hover .title-icon i {

    color: white;
}


/* =========================
   TITLE
========================= */

.title-text h2 {

    margin: 0;

    font-size: 24px;

    font-weight: 800;
}


.title-text h2 span {

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
   BUTTON HEADER
========================= */

.header-buttons {

    display: flex;

    gap: 10px;
}


.btn-custom {

    border-radius: 11px;

    padding: 10px 15px;

    font-size: 12px;

    font-weight: 700;

    text-decoration: none;

    transition: .3s;
}


/* TAMBAH */

.btn-add {

    background: #e60000;

    color: white;

    border: 1px solid #e60000;

    box-shadow:
        0 7px 18px rgba(255,0,0,.18);
}


.btn-add:hover {

    background: #ff0000;

    color: white;

    transform: translateY(-3px);

    box-shadow:
        0 12px 28px rgba(255,0,0,.4);
}


/* MENU */

.btn-menu {

    background: #1a1a1a;

    color: #aaa;

    border: 1px solid #333;
}


.btn-menu:hover {

    background: #292929;

    color: white;

    border-color: #555;

    transform: translateY(-2px);
}


/* =========================
   BODY
========================= */

.card-body-custom {

    padding: 30px;
}


/* =========================
   TABLE CONTAINER
========================= */

.table-container {

    overflow: hidden;

    border-radius: 18px;

    border: 1px solid #242424;
}


/* =========================
   TABLE
========================= */

.table {

    margin: 0 !important;

    color: white !important;
}


/* HEADER */

.table thead th {

    background: #160000;

    color: #ff3030;

    border-color: #3b1010;

    padding: 16px 12px;

    font-size: 12px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .8px;

    text-align: center;

    vertical-align: middle;
}


/* BODY */

.table tbody td {

    background: #0d0d0d;

    color: #ddd;

    border-color: #242424;

    padding: 15px 12px;

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
   NUMBER
========================= */

.number-badge {

    display: inline-flex;

    width: 30px;
    height: 30px;

    align-items: center;
    justify-content: center;

    border-radius: 9px;

    background: rgba(255,0,0,.1);

    border: 1px solid rgba(255,0,0,.2);

    color: #ff3030;

    font-weight: 700;

    font-size: 11px;
}


/* =========================
   MAPEL BADGE
========================= */

.mapel-name {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    color: #eee;

    font-weight: 600;

}


.mapel-icon {

    width: 34px;
    height: 34px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: rgba(255,0,0,.1);

    border: 1px solid rgba(255,0,0,.2);

    color: #ff3030;

    transition: .3s;
}


.table tbody tr:hover .mapel-icon {

    background: #e60000;

    color: white;

    box-shadow:
        0 0 15px rgba(255,0,0,.3);
}


/* =========================
   ACTION BUTTON
========================= */

.btn-edit {

    display: inline-block;

    background: rgba(255,193,7,.1);

    border: 1px solid rgba(255,193,7,.3);

    color: #ffc107;

    border-radius: 9px;

    padding: 7px 12px;

    font-size: 11px;

    font-weight: 700;

    text-decoration: none;

    transition: .3s;
}


.btn-edit:hover {

    background: #ffc107;

    color: #000;

    transform: translateY(-2px);
}


.btn-delete {

    display: inline-block;

    background: rgba(255,0,0,.1);

    border: 1px solid rgba(255,0,0,.3);

    color: #ff3838;

    border-radius: 9px;

    padding: 7px 12px;

    font-size: 11px;

    font-weight: 700;

    text-decoration: none;

    transition: .3s;
}


.btn-delete:hover {

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

    margin-top: 22px;

    color: #444;

    font-size: 10px;
}


.footer span {

    color: #ff2020;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px) {

    body {

        padding: 20px 10px;

    }


    .card-header-custom {

        flex-direction: column;

        align-items: stretch;

        gap: 20px;

    }


    .header-buttons {

        width: 100%;

    }


    .btn-custom {

        flex: 1;

        text-align: center;

    }


    .card-body-custom {

        padding: 18px;

    }


    .title-text h2 {

        font-size: 20px;

    }

}

</style>

</head>


<body>


<div class="container container-box">


    <div class="main-card">


        <!-- HEADER -->

        <div class="card-header-custom">


            <div class="title-area">


                <div class="title-icon">

                    <i class="bi bi-journal-bookmark-fill"></i>

                </div>


                <div class="title-text">

                    <h2>
                        Data <span>Mata Pelajaran</span>
                    </h2>

                    <p>
                        Kelola mata pelajaran SCHOOLXI
                    </p>

                </div>


            </div>


            <div class="header-buttons">


                <a
                    href="tambah.php"
                    class="btn-custom btn-add"
                >

                    <i class="bi bi-plus-lg"></i>

                    Tambah Mapel

                </a>


                <a
                    href="../index.php"
                    class="btn-custom btn-menu"
                >

                    <i class="bi bi-house-door-fill"></i>

                    Menu Utama

                </a>


            </div>


        </div>


        <!-- BODY -->

        <div class="card-body-custom">


            <div class="table-container">


                <div class="table-responsive">


                    <table class="table table-hover align-middle">


                        <thead>

                            <tr>

                                <th width="80">
                                    No
                                </th>

                                <th>
                                    Mata Pelajaran
                                </th>

                                <th width="190">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                        <?php

                        $no = 1;

                        $query = mysqli_query(
                            $koneksi,
                            "SELECT * FROM mapel"
                        );

                        while($data = mysqli_fetch_array($query)){

                        ?>


                            <tr>


                                <td class="text-center">

                                    <span class="number-badge">

                                        <?php
                                        echo $no++;
                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <div class="mapel-name">

                                        <span class="mapel-icon">

                                            <i class="bi bi-book-half"></i>

                                        </span>

                                        <?php
                                        echo $data['mapel'];
                                        ?>

                                    </div>

                                </td>


                                <td class="text-center">


                                    <a
                                        href="edit.php?id_mapel=<?php echo $data['id_mapel']; ?>"
                                        class="btn-edit"
                                    >

                                        <i class="bi bi-pencil-square"></i>

                                        Edit

                                    </a>


                                    <a
                                        href="hapus.php?id_mapel=<?php echo $data['id_mapel']; ?>"
                                        class="btn-delete"
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

        © 2026 <span>SCHOOLXI</span> · Data Mata Pelajaran

    </div>


</div>


</body>

</html>