<?php
include "../koneksi.php";

$id_nilai = $_POST['id_nilai'];
$nilai = $_POST['nilai'];

mysqli_query($koneksi, "UPDATE nilai SET nilai='$nilai' WHERE id_nilai='$id_nilai'");
header("location:index.php");
?>