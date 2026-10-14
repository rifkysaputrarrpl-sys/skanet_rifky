<?php
include "koneksi.php";

if(isset($_GET['nis'])){

    $nis = $_GET['nis'];

    $query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis='$nis'");

    if($query){
        header("Location: index.php?pesan=hapus");
    }else{
        header("Location: index.php?pesan=gagal");
    }

}else{
    header("Location: index.php");
}
?>