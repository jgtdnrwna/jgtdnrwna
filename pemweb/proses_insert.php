<?php

    include("koneksi.php");

    $nama = $post['nama'];
    $alamat = $post['alamat'];
    $id_user = $post['id_user'];
    
    $query = "insert into identitas values ('', '$nama', $alamat', $id_user)";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }
?>