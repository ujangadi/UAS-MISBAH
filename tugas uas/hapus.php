<?php
include 'koneksi.php';

if (isset($_GET['No'])) {
    $no_kegiatan = (int) $_GET['No'];  // (int) untuk keamanan

    $query = "DELETE FROM portofolio WHERE No = $no_kegiatan";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
    } else {
        echo "Gagal menghapus data: ". mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
}
?>