
<?php
session_start();
if (!isset($_SESSION["u"])) {
    header("Location:login.html");
}
echo "Nama : " . $_SESSION["u"];
echo " <a href='logout.php'>LOGOUT</a><br>";
echo "Daftar Mata Kuliah Matakuliah: <br>";

if (!isset($_SESSION["pilih"])) {
    echo "<h4>ANDA BELUM MEMILIH MATA KULIAH</h4>";
    echo " <a href='matkul.php'>PILIH MATA KULIAH</a><br>";
} else {
    echo " <a href='clear.php'>Clear And Back</a><br>";
    echo "<table border = 1>";
    echo "<tr><th>Kode</th><th>Mata Kuliah</th></tr>";
    foreach ($_SESSION["pilih"] as $b) {
        echo "<tr>";
        echo "<td>" . $b . "</td>";
        if ($b == "A001") {
            $matkul = ("Pemrograman Web");
        } elseif ($b == "A002") {
            $matkul = ("Pemrograman Service");
        } elseif ($b == "A003") {
            $matkul = ("Design Interface");
        } elseif ($b == "A004") {
            $matkul = ("Manajemen Database");
        }
        echo "<td>" . $matkul . "</td></tr>";
    }
    echo "</table>";
    echo " <a href='next.php'>Next</a><br>";
}


?>