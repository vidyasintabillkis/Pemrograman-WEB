<?php
include "koneksi.php";
$npm = $_POST['id'];
$sql = "DELETE FROM mahasiswa WHERE id = '$npm' ";
mysqli_query($koneksi, $sql);
header("Location: index.php");