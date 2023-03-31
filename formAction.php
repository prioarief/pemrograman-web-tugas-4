<?php

require('db.php');


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$password = $_POST['password'];

// Insert data into table
$sql = "INSERT INTO datadiri (nama, kode, alamat, jenis_kelamin, agama, password)
        VALUES ('$nama', '$kode', '$alamat', '$jk', '$agama', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
