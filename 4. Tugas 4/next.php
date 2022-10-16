
<?php
session_start();
if (!isset($_SESSION["u"])) {
    header("Location:login.html");
}
echo "Nama : " . $_SESSION["u"];
echo "<br>Daftar Mata Kuliah Matakuliah: <br>";
echo "<table border = 1>";
echo "<tr><th>Kode</th><th>Mata Kuliah</th></tr>";
foreach ($_SESSION["pilih"] as $a) {
    echo "<tr>";
    echo "<td>" . $a . "</td>";
    if ($a == "A001") {
        $matkul = ("Pemrograman Web");
    } elseif ($a == "A002") {
        $matkul = ("Pemrograman Service");
    } elseif ($a == "A003") {
        $matkul = ("Design Interface");
    } elseif ($a == "A004") {
        $matkul = ("Manajemen Database");
    }
    echo "<td>" . $matkul . "</td></tr>";
}
echo "</table>";
echo " <a href='logout.php'>Done</a><br>";


?>