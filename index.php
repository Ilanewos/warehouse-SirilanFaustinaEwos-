<?php 
include "header.php";
?>
        <a href="insert.php" class="ina ina-cokelat">Add</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jekel</th>
                    <th>Asal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $results = $db->query("SELECT * FROM tb_user");
                while ($value = $results->fetch_assoc()) {
                ?> 
                <tr>
                    <td><?php echo  $value["id"] ?></td>
                    <td><?php echo  $value["nama"] ?></td>
                    <td><?php echo  $value["jekel"] ?></td>
                    <td><?php echo  $value["asal"] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $value["id"]?> class="ina ina-blue>Edit</a>
                        <a href="insert.php" class="ina ina-red">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
<?php 
include "footer.php";
?>

