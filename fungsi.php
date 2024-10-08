<?php 

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $asal = $_POST['asal'];
}

// Query untuk menyimpan data pengguna ke database
$sql = "INSERT INTO tb_user (nama, jekel, asal) VALUES ('$nama', '$jekel', '$asal')";

if ($db->query($sql) === TRUE) {
    echo "data berhasil";
    // Redirect ke halaman  setelah berhasil mendaftar
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>