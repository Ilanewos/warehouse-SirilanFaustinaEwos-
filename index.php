<?php 
include_once "header.php"; 

?>
        <a href="insert.php" class="btn btn-cokelat">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Gudang</th>
                    <th>Lokasi Gudang</th>
                    <th>Kapasitas Gudang</th>
                    <th>Status Gudang</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include_once "koneksi.php"; 
                $no = 1; 
                $dt = new gudang(); 
                foreach($dt->tampil_data() as $d) { 
            ?> 
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d["nama"];?></td>
                    <td><?php echo $d["lokasi"];?></td>
                    <td><?php echo $d["kapasitas"];?></td>
                    <td><?php echo $d["status"];?></td>
                    <td><?php echo $d["opening_hour"];?></td>
                    <td><?php echo $d["closing_hour"];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id'];?>" class="btn btn-blue">Edit</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-red">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php 
    include ("footer.php");
?>