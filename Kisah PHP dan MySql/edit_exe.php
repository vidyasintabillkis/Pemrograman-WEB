<?php
include "koneksi.php";
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
$no = $_POST['no_spt'];
$sql = "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', alamat = '$alamat', nomor_sepatu = '$no' WHERE mahasiswa.npm = '$npm'"; #untuk memasukan data 

if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
header('Location: home.php');
exit();
