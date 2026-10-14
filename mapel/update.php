<?php
include "../koneksi.php";

$id_mapel = $_POST['id_mapel'];
$mapel = $_POST['mapel'];

mysqli_query($koneksi, "UPDATE mapel SET mapel='$mapel' WHERE id_mapel='$id_mapel'");
header("location:index.php");
?>