<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Siswa </title>
</head>
<body>
    <h2>FORM NILAI SISWA</h2>
    <form method="post" action="#">
        <label for="nilai1">Nama : </label>
        <input type="nama" id="nama" name="nama" required><br>

        <label for="nilai1">Nilai 1 : </label>
        <input type="number" id="nilai1" name="nilai1" required><br>

        <label for="nilai2">Nilai 2 : </label>
        <input type="number" id="nilai2" name="nilai2" required><br>

        <label for="nilai3">Nilai 3 : </label>
        <input type="number" id="nilai3" name="nilai3" required><br>

        <label for="nilai4">Nilai 4 : </label>
        <input type="number" id="nilai4" name="nilai4" required><br>

        <label for="nilai5">Nilai 5 : </label>
        <input type="number" id="nilai5" name="nilai5" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil nilai form
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5 = $_POST['nilai5'];

$sql = "INSERT INTO `nilai`(`nama`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`) VALUES ('$nama','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5')";
$hasil = mysqli_query($conn, $sql);   

if ($hasil) {
    echo "berhasil";
} else {
    echo "gagal";
}

//jumlah total
$total = $nilai1 + $nilai2 + $nilai4 + $nilai5;

// menghitung rata-rata
$rata = $total / 5;

//nilai maksimal dan minimal 
$nilai_max = max($nilai1, $nilai2, $nilai3, $nilai4, $nilai5);
$nilai_min = min($nilai1, $nilai2, $nilai3, $nilai4, $nilai5);

// grade penilaian
if ($rata > 90) {
    $grade = "A";
} elseif ($rata > 80) {
    $grade = 'B';
} elseif ($rata > 70) {
    $grade = 'C';
} elseif ($rata > 0) {
    $grade = 'D';
}

// Menampilkan Hasil
echo "<br><br>";
echo "Nama: " . $nama;
echo "<br>";
echo "Total: " . $total;
echo "<br>";
echo "Rata-Rata: " . $rata;
echo "<br>";
echo "Nilai Max: " . $nilai_max;
echo "<br>";
echo "Nilai Min: " . $nilai_min;
echo "<br>";
echo "Grade Penilaian: " . $grade;

echo "<br><br>";
echo "<a href='tampil.php'>Lihat Daftar Nilai</a>";
echo "<br>";
}

?>





