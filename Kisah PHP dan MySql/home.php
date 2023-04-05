<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php");
}

$query_mysql = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$nomor = 1;
echo "<a href='tambah.php'>tambah</a></br>"; #membawa kita ke halaman tambah 

if (isset($_POST['hapus'])) {
    $npm = $_POST['hapus'];
    $sql = "DELETE FROM mahasiswa WHERE npm = '$npm' ";
}
?><br>

<table border="1" cellspacing="0" width="700px" height="100px">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NPM</th>
        <th>ALAMAT</th>
        <th>NOMOR SEPATU</th>
        <th>OPSIONAL</th>
    </tr>

<?php
while ($data = mysqli_fetch_array($query_mysql)) { #untuk menampilkan data
?>
    <tr align="center">
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['nomor_sepatu']; ?></td>
        <td>
            <a href="edit.php?update=<?php echo $data['npm']; ?>">edit</a>
            <a>/</a>
            <a href="?hapus=<?php echo $data['npm']; ?>" onclick="return confirm('Yakin mau apus bro?');">hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>

<?php
if (isset($_GET['hapus'])) {
    $sql = mysqli_query($mysqli, "DELETE FROM mahasiswa where npm = '$_GET[hapus]'")
    or die(mysqli_error($mysqli));

    echo "<p><b> Data berhasil dihapus</b></p>";
    echo "<meta http-equiv=refresh content=2;URL='home.php'>";
}
?>

<br>
<a href="logout.php">LOGOUT</a>