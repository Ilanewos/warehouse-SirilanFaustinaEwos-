<?php  
include_once ("header.php");

include_once ("koneksi.php");

//select data
$id = $_GET['id'];
$dt = new gudang();
foreach($dt->tampil_edit($id) as $d);


//proses edit data
if (isset($_POST['edit'])) {
$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$kapasitas = $_POST['kapasitas'];
$status = $_POST['status'];
$opening_hour = $_POST['opening_hour'];
$closing_hour = $_POST['closing_hour'];

$dt = new gudang();

$dt->edit_data($id, $nama, $lokasi, $kapasitas, $status, $opening_hour, $closing_hour);

header("location:index.php");
}
?>


<form method="POST" action="" class="form">

    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <div class="field">
        <span>Nama</span>
        <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
    </div>
    <div class="field">
        <span>Lokasi Gudang</span>
        <input type="text" name="lokasi" value="<?php echo $d['lokasi'] ?>">
    </div>
    <div class="field"> 
        <span class="label">Kapasitas Gudang</span>
        <input type="text" name="kapasitas" value="<?php echo $d['kapasitas'] ?>">
    </div>
    <div class="field">
        <span class="label">Status Gudang</span>
        <select type="text" name="status" value="<?php echo $d['status'] ?>">
            <option value="Aktif" <?php echo ($d['status'] == 'Aktif') ? 'selected' : ''; ?>>Aktif</option>
            <option value="Tidak Aktif" <?php echo ($d['status'] == 'Tidak Aktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
        </select>
    </div>
    <div class="field"> 
        <span class="label">Jam Buka</span>
        <input type="time" name="opening_hour" value="<?php echo $d['opening_hour'] ?>">
    </div>
    <div class="field"> 
        <span class="label">Jam Tutup</span>
        <input type="time" name="closing_hour" value="<?php echo $d['closing_hour'] ?>">
    </div>
    
    <button type="submit" name="edit">Edit</button>
    <a href="index.php"><button type="button">Kembali</button></a>
</form>

<?php include("footer.php") ?>