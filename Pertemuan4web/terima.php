<!DOCTYPE html>
<html lang="en">
<head>
    <title>Terima</title>
</head>
<body>
<?php
        if($_GET["pw"] == 1234){
            echo "Nama : ".$_GET["nama"]."<br>";
            echo "Jenis Kelamin : ".$_GET["jk"]."<br>";
            echo "Warga Negara : ".$_GET["wn"]; 
        } else {
            echo "Password Salah";
        }
    ?>
</body>
</html>