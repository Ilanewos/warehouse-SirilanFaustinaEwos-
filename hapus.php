<?php 
include_once ("koneksi.php");

//PROSES DELETE DATA
if (isset($_GET['id'])) {
$id = $_GET['id'];

$dt = new gudang();

$dt->hapus_data($id);

header("location:index.php");
}

?>