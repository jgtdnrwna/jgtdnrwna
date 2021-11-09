<?php

    include("koneksi.php");

    $id_identitas = $post['id_identitas'];
    $nama = $post['nama'];
    $alamat = $post['alamat'];

    $query = "update identitas set nama = '$nama', and alamat = 'alamat' where id_identitas = $id_identitas";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }
?>