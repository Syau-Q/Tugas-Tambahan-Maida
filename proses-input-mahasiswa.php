<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

include "koneksi.php";

$simpan = $koneksi->query("INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat)
                           VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat')");

if ($simpan == true) {
    header("location:tampil-mahasiswa.php?pesan=inputBerhasil");
} else {
    echo "Error";
}

?>
