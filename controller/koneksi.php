<?php 
function konek() {
    // conn database
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "porto";

    $conn = mysqli_connect($serverName, $username, $password, $dbName);

    if(!$conn) {
        return die("Koneksi Gagal");
    } else {
        return $conn;
    }
}
?>