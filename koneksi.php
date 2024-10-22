<?php

class gudang {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database_name = "db_warehouse_msib";
    private $db;

    public function __construct() {
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->database_name);

    }

    function tampil_data() {
        $query = mysqli_query($this->db, "SELECT * FROM tb_gudang");
        while($row = mysqli_fetch_array($query)){
            $data[]=$row;
        }

        return isset($data) ? $data : [];
    }

    function simpan_data($nama, $lokasi, $kapasitas, $status, $opening_hour, $closing_hour) {
       $query = mysqli_query($this->db, "INSERT INTO tb_gudang values('', '$nama', '$lokasi', '$kapasitas', '$status', '$opening_hour', '$closing_hour')");
    }


    function tampil_edit($id) {
        $query = mysqli_query($this->db, "SELECT * FROM tb_gudang WHERE id='$id'");
        while($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }

        return isset($data) ? $data : [];

    }


    function edit_data($id, $nama, $lokasi, $kapasitas, $status, $opening_hour, $closing_hour) {
        mysqli_query($this->db, "UPDATE tb_gudang SET nama='$nama', lokasi='$lokasi', kapasitas='$kapasitas', status='$status', opening_hour='$opening_hour', closing_hour='$closing_hour' WHERE id='$id'");
    }


    function hapus_data($id) {
        mysqli_query($this->db, "DELETE  FROM tb_gudang  WHERE id='$id'");
    }

}
?>