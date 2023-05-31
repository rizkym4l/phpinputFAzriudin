<?php
    $nama = $_GET['nama'];
    $server = mysqli_connect("localhost","root","","database");
    echo $nama; 
 
    $sql = "DELETE FROM nilai WHERE nama = '$nama'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='tampil.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal : <br>".mysqli_error($server);
    }

  ?>