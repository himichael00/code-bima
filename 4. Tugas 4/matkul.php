
<?php
session_start();
if (!isset($_SESSION["u"])) {
    header("Location:login.html");
}
echo "Selamat Datang " . $_SESSION["u"];
echo " <a href='logout.php'>LOGOUT</a><br>";
echo "Silahkan Pilih Matakuliah:<br>";


$matkul = [
    [
        "nim" => "A001",
        "matkul" => "Pemrograman Web",
    ],
    [
        "nim" => "A002",
        "matkul" => "Pemrograman Service",
    ],
    [
        "nim" => "A003",
        "matkul" => "Design Interface",
    ],
    [
        "nim" => "A004",
        "matkul" => "Manajemen Database",
    ]
];

echo "<form method='POST' action='se_matkul.php'>";
echo "<table border = 1>";
echo "<tr><td>Kode</td><td>Mata Kuliah</td><td>Pilih</td></tr>";

for ($a = 0; $a < count($matkul); $a++) {
    $b = $a + 1;
    echo "<tr><td>";
    echo $matkul[$a]["nim"] . "</td><td>" . $matkul[$a]["matkul"] . "</td> <td><input type='checkbox' name='pilihan[]' value = 'A00$b'></td></tr>";
}
echo "</table><br><input type='submit' value='Next'></form>";

?>