<h1>Daftar Nilai</h1>
<?php
include "koneksi.php";

$sql = "SELECT * FROM nilai";
$hasil = mysqli_query($conn, $sql);

if (mysqli_num_rows($hasil) > 0) {
    echo "<table>";
    echo "<table border = 1 cellspacing=0 cellpadding=20>
            <tr>
                <th>Nama</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Nilai 4</th>
                <th>Nilai 5</th>
                <th>Hapus</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['nilai1'] . "</td>";
        echo "<td>" . $row['nilai2'] . "</td>";
        echo "<td>" . $row['nilai3'] . "</td>";
        echo "<td>" . $row['nilai4'] . "</td>";
        echo "<td>" . $row['nilai5'] . "</td>";
        echo "<td><a href='delete.php?nama=" . $row['nama'] . "'>Hapus nilai</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data nilai.";
}
?>
