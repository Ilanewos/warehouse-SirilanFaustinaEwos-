<?php 
include_once ("koneksi.php");


//proses insert data
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$kapasitas = $_POST['kapasitas'];
$status = $_POST['status'];
$opening_hour = $_POST['opening_hour'];
$closing_hour = $_POST['closing_hour'];

$dt = new gudang();

$dt->simpan_data($nama, $lokasi, $kapasitas, $status, $opening_hour, $closing_hour);

header("location:index.php");

?>