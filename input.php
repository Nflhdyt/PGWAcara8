<?php
$kecamatan = $_POST['kecamatan'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];
$latitude = $_POST['latitude'];  // Menangkap nilai latitude
$longitude = $_POST['longitude'];  // Menangkap nilai longitude

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "latihan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Query
$sql = "INSERT INTO penduduk (kecamatan, luas, jumlah_penduduk)
VALUES ('$kecamatan', $luas, $jumlah_penduduk, $latitude, $longitude)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: index.html");
//exit;
