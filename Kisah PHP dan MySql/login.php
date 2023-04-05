<?php
session_start(); #variable sementara yang ada di php yang disimpan didalam browser gunanya untuk menempatkan distatus tertentu (mempertahankan status)
include "koneksi.php"; #menggabungkan 2 file (didalam login.php ada script koneksi.php)

$username = $_POST['user'];
$password = $_POST['pass'];

#menunjukan bahwa kita menggunakan query
$query = mysqli_query($mysqli, "SELECT * FROM login where user='$username' and pass='$password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username; #untuk menciptakan session masing2 dengan $_SESSION
    $_SESSION['status'] = "login";
    header("location:home.php");
} else {
    header("location:index.php");
}
