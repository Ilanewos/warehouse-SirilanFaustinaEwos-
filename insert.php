<?php 
include "header.php";
?>


<form method="POST" action="fungsi.php" class="form">
    <div class="bagian">
        <span class="label">Nama</span>
        <input name="nama">
    </div> <br>
    <div class="bagian">
        <span class="label">Jekel</span>
        <select name="jekel">
        <option>Laki-laki</option>
        <option>Perempuan</option>
        </select>
    </div> <br>
    <div class="bagian">
        <span class="label">Asal</span>
        <textarea name="asal"></textarea>
    </div> <br>
    <button>Simpan</button>
</form>

<?php 
include "footer.php";
?>