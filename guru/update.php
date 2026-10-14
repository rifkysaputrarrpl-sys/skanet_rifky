<?php
include "koneksi.php";

$nip     = $_POST['nip'];
$nama    = $_POST['nama'];
$alamat  = $_POST['alamat'];

$query = mysqli_query($koneksi, "UPDATE guru SET
            nama='$nama',
            alamat='$alamat'
            WHERE nip='$nip'");

if($query){
    header("Location:index.php?pesan=update");
}else{
    header("Location:index.php?pesan=gagal");
}

exit();
?>