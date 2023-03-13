<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Upload Gambar</title>
</head>
<body>
    <h3 style="color: rgb(127, 168, 255);">Hasil Gambar yang telah diupload</h3>
    <?php
        $namaGambar = $_FILES['gambar']['name'];
        $namaGambarSementara = $_FILES['gambar']['tmp_name'];
        $dirUpload = "uploadGambar/";
        $upload = move_uploaded_file($namaGambarSementara, $dirUpload.$namaGambar);
        echo "Link: <a href='".$dirUpload.$namaGambar."'>".$namaGambar."</a>";
    ?>
</body>
</html>