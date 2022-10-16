
<?php
session_start();
$_SESSION["pilih"] = $_POST["pilihan"];
header("Location:pilih.php");
?>