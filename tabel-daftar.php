<?php
include ("koneksi.php");
?>
<html>
    <head></head>
    <body>
        <h1>Tabel Data Barang</h1>
        <h4><a href ="form-pendaftaran.php">Tambah Barang</a></h4>
        <table border=1>
            <tr>
                <th>NO</th>
                <th>Nama Lengkap</th>
                <th>Tempat lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <?php
            include ("koneksi.php");
            $sql = "SELECT * FROM tb_daftar";
            $query = mysqli_query($db, $sql);

            while($tb_daftar=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$tb_daftar['id']."</td>";
                echo "<td>".$tb_daftar['nama']."</td>";
                echo "<td>".$tb_daftar['tempat']."</td>";
                echo "<td>".$tb_daftar['tanggal']."</td>";
                echo "<td>".$tb_daftar['alamat']."</td>";
                echo "<td>".$tb_daftar['jk']."</td>";
                echo "<td>".$tb_daftar['agama']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>