<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from identitas";
    $hasil = mysqli_query($koneksi, $query);
?>

<h1> Tambah Identitas </h1>
<form action="proses_insert.php" method="post">
        nama : <input type="test" name="nama" value=""><br/>
        alamat : <textarea name="alamat"></textarea><br/>
        ID_User : <input type="test" name="id_user" value=""><br/>
        <input type="submit" value="simpan">
</form>

<h1> Tabel Identitas </h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    while($row = mysqli_fetch_array ($hasil)){
        echo "<tr>";
        echo "<td>".$row['id_identitas']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td><a href='edit.php?id_identitas=".$row['id_identitas']."'>edit</a></td>";
        echo "<td><a href='delete.php?id_identitas=".$row['id_identitas']."'>delete</a>""</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
