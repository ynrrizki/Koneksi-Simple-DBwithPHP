<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK PRINT DATA DARI DATABASE DENGAN PHP – SMK PRESTASI PRIMA</title>
</head>
<body>
    <center>
        
        <h2>Data Laporan Barang</h2>
        <h4>SMK PRESTASI PRIMA</h4>

    </center>

    <?php 
    require_once 'koneksi.php';
    ?>

    <table border="1" style="width:100%">
        <tr>
            <th width="1%">No</th>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th width="5%">Jumlah</th>
        </tr>
        <?php 
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
        while($data = mysqli_fetch_array($sql) )
        {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tanggal']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['jumlah']; ?></td>
        </tr>
        <?php 
        }
        ?>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>