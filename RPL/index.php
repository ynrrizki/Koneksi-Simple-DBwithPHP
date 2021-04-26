<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK DATA DARI DATABASE DENGAN PHP</title>
</head>
<body>
    <center>
        
        <h2>CETAK DATA DARI DATABASE DENGAN PHP<br></h2>
        
        <?php 
        require_once 'koneksi.php';
        ?>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
            </tr>
            <?php 
            $no = 1;
            $sql = mysqli_query($koneksi,"SELECT * FROM barang_masuk");
            while($data = mysqli_fetch_array($sql))
            {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['tanggal']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['jumlah']?></td>
            </tr>
            <?php 
            }
            ?>

        </table>
        <br/>

        <a href="cetak.php" target="_blank">CETAK</a>

    </center>
</body>
</html>