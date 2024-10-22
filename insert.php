<?php 
include_once ("header.php");

?>


<form method="POST" action="aksi_insert.php" class="form">
    <div class="field">
        <span>Nama</span>
        <input type="text"  name="nama">
    </div>
    <div class="field">
        <span class="label">Lokasi Gudang</span>
        <input type="text" name="lokasi">
    </div>
    <div class="field"> 
        <span class="label">Kapasitas Gudang</span>
        <input type="text" name="kapasitas">
    </div>
    <div class="field">
        <span class="label">Status Gudang</span>
        <select type="text" name="status">
            <option>Aktif</option>
            <option>Tidak Aktif</option>
        </select>
    </div>
    <div class="field"> 
        <span class="label">Jam Buka</span>
        <input  type="time" name="opening_hour">
    </div>
    <div class="field"> 
        <span class="label">Jam Tutup</span>
        <input type="time" name="closing_hour">
    </div>
    <button>Simpan</button>
    <a href="index.php"><button type="button">Kembali</button></a>
</form>

<?php include("footer.php") ?>