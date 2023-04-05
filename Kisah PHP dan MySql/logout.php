<?php
session_start();
session_destroy(); #berguna untuk menhancurkan session kita
header("location:index.php");
