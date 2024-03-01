<?php

$id = $_GET['id'];

include "koneksi.php";

$hapus = $koneksi->query("DELETE FROM mahasiswa WHERE mahasiswa_id='$id'");

if ($hapus == true) {
    header("location:tampil-mahasiswa.php?pesan=hapusBerhasil");
} else {
    echo "Error";
}

?>