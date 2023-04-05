<!DOCTYPE html>

<head></head>

<?php
include "koneksi.php";
$sql = mysqli_query($mysqli, "SELECT * FROM mahasiswa where npm = '$_GET[update]'");
$data = mysqli_fetch_array($sql);

?>

<Body>
    <form action="" method="POST">
        <label for="fname">Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br><br>

        <label for="lname">NPM</label><br>
        <input type="text" name="npm" value="<?php echo $data['npm']; ?>"><br><br>

        <label for="lname">Alamat</label><br>
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>

        <label for="lname">Nomor Sepatu</label><br>
        <input type="text" name="no_spt" value="<?php echo $data['nomor_sepatu']; ?>"><br><br>

        <input type="submit" value="Simpan" name="update">
    </form>
</Body>

</html>

<?php 
if (isset($_POST['update'])) {
    mysqli_query($mysqli, "UPDATE mahasiswa SET
    nama = '$_POST[nama]',
    npm = '$_POST[npm]',
    alamat = '$_POST[alamat]',
    nomor_sepatu = '$_POST[no_spt]' WHERE npm=$_GET[update]") or die(mysqli_error($mysqli));

    echo "<script>alert('Data telah tersimpan');
    document.location='home.php'</script>";
}
?>