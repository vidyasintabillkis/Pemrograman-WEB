<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
</head>
<body>
    <form action="latihan3.php" method="post">
        <?php
            echo "Nama : ".$_POST["nama"]."<br>"."<br>";
        ?>
        <input type="text" name="dua" value="<?php echo $_POST["nama"];?>"hidden>
        <input type="submit" value="move">
    </form>
</body>
</html>