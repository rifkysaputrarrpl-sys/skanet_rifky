<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "sukses") {
    header("Location: ../logout.php");
    exit();
}

include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Nilai | SCHOOLX</title>

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

    background:
        radial-gradient(
            circle at 0% 0%,
            #4d0000 0%,
            transparent 28%
        ),
        radial-gradient(
            circle at 100% 100%,
            #ff0000 0%,
            transparent 20%
        ),
        #050505;

}


/* =========================
   RED GLOW
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

    pointer-events:none;

}

body::after{

    content:"";

    position:fixed;

    width:300px;
    height:300px;

    background:#ff0000;

    filter:blur(160px);

    opacity:.08;

    bottom:-150px;
    right:-150px;

    pointer-events:none;

}


/* =========================
   CONTAINER
========================= */

.main-container{

    padding-top:45px;
    padding-bottom:45px;

}


/* =========================
   CARD
========================= */

.nilai-card{

    border:1px solid rgba(255,0,0,.20);

    border-radius:25px;

    background:rgba(12,12,12,.94);

    box-shadow:
        0 25px 70px rgba(0,0,0,.75),
        0 0 40px rgba(255,0,0,.06);

    overflow:hidden;

    animation:showCard .6s ease;

}


@keyframes showCard{

    from{

        opacity:0;

        transform:
            translateY(25px)
            scale(.98);

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

.header-area{

    position:relative;

    padding:25px;

    background:
        linear-gradient(
            135deg,
            #170000,
            #0b0b0b
        );

    border-bottom:1px solid rgba(255,0,0,.20);

}


.header-area::before{

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
   TITLE
========================= */

.title{

    margin:0;

    color:white;

    font-size:26px;

    font-weight:800;

}


.title i{

    color:#ff2020;

    margin-right:8px;

    text-shadow:
        0 0 15px rgba(255,0,0,.5);

}


.subtitle{

    margin-top:5px;

    color:#666;

    font-size:11px;

}


/* =========================
   BUTTON
========================= */

.btn{

    border-radius:11px;

    font-size:12px;

    font-weight:700;

    padding:10px 15px;

    transition:.3s;

}


.btn:hover{

    transform:translateY(-3px);

}


/* PRINT */

.btn-print{

    background:#171717;

    border:1px solid #333;

    color:#ddd;

}


.btn-print:hover{

    background:#242424;

    color:white;

}


/* ADD */

.btn-primary{

    background:#e60000;

    border-color:#e60000;

    color:white;

    box-shadow:
        0 7px 20px rgba(255,0,0,.15);

}


.btn-primary:hover{

    background:#ff0000;

    border-color:#ff0000;

    color:white;

    box-shadow:
        0 10px 25px rgba(255,0,0,.35);

}


/* =========================
   TABLE
========================= */

.table-responsive{

    border-radius:15px;

    overflow:hidden;

}


.table{

    margin:0;

    color:#ddd;

    border-color:#292929;

}


.table thead th{

    padding:15px 12px;

    background:
        linear-gradient(
            90deg,
            #8b0000,
            #e60000
        );

    color:white;

    border-color:#500000;

    text-align:center;

    vertical-align:middle;

    font-size:12px;

    font-weight:700;

}


.table tbody td{

    padding:13px 12px;

    background:#101010;

    color:#ccc;

    border-color:#252525;

    vertical-align:middle;

    font-size:12px;

}


.table tbody tr{

    transition:.25s;

}


.table tbody tr:hover td{

    background:#1b0a0a;

    color:white;

}


/* =========================
   NILAI BADGE
========================= */

.badge-nilai{

    display:inline-flex;

    justify-content:center;

    align-items:center;

    min-width:50px;

    padding:7px 12px;

    border-radius:10px;

    background:#e60000;

    color:white;

    font-weight:800;

    font-size:12px;

    box-shadow:
        0 0 15px rgba(255,0,0,.18);

}


/* =========================
   ACTION BUTTON
========================= */

.action-buttons{

    white-space:nowrap;

}


.btn-warning{

    background:#292929;

    border:1px solid #444;

    color:#ffb000;

}


.btn-warning:hover{

    background:#ffb000;

    border-color:#ffb000;

    color:#111;

}


.btn-danger{

    background:#520000;

    border:1px solid #800000;

    color:#ff5555;

}


.btn-danger:hover{

    background:#e60000;

    border-color:#e60000;

    color:white;

}


/* =========================
   BOTTOM AREA
========================= */

.bottom-area{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-top:20px;

    padding-top:20px;

    border-top:1px solid #242424;

}


.btn-back{

    background:#171717;

    border:1px solid #333;

    color:#aaa;

}


.btn-back:hover{

    background:#292929;

    color:white;

}


/* EXPORT */

.btn-export{

    background:#161616;

    border:1px solid #333;

    color:#ff3333;

}


.btn-export:hover{

    background:#e60000;

    border-color:#e60000;

    color:white;

}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .main-container{

        padding:20px 10px;

    }


    .header-area{

        flex-direction:column;

        align-items:flex-start !important;

        gap:15px;

    }


    .top-buttons{

        width:100%;

        display:flex;

    }


    .top-buttons .btn{

        flex:1;

    }


    .bottom-area{

        flex-direction:column;

        gap:12px;

        align-items:stretch;

    }


    .bottom-area .btn{

        width:100%;

    }


    .title{

        font-size:21px;

    }

}


/* =========================
   PRINT
========================= */

@media print{

    body{

        background:white;

        color:black;

    }


    .nilai-card{

        box-shadow:none;

        border:none;

    }


    .no-print{

        display:none !important;

    }


    .title{

        color:black;

    }


    .table tbody td{

        color:black;

        background:white;

    }


    .table thead th{

        background:#e60000 !important;

        color:white !important;

        -webkit-print-color-adjust:exact;

        print-color-adjust:exact;

    }


    .badge-nilai{

        background:#e60000 !important;

        color:white !important;

        -webkit-print-color-adjust:exact;

        print-color-adjust:exact;

    }

}

</style>

</head>


<body>


<div class="container main-container">


<div class="nilai-card">


<!-- ================= HEADER ================= -->

<div class="header-area">


<div class="d-flex justify-content-between align-items-center header-content">


<div>

<h2 class="title">

<i class="bi bi-clipboard-data-fill"></i>

Data Nilai

</h2>

<div class="subtitle">

Sistem Informasi Sekolah • SCHOOLXI

</div>

</div>


<div class="d-flex gap-2 top-buttons no-print">


<button
type="button"
class="btn btn-print"
onclick="window.print()">

<i class="bi bi-printer-fill"></i>

Print

</button>


<a
href="tambah.php"
class="btn btn-primary">

<i class="bi bi-plus-circle-fill"></i>

Tambah Data

</a>


</div>

</div>

</div>


<!-- ================= BODY ================= -->

<div class="card-body p-4">


<div class="table-responsive">


<table class="table table-bordered table-hover align-middle">


<thead>

<tr>

<th>ID Nilai</th>

<th>Nama Siswa</th>

<th>Mata Pelajaran</th>

<th>Nama Guru</th>

<th>Nilai</th>

<th
width="18%"
class="no-print">

Aksi

</th>

</tr>

</thead>


<tbody>


<?php

$query = mysqli_query(

    $koneksi,

    "SELECT
        nilai.id_nilai,
        siswa.nama AS namasiswa,
        guru.nama AS namaguru,
        mapel.mapel,
        nilai.nilai

    FROM siswa, guru, mapel, nilai

    WHERE nilai.nis = siswa.nis

    AND nilai.nip = guru.nip

    AND nilai.id_mapel = mapel.id_mapel"

);


while($data = mysqli_fetch_array($query)){

?>


<tr>


<td class="text-center">

<?php echo $data['id_nilai']; ?>

</td>


<td>

<?php

echo htmlspecialchars(
    $data['namasiswa']
);

?>

</td>


<td>

<?php

echo htmlspecialchars(
    $data['mapel']
);

?>

</td>


<td>

<?php

echo htmlspecialchars(
    $data['namaguru']
);

?>

</td>


<td class="text-center">

<span class="badge-nilai">

<?php echo $data['nilai']; ?>

</span>

</td>


<td
class="text-center action-buttons no-print">


<a
href="edit.php?id_nilai=<?php
echo $data['id_nilai'];
?>"
class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

Edit

</a>


<a
href="hapus.php?id_nilai=<?php
echo $data['id_nilai'];
?>"
class="btn btn-danger btn-sm"

onclick="
return confirm(
'Yakin ingin menghapus data ini?'
)
">

<i class="bi bi-trash"></i>

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


<!-- ================= BOTTOM ================= -->

<div class="bottom-area no-print">


<a
href="../index.php"
class="btn btn-back">

<i class="bi bi-arrow-left"></i>

Kembali ke Dashboard

</a>


<a
href="export.php"
class="btn btn-export">

<i class="bi bi-file-earmark-excel-fill"></i>

Ekspor Data

</a>


</div>


</div>

</div>

</div>


<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>