<?php
include("config.php");

if(isset($_POST['tambah'])){

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    $sql = "INSERT INTO data_pegawai (nama, jenis_kelamin, alamat, jabatan)
    VALUE ('$nama','$jenis_kelamin','$alamat','$jabatan')";
    $query = mysqli_query($database, $sql);

    if($query) {
        header('Location : index.php?status=success');
    }
    else {
        header('Location : index.php?status=failed');   
    }
}
else {
    die("Access Denied!");
}
?>