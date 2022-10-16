
<?php

$us = "Surti";
$pa = "123";

if ($us == $_POST["un"] && $pa == $_POST["pw"]) {
    session_start();
    $_SESSION["u"] = $_POST["un"];
    $_SESSION["p"] = $_POST["pw"];

    header("Location:matkul.php");
} else {
    header("Location:login.html");
}



?>