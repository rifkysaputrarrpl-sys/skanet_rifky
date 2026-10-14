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

<title>Tambah Nilai | SCHOOLX</title>

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

*{
    box-sizing:border-box;
}

body{

    margin:0;

    min-height:100vh;

    font-family:'Poppins',sans-serif;

    color:white;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:30px 15px;

    background:
        radial-gradient(
            circle at 0% 0%,
            #4d0000 0%,
            transparent 30%
        ),
        radial-gradient(
            circle at 100% 100%,
            #ff0000 0%,
            transparent 20%
        ),
        #050505;

    overflow-x:hidden;
}


/* =========================
   BACKGROUND GLOW
========================= */

body::before{

    content:"";

    position:fixed;

    width:350px;
    height:350px;

    background:#ff0000;

    filter:blur(160px);

    opacity:.10;

    top:-150px;
    left:-150px;

    z-index:-1;
}

body::after{

    content:"";

    position:fixed;

    width:300px;
    height:300px;

    background:#ff0000;

    filter:blur(160px);

    opacity:.08;

    bottom:-120px;
    right:-120px;

    z-index:-1;
}


/* =========================
   CARD
========================= */

.nilai-card{

    width:650px;

    background:rgba(12,12,12,.96);

    border:1px solid rgba(255,0,0,.25);

    border-radius:28px;

    overflow:hidden;

    box-shadow:
        0 25px 70px rgba(0,0,0,.8),
        0 0 45px rgba(255,0,0,.07);

    animation:masuk .6s ease;
}


@keyframes masuk{

    from{

        opacity:0;

        transform:
            translateY(30px)
            scale(.96);
    }

    to{

        opacity:1;

        transform:
            translateY(0)
            scale(1);
    }
}


/* =========================
   HEADER
========================= */

.nilai-header{

    position:relative;

    text-align:center;

    padding:32px 25px 27px;

    background:
        linear-gradient(
            135deg,
            #180000,
            #090909
        );

    border-bottom:1px solid rgba(255,0,0,.2);
}


.nilai-header::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:4px;

    background:#ff0000;

    box-shadow:
        0 0 20px #ff0000;
}


/* =========================
   ICON
========================= */

.icon-box{

    width:82px;
    height:82px;

    margin:auto;

    display:flex;

    justify-content:center;

    align-items:center;

    border-radius:23px;

    background:rgba(255,0,0,.10);

    border:1px solid rgba(255,0,0,.3);

    box-shadow:
        0 0 30px rgba(255,0,0,.12);

    transition:.3s;
}


.icon-box i{

    font-size:40px;

    color:#ff2020;

    text-shadow:
        0 0 18px rgba(255,0,0,.6);
}


.nilai-card:hover .icon-box{

    transform:
        rotate(-5deg)
        scale(1.06);

    background:#e60000;

    box-shadow:
        0 0 35px rgba(255,0,0,.4);
}


.nilai-card:hover .icon-box i{

    color:white;
}


/* =========================
   TITLE
========================= */

.nilai-header h2{

    margin:18px 0 5px;

    font-size:24px;

    font-weight:800;
}


.nilai-header h2 span{

    color:#ff2020;

    text-shadow:
        0 0 15px rgba(255,0,0,.4);
}


.nilai-header p{

    margin:0;

    color:#666;

    font-size:11px;
}


/* =========================
   BODY
========================= */

.nilai-body{

    padding:30px;
}


/* =========================
   FORM
========================= */

.form-label{

    color:#ddd;

    font-size:13px;

    font-weight:600;

    margin-bottom:8px;
}


.input-box{

    position:relative;
}


.input-box i{

    position:absolute;

    left:16px;

    top:50%;

    transform:translateY(-50%);

    color:#666;

    z-index:2;

    transition:.3s;
}


.form-select,
.form-control{

    height:52px;

    background:#101010;

    border:1px solid #292929;

    border-radius:13px;

    color:white;

    padding-left:46px;

    font-size:13px;

    transition:.3s;
}


.form-select{

    cursor:pointer;
}


.form-select option{

    background:#111;

    color:white;
}


.form-select:focus,
.form-control:focus{

    background:#111;

    color:white;

    border-color:#ff2020;

    box-shadow:
        0 0 0 3px rgba(255,0,0,.08),
        0 0 20px rgba(255,0,0,.08);

}


.input-box:focus-within i{

    color:#ff2020;
}


/* =========================
   NILAI INPUT
========================= */

.nilai-input{

    padding-right:60px;
}


.nilai-wrapper{

    position:relative;
}


.nilai-suffix{

    position:absolute;

    right:17px;

    top:50%;

    transform:translateY(-50%);

    color:#ff2020;

    font-size:11px;

    font-weight:700;

    pointer-events:none;
}


/* =========================
   BUTTON
========================= */

.button-area{

    display:flex;

    justify-content:space-between;

    gap:15px;

    margin-top:25px;
}


.btn-custom{

    border-radius:12px;

    padding:11px 18px;

    font-size:12px;

    font-weight:700;

    text-decoration:none;

    transition:.3s;
}


/* KEMBALI */

.btn-back{

    background:#181818;

    border:1px solid #333;

    color:#aaa;
}


.btn-back:hover{

    background:#292929;

    color:white;

    border-color:#555;

    transform:translateY(-2px);
}


/* SIMPAN */

.btn-save{

    border:none;

    background:#e60000;

    color:white;

    box-shadow:
        0 8px 22px rgba(255,0,0,.2);
}


.btn-save:hover{

    background:#ff0000;

    color:white;

    transform:translateY(-3px);

    box-shadow:
        0 12px 30px rgba(255,0,0,.4);
}


/* =========================
   FOOTER
========================= */

.footer{

    text-align:center;

    margin-top:20px;

    color:#444;

    font-size:10px;
}


.footer span{

    color:#ff2020;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:700px){

    .nilai-card{

        width:100%;
    }

}


@media(max-width:550px){

    .nilai-body{

        padding:22px;
    }

    .button-area{

        flex-direction:column;
    }

    .btn-custom{

        width:100%;

        text-align:center;
    }

    .nilai-header h2{

        font-size:21px;
    }

}

</style>

</head>


<body>


<div class="nilai-card">


    <!-- HEADER -->

    <div class="nilai-header">

        <div class="icon-box">

            <i class="bi bi-clipboard2-check-fill"></i>

        </div>


        <h2>
            Tambah <span>Data Nilai</span>
        </h2>


        <p>
            Tambahkan nilai siswa ke dalam sistem akademik
        </p>

    </div>


    <!-- BODY -->

    <div class="nilai-body">


        <form action="simpan.php" method="POST">


            <!-- SISWA -->

            <div class="mb-3">

                <label class="form-label">

                    <i class="bi bi-person-fill"></i>

                    Nama Siswa

                </label>


                <div class="input-box">

                    <select
                        name="nis"
                        class="form-select"
                        required
                    >

                        <option value="" disabled selected>
                            Pilih nama siswa
                        </option>


                        <?php

                        $q_siswa = mysqli_query(
                            $koneksi,
                            "SELECT * FROM siswa"
                        );

                        while(
                            $siswa = mysqli_fetch_array($q_siswa)
                        ){

                        ?>

                            <option
                                value="<?php echo $siswa['nis']; ?>"
                            >

                                <?php
                                echo htmlspecialchars(
                                    $siswa['nama']
                                );
                                ?>

                            </option>

                        <?php } ?>

                    </select>

                    <i class="bi bi-person"></i>

                </div>

            </div>


            <!-- GURU -->

            <div class="mb-3">

                <label class="form-label">

                    <i class="bi bi-person-workspace"></i>

                    Nama Guru

                </label>


                <div class="input-box">

                    <select
                        name="nip"
                        class="form-select"
                        required
                    >

                        <option value="" disabled selected>
                            Pilih nama guru
                        </option>


                        <?php

                        $q_guru = mysqli_query(
                            $koneksi,
                            "SELECT * FROM guru"
                        );

                        while(
                            $guru = mysqli_fetch_array($q_guru)
                        ){

                        ?>

                            <option
                                value="<?php echo $guru['nip']; ?>"
                            >

                                <?php
                                echo htmlspecialchars(
                                    $guru['nama']
                                );
                                ?>

                            </option>

                        <?php } ?>

                    </select>

                    <i class="bi bi-person-workspace"></i>

                </div>

            </div>


            <!-- MAPEL -->

            <div class="mb-3">

                <label class="form-label">

                    <i class="bi bi-book-fill"></i>

                    Mata Pelajaran

                </label>


                <div class="input-box">

                    <select
                        name="id_mapel"
                        class="form-select"
                        required
                    >

                        <option value="" disabled selected>
                            Pilih mata pelajaran
                        </option>


                        <?php

                        $q_mapel = mysqli_query(
                            $koneksi,
                            "SELECT * FROM mapel"
                        );

                        while(
                            $mapel = mysqli_fetch_array($q_mapel)
                        ){

                        ?>

                            <option
                                value="<?php echo $mapel['id_mapel']; ?>"
                            >

                                <?php
                                echo htmlspecialchars(
                                    $mapel['mapel']
                                );
                                ?>

                            </option>

                        <?php } ?>

                    </select>

                    <i class="bi bi-journal-bookmark-fill"></i>

                </div>

            </div>


            <!-- NILAI -->

            <div class="mb-4">

                <label class="form-label">

                    <i class="bi bi-graph-up-arrow"></i>

                    Nilai

                </label>


                <div class="input-box nilai-wrapper">

                    <input
                        type="number"
                        name="nilai"
                        class="form-control nilai-input"
                        placeholder="Masukkan nilai"
                        min="0"
                        max="100"
                        required
                    >

                    <i class="bi bi-star-fill"></i>

                    <span class="nilai-suffix">
                        / 100
                    </span>

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

            © 2026 <span>SCHOOLXI</span> · Sistem Informasi Sekolah

        </div>


    </div>

</div>


</body>
</html>